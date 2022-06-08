<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Annuncio extends Model {

    protected $table = 'annuncio';
    protected $primaryKey = 'id';
    //settando id come guarded si vieta il mass assignment per questo attributo; questa scelta è dettata dal fatto che 
    //è definito come attributo autoincrementante e non è fillable.
    protected $guarded = ['id'];
    public $timestamps = false;
    
    public function filtra_citta($citta)
    {
        return Annuncio::where('zonaLocazione', $citta)->select('id')->pluck('id');
    }
    
    public function filtra_data_da($da)
    {
        if($da) {
            return Annuncio::where('inizioPeriodoDisponibilita','<=', $da)->where('finePeriodoDisponibilita','>=', $da)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
           
    }
    
    public function filtra_data_a($a)
    {
        if($a) {
            return Annuncio::where('inizioPeriodoDisponibilita','<=', $a)->where('finePeriodoDisponibilita','>=', $a)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
    }

    
    public function filtra_superficie($superficie)
    {
        if($superficie) {
            return Annuncio::where('superficie', '>=', $superficie)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
        
    }
    
    public function filtra_numCamere($numCamere)
    {
        
        if($numCamere) {
            return Annuncio::where('numCamere', '=', $numCamere)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
    }
    
    public function filtra_postiLettoTot($postiLettoTotali)
    {
        if($postiLettoTotali) {
            return Annuncio::where('postiLettoTotali', '=', $postiLettoTotali)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
        
    }
    
    public function filtra_postiNellaStanza($postiNellaStanza)
    {
        if($postiNellaStanza) {
            return Annuncio::where('postiNellaStanza', '=', $postiNellaStanza)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
        
    }
    
    public function filtra_prezzo($amount)
    {   
        if($amount) {
            $a = trim($amount, '€');
            $range = explode(' - €', $a);
            $min = (int) $range[0];
            $max = (int) $range[1];
            return Annuncio::where('canoneAffitto', '>=', $min)->where('canoneAffitto', '<=', $max)->select('id')->pluck('id');
    
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
    }
    
    public function filtra_tipologia($tipologia)
    {
        if($tipologia) {
            return Annuncio::where('tipologia', $tipologia)->select('id')->pluck('id');
        }
        else {
            return Annuncio::select('id')->pluck('id');
        }
        
    }
    
    public function filtra_tipologia_postoLetto()
    {
        
        return Annuncio::where('tipologia', '!=', 'Appartamento')->select('id')->pluck('id');
    }
    
    
}
