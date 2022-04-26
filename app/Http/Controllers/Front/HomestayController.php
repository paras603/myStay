<?php

namespace App\Http\Controllers\Front;

use App\Helpers\HomestayHelper;
use App\Helpers\SamanHarayoHelper;
use App\Http\Controllers\Controller;
use App\Http\Requests\HomestayRequest;
use App\Models\Booking;
use App\Models\Feature;
use App\Models\Homestay;
use App\Models\HomestayImage;
use App\Models\Merchant;
use App\Models\Room;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Storage;

class HomestayController extends Controller
{

    public function show($homestay_name){
        abort_if(!$homestay_name, 404);
        $homestay = Homestay::with('rooms')->where('homestay_name', $homestay_name)->first();
        abort_if(!$homestay, 404);
        return view('front.homestay.detail', compact('homestay'));
//        $user = \auth()->user();
//        if(HomestayHelper::isMerchant($user)) {
//            if (HomestayHelper::isVerifiedMerchant($user)) {
//
//
//                return view('front.homestay.detail', compact('homestay'));
//            } else {
//                return redirect()->back()->with('toast.success', 'Please wait until we verify your merchant detail');
//            }
//        }else{
//            return redirect()->route('front.merchant.index')->with('toast.error', 'First become a merchant to add homestay');
//        }
    }

    public function edit($homestay){
        $user = \auth()->user();
        $merchant = Merchant::where('user_id', $user->id)->first();
        $homestay = Homestay::with('homestayImages')->where('homestay_name', $homestay)->first();
        if(!$homestay){
            abort('404');
        }
        if(!$merchant || !($homestay->merchant_id === $merchant->id)){
            abort(401);
        }
        return View('front.homestay.edit', compact('homestay'));
    }

    public function update(HomestayRequest $request, $homestay_name){
        $homestay = Homestay::with('homestayImages')->where('homestay_name', $homestay_name)->first();
        \DB::transaction(function () use ($request, $homestay) {
            if ($request->hasFile('homestay_image')) {
                if($homestay->homestayImages->count() > 0){
                    foreach($homestay->homestayImages as $image){
                        @unlink(public_path('storage/uploads/homestay/' . $image->image));
                    }
                }
                $homestay_images = $request->file('homestay_image');
                    foreach($homestay_images as $image) {
                        $imageName = HomestayHelper::renameImageFileUpload($image);
                        $image->storeAs(
                            'public/uploads/homestay/',$imageName
                        );
                        HomestayImage::create([
                            'image'                     =>          $imageName,
                            'homestay_id'               =>          $homestay->id
                        ]);
                    }
            }
                $homestay->slogan               = $request->input('slogan');
                $homestay->description          = $request->input('description');
                $homestay->telephone            = $request->input('telephone');
                $homestay->services             = $request->input('services');
                $homestay->nearby_places        = $request->input('nearby_places');
                $homestay->homestay_name        = $request->input('homestay_name');
                $homestay->iframe               = $request->input('iframe');
                $homestay->updated_at           = now();
                $homestay->save();
        });
        return redirect()->route('front.index')->with('toast.success', 'Home stay details updated');
    }

    public function rate(Request $request, $id){
        $request->validate([
            'rating' => ["required","numeric","max:5","min:1"],
        ]);
        $homestay = Homestay::findorFail($id);
        $user = Auth::user();
        $can_rate = false;
        if($user->points >= 100){
            $user_bookings = $user->bookings;
            $homestay_arr = [];
            foreach ($user_bookings as $booking){
                $homestay_arr[]= $booking->room->homestay_id;
            }
            if(in_array($homestay->id, $homestay_arr))  $can_rate = true;
        }
        if($can_rate){
            $current_homestay_rating = $homestay->rating;
            $homestay->rating = ceil(($current_homestay_rating + $request->input('rating'))/2);
            $homestay->save();
            $user->points = $user->points - 100;
            $user->save();
            return redirect()->back()->with('toast.success', 'Rated');
        }
        return redirect()->back()->with('toast.error', 'Unauthorized');
    }

    public function feature($homestay){
        $homestay = Homestay::where('homestay_name', $homestay)->first();
        abort_if(!$homestay, 404);
        $user = Auth::user();
        if($homestay->merchant->user_id != $user->id){
            abort(401);
        }
        return view('front.homestay.feature', compact('homestay'));
    }

    public function featureStore(Request $request,$homestay){
        $request->validate([
           'duration'           =>          ['required','numeric', 'min:1'],
           'featured_image'     =>          ['required','image', 'mimes:png,jpg,jepg'],
        ]);
        $homestay = Homestay::where('homestay_name', $homestay)->first();
        abort_if(!$homestay, 404);
        $user = Auth::user();
        if($homestay->merchant->user_id != $user->id){
            abort(401);
        }
        $featured_image = $request->file('featured_image');
        $imageName = HomestayHelper::renameImageFileUpload($featured_image);
        $featured_image->storeAs(
            'public/uploads/temp/',$imageName
        );
        $duration = $request->input('duration');
        if(session('featuredData')) {
            $request->session()->forget('featuredData');
        }
        session(['featuredData' => [
            'homestay_id'           =>          $homestay->id,
            'expiry_date'           =>           Carbon::today()->addDays($duration),
            'feature_image'            =>      $imageName,
        ]]);
        return view('front.homestay.checkout', compact('duration', 'homestay'));
    }

    public function verify(Request $request){
        $total = (float)session('total');
        $args = self::setArgs($request->token,$total*100);
        $url = "https://khalti.com/api/v2/payment/verify/";
        $header = self::getApiHeader();
        $resp = Http::acceptJson()->withHeaders($header)->post( $url, $args);
        $featudredData = session('featuredData');
        if($resp->getStatusCode() === 200){
            \DB::transaction(function () use($featudredData) {
                    Storage::makeDirectory('/public/uploads/featuredImage');
                    Storage::move('public/uploads/temp/'.$featudredData['feature_image'], '/public/uploads/featuredImage/'.$featudredData['feature_image']);
                
                    Feature::create($featudredData);
            });
            $request->session()->flash('toast.success', 'Featured Done!');
            return response()->json([
                'success'       =>      1,
                'redirect'      =>  route('front.index'),
            ],200);
        }else{
            return response()->json([
                'error'         =>      1,
                'message'       =>      'Failed',
                'code'          =>      200
            ]);
        }
    }

    public function success(Request $request){
        if(isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER'] === "http://mystay.test/booking/checkout"){
            return view('front.booking.success');
        }
        abort(404);
    }

    public function setArgs($token, $amount){
        return [
            'token' => $token,
            'amount'  => $amount,
        ];
    }

    public function getApiHeader(): array
    {
        return [
            'Authorization'    =>  'Key '.config('services.khalti.private_key'),
        ];
    }


}
