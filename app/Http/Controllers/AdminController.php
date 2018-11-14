<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Backend/main');
    }
    public function useraccount(){
        return view('Backend/Pages/Account');
    }
    public function listproduct(){
        return view('Backend.Pages.list_product');
    }
    public function orderhistory(){
        return view('Backend.Pages.Order_history');
    }
    public function user(){
        return view('Backend.Pages.Users');
    }

     public function listcategory(){
        return view('Backend.Pages.Category');
    }
    public function listbrand(){
        return view('Backend.Pages.brand');
    }
    public function listtype(){
        return view('Backend.Pages.type');
    }
    public function product(){
        return view('Backend.Pages.product');
    }
    public function importstock(){
        return view('Backend.Pages.importstock');
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
        //
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
        //
    }
}
