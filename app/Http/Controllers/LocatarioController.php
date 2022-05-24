<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;

class LocatarioController extends Controller {

    

    public function __construct() {
        $this->middleware('can:isLocatario');
        
    }

    public function index() {
        $user = auth()->user();
        return view('accountlocatario')
                   ->with('user', $user);
    }
    
    public function showRicerca(){
        return view('catalog');
    }
   
}
