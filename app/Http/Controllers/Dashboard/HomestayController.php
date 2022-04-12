<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Homestay;
use App\Models\HomestayImage;
use App\Models\Merchant;
use App\Models\User;

class HomestayController extends BaseDashboardController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $columns = array(
                0 => 'homestay_name',
                1 => 'homestay_address',
                2 => 'first_name',
                3 => 'last_name',
                4 => 'created_at',
                5 => 'action'
            );
            $limit  = $request->input('length') ?? '-1';
            $start  = $request->input('start') ?? 0;
            $order  = $columns[$request->input('order.0.column')] ?? $columns[0];
            $dir    = $request->input('order.0.dir') ?? 'asc';
            $search = $request->input('search.value') ?? '';

            $query = \DB::table('homestays as h')
                ->join('merchants as m', 'm.id', 'h.merchant_id')
                ->join('users as u', 'u.id', 'm.user_id')
                ->select(
                    'h.id',
                    'h.homestay_name',
                    'h.homestay_address',
                    'h.created_at',
                    'u.first_name',
                    'u.last_name'
                );
            $query->where('u.first_name', 'like', $search . '%')
                ->orWhere('u.last_name', 'like', $search . '%')
                ->orWhere('h.created_at', 'like', $search . '%')
                ->orWhere('h.homestay_name', 'like', $search, '%')
                ->orWhere('h.homestay_address', 'like', $search, '%');
            $totalData = $query->count();
            $query->orderBy($order, $dir);
            if ($limit != '-1') {
                $query->offset($start)->limit($limit);
            }
            $records = $query->get();
            $totalFiltered = $totalData;
            $data = array();
            if (isset($records)) {
                foreach ($records as $k => $v) {
                    $nestedData['id'] = $v->id;
                    $nestedData['homestay_name'] = $v->homestay_name;
                    $nestedData['homestay_address'] = $v->homestay_address;
                    $nestedData['first_name'] = $v->first_name;
                    $nestedData['last_name'] = $v->last_name;
                    $nestedData['created_at'] = \Carbon\Carbon::parse($v->created_at)->format('Y-m-d');
                    $nestedData['action'] = \View::make('dashboard.homestays._action')->with('r',$v)->render();
                    $data[] = $nestedData;
                }
            }
            return response()->json([
                "draw" => intval($request->input('draw')),
                "recordsTotal" => intval($totalData),
                "recordsFiltered" => intval($totalFiltered),
                "data" => $data
            ], 200);
        }
        return view('dashboard.homestays.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $homestay = Homestay::with('homestayImages','rooms')->where('id', $id)->first();
        // $is_admin = $homestay->user->isAdmin();
        // return view('dashboard.homestays.show', compact('homestay', 'is_admin'));

        // $homestay_image = HomestayImage::where('homestay_id', $id)->first();
        
        return view('dashboard.homestays.show', compact('homestay'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Homestay::where('id', $id)->delete();
        return response()->json([
            'message' => 'Merchant Successfully Deleted',
        ], 200);
    }
}
