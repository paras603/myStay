<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use App\Models\Homestay;
use App\Models\HomestayImage;
use App\Models\Merchant;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $new_homestays = Homestay::with('homestayImage')->latest()->take(8)->get();
        $featured_homestays   = Feature::whereHas('homestay')->where('expiry_date','>',now())->get();
        
        return view('front.index', compact('new_homestays', 'featured_homestays'));

    }

    public function search(Request $request){
        $search = $request->input('search');
        $page = $request->input('page') ?? 1;
        $pageLimit  = 8;
        $offset = ($pageLimit * $page) - $pageLimit;
        $order  = $request->input('order') ?? 'created_at';
        $dir    = $request->input('dir') ?? 'desc';
        $search = $request->input('search') ?? '';
        $query =  Homestay::with(['merchant' => function($q){
            $q->where('verified', Merchant::VERIFIED[0]);
        }])->where(function($q)use($search){
            $q->whereRaw( 'LOWER(`homestay_name`) like ?', '%'.strtolower($search).'%' )
                ->orWhereRaw( 'LOWER(`description`) like ?', array( '%'.strtolower($search).'%' ))
                ->orWhereRaw( 'LOWER(`slogan`) like ?', array( '%'.strtolower($search).'%' ))
                ->orWhereRaw( 'LOWER(`homestay_address`) like ?', array( '%'.strtolower($search).'%' ) );
        });
        $totalData = $query->count();
        $query->orderBy($order, $dir);
        $query->offset($offset)->limit($pageLimit);
        $homestays = $query->get();
        $metaData = [
            'totalData'  =>  $totalData,
            'pageLimit'      => $pageLimit,
            'page'           => $page,
            'order'          => $order,
            'dir'            => $dir
        ];
        return view('front.search',compact('homestays','metaData'));
    }


}
