<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Resources\Faq;
use App\Http\Requests\NuovaFaqRequest;

class AdminController extends Controller {

    public function __construct() {
        $this->middleware('can:isAdmin');
        $this->_adminModel = new Admin();
        
    }

    public function index() {
        $user = auth()->user();
        $faqs = $this->_adminModel->getFaqs();
        
        return view('accountadmin')
                    ->with('user', $user)
                    ->with('faqs', $faqs);
    }
    
    public function addFaq(){
        return view('faq');
    }
    
    public function submitFaq(NuovaFaqRequest $request){
        $faq = new Faq;
        $request->validated();
        $faq->domanda = $request->get('domanda');
        $faq->risposta = $request->get('risposta');
        
        $faq->save();
        
        return redirect()->action('AdminController@index');
    }


}
