<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
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

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    
    //Rimando a homepage
    protected $redirectTo = '/';

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
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'username' => ['required', 'string', 'min:8', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'role' => ['required', 'string'],
            'fotoProfilo' => ['nullable', 'image'],
            'sesso' => ['required', 'string'],
            'dataNascita' => ['nullable', 'date', 'before:today', 'regex:/^[0-9]{4}[-][0-9]{2}[-][0-9]{2}$/'],
            'citta' => ['nullable', 'string', 'max:255'],
            'numTelefono' => ['nullable', 'numeric', 'digits_between:8,15'],
            'universita' => ['nullable', 'string', 'max:255'],
            'facolta' => ['nullable', 'string', 'max:255'],
            'annoImmatricolazione' => ['nullable', 'string', 'max:4', 'before:'.now()->format('Y')]
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
        $user = User::create([
            'nome' => $data['nome'],
            'cognome' => $data['cognome'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'role' => $data['role'],
            'sesso' => $data['sesso'],
            'dataNascita' => $data['dataNascita'],
            'citta' => $data['citta'],
            'numTelefono' => $data['numTelefono'],
            'universita' => $data['universita'],
            'facolta' => $data['facolta'],
            'annoImmatricolazione' => $data['annoImmatricolazione'],
        ]);
        
        if(request()->hasfile('fotoProfilo')){
            $image = request()->file('fotoProfilo');
            $destinationPath = public_path() . '/images/users';
            $filename = $image->getClientOriginalName();
            $image->move($destinationPath, $filename);
            $user->update(['fotoProfilo' => $filename]);
        }
        else
        {
            $user->update(['fotoProfilo' => 'user.png']);

        }
       
        return $user;
    }
}
