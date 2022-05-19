<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class UserController extends Controller {
    
    
    protected $_faqModel;
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo();
    }
    
    public function showAccount() {
        return view('account');
    }
            
    
   
}
