<?php

namespace App\models;

use App\Http\Requests\FiltriCatalogoRequest;
use App\Models\Resources\Faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Foto;
use App\Models\Resources\ServizioIncluso;
use App\Models\Resources\Vincolo;
use App\User;

use Illuminate\Support\Collection;

class Catalogo {
    
    public function getFaqs() {
        return Faq::all();
    }
    
    public function getAnnunci() {
        return Annuncio::select('*')->paginate(9);
    }
    
    public function getAllAnnunci() {
        return Annuncio::all();
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

        
        if ($request->amount) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_prezzo($request->amount));
        }
        
        if ($request->tipologia == "tutti") {
            if ($request->superficieT) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieT));
            }
            
            if ($request->postiLettoTotaliT) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliT));
            }
            
            if ($request->numCamereT) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_numCamere($request->numCamereT));
            }

            if ($request->postiNellaStanzaT) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanzaT));
            }
   
        }
        
        if($request->tipologia == "PostoLetto" ){
            $annunci = $annunci->whereIn('id',$annunciFiltrati->filtra_tipologia_postoLetto());
            
            if ($request->superficieP) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieP));
            }
            
            if ($request->postiLettoTotaliP) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliP));
            }
            
            if ($request->postiNellaStanza) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanza));
            }
        }
        
        if($request->tipologia == "PostoLettoSingolo" || $request->tipologia == "PostoLettoDoppia"){
             $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_tipologia($request->tipologia));
            
            if ($request->superficieP) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieP));
            }
            
            if ($request->postiLettoTotaliP) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliP));
            }
            
            if ($request->postiNellaStanza) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanza));
            }
        }
        
        if($request->tipologia == "Appartamento"){
             $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_tipologia($request->tipologia));
             
            if ($request->superficieA) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_superficie($request->superficieA));
            }

            if ($request->postiLettoTotaliA) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliA));
            }

            if ($request->numCamere) {
                $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_numCamere($request->numCamere));
            }
        }
        
        
        return Annuncio::whereIn('id', $annunci->pluck('id'))->paginate(9);
    }
    
    
    public function getVincoliSoddisfatti(FiltriCatalogoRequest $request) {
        $annunciFiltrati = new Annuncio;
        $annunciFiltrati->fill($request->validated());
        
        $citta = $annunciFiltrati->filtra_citta($request->citta);
        $da =  $annunciFiltrati->filtra_data_da($request->da);
        $a = $annunciFiltrati->filtra_data_a($request->a);
        $superficieT = $annunciFiltrati->filtra_superficie($request->superficieT);
        $superficieA = $annunciFiltrati->filtra_superficie($request->superficieA);
        $superficieP = $annunciFiltrati->filtra_superficie($request->superficieP);
        $postiLettoTotaliT = $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliT);
        $postiLettoTotaliA = $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliA);
        $postiLettoTotaliP = $annunciFiltrati->filtra_postiLettoTot($request->postiLettoTotaliP);
        $numCamereT = $annunciFiltrati->filtra_numCamere($request->numCamereT);
        $postiNellaStanzaT = $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanzaT);
        $numCamere = $annunciFiltrati->filtra_numCamere($request->numCamere);
        $postiNellaStanza = $annunciFiltrati->filtra_postiNellaStanza($request->postiNellaStanza);
        $amount = $annunciFiltrati->filtra_prezzo($request->amount);
        $tipologia = new Collection();
        
        
        if ($request->tipologia ) {
            
            if($request->tipologia == "tutti"){
                $tipologia = Annuncio::select('id')->pluck('id');
            }
            if($request->tipologia == "PostoLetto"){
                $tipologia = $annunciFiltrati->filtra_tipologia_postoLetto();
            }
            
            if($request->tipologia == "Appartamento" || $request->tipologia == "PostoLettoSingolo" || $request->tipologia == "PostoLettoDoppia"){

                 $tipologia = $annunciFiltrati->filtra_tipologia($request->tipologia);
            }
        }
        
        
        $semicollection = $citta->merge($amount);
        $semicollection = $semicollection->merge($tipologia);
        $semicollection = $semicollection->merge($da);
        $semicollection = $semicollection->merge($a);
        $semicollection = $semicollection->merge($superficieT);
        $semicollection = $semicollection->merge($superficieA);
        $semicollection = $semicollection->merge($superficieP);
        $semicollection = $semicollection->merge($postiLettoTotaliT);
        $semicollection = $semicollection->merge($postiLettoTotaliA);
        $semicollection = $semicollection->merge($postiLettoTotaliP);
        $semicollection = $semicollection->merge($numCamereT);
        $semicollection = $semicollection->merge($postiNellaStanzaT);
        $semicollection = $semicollection->merge($numCamere);
        $semicollection = $semicollection->merge($postiNellaStanza);
        
        $array = $semicollection->toArray();
        
        $duplicatenumber = array_count_values($array);
        
        arsort($duplicatenumber);
        
        return $duplicatenumber;
        
        
    }
    
    public function getAnnunciOrdinati($duplicatenumber) {
        
        $annunciordinati = new Collection();
        
        foreach($duplicatenumber as $key=>$value) {
            $annunciordinati->push(Annuncio::where('id', $key)->get()->first());
        }
        
        return $annunciordinati;
    }
    
    public function getNumeroFiltri(FiltriCatalogoRequest $request) {
        
        $numFiltri = 15;
        
        if($request->citta) {
            $numFiltri--;
        }
        if($request->citta == '') {
            $numFiltri--;
        }
        if($request->da) {
            $numFiltri--;
        }
        if($request->a) {
            $numFiltri--;
        }
        if($request->amount == '') {
            $numFiltri--;
        }
        if($request->amount != '€0 - €1000') {
            $numFiltri--;
        }
       
        if($request->tipologia == '') {
            $numFiltri--;
        }
        if($request->tipologia) {
            $numFiltri--;
                if($request->tipologia == 'tutti') {
                    if($request->superficieT) {
                        $numFiltri--;
                    }
                    if($request->postiLettoTotaliT) {
                        $numFiltri--;
                    }
                    if($request->numCamereT) {
                        $numFiltri--;
                    }
                    if($request->postiNellaStanzaT) {
                        $numFiltri--;
                    }
                }
                if($request->tipologia == 'Appartamento') {
                    if($request->superficieA) {
                        $numFiltri--;
                    }
                    if($request->postiLettoTotaliA) {
                        $numFiltri--;
                    }
                    if($request->numCamere) {
                        $numFiltri--;
                    }
                }
                if($request->tipologia == 'PostoLetto' || $request->tipologia == "PostoLettoSingolo" || $request->tipologia == "PostoLettoDoppia") {
                    if($request->superficieP) {
                        $numFiltri--;
                    }
                    if($request->postiLettoTotaliP) {
                        $numFiltri--;
                    }
                    if($request->postiNellaStanza) {
                        $numFiltri--;
                    }
                }       
        }

        return $numFiltri;
    }
    
    public function getAnnunciConNumVincoliSoddisfatti($numVincoliNonIndicati, $annunci) {
        $array = array();

        foreach($annunci as $key=>$value) {
            $valore = $value - $numVincoliNonIndicati;
            $value = $valore;
            $array[$key] = $valore;
        }

        return $array;
    }
    
}
