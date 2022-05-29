<?php

namespace App\Http\Controllers;

use App\Http\Requests\NuovoMessaggioRequest;
use App\Http\Requests\FiltriCatalogoRequest;
use App\Models\Resources\Messaggio;
use App\Http\Requests\NuovaPropostaRequest;
use App\Models\Resources\Richiesta;
use App\models\Catalogo;
use App\Models\Locatario;


class LocatarioController extends Controller {

    protected $_catalogoModel;

    public function __construct() {
        $this->middleware('can:isLocatario');
        $this->_locatarioModel = new Locatario();        
        $this->_catalogoModel = new Catalogo();        
    }

    public function index() {
        $user = auth()->user();
        $proposte = $this->_locatarioModel->getProposte($user->username);
        return view('accountlocatario')
                   ->with('user', $user)
                   ->with('proposte', $proposte);
    }
    
    public function showFilterCatalogo(FiltriCatalogoRequest $request)
    {
        $annunci = $this->_catalogoModel->getAnnunciFiltrati($request);
        $foto = $this->_catalogoModel->getFoto();
        $annunciconfoto = $this->_catalogoModel->getAnnunciConFoto();
        
        if($request->ajax()){
            return view('catalog-pagination')
                    ->with('annunci', $annunci)
                    ->with('foto', $foto)
                    ->with('annunciconfoto', $annunciconfoto);
        }
        
        return view('catalog')
                    ->with('annunci', $annunci)
                    ->with('foto', $foto)
                    ->with('annunciconfoto', $annunciconfoto);
    }
    
    public function sendMessaggio(NuovoMessaggioRequest $request){
        $messaggio = new Messaggio;
        $request->validated();
        
        $user = auth()->user();
        $messaggio->mittente = $user->username;
        $messaggio->destinatario = $request->get('destinatario');
        $messaggio->testo = $request->get('testo');       
        $messaggio->dataOraInvio = date("Y-m-d H:i:s"); 
        
        $messaggio->save();
        
        return redirect()->action('LocatarioController@index');
    }
    
    public function sendProposta(NuovaPropostaRequest $request){
        
        $proposta = new Richiesta;
        $request->validated();
        
        $user = auth()->user();
        $proposta->locatario = $user->username;
        $proposta->locatore = $request->get('locatore');
        $proposta->annuncio = $request->get('annuncio');
        $proposta->canoneProposto = $request->get('canoneProposto');
        $proposta->messaggio = $request->get('messaggio');
        $proposta->stato = 'da valutare';
        $proposta->inizioAffitto = $request->get('inizioAffitto');
        $proposta->fineAffitto = $request->get('fineAffitto');
              
        $proposta->save();
        
        return redirect()->action('LocatarioController@index');
        
    }
    
    public function showProposte()
    {
        $user = auth()->user();
        $proposte = $this->_locatarioModel->getProposte($user->username);
                           
        return view('proposte')
                   ->with('user', $user)        
                   ->with('proposte', $proposte);
    }
   
}
