<?php

namespace App\Http\Controllers;

use App\Models\Resources\Annuncio;
use App\Models\Resources\ServizioIncluso;
use App\Models\Resources\Vincolo;
use App\Http\Requests\NuovoAnnuncioRequest;

class LocatoreController extends Controller {

   

    public function __construct() {
        $this->middleware('can:isLocatore');
        
    }

    public function index() {
        return view('homepage');
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
        $annuncio->canoneAffitto = $request->get('canoneAffitto');
        $annuncio->zonaLocazione = $request->get('zonaLocazione');
        $annuncio->indirizzo = $request->get('indirizzo');

        $user = auth()->user();
        $annuncio->locatore = $user->username;
        
        $annuncio->disponibilita = false;            
        if($annuncio->finePeriodoDisponibilita > date("Y-m-d") && $annuncio->inizioPeriodoDisponibilita < date("Y-m-d")) {
                $annuncio->disponibilita = true;
            }
        
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
        
        
        
        return redirect()->action('LocatoreController@index');
    }

}
