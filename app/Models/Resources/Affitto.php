<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Affitto extends Model {

    protected $table = 'affitti';
    protected $primaryKey = 'id';
    public $timestamps = false;
    
    public function filtra_data_da($da)
    {
        return Affitto::where('dataStipulaContratto','>=', $da)->select('id')->pluck('id');
    }
    
    public function filtra_data_a($a)
    {
        return Affitto::where('dataStipulaContratto','<=', $a)->select('id')->pluck('id');
    }
    
    public function filtra_tipologia($tipologia)
    {
        return Affitto::join('annuncio', 'affitti.annuncio', '=', 'annuncio.id')
                ->where('tipologia', $tipologia)->select('affitti.id')->pluck('affitti.id');
    
    }
    
}
