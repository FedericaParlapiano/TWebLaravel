<?php

namespace app\Models;

use App\Models\Resources\Annuncio;
use App\Models\Resources\Foto;

/* 
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/EmptyPHP.php to edit this template
 */

class Locatore {
    
    public function getAnnunciLocatore($locatore) {
        return Annuncio::where('locatore', $locatore)->paginate(4);
    }
    
    public function getFotoAnnunci() {
        return Foto::all();
    }
    
    
}