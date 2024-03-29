<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;
use App\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\Locatore;
use Illuminate\Validation\Rule;
use App\Models\Resources\Messaggio;
use App\Http\Requests\NuovoMessaggioRequest;


class UserController extends Controller {
    
    
    protected $_faqModel;
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo();
        $this->_userModel = new User();
        $this->middleware('can:isUser');
        $this->_locatoreModel = new Locatore();
        
    }
    
    public function index() {
        if(auth()->user()->role=='locatario') {
            return view('accountlocatario');
        }
        else {
            return view('accountlocatore');
        }
    }
    
    public function modificaAccount(Request $request) {
        
        $data = $request->all();
        
        $user = $this->_userModel->getUser();
        $password = $user->password;
        
        $user->fill(request()->validate([
                
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users', 'email')->ignore($user->email, 'email')],
            'username' => ['nullable', 'string', Rule::unique('users', 'username')->ignore($user->username, 'username')],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'fotoProfilo' => ['nullable', 'string'],
            'sesso' => ['required', 'string'],
            'dataNascita' => ['nullable', 'date', 'before:today'],
            'citta' => ['nullable', 'string', 'max:255'],
            'numTelefono' => ['nullable', 'numeric', 'digits_between:8,15'],
            'universita' => ['nullable', 'string', 'max:255'],
            'facolta' => ['nullable', 'string', 'max:255'],
            'annoImmatricolazione' => ['nullable', 'string', 'max:4', 'before:'.now()->format('Y')]
                
        ]));
        
        $utente = $this->_userModel->getUser()->update([
            'nome' => $data['nome'],
            'cognome' => $data['cognome'],
            'email' => $data['email'],
            'username' => $data['username'],
            'password' => Hash::make($data['password']),
            'fotoProfilo' => $data['fotoProfilo'],
            'sesso' => $data['sesso'],
            'dataNascita' => $data['dataNascita'],
            'citta' => $data['citta'],
            'numTelefono' => $data['numTelefono'],
        ]);
        
        
        
        if(auth()->user()->role=='locatario') {
            return redirect()->action('LocatarioController@index');
        }
        else {
            return redirect()->action('LocatoreController@index');
        }
        
        
    }
    
    public function showModificaAccount() {
        $user = auth()->user();
        
        return view('modificaaccount')
                ->with('user', $user);
    }
    
    public function addAnnuncio() {
        return view('annunci.insert');
    }
    
    public function showChat() {
        
        
        $chat = $this->_userModel->getChat(auth()->user()->username);
        $messaggi = $this->_userModel->getMessaggi($chat);
        
        return view('messaggistica')
            ->with('authuser', auth()->user()->username)
            ->with('chat', $chat)
            ->with('messaggi', $messaggi);
    }
    
    public function showUserChat($user) {
        
        $messaggi = $this->_userModel->getMessaggiUser($user);
        
        return view('chat')
            ->with('authuser', auth()->user()->username)
            ->with('messaggi', $messaggi)
            ->with('user', $user);
    }
    
    public function sendMessaggio(NuovoMessaggioRequest $request){
        $messaggio = new Messaggio;
        $request->validated();
        
        $user = auth()->user();
        $messaggio->mittente = $user->username;
        $messaggio->destinatario = $request->get('destinatario');
        $messaggio->testo = $request->get('testo');       
        $messaggio->dataOraInvio = date("Y-m-d H:i:s"); 
        
        $messaggio->save();
        
        $messaggi = $this->_userModel->getMessaggiUser($request->get('destinatario'));
        
        
        return view('chat')
                ->with('authuser', auth()->user()->username)
                ->with('user', $request->get('destinatario'))
                ->with('messaggi', $messaggi);
        
    }
   
}
