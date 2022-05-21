<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class UserController extends Controller {
    
    
    protected $_faqModel;
    
    public function __construct() {
        $this->middleware('auth');
        $this->_catalogoModel = new Catalogo();
    }
    
    public function index() {
        return view('homepage');
    }
    
    public function showAccount() {
        return view('account');
    }
     
    public function addAnnuncio() {
        return view('annunci.insert');
    }
    
   
}
