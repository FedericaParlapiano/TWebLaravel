<?php

namespace App;

use App\Models\Resources\Chat;
use App\Models\Resources\Messaggio;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable {

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nome', 'cognome', 'email', 'username', 'password', 'role', 'fotoProfilo', 'sesso', 'dataNascita', 'citta', 'numTelefono', 'universita', 'facolta', 'annoImmatricolazione',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'username', 'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
       
    ];
    
    public function hasRole($role) {
        $role = (array)$role;
        return in_array($this->role, $role);
    }
    
    public function getUser() {
        return User::find(auth()->user()->id);
    }
    
    public function getChat($user) {
        return Chat::where('user1', $user)
                ->orWhere('user2', $user)->get();
    }
    
    public function getMessaggi($chat) {
        
        $messaggi=array();
        
        foreach($chat as $singolachat) {
            array_push($messaggi, (Messaggio::where('mittente', $singolachat->user1)
                                   ->orWhere('destinatario', $singolachat->user1)
                                    ->where('mittente', $singolachat->user2)
                                     ->orWhere('destinatario', $singolachat->user2)->get()));
        }
        
        return $messaggi;
        
    }
    
    public function getMessaggiUser($user) {
        
        $authuser = auth()->user()->username;
        
        return Messaggio::where('mittente', $authuser)->where('destinatario', $user)
                ->orWhere('destinatario', $authuser)->where('mittente', $user)->get();
        
        
        
        
    }
    
}
