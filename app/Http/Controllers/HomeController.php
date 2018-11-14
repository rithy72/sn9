<?php

namespace App\Http\Controllers;

use App\Ordertrending;
use App\Querywishlist;
use App\Type;

class HomeController extends Controller
{

    public function index()
    {
        $top = Ordertrending::all();

        $type = Type::all();

        $data = array(
            "top" => $top,
            "type" => $type
        );

        return view('Frontend/Pages/homepage', $data);
    }
}
