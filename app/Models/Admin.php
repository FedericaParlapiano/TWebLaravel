<?php

namespace app\Models;

use App\Models\Resources\Faq;
use App\Models\Resources\Annuncio;
use App\Models\Resources\Richiesta;
use App\Models\Resources\Affitto;
use App\Http\Requests\StatisticheRequest;

class Admin{
    public function getFaqs() {
        return Faq::all();
    }
    
    public function getFaqById($id) {
        return Faq::where('id',$id)->get()->first();
    }
    
    public function getStatistiche() {
        $annunci = new Annuncio;
        $richieste = new Richiesta;
        $affitti = new Affitto; 
        
        
        $countAnnunci = $annunci->get()->count();
        $countRichieste = $richieste->get()->count();
        $countAffitti = $affitti->get()->count();
        
        $count = array("annunci"=>$countAnnunci, "richieste"=>$countRichieste, "affitti"=>$countAffitti);
        
        return $count;
       
    }
    
    public function getStatisticheFiltrate(StatisticheRequest $request) {
        
        $annunci = new Annuncio;
        $richieste = new Richiesta;
        $affitti = new Affitto; 
        
        $annunciFiltrati = new Annuncio;
        $richiesteFiltrate = new Richiesta;
        $affittiFiltrati = new Affitto;
        
        $annunciFiltrati->fill($request->validated());
        
        $countAnnunci = $annunci->get()->count();
        $countRichieste = $richieste->get()->count();
        $countAffitti = $affitti->get()->count();
        
        
        if($request->from) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_data_da($request->from));
            $richieste = $richieste->whereIn('id', $richiesteFiltrate->filtra_data_da($request->from));
            $affitti = $affitti->whereIn('id', $affittiFiltrati->filtra_data_da($request->from));
            
            $countAnnunci = $annunci->get()->count();
            $countRichieste = $richieste->get()->count();
            $countAffitti = $affitti->get()->count();
        }
        
        if($request->to) {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_data_a($request->to));
            $richieste = $richieste->whereIn('id', $richiesteFiltrate->filtra_data_a($request->to));
            $affitti = $affitti->whereIn('id', $affittiFiltrati->filtra_data_a($request->to));
            
            $countAnnunci = $annunci->get()->count();
            $countRichieste = $richieste->get()->count();
            $countAffitti = $affitti->get()->count();
        }
        
        if($request->tipologia && $request->tipologia!='nessuno') {
            $annunci = $annunci->whereIn('id', $annunciFiltrati->filtra_tipologia($request->tipologia));
            $richieste = $richieste->whereIn('id', $richiesteFiltrate->filtra_tipologia($request->tipologia));
            $affitti = $affitti->whereIn('id', $affittiFiltrati->filtra_tipologia($request->tipologia));
            
            $countAnnunci = $annunci->get()->count();
            $countRichieste = $richieste->get()->count();
            $countAffitti = $affitti->get()->count();
            
        }
        
        
        $count = array("annunci"=>$countAnnunci, "richieste"=>$countRichieste, "affitti"=>$countAffitti);
        
        return $count;
        
    }
    
    
    
}

