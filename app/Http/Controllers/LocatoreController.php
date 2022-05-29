<?php

namespace App\Http\Controllers;

use App\Models\Resources\Annuncio;
use App\Models\Resources\ServizioIncluso;
use App\Models\Resources\Vincolo;
use App\Models\Resources\Richiesta;
use App\Models\Resources\Affitto;

use App\Http\Requests\NuovoAnnuncioRequest;

use App\Models\Locatore;


class LocatoreController extends Controller {   

    public function __construct() {
        $this->middleware('can:isLocatore');        
        $this->_locatoreModel = new Locatore();      
    }

    public function index() {
        $user = auth()->user();
        $annunci = $this->_locatoreModel->getAnnunciLocatore($user->username);
        $foto = $this->_locatoreModel->getFotoAnnunci();
        $proposte = $this->_locatoreModel->getProposte($user->username);
        
        return view('accountlocatore')
                    ->with('user', $user)
                    ->with('annunci', $annunci)
                    ->with('foto', $foto)
                    ->with('proposte', $proposte);
    }


    public function addAnnuncio() {
        return view('annunci.insert');
    }

    public function submitAnnuncio(NuovoAnnuncioRequest $request) {

        $annuncio = new Annuncio;
        $request->validated();
        $annuncio->titolo = $request->get('titolo');
        $annuncio->superficie = $request->get('superficie');
        $annuncio->descrizione = $request->get('descrizione');
        $annuncio->tipologia = $request->get('tipologia');
        $annuncio->numCamere = $request->get('numCamere');
        $annuncio->postiLettoTotali = $request->get('postiLettoTotali');        
        $annuncio->postiNellaStanza = $request->get('postiNellaStanza');
        $annuncio->inizioPeriodoDisponibilita = $request->get('inizioPeriodoDisponibilita');
        $annuncio->finePeriodoDisponibilita = $request->get('finePeriodoDisponibilita');
        $annuncio->disponibilita = true;
        $annuncio->canoneAffitto = $request->get('canoneAffitto');
        $annuncio->zonaLocazione = $request->get('zonaLocazione');
        $annuncio->indirizzo = $request->get('indirizzo');

        $user = auth()->user();
        $annuncio->locatore = $user->username;
        
        $annuncio->save();
        
        
        //immagini annuncio
         if($request->hasfile('image'))
         {
             $image = $request->file('image');
             $annuncio->locatore = $image->getClientOriginalName();

            foreach($request->file('image') as $image)
            {
                $name = $image->getClientOriginalName();
                $annuncio->locatore = $image->getClientOriginalName();
                $destinationPath = public_path() . '/images';
                $image->move($destinationPath, $name);
            }
         }
        
        
         // servizi annuncio
        if($request->get('counting-bagno'))
        {
            $bagno = new ServizioIncluso;
            $bagno->servizi = 'bagni';
            $bagno->quantita = (int) $request->get('counting-bagno');
            $bagno->annuncio = (int) $annuncio->id;
            $bagno->save();
        }
        
        if($request->get('counting-cucina'))
        {
            $cucina = new ServizioIncluso;
            $cucina->servizi = 'cucina';
            $cucina->quantita = (int) $request->get('counting-cucina');
            $cucina->annuncio = (int) $annuncio->id;
            $cucina->save();
        }
        
        if($request->get('counting-localericreativo'))
        {
            $localericreativo = new ServizioIncluso;
            $localericreativo->servizi = 'locale ricreativo';
            $localericreativo->quantita = (int) $request->get('counting-localericreativo');
            $localericreativo->annuncio = (int) $annuncio->id;
            $localericreativo->save();
        }
        
        if($request->get('counting-studio'))
        {
            $salastudio = new ServizioIncluso;
            $salastudio->servizi = 'sala studio';
            $salastudio->quantita = (int) $request->get('counting-studio');
            $salastudio->annuncio = (int) $annuncio->id;
            $salastudio->save();
        }
        
        if($request->get('counting-giardino'))
        {
            $giardino = new ServizioIncluso;
            $giardino->servizi = 'giardino';
            $giardino->quantita = (int) $request->get('counting-giardino');
            $giardino->annuncio = (int) $annuncio->id;
            $giardino->save();
        }
        
        if($request->get('counting-garage'))
        {
            $garage = new ServizioIncluso;
            $garage->servizi = 'garage';
            $garage->quantita = (int) $request->get('counting-garage');
            $garage->annuncio = (int) $annuncio->id;
            $garage->save();
        }
        
        if($request->get('counting-parcheggio'))
        {
            $parcheggio = new ServizioIncluso;
            $parcheggio->servizi = 'parcheggio';
            $parcheggio->quantita = (int) $request->get('counting-parcheggio');
            $parcheggio->annuncio = (int) $annuncio->id;
            $parcheggio->save();
        }
        
        if($request->get('counting-lavanderia'))
        {
            $lavanderia = new ServizioIncluso;
            $lavanderia->servizi = 'lavatrice';
            $lavanderia->quantita = (int) $request->get('counting-lavanderia');
            $lavanderia->annuncio = (int) $annuncio->id;
            $lavanderia->save();
        }
        
        if($request->get('counting-lavastoviglie'))
        {
            $lavastoviglie = new ServizioIncluso;
            $lavastoviglie->servizi = 'lavastoviglie';
            $lavastoviglie->quantita = (int) $request->get('counting-lavastoviglie');
            $lavastoviglie->annuncio = (int) $annuncio->id;
            $lavastoviglie->save();
        }
        
        if($request->get('counting-frigo'))
        {
            $frigo = new ServizioIncluso;
            $frigo->servizi = 'frigo';
            $frigo->quantita = (int) $request->get('counting-frigo');
            $frigo->annuncio = (int) $annuncio->id;
            $frigo->save();
        }
        
        if($request->get('counting-forno'))
        {
            $forno = new ServizioIncluso;
            $forno->servizi = 'forno';
            $forno->quantita = (int) $request->get('counting-forno');
            $forno->annuncio = (int) $annuncio->id;
            $forno->save();
        }
        
        if($request->get('counting-aria'))
        {
            $aria = new ServizioIncluso;
            $aria->servizi = 'condizionatore';
            $aria->quantita = (int) $request->get('counting-aria');
            $aria->annuncio = (int) $annuncio->id;
            $aria->save();
        }       
        
         
        //vincoli annuncio
        if($request->get('animali'))
        {
            $animali = new Vincolo;
            $animali->vincolo = 'animali';
            $animali->annuncio = (int) $annuncio->id;
            $animali->save();
        }
        
        if($request->get('fumatori'))
        {
            $fumatori = new Vincolo;
            $fumatori->vincolo = 'fumatori';
            $fumatori->annuncio = (int) $annuncio->id;
            $fumatori->save();
        }
        
        if($request->get('feste'))
        {
            $feste = new Vincolo;
            $feste->vincolo = 'feste';
            $feste->annuncio = (int) $annuncio->id;
            $feste->save();
        }
        
        if($request->get('matricole'))
        {
            $matricole = new Vincolo;
            $matricole->vincolo = 'matricole';
            $matricole->annuncio = (int) $annuncio->id;
            $matricole->save();
        }
        
        if($request->get('sesso'))
        {
            $sesso = new Vincolo;
            $sesso->vincolo = $request->get('sesso');
            $sesso->annuncio = (int) $annuncio->id;
            $sesso->save();
        }
        
        
        
        return redirect()->action('LocatoreController@index');
    }
    
    
    
    public function showUpdateAnnuncio($idAnnuncio) {
        $annuncio = $this->_locatoreModel->getAnnuncio($idAnnuncio);
        $servizi = $this->_locatoreModel->getServiziAnnuncio($idAnnuncio);
        $vincoli = $this->_locatoreModel->getVincoliAnnuncio($idAnnuncio);
        
        return view('parteprivata.modificaannuncio')
                    ->with('annuncio', $annuncio)
                    ->with('servizi', $servizi)
                    ->with('vincoli', $vincoli);
        
    }
    
    public function updateAnnuncio(NuovoAnnuncioRequest $request) {
        
        $request->validated();
        
        $annuncio = $this->_locatoreModel->getAnnuncioById($request->get('idAnnuncio'))->update([
            'titolo' => $request->get('titolo'),
            'tipologia' => $request->get('tipologia'),
            'descrizione' => $request->get('descrizione'),
            'zonaLocazione' => $request->get('zonaLocazione'),
            'indirizzo' => $request->get('indirizzo'),
            'canoneAffitto' => $request->get('canoneAffitto'),
            'inizioPeriodoDisponibilita' => $request->get('inizioPeriodoDisponibilita'),
            'finePeriodoDisponibilita' => $request->get('finePeriodoDisponibilita'),
            'disponibilita' => true,
            'numCamere' => $request->get('numCamere'),
            'postiLettoTotali' => $request->get('postiLettoTotali'),
            'postiNellaStanza' => $request->get('postiNellaStanza'),
            
        ]);

        
        foreach($this->_locatoreModel->getServiziAnnuncio($request->get('idAnnuncio')) as $servizio) {
           $servizio->delete();
        }
       
       
        if($request->get('counting-bagno'))
        {
            $bagno = new ServizioIncluso;
            $bagno->servizi = 'bagni';
            $bagno->quantita = (int) $request->get('counting-bagno');
            $bagno->annuncio = (int) $request->get('idAnnuncio');
            $bagno->save();
        }
        
        if($request->get('counting-cucina'))
        {
            $cucina = new ServizioIncluso;
            $cucina->servizi = 'cucina';
            $cucina->quantita = (int) $request->get('counting-cucina');
            $cucina->annuncio = (int) $request->get('idAnnuncio');
            $cucina->save();
        }
        
        if($request->get('counting-localericreativo'))
        {
            $localericreativo = new ServizioIncluso;
            $localericreativo->servizi = 'locale ricreativo';
            $localericreativo->quantita = (int) $request->get('counting-localericreativo');
            $localericreativo->annuncio = (int) $request->get('idAnnuncio');
            $localericreativo->save();
        }
        
        if($request->get('counting-studio'))
        {
            $salastudio = new ServizioIncluso;
            $salastudio->servizi = 'sala studio';
            $salastudio->quantita = (int) $request->get('counting-studio');
            $salastudio->annuncio = (int) $request->get('idAnnuncio');
            $salastudio->save();
        }
        
        if($request->get('counting-giardino'))
        {
            $giardino = new ServizioIncluso;
            $giardino->servizi = 'giardino';
            $giardino->quantita = (int) $request->get('counting-giardino');
            $giardino->annuncio = (int) $request->get('idAnnuncio');
            $giardino->save();
        }
        
        if($request->get('counting-garage'))
        {
            $garage = new ServizioIncluso;
            $garage->servizi = 'garage';
            $garage->quantita = (int) $request->get('counting-garage');
            $garage->annuncio = (int) $request->get('idAnnuncio');
            $garage->save();
        }
        
        if($request->get('counting-parcheggio'))
        {
            $parcheggio = new ServizioIncluso;
            $parcheggio->servizi = 'parcheggio';
            $parcheggio->quantita = (int) $request->get('counting-parcheggio');
            $parcheggio->annuncio = (int) $request->get('idAnnuncio');
            $parcheggio->save();
        }
        
        if($request->get('counting-lavanderia'))
        {
            $lavanderia = new ServizioIncluso;
            $lavanderia->servizi = 'lavatrice';
            $lavanderia->quantita = (int) $request->get('counting-lavanderia');
            $lavanderia->annuncio = (int) $request->get('idAnnuncio');
            $lavanderia->save();
        }
        
        if($request->get('counting-lavastoviglie'))
        {
            $lavastoviglie = new ServizioIncluso;
            $lavastoviglie->servizi = 'lavastoviglie';
            $lavastoviglie->quantita = (int) $request->get('counting-lavastoviglie');
            $lavastoviglie->annuncio = (int) $request->get('idAnnuncio');
            $lavastoviglie->save();
        }
        
        if($request->get('counting-frigo'))
        {
            $frigo = new ServizioIncluso;
            $frigo->servizi = 'frigo';
            $frigo->quantita = (int) $request->get('counting-frigo');
            $frigo->annuncio = (int) $request->get('idAnnuncio');
            $frigo->save();
        }
        
        if($request->get('counting-forno'))
        {
            $forno = new ServizioIncluso;
            $forno->servizi = 'forno';
            $forno->quantita = (int) $request->get('counting-forno');
            $forno->annuncio = (int) $request->get('idAnnuncio');
            $forno->save();
        }
        
        if($request->get('counting-aria'))
        {
            $aria = new ServizioIncluso;
            $aria->servizi = 'condizionatore';
            $aria->quantita = (int) $request->get('counting-aria');
            $aria->annuncio = (int) $request->get('idAnnuncio');
            $aria->save();
        }       
        
        foreach($this->_locatoreModel->getVincoliAnnuncio($request->get('idAnnuncio')) as $vincoli) {
           $vincoli->delete();
        }
         
        //vincoli annuncio
        if($request->get('animali'))
        {
            $animali = new Vincolo;
            $animali->vincolo = 'animali';
            $animali->annuncio = (int) $request->get('idAnnuncio');
            $animali->save();
        }
        
        if($request->get('fumatori'))
        {
            $fumatori = new Vincolo;
            $fumatori->vincolo = 'fumatori';
            $fumatori->annuncio = (int) $request->get('idAnnuncio');
            $fumatori->save();
        }
        
        if($request->get('feste'))
        {
            $feste = new Vincolo;
            $feste->vincolo = 'feste';
            $feste->annuncio = (int) $request->get('idAnnuncio');
            $feste->save();
        }
        
        
        if($request->get('sesso'))
        {
            $sesso = new Vincolo;
            $sesso->vincolo = $request->get('sesso');
            $sesso->annuncio = (int) $request->get('idAnnuncio');
            $sesso->save();
        }
        
        
        return redirect()->action('LocatoreController@index');
        
        
    }
    
    public function deleteAnnuncio($idAnnuncio) {
        
        $this->_locatoreModel->getAnnuncio($idAnnuncio)->first()->delete();
        
        foreach($this->_locatoreModel->getServiziAnnuncio($idAnnuncio) as $servizio) {
           $servizio->delete();
        }
        
        foreach($this->_locatoreModel->getVincoliAnnuncio($idAnnuncio) as $vincoli) {
           $vincoli->delete();
        }
        
        return redirect()->action('LocatoreController@index');
    }
    
    public function showProposte()
    {
        $user = auth()->user();
        $proposte = $this->_locatoreModel->getProposte($user->username);
                           
        return view('proposte')
                   ->with('user', $user)        
                   ->with('proposte', $proposte);
    }
    
    public function accettaProposta($idProposta)
    {
        $proposta = $this->_locatoreModel->getPropostaById($idProposta)->update([
            'stato' => 'accettato',
                ]);       
        $proposta = $this->_locatoreModel->getDatiAffitto($idProposta);
        
        $affitto = new Affitto;
        $affitto->locatario = $proposta->usernamelocatario;
        $affitto->annuncio = $proposta->idannuncio;
        $affitto->dataStipulaContratto = $proposta->inizioAffitto;
        $affitto->dataFineContratto = $proposta->fineAffitto;
        if($proposta->canoneProposto){
           $affitto->canoneConcordato = $proposta->canoneProposto;   
        }else{
           $affitto->canoneConcordato = $proposta->canoneAnnuncio;
        }
        
        $affitto->save();
                
        $annuncio = $this->_locatoreModel->getAnnuncioById($proposta->idannuncio)->update([            
            'disponibilita' => false,            
        ]);
        
         return redirect()->action('LocatoreController@index');
    }
    
    public function rifiutaProposta($idProposta)
    {
        $proposta = $this->_locatoreModel->getPropostaById($idProposta)->update([
            'stato' => 'rifiutato',
                ]); 
        
         return redirect()->action('LocatoreController@index');
    }

}
