<?php

namespace app\Models;

use App\Models\Resources\Annuncio;
use App\Models\Resources\Foto;
use App\Models\Resources\ServizioIncluso;
use App\Models\Resources\Vincolo;
use App\Models\Resources\Richiesta;
use App\Models\Resources\Affitto;


/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Locatore {
    
    public function getAnnunciLocatore($locatore) {
        return Annuncio::where('locatore', $locatore)->paginate(4);
    }
    
    public function getFotoAnnunci() {
        return Foto::all();
    }
    
    public function getAnnuncio($idAnnuncio) {
        return Annuncio::where('id', $idAnnuncio)->get();
    }
    
    public function getAnnuncioById($idAnnuncio) {
        return Annuncio::where('id', $idAnnuncio)->get()->first();
    }
    
    public function getServiziAnnuncio($idAnnuncio) {
        return ServizioIncluso::where('annuncio', $idAnnuncio)->get();
    }
    
    public function getVincoliAnnuncio($idAnnuncio) {
        return Vincolo::where('annuncio', $idAnnuncio)->get();
    }
    
    public function getProposte($locatore) {
        return Richiesta::where('richieste.locatore', $locatore)
                ->select('annuncio.id as idannuncio', 'annuncio.titolo as titoloannuncio', 'annuncio.tipologia as tipologiaannuncio', 'annuncio.canoneAffitto as canoneAnnuncio', 'users.username as usernamelocatario', 'users.nome as nomelocatario', 'users.cognome as cognomelocatario',
                        'users.dataNascita as datanascitalocatario', 'users.sesso as sessolocatario', 'users.email as emaillocatario', 'users.numTelefono as telefonolocatario',
                        'richieste.id as id', 'richieste.inizioAffitto as inizioAffitto', 'richieste.fineAffitto as fineAffitto', 'richieste.messaggio as messaggio',
                        'richieste.canoneProposto as canoneProposto', 'richieste.stato as stato')
                ->join('annuncio', 'richieste.annuncio', '=', 'annuncio.id')
                ->join('users', 'richieste.locatario', '=', 'users.username')
                ->paginate(10);
    }    
    
    public function getPropostaById($idProposta) {
        return Richiesta::where('id', $idProposta)->get()->first();
    }
    
    
    public function getDatiAffitto($idProposta) {
        return Richiesta::where('richieste.id', $idProposta)
                ->select('annuncio.id as idannuncio', 'annuncio.titolo as titoloannuncio', 'annuncio.tipologia as tipologiaannuncio', 'annuncio.canoneAffitto as canoneAnnuncio', 'users.username as usernamelocatario', 'users.nome as nomelocatario', 'users.cognome as cognomelocatario',
                        'users.dataNascita as datanascitalocatario', 'users.sesso as sessolocatario', 'users.email as emaillocatario', 'users.numTelefono as telefonolocatario',
                        'richieste.id as id', 'richieste.inizioAffitto as inizioAffitto', 'richieste.fineAffitto as fineAffitto', 'richieste.messaggio as messaggio',
                        'richieste.canoneProposto as canoneProposto', 'richieste.stato as stato')
                ->join('annuncio', 'richieste.annuncio', '=', 'annuncio.id')
                ->join('users', 'richieste.locatario', '=', 'users.username')
                ->get()->first();
    }  
    
    public function getAffittoByInfo($annuncio, $locatario, $inizioAffitto, $fineAffitto) {
        return Affitto::where('annuncio', $annuncio)
                ->where('dataStipulaContratto', $inizioAffitto)
                ->where('locatario', $locatario)
                ->where('dataFineContratto', $fineAffitto)->get()->first();
    }
    
    public function getDatiContratto($idContratto) {
        return Richiesta::where('richieste.id', $idContratto)
                ->select('annuncio.titolo as titoloannuncio', 'annuncio.tipologia as tipologiaannuncio', 'annuncio.indirizzo as indirizzo', 'annuncio.zonaLocazione as zonalocazione',
                        'users1.nome as nomelocatario', 'users1.cognome as cognomelocatario', 'users1.dataNascita as datanascitalocatario', 
                        'users2.nome as nomelocatore', 'users2.cognome as cognomelocatore', 'users2.dataNascita as datanascitalocatore',
                        'richieste.inizioAffitto as inizioAffitto', 'richieste.fineAffitto as fineAffitto', 'richieste.canoneProposto as canoneProposto')
                ->join('annuncio', 'richieste.annuncio', '=', 'annuncio.id')
                ->join('users as users1', 'richieste.locatario', '=', 'users1.username')
                ->join('users as users2', 'richieste.locatore', '=', 'users2.username')
                ->first();
    }
      
}