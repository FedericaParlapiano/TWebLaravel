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
    
    
}
