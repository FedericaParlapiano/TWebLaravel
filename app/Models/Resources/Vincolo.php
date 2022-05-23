<?php

namespace App\Models\Resources;

use Illuminate\Database\Eloquent\Model;

class Vincolo extends Model {

    protected $table = 'vincoli';
    protected $primaryKey = 'id';
    public $timestamps = false;
}