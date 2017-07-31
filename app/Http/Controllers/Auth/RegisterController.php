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
            'name' => 'required|max:255',
            'segundo_nombre' => 'required|max:255',
            'apellidos' => 'required|max:255',
            'idiomas' => 'required|max:255',
            'zona_horaria' => 'required|max:255',
            'quien_soy' => 'required|max:1000',
            'historia_laboral' => 'required',
            'certificaciones' => 'required',
            'portafolio' => 'required',
            'direccion_postal' => 'required|max:255',
            'ciudad' => 'required|max:255',
            'estado' => 'required|max:255',
            'codigo_postal' => 'required|max:255',
            'pais' => 'required|max:255',
            'telefono' => 'required|max:255',
            'celular' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
             'name' => $data['name'],
             'segundo_nombre' => $data['segundo_nombre'],
             'apellidos' => $data['apellidos'],
             'idiomas' => $data['idiomas'],
             'zona_horaria' => $data['zona_horaria'],
             'quien_soy' => $data['quien_soy'],
             'historia_laboral' => $data['historia_laboral'],
             'certificaciones' => $data['certificaciones'],
             'portafolio' => $data['portafolio'],
             'direccion_postal' => $data['direccion_postal'],
             'ciudad' => $data['ciudad'],
             'estado' => $data['estado'],
             'codigo_postal' => $data['codigo_postal'],
             'email' => $data['email'],
             'pais' => $data['pais'],
             'telefono' => $data['telefono'],
             'celular' => $data['celular'],
             'password' => bcrypt($data['password']),
        ]);
    }
}
