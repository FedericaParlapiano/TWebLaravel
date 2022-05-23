<?php

namespace App\models;

use App\Models\Resources\Faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Foto;
use App\Models\Resources\ServizioIncluso;
use App\Models\Resources\Vincolo;
use App\User;

class Catalogo {
    
    public function getFaqs() {
        return Faq::all();
    }
    
    public function getAnnunci() {
        return Annuncio::select('*')->paginate(9);
    }
    
    public function getFoto() {
        return Foto::all();
    }
    
    public function getAnnunciConFoto() {
        return Foto::select("annuncio")->get();
    }
    
    public function getAnnuncio($idAnnuncio) {
        return Annuncio::where('id', $idAnnuncio)->get();
    }
    
    public function getFotoAnnuncio($idAnnuncio) {
        return Foto::where('annuncio', $idAnnuncio)->get();
    }
    
    public function getServiziAnnuncio($idAnnuncio) {
        return ServizioIncluso::where('annuncio', $idAnnuncio)->get();
    }
       
    public function getVincoliAnnuncio($idAnnuncio) {
        return Vincolo::where('annuncio', $idAnnuncio)->get();
    }
    
    public function getLocatoreAnnuncio($idAnnuncio) {
        $usernamelocatore = $this->getAnnuncio($idAnnuncio)->first()->locatore;
        return User::where('username', $usernamelocatore)->get();  
    }
}
