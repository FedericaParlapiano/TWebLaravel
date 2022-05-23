<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Product;
use App\Http\Requests\NewProductRequest;
use App\Models\Locatore;

class LocatoreController extends Controller {

   

    public function __construct() {
        $this->_locatoreModel = new Locatore();
        $this->middleware('can:isLocatore');
        
        
    }

    public function index() {
        $user = auth()->user();
        $annunci = $this->_locatoreModel->getAnnunciLocatore($user->username);
        $foto = $this->_locatoreModel->getFotoAnnunci();
        
        return view('accountlocatore')
                    ->with('user', $user)
                    ->with('annunci', $annunci)
                    ->with('foto', $foto);
    }


}
