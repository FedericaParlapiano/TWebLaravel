<?php

namespace App\models;

use App\Http\Requests\FiltriCatalogoRequest;
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
    
    public function getAnnunciFiltrati(FiltriCatalogoRequest $request)
    {
        $annunci = new Annuncio;
        $annunciFiltrati = new Annuncio;
        $annunciFiltrati->fill($request->validated());

        if($request->citta){
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_citta($request->citta));
        }
        
        if($request->da){
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_data_da($request->da));
        }
        
        if($request->a){
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_data_a($request->a));
        }
        
        if ($request->superficieT) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieT));
        }
        
        if ($request->superficieA) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieA));
        }
        
        if ($request->superficieP) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieP));
        }
        
        if ($request->postiLettoTotaliT) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliT));
        }
        
        if ($request->postiLettoTotaliA) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliA));
        }
        
        if ($request->postiLettoTotaliP) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliP));
        }
        
        if ($request->numCamereT) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_numCamere($request->numCamereT));
        }
        
        
        if ($request->postiNellaStanzaT) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanzaT));
        }
        
        if ($request->numCamere) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_numCamere($request->numCamere));
        }
        
        
        if ($request->postiNellaStanza) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanza));
        }
        
        if ($request->amount) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_prezzo($request->amount));
        }
        
        if ($request->tipologia && $request->tipologia != "tutti") {
            if($request->tipologia == "PostoLetto"){
                $annunci = $annunci->whereIn('id',$annunciFiltrati->filtra_tipologia_postoLetto());
            }
            else{
                 $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_tipologia($request->tipologia));
               
            }
        }
        
        
        return Annuncio::whereIn('id', $annunci->pluck('id'))->paginate(9);
    }
}
