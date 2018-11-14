<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Validator;

class LogController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->input();
            if (Auth::attempt(['email' => $data['email'], 'password' => $data['password'], 'is_activated' => '0'])) {
                return redirect('/admin')->with('flash_message_error', 'Not yet Verify');
            } elseif (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('/admin/page');
            } elseif (Auth::attempt(['email' => $data['email'], 'password' => $data['password'],'is_activated' => '1'])) {
                return redirect('/admin')->with('flash_message_error', 'Not yet Verify');
            } elseif (Auth::attempt(['email' => $data['email'], 'password' => $data['password']])) {
                return redirect('/admin/page');
            } else {
                return redirect('/user')->with('flash_message_error', 'Login False');
            }
        }
        return view('admin.admin_login');
    }

    public function logout(){
        Session::flush();
        return redirect('/admin')->with('flash_message_success','logout success');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
