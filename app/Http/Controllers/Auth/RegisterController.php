<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
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
            'name' => ['required', 'alpha', 'max:50', 'min:3'],
            'lastname' => ['required', 'alpha', 'max:50', 'min:3'],
            'country' => ['required', 'alpha', 'min:3', 'max:50'],
            'username' => ['required', 'string', 'min:3', 'max:50'],
            'email' => ['required', 'string', 'email', 'max:50', 'unique:users'],
            'country' => ['required'],
            'password' => 'required | string | min:6 | same:confirmPassword',
            'confirmPassword' => ['min:6', 'same:password'],
            'image' => ['string', 'min:30', 'image'],
        ],
        [
            'required' => 'El campo es obligatorio',
            'name.max' => 'El nombre es demasiado largo',
            'name.min' => 'El nombre deber ser de al menos 3 caracteres',
            'name.alpha' => 'El nombre solo debe contener letras',
            'lastname.min' => 'El apellido deber ser de al menos 3 caracteres',
            'lastname.max' => 'El apellido es demasiado largo',
            'lastname.alpha' => 'El apellido solo debe contener letras',
            'username.min' => 'El usuario deber ser de al menos 3 caracteres',
            'username.max' => 'El usuario es demasiado largo',
            'email.email' => 'Debe ser un formato valido de email',
            'country' => 'Debes seleccionar un pais',
            'password.min' => 'La contrasena debe ser de al menos 6 caracteres',
            'confirmPassword.min' => 'La contrasena debe ser de al menos 6 caracteres',
            'same' => 'La contrasena debe coincidir',
            'image.image' => 'Tiene que ser un formato valido',
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
            'name' => $data['name'],
            'lastname' => $data['lastname'],
            'username' => $data['username'],
            'country' => $data['country'],
            // 'image' => $data['image'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
