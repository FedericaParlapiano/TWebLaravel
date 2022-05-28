<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Richiesta extends Model {

    protected $table = 'richieste';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function filtra_data_da($da)
    {
        return Richiesta::where('inizioAffitto','>=', $da)->select('id')->pluck('id');
    }
    
    public function filtra_data_a($a)
    {
        return Richiesta::where('inizioAffitto','<=', $a)->select('id')->pluck('id');
    }
    
    public function filtra_tipologia($tipologia)
    {
        return Richiesta::join('annuncio', 'richieste.annuncio', '=', 'annuncio.id')
                ->where('tipologia', $tipologia)->select('richieste.id')->pluck('richieste.id');
    }
    
}
