<?php

namespace App\Http\Controllers;

use App\Countreview;
use App\Image;
use App\Productc;
use App\Productcomment;
use App\Reviewstar;
use Illuminate\Http\Request;

class ProductDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($pdetail_id)
    {
        $products = Productc::where(['id' => $pdetail_id])
            ->get();

        $get_id = Productc::select('product_id')->where(['id'=> $pdetail_id])
            ->get()->toArray();

        $detail = Productc::where(['product_id' => $get_id])
            ->get();

        $comment = Productcomment::where(['pdetail_id' => $pdetail_id])
            ->get();

        $count = Countreview::where(['pdetail_id' => $pdetail_id])
            ->get();

        $stars = Reviewstar::where(['pdetail_id' => $pdetail_id])
            ->get();

        $image = Image::where(['pid' => $get_id])
            ->get();
        $data = array(
            "product" => $products,
            "detail" => $detail,
            "comment" => $comment,
            "count" => $count,
            "stars" => $stars,
            "image" => $image
        );

        return view('Frontend/Pages/product_detail', $data);
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
        //
    }
}
