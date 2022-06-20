<?php

namespace App\Http\Controllers;

use App\Models\Catalogo;

class PublicController extends Controller {
    
    
    protected $_faqModel;
    
    public function __construct() {
        $this->_catalogoModel = new Catalogo();
    }
    
    public function homepage() {
        
        $faqs = $this->_catalogoModel->getFaqs();

        return view('homepage')
                    ->with('faqs', $faqs);
    }
    
    public function showCatalog() {
        
        $annunci = $this->_catalogoModel->getAnnunci();
        $foto = $this->_catalogoModel->getFoto();
        $annunciconfoto = $this->_catalogoModel->getAnnunciConFoto();
                
        return view('catalog')
                    ->with('annunci', $annunci)
                    ->with('foto', $foto)
                    ->with('annunciconfoto', $annunciconfoto);
    }
    
    public function showAnnuncio($idAnnuncio) {
        $annuncio = $this->_catalogoModel->getAnnuncio($idAnnuncio);
        $foto = $this->_catalogoModel->getFotoAnnuncio($idAnnuncio);
        $servizi = $this->_catalogoModel->getServiziAnnuncio($idAnnuncio);
        $vincoli = $this->_catalogoModel->getVincoliAnnuncio($idAnnuncio);
        $locatore = $this->_catalogoModel->getLocatoreAnnuncio($idAnnuncio);
        
        return view('annuncio')
                    ->with('annuncio', $annuncio)
                    ->with('foto', $foto)
                    ->with('servizi', $servizi)
                    ->with('vincoli', $vincoli)
                    ->with('locatore', $locatore);
    }
    
    public function showHomepageLogin() {
        $faqs = $this->_catalogoModel->getFaqs();
        
        return view('userhomepage')
                    ->with('faqs', $faqs);
    }
}
