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
 
    
    
    /*
    public function showCatalog1() {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();
        
        //Prodotti in sconto di tutte le categorie, ordinati per sconto decrescente
        $prods = $this->_catalogModel->getProdsByCat($topCats->map->only(['catId']), 2, 'desc', true);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('products', $prods);
    }

    public function showCatalog2($topCatId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);
                        
        //Prodotti in sconto della categoria Top selezionata, ordinati per sconto decrescente 
        $prods = $this->_catalogModel->getProdsByCat([$topCatId], 2, 'desc', true);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }

    public function showCatalog3($topCatId, $catId) {

        //Categorie Top
        $topCats = $this->_catalogModel->getTopCats();

        //Categoria Top selezionata
        $selTopCat = $topCats->where('catId', $topCatId)->first();

        // Sottocategorie
        $subCats = $this->_catalogModel->getCatsByParId([$topCatId]);

        // Prodotti della categoria selezionata, in sconto o meno
       $prods = $this->_catalogModel->getProdsByCat([$catId]);

        return view('catalog')
                        ->with('topCategories', $topCats)
                        ->with('selectedTopCat', $selTopCat)
                        ->with('subCategories', $subCats)
                        ->with('products', $prods);
    }
     * 
     */

}
