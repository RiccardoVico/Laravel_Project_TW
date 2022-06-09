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

    use RegistersUsers; //processo predefinito,metodi già definiti per il controller di registrazione,lavoriamo in override con i metodi di base

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');     //utenti che hanno accesso a questo controller , se un utente che non ha ancora fatto login accede viene rifiutato e lo blocca se già registrato
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
            'nome' => ['required', 'string', 'max:20'],
            'cognome' => ['required', 'string', 'max:20'],
            'mail' => ['required', 'string', 'email', 'max:500', 'unique:users'],//email validatore chiocciola, unica mail registrata se esiste non accetta
            'username' => ['required', 'string', 'min:4', 'unique:users'],
            'recapito' => ['required', 'string', 'max:20'],
            'eta' => ['required', 'int', 'max:100'],
            'via' => ['required', 'string', 'max:20'],
            'citta' => ['required', 'string', 'max:20'],
            'numerocivico' => ['required', 'int', 'max:10000'],
            'cap' => ['required', 'int', 'max:100000'],
            'paese' => ['required', 'string', 'max:20'],
            'provincia' => ['required', 'string', 'max:20'],
            'password' => ['required', 'string', 'max:500', 'same:password_confermation','required_with:password_confermation'],
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
            'username'=>$data['username'],
            'nome'=>$data['nome'],
            'cognome'=>$data['cognome'],
            'recapito'=>$data['recapito'],
            'eta'=>$data['eta'],
            'genere'=>$data['genere'],
            'role' =>$data['role'],
            'password' => Hash::make($data['password']),
            'cittainteresse' =>$data['cittainteresse'],
            'via' =>$data['via'],
            'citta' =>$data['citta'],
            'numerocivico' =>$data['numerocivico'],
            'cap' =>$data['cap'],
            'provincia' =>$data['provincia'],
            'paese' =>$data['paese'],
            'mail' =>$data['mail'],
        ]);


    }
    
}
