<?php

namespace App\Http\Controllers;

use App\Category;
use App\Mainproduct;
use App\Product;
use App\Productc;
use App\Productcc;
use App\ProductDetail;
use App\ProductType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;

class ProductTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $ajax, $id)
    {
        $Products = DB::table('vu_products')->paginate(8);
        // Have Ajax Request?
        if ($ajax->ajax()) {
            $category = $ajax->category; //get value of brand
            $type = $ajax->type;
            $brand = $ajax->brand;
            if ($category == 0 && $type == 0 && $brand == 0) { //Brand =0 : No Filter Select * from vu_products
                return view('Frontend/Pages/products')->with('products', $Products);
            } else {
                $Products = DB::table('vu_products')->whereIN('cid', explode(',', $category))->orWhereIN('type', explode(',', $type))->orWhereIN('brand', explode(',', $brand))->paginate(8);
                response()->json($Products); //return to ajax
                return view('Frontend/Pages/products')->with('products', $Products);
            }
        }

        $pr = Product::where(['type_id' => $id])
            ->get();

//        $get = Product::select('id')->where('id', $id)
//            ->get()->toArray();

        $data = array(
            "pr" => $pr,
        );

        return view('Frontend/Pages/product_type', $data)->with('products', $Products);
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
     * @param  \App\ProductType $productType
     * @return \Illuminate\Http\Response
     */
    public function show(ProductType $productType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProductType $productType
     * @return \Illuminate\Http\Response
     */
    public function edit(ProductType $productType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\ProductType $productType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductType $productType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProductType $productType
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProductType $productType)
    {
        //
    }
}
