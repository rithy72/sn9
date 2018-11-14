<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Customer;

class LoginController extends Controller
{
    public function cus_login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::guard('customers')->attempt(['email' => $data['email'], 'password' => $data['password'], 'is_activated' => '1'])) {
                return redirect('/')->with('flash_message_success', 'Customer Login');
            } elseif (Auth::guard('customers')->attempt(['email' => $data['email'], 'password' => $data['password'], 'is_activated' => '0'])) {
                return redirect('/customer-login')->with('flash_message_error', 'Customer not yet verify');
            } else {
                return redirect('/customer-login')->with('flash_message_error', 'Customer Login False');
            }
        }
        return view('Frontend.Pages.login');
    }

    public function logout(){
        Auth::guard('customers')->logout();
//        Session::flush();
//        dd(Auth::check());

//        Session::guard('customers')->flush();
        return redirect('/')->with('flash_message_success','logout success');
    }

    public function cus_register(){
        return view('Frontend.Pages.register');
    }


}
