<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Preferenza extends Model {

    protected $table = 'preferenze';
    protected $primaryKey = ['locatario', 'annuncio'];
    public $incrementing = false;
    public $timestamps = false;
    
}
