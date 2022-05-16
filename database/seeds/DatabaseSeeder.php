<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    
    public function run() {

        DB::table('faq')->insert([
            ['id' => 1, 'domanda' => 'Come posso fare una ricerca sul sito?', 'risposta' => 'Attenzione: per poter filtrare i risultati è necessario essere registrati come locatori. Se sei un locatore e sei registrato, per poter fare una ricerca, basta cliccare sulla sezione ricerca. Comparirà una form in cui inserire i criteri di ricerca.
                Ti consigliamo di indicare almeno la città di interesse. Inoltre puoi indicare il tipo di camera che cerchi o se cerchi un intero appartamento.
                Puoi anche indicare molti altri filtri.'],
            ['id' => 2, 'domanda' => 'Come posso contattare un host?', 'risposta' => 'Puoi contattare l\'host direttamente all\'interno del sito tramite la chat interna, a cui puoi accedere solo dopo aver effettuato il login.
                Altrimenti, sul profilo dell\'host puoi trovare informazioni su come contattarlo.'],
            ['id' => 3, 'domanda' => 'Posso contattare un locatore senza essere registrato?', 'risposta' => 'Non puoi contattare altri utenti usando la chat interna al sito se non sei registrato.'
                . 'Tuttavia, puoi contattarli esternamente tramite la loro email o il loro numero di telefono, se li hanno forniti in fase di registrazione.'],
            ['id' => 4, 'domanda' => 'I miei dati sono tutelati?', 'risposta' => 'Teniamo alla privacy dei nostri utenti. Tutto ciò che fornisci in fase di iscrizione sarà usato solo ai fini del corretto funzionamento del sito.'],
            ['id' => 5, 'domanda' => 'Dopo quanto tempo mi risponde l\'assistenza?', 'risposta' => 'Cerchiamo di essere più veloci possibile nelle risposte. Generalmente, consultiamo quotidianamente le richieste di supporto. Ti ricordiamo che puoi contattarci per email o per telefono.'],
            ['id' => 6, 'domanda' => 'Dopo quanto tempo viene stipulato il contratto?', 'risposta' => 'Questo fattore non dipende da noi, ma dal singolo locatore, che, a seconda delle sue esigenze, provvede più o meno velocemente a stipulare il contratto.'],
            ['id' => 7, 'domanda' => 'Come posso filtrare gli annunci?', 'risposta' => 'Per poter filtrare gli annunci e personalizzare la ricerca, è necessario iscriversi al sito. Il catalogo può essere visualizzato anche da non registrati, ma in questo caso non è possibile accedere alle funzionalità di filtro'],
            ['id' => 8, 'domanda' => 'Posso inserire un annuncio se sono uno stutente?', 'risposta' => 'No: solo un utente con profilo locatore può inserire l\'annuncio di un alloggio. Se sei uno locatario, ma vuoi anche essere locatore, devi necessariamente creare un altro profilo.']
            
            ]);

        
        DB::table('users')->insert([
            ['username'=>'enzo_ferrante','password'=>'Enzoferrante00','categoria' => 'locatario','fotoProfilo'=>'enzo.gif','nome'=>'Enzo','cognome'=>'Ferrante','sesso'=>'M','dataNascita'=>'2000-12-12','citta'=>'Viterbo','numTelefono'=>'3218934634','email'=>'enzoferrante00@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Informatica e dell\'Automazione','annoImmatricolazione'=>'2019'],
            ['username'=>'flora_rossini','password'=>'Florarossini98','categoria' => 'locatario','fotoProfilo'=>'flora.gif','nome'=>'Flora','cognome'=>'Rossini','sesso'=>'F','dataNascita'=>'1998-08-08','citta'=>'Genova','numTelefono'=>'3453435345','email'=>'florarossini@libero.it','universita'=>'Unichi','facolta'=>'Lettere','annoImmatricolazione'=>'2017'],
            ['username'=>'allegra_medici','password'=>'Allegramedici01','categoria' => 'locatario','fotoProfilo'=>'allegra.gif','nome'=>'Allegra','cognome'=>'Medici','sesso'=>'F','dataNascita'=>'2001-04-13','citta'=>'Livorno','numTelefono'=>'3404945890','email'=>'allegra01@univpm.it','universita'=>'Univpm','facolta'=>'Ingegneria Meccanica','annoImmatricolazione'=>'2020'],
            ['username'=>'patrizio_bianchi','password'=>'Patriziobianchi96','categoria' => 'locatario','fotoProfilo'=>'patrizio.gif','nome'=>'Patrizio','cognome'=>'Bianchi','sesso'=>'M','dataNascita'=>'1996-02-03','citta'=>'Roma','numTelefono'=>'3456782345','email'=>'patriziobianchi@gmail.com','universita'=>'Unibo','facolta'=>'Giurisprudenza','annoImmatricolazione'=>'2019'],
            ['username'=>'arturo_casagrande','password'=>'Arturo00','categoria' => 'locatario','fotoProfilo'=>'arturo.gif','nome'=>'Arturo','cognome'=>'Casagrande','sesso'=>'M','dataNascita'=>'2000-08-25','citta'=>'Roma','numTelefono'=>'32109845','email'=>'arturocasagrande@gmail.com','universita'=>'Polito','facolta'=>'Architettura','annoImmatricolazione'=>'2019'],
            ['username'=>'tecla_mondo','password'=>'Teclamondo02','categoria' => 'locatario','fotoProfilo'=>'tecla.gif','nome'=>'Tecla','cognome'=>'Mondo','sesso'=>'F','dataNascita'=>'2003-09-20','citta'=>'Parma','numTelefono'=>'3287645322','email'=>'teclamondo@libero.it','universita'=>'Uniba','facolta'=>'Ingegneria Informatica','annoImmatricolazione'=>'2022'],
            ['username'=>'paolo_chioggia','password'=>'Paolo01','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Paolo','cognome'=>'Chioggia','sesso'=>'M','dataNascita'=>'2001-12-03','citta'=>'Termoli','numTelefono'=>'345493458','email'=>'paolo@gmail.com','universita'=>'Univpm','facolta'=>'Biologia','annoImmatricolazione'=>'2020'],
            ['username'=>'regina_falangi','password'=>'Regina99','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Regina','cognome'=>'Falangi','sesso'=>'F','dataNascita'=>'1999-04-20','citta'=>'Ravenna','numTelefono'=>'3245956','email'=>'regina@gmail.com','universita'=>'Unimc','facolta'=>'Lingue','annoImmatricolazione'=>'2018'],
            ['username'=>'viola_rossi','password'=>'ViolaRossi1','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Viola','cognome'=>'Rossi','sesso'=>'F','dataNascita'=>'1997-09-20','citta'=>'Enna','numTelefono'=>'34567545','email'=>'viola@gmail.com','universita'=>'Univpm','facolta'=>'Medicina','annoImmatricolazione'=>'2000'],
            ['username'=>'claudio_gori','password'=>'Claudia1994','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Claudia','cognome'=>'Gritti','sesso'=>'F','dataNascita'=>'1994-04-12','citta'=>'Campobasso','numTelefono'=>null,'email'=>'gritticlaudia@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'silvia_sauro','password'=>'Silvia99silvia','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Silvia','cognome'=>'Sauro','sesso'=>'F','dataNascita'=>'1999-08-30','citta'=>'Piacenza','numTelefono'=>'31211245','email'=>'silvia@gmail.com','universita'=>'Unimore','facolta'=>'Scienze','annoImmatricolazione'=>'2018'],
            ['username'=>'dennis_sarra','password'=>'Dennis00denni','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Dennis','cognome'=>'Sarra','sesso'=>'M','dataNascita'=>'2000-04-28','citta'=>'Treia','numTelefono'=>'3809823943','email'=>'rapa@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],
            ['username'=>'cisse_cecca','password'=>'Cisse00cisse','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Cisse','cognome'=>'Cecca','sesso'=>'M','dataNascita'=>'2000-04-07','citta'=>'Tolentino','numTelefono'=>'3675893458','email'=>'cisse@libero.it','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],
            ['username'=>'salvatore_parenti','password'=>'Salvatore99','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Salvatore','cognome'=>'Parenti','sesso'=>'M','dataNascita'=>'1999-02-26','citta'=>'Fermo','numTelefono'=>'347204530','email'=>'salvatooore@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Edile','annoImmatricolazione'=>'2019'],
            ['username'=>'giuseppe_re','password'=>'Peppino01','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Giuseppe','cognome'=>'Re','sesso'=>'M','dataNascita'=>'2001-07-02','citta'=>'Termoli','numTelefono'=>'3503956804','email'=>'peppino@hotmail.com','universita'=>'Uniluiss','facolta'=>'Scienze Politiche','annoImmatricolazione'=>'2020'],
            ['username'=>'alessandro_zampa','password'=>'Alezampa99','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Alessandro','cognome'=>'Zampa','sesso'=>'M','dataNascita'=>'1999-08-26','citta'=>'Toletino','numTelefono'=>'32843056','email'=>'alezampa@gmail.com','universita'=>'Polito','facolta'=>'Ingegneria Chimica','annoImmatricolazione'=>'2022'],
            ['username'=>'nicola_zannini','password'=>'Nicola99','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Nicola','cognome'=>'Zannini','sesso'=>'M','dataNascita'=>'1994-11-13','citta'=>'San Marcello','numTelefono'=>'324824924','email'=>'niconico@hotmail.it','universita'=>'Unimol','facolta'=>'Biologia','annoImmatricolazione'=>'2019'],
            ['username'=>'ugo_zannini','password'=>'Ugougo11','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Ugo','cognome'=>'Zannini','sesso'=>'M','dataNascita'=>'2002-12-29','citta'=>'Corinaldo','numTelefono'=>'3543582032','email'=>'ugozanna@gmail.com','universita'=>'Poliba','facolta'=>'Veterinaria','annoImmatricolazione'=>'2018'],
            ['username'=>'mia_palazzetti','password'=>'Formaggio1','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Ugo','cognome'=>'Palazzetti','sesso'=>'F','dataNascita'=>'2000-12-13','citta'=>'Tolentino','numTelefono'=>'394538234','email'=>'miaformaggio@gmail.com','universita'=>'Unibo','facolta'=>'Scienze dell\'alimentazione','annoImmatricolazione'=>'2018'],
            ['username'=>'giovanni_delfino','password'=>'Giovanni99','categoria' => 'locatario','fotoProfilo'=>null,'nome'=>'Giovanni','cognome'=>'Delfino','sesso'=>'M','dataNascita'=>'1999-06-29','citta'=>'Chiaravalle','numTelefono'=>'3285940','email'=>'giovannigio@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],
      
            ['username'=>'mario_rossi','password'=>'Mariorossi00','categoria' => 'locatore','fotoProfilo'=>'mario.gif','nome'=>'Mario','cognome'=>'Rossi','sesso'=>'M','dataNascita'=>'2000-12-12','citta'=>'Ancona','numTelefono'=>'3218934634','email'=>'mariorossi00@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'simone_parini','password'=>'Eimone90','categoria' => 'locatore','fotoProfilo'=>'simone.gif','nome'=>'Simone','cognome'=>'Parini','sesso'=>'M','dataNascita'=>'1990-03-12','citta'=>'Ancona','numTelefono'=>'3218934634','email'=>'simoneparini@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'aurora_nicolini','password'=>'Eurora80','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Aurora','cognome'=>'Nicolini','sesso'=>'F','dataNascita'=>'1980-12-10','citta'=>'Milano','numTelefono'=>'346273428','email'=>'aurorabella@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'camilla_piacentini','password'=>'Camillacamilla00','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Camilla','cognome'=>'Piacentini','sesso'=>'F','dataNascita'=>'2000-05-19','citta'=>'Milano','numTelefono'=>'3232435','email'=>'camillapiacen@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'ennio_tosi','password'=>'Ennioennio00','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Ennio','cognome'=>'Tosi','sesso'=>'M','dataNascita'=>'1950-12-26','citta'=>'Torino','numTelefono'=>'321435245','email'=>'camillacamilla@outlook.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'eleonora_gritti','password'=>'Eleonora23','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Eleonora','cognome'=>'Gritti','sesso'=>'F','dataNascita'=>'1980-05-13','citta'=>'Torino','numTelefono'=>'3423645676','email'=>'elegritti@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lara_battaglia','password'=>'Larabattaglia00','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Lara','cognome'=>'Battaglia','sesso'=>'F','dataNascita'=>'1954-08-24','citta'=>'Ancona','numTelefono'=>'087560987','email'=>'laraemail@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'vanessa_marrone','password'=>'Vanessa12','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Vanessa','cognome'=>'Marrone','sesso'=>'F','dataNascita'=>'1980-07-12','citta'=>'Roma','numTelefono'=>'342835348','email'=>'vanessavani@outlook.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'alice_moretti','password'=>'Alice00ali','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Alice','cognome'=>'Moretti','sesso'=>'F','dataNascita'=>'2000-06-28','citta'=>'Chiaravalle','numTelefono'=>'321233413','email'=>'s1093714@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'francesca_palazzetti','password'=>'Francesca00fra','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Francesca','cognome'=>'Palazzetti','sesso'=>'F','dataNascita'=>'2000-11-28','citta'=>'Tolentino','numTelefono'=>'321345931','email'=>'s1094008@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'federica_parlapiano','password'=>'Federica00fede','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Federica','cognome'=>'Parlapiano','sesso'=>'F','dataNascita'=>'2000-04-26','citta'=>'San Martino in Pensilis','numTelefono'=>'3478017136','email'=>'s1094589@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'arianna_ronci','password'=>'Arianna00ari','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Arianna','cognome'=>'Ronci','sesso'=>'F','dataNascita'=>'2000-06-15','citta'=>'Chiaravalle','numTelefono'=>'3784958394','email'=>'s1093926@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lorenzo_fiore','password'=>'Lollo0110','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Lorenzo','cognome'=>'Fiore','sesso'=>'M','dataNascita'=>'1998-06-23','citta'=>'Senigallia','numTelefono'=>'34452425','email'=>'lollo@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'piero_fenomeno','password'=>'Pierino10','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Piero','cognome'=>'Fenomeno','sesso'=>'M','dataNascita'=>'1999-10-13','citta'=>'Termoli','numTelefono'=>'3433458593','email'=>'pierofenomeno@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'vera_potalivo','password'=>'Vera1968','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Vera','cognome'=>'Potalivo','sesso'=>'F','dataNascita'=>'1968-10-14','citta'=>'Petacciato','numTelefono'=>'3773145623','email'=>'verapotalivo@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'antonio_burro','password'=>'Antonio63','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Antonio','cognome'=>'Burro','sesso'=>'M','dataNascita'=>'1963-01-13','citta'=>'Avellino','numTelefono'=>'341029334','email'=>'antonioant@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'debora_bianchi','password'=>'Debby1919','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Debora','cognome'=>'Bianchi','sesso'=>'F','dataNascita'=>'2000-04-20','citta'=>'Livorno','numTelefono'=>'087345245','email'=>'debby@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lara_renna','password'=>'laraLara12','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Lara','cognome'=>'Renna','sesso'=>'F','dataNascita'=>'1978-10-13','citta'=>'Senigallia','numTelefono'=>'09835482','email'=>'lara@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'valerio_monti','password'=>'Valerio12','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Valerio','cognome'=>'Monti','sesso'=>'M','dataNascita'=>'1970-12-12','citta'=>'Milano','numTelefono'=>'3456342332','email'=>'valeriomonti@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'antonella_rapa','password'=>'Anton1992','categoria' => 'locatore','fotoProfilo'=>null,'nome'=>'Antonella','cognome'=>'Rapa','sesso'=>'F','dataNascita'=>'1992-10-11','citta'=>'Torino','numTelefono'=>'324453234','email'=>'antorapa@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            
            //['username'=>null,'password'=>null,'fotoProfilo'=>null,'nome'=>null,'cognome'=>null,'sesso'=>null,'dataNascita'=>null,'indirizzo'=>null,'numTelefono'=>null,'email'=>null,'universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null]
            ]);
        
        
        DB::table('annuncio')->insert([
            ['id' => 1, 'tipologia' => 'Appartamento', 'locatore'=> 'mario_rossi', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Brecce Bianche', 'canoneAffitto' => 500.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-05-01', 'finePeriodoDisponibilita' => '2023-05-31',
                'disponibilita' => false, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            ['id' => 2, 'tipologia' => 'Appartamento', 'locatore'=> 'simone_parini', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Brecce Bianche', 'canoneAffitto' => 520.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2021-09-01', 'finePeriodoDisponibilita' => '2022-09-30',
                'disponibilita' => false, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            ['id' => 3, 'tipologia' => 'Posto letto', 'locatore'=> 'aurora_nicolini', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Via Francesco Sforza', 'canoneAffitto' => 200.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2022-07-10', 'finePeriodoDisponibilita' => '2024-01-28',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 4, 'tipologia' => 'Posto letto', 'locatore'=> 'ennio_tosi', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Torino',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Corso Torino','canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-01-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 5, 'tipologia' => 'Posto letto', 'locatore'=> 'ennio_tosi', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Torino',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Corso Torino','canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-09-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            ['id' => 6, 'tipologia' => 'Appartamento', 'locatore'=> 'eleonora_gritti', 'descrizione' => 'Appartamento ',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Viale Antonio Gramsci','canoneAffitto' => 450.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2023-01-01',
                'disponibilita' => false, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            ['id' => 7, 'tipologia' => 'Posto letto', 'locatore'=> 'camilla_piacentini', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Como','canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2021-09-10', 'finePeriodoDisponibilita' => '2022-12-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 8, 'tipologia' => 'Posto letto', 'locatore'=> 'lara_battaglia', 'descrizione' => 'Posto letto in camera singola situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Gaeta', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2025-06-10',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 9, 'tipologia' => 'Posto letto', 'locatore'=> 'vanessa_marrone', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Firenze',
                'zonaLocazione' => 'Firenze', 'indirizzo' => 'Viale Corsica', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2021-09-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 10, 'tipologia' => 'Posto letto', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Firenze',
                'zonaLocazione' => 'Firenze', 'indirizzo' => 'Via del Romito', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2022-12-31',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 11, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Maestri del Lavoro', 'canoneAffitto' => 600.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-02-10', 'finePeriodoDisponibilita' => '2023-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            ['id' => 12, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle', 'canoneAffitto' => 520.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-06-20',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            ['id' => 13, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle', 'canoneAffitto' => 200.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 14, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Milano','indirizzo' => 'Via Lanzone', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 15, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova', 'indirizzo' => 'Via Dante', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            ['id' => 16, 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via del Santo', 'canoneAffitto' => 700.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            ['id' => 17, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Ognissanti', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 18, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Ippocrate', 'canoneAffitto' => 700.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 19, 'tipologia' => 'Posto letto', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino',  'indirizzo' => 'Via delle Mura', 'canoneAffitto' => 800.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 20, 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata',  'indirizzo' => 'Via Domenico Costantini', 'canoneAffitto' => 500.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 21, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle','canoneAffitto' => 500.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2023-02-10', 'finePeriodoDisponibilita' => '2025-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            ['id' => 22, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via Eugenio Montale', 'canoneAffitto' => 650.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2022-12-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            ['id' => 23, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Corso Italia', 'canoneAffitto' => 300.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 24, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Corso Italia','canoneAffitto' => 350.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 25, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Ugo Bassi', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-06-30',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            ['id' => 26, 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via San Mattia', 'canoneAffitto' => 900.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2023-01-10', 'finePeriodoDisponibilita' => '2023-12-31',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            ['id' => 27, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via San Massimiliano', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2023-12-31',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 28, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona vicina al centro della città',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via del Soccorso', 'canoneAffitto' => 500.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 29, 'tipologia' => 'Posto letto', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via del Soccorso', 'canoneAffitto' => 550.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-09-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 30, 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata', 'indirizzo' => 'Via Luigi Bertelli', 'canoneAffitto' => 600.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-03-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 31, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via del Commercio', 'canoneAffitto' => 400.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-02-10', 'finePeriodoDisponibilita' => '2023-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            ['id' => 32, 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via Monte D\'Ago', 'canoneAffitto' => 620.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-06-20',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            ['id' => 33, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze', 'canoneAffitto' => 350.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 34, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze ', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-01-01', 'finePeriodoDisponibilita' => '2024-01-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 1],
            ['id' => 35, 'tipologia' => 'Posto letto', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Trieste', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            ['id' => 36, 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Gattamelata', 'canoneAffitto' => 750.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2022-03-10', 'finePeriodoDisponibilita' => '2023-03-10',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            ['id' => 37, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Nazareth', 'canoneAffitto' => 350.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-06-10', 'finePeriodoDisponibilita' => '2023-06-10',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => null,'postiNellaStanza' => 2],
            ['id' => 38, 'tipologia' => 'Posto letto', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze', 'canoneAffitto' => 400.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 39, 'tipologia' => 'Posto letto', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via Giacomo Matteotti', 'canoneAffitto' => 450.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2025-09-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 40, 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata',  'indirizzo' => 'Via Giovanni Falcone', 'canoneAffitto' => 450.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-02-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null],
            ['id' => 41, 'tipologia' => 'Appartamento', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Appartamento situato in una zona tranquilla di Ancona. L\'appartamento è stato ristrutturato nel 2019. A dieci minuti a piedi c\'è la facoltà di ingegneria; a tre minuti è situata la fermata del 46. Inoltre, la vista sul porto è mozzafiato. Tutti i ragazzi che hanno precedentemente abitato la casa sono rimasti molto contenti. Il terrazzo è molto accogliente, ci si possono organizzare feste.' ,
                'zonaLocazione' => 'Ancona',  'indirizzo' => 'Via Brecce Bianche 25', 'canoneAffitto' => 250.00, 'superficie' => 80, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-02-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => null,'postiNellaStanza' => null]
           
        ]);
        
        
        DB::table('foto') -> insert ([
            ['immagine' => 'alloggi.jpeg', 'annuncio'=> 1],
            ['immagine' => 'bellissima.jpeg', 'annuncio'=> 1],
            ['immagine' => 'casablu.jpg', 'annuncio'=> 1],
            ['immagine' => 'facciata.jpeg', 'annuncio'=> 2],
            ['immagine' => 'foto.jpeg', 'annuncio'=> 2],
            ['immagine' => 'home.jpg', 'annuncio'=> 2],
            ['immagine' => 'foto.jpeg', 'annuncio'=> 3],
            ['immagine' => 'immagine.jpeg', 'annuncio'=> 3],
            ['immagine' => 'lago.jpg', 'annuncio'=> 4],
            ['immagine' => 'mura.jpeg', 'annuncio'=> 5],
            ['immagine' => 'paesaggio.jpeg', 'annuncio'=> 6],
            ['immagine' => 'palazzo.jpeg', 'annuncio'=> 7],
            ['immagine' => 'parco.jpeg', 'annuncio'=> 7],
            ['immagine' => 'piazza.jpeg', 'annuncio'=> 6],
            ['immagine' => 'portico.jpeg', 'annuncio'=> 7],
            ['immagine' => 'porticona.jpeg', 'annuncio'=> 8],
            ['immagine' => 'statua.jpeg', 'annuncio'=> 9],
            ['immagine' => 'statua.jpeg', 'annuncio'=> 10],
            ['immagine' => 'vista.jpeg', 'annuncio'=> 11]
            
            
        ]);
        
        DB::table('serviziinclusi') -> insert ([
            
            ['servizi'=>'lavatrice','annuncio'=>1, 'quantita'=>2],
            ['servizi'=>'bagni','annuncio'=>1, 'quantita'=>3],
            ['servizi'=>'frigo','annuncio'=>1, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>1, 'quantita'=>2],
            ['servizi'=>'forno','annuncio'=>1, 'quantita'=>1],
            ['servizi'=>'frigo','annuncio'=>2, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>2, 'quantita'=>2],
            ['servizi'=>'forno','annuncio'=>2, 'quantita'=>1],
            ['servizi'=>'forno','annuncio'=>3, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>3, 'quantita'=>1],
            ['servizi'=>'bagni','annuncio'=>3, 'quantita'=>2],
            ['servizi'=>'lavastoviglie','annuncio'=>4, 'quantita'=>1],
            ['servizi'=>'forno','annuncio'=>4, 'quantita'=>1],
            ['servizi'=>'bagni','annuncio'=>4, 'quantita'=>3],
            ['servizi'=>'bagni','annuncio'=>5, 'quantita'=>2],
            ['servizi'=>'lavastoviglie','annuncio'=>5, 'quantita'=>1],
            ['servizi'=>'forno','annuncio'=>6, 'quantita'=>1],
            ['servizi'=>'bagni','annuncio'=>6, 'quantita'=>3],
            ['servizi'=>'bagni','annuncio'=>7, 'quantita'=>2],
            ['servizi'=>'lavastoviglie','annuncio'=>7, 'quantita'=>1],
            ['servizi'=>'forno','annuncio'=>8, 'quantita'=>1],
            ['servizi'=>'bagni','annuncio'=>8, 'quantita'=>3],
            ['servizi'=>'lavatrice','annuncio'=>9, 'quantita'=>2],
            ['servizi'=>'bagni','annuncio'=>10, 'quantita'=>3],
            ['servizi'=>'frigo','annuncio'=>11, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>11, 'quantita'=>2],
            ['servizi'=>'forno','annuncio'=>11, 'quantita'=>1],
            ['servizi'=>'frigo','annuncio'=>12, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>12, 'quantita'=>2],
            ['servizi'=>'forno','annuncio'=>12, 'quantita'=>1],
            ['servizi'=>'forno','annuncio'=>13, 'quantita'=>1],
            ['servizi'=>'lavatrice','annuncio'=>14, 'quantita'=>2],
            ['servizi'=>'bagni','annuncio'=>14, 'quantita'=>3],
            ['servizi'=>'frigo','annuncio'=>15, 'quantita'=>1],
            ['servizi'=>'condizionatore','annuncio'=>15, 'quantita'=>2],
            ['servizi'=>'forno','annuncio'=>15, 'quantita'=>1],
            ['servizi'=>'bagni','annuncio'=>20,'quantita'=>2],
            ['servizi'=>'sala studio','annuncio'=>20,'quantita'=>1],
            ['servizi'=>'cucina','annuncio'=>21,'quantita'=>2]
            
        ]);
        
        DB::table('vincoli')->insert([
            //enum('vincolo', ['animali', 'fumatori', 'matricole', 'feste', 'lavatrice', 'frigo', 'condizionatore', 'forno', 'lavastoviglie']);
           
            ['vincolo'=>'animali','annuncio'=>1],
            ['vincolo'=>'fumatori','annuncio'=>1],
            ['vincolo'=>'matricole','annuncio'=>1],
            ['vincolo'=>'animali','annuncio'=>2],
            ['vincolo'=>'fumatori','annuncio'=>2],
            ['vincolo'=>'animali','annuncio'=>3],
            ['vincolo'=>'fumatori','annuncio'=>4],
            ['vincolo'=>'feste','annuncio'=>5],
            ['vincolo'=>'animali','annuncio'=>5],
            ['vincolo'=>'feste','annuncio'=>6],
            ['vincolo'=>'feste','annuncio'=>7],
            ['vincolo'=>'animali','annuncio'=>7],
            ['vincolo'=>'animali','annuncio'=>8],
            ['vincolo'=>'fumatori','annuncio'=>8],
            ['vincolo'=>'fumatori','annuncio'=>9],
            ['vincolo'=>'fumatori','annuncio'=>10],
            ['vincolo'=>'animali','annuncio'=>11],
            ['vincolo'=>'animali','annuncio'=>12]
           
            //['vincoli'=>'','alloggi'=>]
        ]);
        
    }

}
