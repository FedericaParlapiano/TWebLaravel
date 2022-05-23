<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Richiesta extends Model {

    protected $table = 'richieste';
    protected $primaryKey = 'id';
    public $timestamps = false;
}
