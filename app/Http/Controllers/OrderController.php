<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }

    public function cancelOrder(Request $request)
    {
        DB::table('order')
            ->where('order_id', $request->invoice_id)
            ->update([
                'status_id' => 5
            ]);
        return back();

    }

    public function previewOrder(Request $request)
    {
        $orderdetails = DB::table('vu_orderdetail')->where('order_id',$request->id)->get();
//        dd($orderdetails);
        return $orderdetails;

    }

    public function cancelProOrder(Request $request)
    {
//        dd($request->all());

        $Pro_order_id= DB::table('vu_orderdetail')
            ->where('productdetail_id', $request->ProId)
            ->where('order_id',$request->orderId)
            ->update(['status_id' => 7]);

        return $Pro_order_id;


    }
}
