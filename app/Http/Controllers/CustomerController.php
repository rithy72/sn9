<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Input;



class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

//     Profile
    public function profile(){

        $data = Customer::find(1);
        // dd($data);
        return view('Frontend.Pages.Customer.profile')->with('data',$data);
    }
    public function update_profile(Request $request){
        $gender=Input::get('foo');

        Customer::where('id', 1)
            ->update([
                'name' => $request->username,
                'address' => $request->address,
                'dob' => $request->dob,
                'title' => $gender,
                'tel' => $request->telephone
            ]);

        return back();
    }

//    End Profile



//  Account
    public function change_pass(){
        $data = Customer::find(1);
        return view('Frontend.Pages.Customer.change_pass')->with('data',$data);
    }
    public function update_pass(Request $request){

//        $encrypted = Crypt::encrypt('1111');
//        dd($encrypted);
        $this->validate($request, array(
            'old_password'     => 'required',
            'new_password'     => 'required|min:2',
            'confirm_password' => 'required|same:new_password',
        ));
        $data = $request->old_password;
        $customer_password = Customer::find(1)->password;
        $decrypted = Crypt::decrypt($customer_password);
//        dd($decrypted);
        if($decrypted===$data){
            Customer::where('id', 1)
                ->update([
                    'password' => (Crypt::encrypt($request->new_password)),
                ]);

            return back()->with('msg','Password has been changed');
        }else{
            return back()->with('msg','can not change password');
        }



    }

//    End Account


    public function credit_card(){
        $data = DB::table('customers')->select('credit_card');
        $raw = json_encode($data->get('credit_card')->get(0));
        $fourEnd = substr(json_decode($raw)->credit_card, -4);

        $data2 = DB::select('SELECT expired_date, LEFT(RIGHT(expired_date,8) , 5) as d
FROM customers;');
        $raw2 = json_encode($data2[0]);
        $ex = json_decode($raw2)->d;

        return view('Frontend.Pages.Customer.credit-card', ['fourEnd'=>$fourEnd, 'data2' => $ex]);
    }


    public function purchasing_history(){
        $data = DB::table('vu_ListOrders')->where('customer_id',1)->get();

        $orderdetails=DB::table('vu_orderdetail')->orderBy('id', 'desc')->get();

        return view('Frontend.Pages.Customer.purchasing-history')->with([
            'data'=> $data,
            'orderdetails'=> $orderdetails,
        ]);
    }

}
