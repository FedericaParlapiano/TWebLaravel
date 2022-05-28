<?php

namespace app\Models;

use App\Models\Resources\Richiesta;

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Locatario {
    
    public function getProposte($locatario) {
        return Richiesta::where('locatario', $locatario)
                ->select('annuncio.titolo as titoloannuncio', 'annuncio.tipologia as tipologiaannuncio', 'users.nome as nomelocatore', 'users.cognome as cognomelocatore',
                        'richieste.inizioAffitto as inizioAffitto', 'richieste.fineAffitto as fineAffitto', 'richieste.messaggio as messaggio', 
                        'richieste.canoneProposto as canoneProposto', 'richieste.stato as stato')
                ->join('annuncio', 'richieste.annuncio', '=', 'annuncio.id')
                ->join('users', 'richieste.locatore', '=', 'users.username')
                ->paginate(10);
    }    
}