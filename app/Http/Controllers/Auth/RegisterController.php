<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
            //'nome' => ['required', 'string', 'max:255'],
           // 'cognome' => ['required', 'string', 'max:255'],//
           // 'email' => ['required', 'string', 'email', 'max:255', 'unique:users','unique:utente'],//email validatore chiocciola, unica mail registrata se esiste non accetta
            'username' => ['required', 'string', 'min:4', 'unique:users'],
           // 'username' => ['required', 'string', 'min:4', 'confirmed'],//campo soggetto a conferma altro campo della form gestito come campo per la verigfica correttezza della password automaticamente
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
        return Utente::create([
            //'nome' => $data['nome'],
            //'cognome' => $data['cognome'],
           // 'tipologia' =>$data['tipologia'],
            'username'=>($data['username']),
            'password' => Hash::make($data['password']),
        ]);
    }
    
}
