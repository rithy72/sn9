<?php

namespace App\Http\Controllers\Auth;

use App\Customer;
use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use DB;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers',
            'password' => 'required|min:6|confirmed',
//            'title' => 'required',
//            'dob' => 'required',
//            'address' => 'requiheadred',
//            'credit_card' => 'required|min16',
//            'expired_date' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array $data
     * @return Customer
     */
    protected function create(array $data)
    {
        return Customer::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'title' => $data['title'],
            'password' => bcrypt($data['password']),
            'tel' => $data['tel'],
            'dob'=>$data['dob'],
            'address'=>$data['address'],
            'credit_card'=>$data['credit_card'],
            'expired_date'=>$data['expired_date'],
        ]);
    }

    public function register(Request $request)
    {
        $input = $request->all();
        $validator = $this->validator($input);

        if ($validator->passes()) {
            $customer = $this->create($input)->toArray();
            $customer['link'] = str_random(30);

            DB::table('customers_activations')->insert(['id_customer' => $customer['id'], 'token' => $customer['link']]);

            Mail::send('emails.activation', $customer, function ($message) use ($customer) {
                $message->to($customer['email']);
                $message->subject('www.CKT_kemhong - Activation Code');
            });
            return redirect()->to('customer-login')->with('success', "We sent activation code. Please check your mail.");
        }
        return back()->with('errors', $validator->errors());
    }

    /**
     * @param $token
     * @return \Illuminate\Http\RedirectResponse
     */
    public function customerActivation($token)
    {
        $check = DB::table('customers_activations')->where('token', $token)->first();
        if (!is_null($check)) {
            $customer = Customer::find($check->id_customer);
            if ($customer->is_activated == 1) {
                return redirect()->to('customer-login')->with('success', "Customer are already actived.");
            }
            $customer->update(['is_activated' => 1]);
            DB::table('customers_activations')->where('token', $token)->delete();
            return redirect()->to('customer-login')->with('success', "Customer active successfully.");
        }
        return redirect()->to('customer-login')->with('Warning', "your token is invalid");
    }
}
