<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

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
     * Where to redirect users after registration.
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
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name'        => 'required',
            'user'        => 'required|unique:users,user',
            'password'    => 'required|min:6',
            'date_birth'  => 'required',
            'gender'      => 'required',
            'deficiency'  => 'required',
            'cep'         => 'required',
            'email'       => 'required|unique:users,email'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name'       => $data['name'],
            'user'       => $data['user'],
            'password'   => Hash::make($data['password']),
            'date_birth' => $data['date_birth'],
            'gender'     => $data['gender'],
            'deficiency' => $data['deficiency'],
            'cep'        => $data['cep'],
            'address'    => $data['address'],
            'email'      => $data['email']
        ]);
    }
}
