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
            ['domanda' => 'Come posso fare una ricerca sul sito?', 'risposta' => 'Attenzione: per poter filtrare i risultati è necessario essere registrati come locatori. Se sei un locatore e sei registrato, per poter fare una ricerca, basta cliccare sulla sezione ricerca. Comparirà una form in cui inserire i criteri di ricerca.
                Ti consigliamo di indicare almeno la città di interesse. Inoltre puoi indicare il tipo di camera che cerchi o se cerchi un intero appartamento.
                Puoi anche indicare molti altri filtri.'],
            ['domanda' => 'Come posso contattare un host?', 'risposta' => 'Puoi contattare l\'host direttamente all\'interno del sito tramite la chat interna, a cui puoi accedere solo dopo aver effettuato il login.
                Altrimenti, sul profilo dell\'host puoi trovare informazioni su come contattarlo.'],
            ['domanda' => 'Posso contattare un locatore senza essere registrato?', 'risposta' => 'Non puoi contattare altri utenti usando la chat interna al sito se non sei registrato.'
                . 'Tuttavia, puoi contattarli esternamente tramite la loro email o il loro numero di telefono, se li hanno forniti in fase di registrazione.'],
            ['domanda' => 'I miei dati sono tutelati?', 'risposta' => 'Teniamo alla privacy dei nostri utenti. Tutto ciò che fornisci in fase di iscrizione sarà usato solo ai fini del corretto funzionamento del sito.'],
            ['domanda' => 'Dopo quanto tempo mi risponde l\'assistenza?', 'risposta' => 'Cerchiamo di essere più veloci possibile nelle risposte. Generalmente, consultiamo quotidianamente le richieste di supporto. Ti ricordiamo che puoi contattarci per email o per telefono.'],
            ['domanda' => 'Dopo quanto tempo viene stipulato il contratto?', 'risposta' => 'Questo fattore non dipende da noi, ma dal singolo locatore, che, a seconda delle sue esigenze, provvede più o meno velocemente a stipulare il contratto.'],
            ['domanda' => 'Come posso filtrare gli annunci?', 'risposta' => 'Per poter filtrare gli annunci e personalizzare la ricerca, è necessario iscriversi al sito. Il catalogo può essere visualizzato anche da non registrati, ma in questo caso non è possibile accedere alle funzionalità di filtro'],
            ['domanda' => 'Posso inserire un annuncio se sono uno stutente?', 'risposta' => 'No: solo un utente con profilo locatore può inserire l\'annuncio di un alloggio. Se sei uno locatario, ma vuoi anche essere locatore, devi necessariamente creare un altro profilo.']
            
            ]);

        
        DB::table('users')->insert([
            
            ['username' => 'lorelore', 'password'=> Hash::make('SgHah8hh'),'role' => 'locatore','fotoProfilo'=>'lore.gif','nome'=>'Lore','cognome'=>'Lore','sesso'=>'M','dataNascita'=>'1950-12-12','citta'=>'Ancona','numTelefono'=>'08712345','email'=>'lorelore@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lariolario','password'=>Hash::make('SgHah8hh'),'role' => 'locatario','fotoProfilo'=>'lario.gif','nome'=>'Lario','cognome'=>'Lario','sesso'=>'F','dataNascita'=>'2000-12-12','citta'=>'Ancona','numTelefono'=>'3218934634','email'=>'lariolario@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Informatica e dell\'Automazione','annoImmatricolazione'=>'2019'],
            ['username' => 'adminadmin', 'password'=> Hash::make('SgHah8hh'),'role' => 'admin','fotoProfilo'=>'admin.gif','nome'=>'Admin','cognome'=>'Admin','sesso'=>'F', 'dataNascita'=>null,'citta'=>null,'numTelefono'=>null,'email'=>'adminadmin@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            
            ['username'=>'enzo_ferrante','password'=>Hash::make('Enzoferrante00'),'role' => 'locatario','fotoProfilo'=>'enzo.gif','nome'=>'Enzo','cognome'=>'Ferrante','sesso'=>'M','dataNascita'=>'2000-12-12','citta'=>'Viterbo','numTelefono'=>'3218934634','email'=>'enzoferrante00@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Informatica e dell\'Automazione','annoImmatricolazione'=>'2019'],
            ['username'=>'flora_rossini','password'=>Hash::make('Florarossini98'),'role' => 'locatario','fotoProfilo'=>'flora.gif','nome'=>'Flora','cognome'=>'Rossini','sesso'=>'F','dataNascita'=>'1998-08-08','citta'=>'Genova','numTelefono'=>'3453435345','email'=>'florarossini@libero.it','universita'=>'Unichi','facolta'=>'Lettere','annoImmatricolazione'=>'2017'],
            ['username'=>'allegra_medici','password'=>Hash::make('Allegramedici01'),'role' => 'locatario','fotoProfilo'=>'allegra.gif','nome'=>'Allegra','cognome'=>'Medici','sesso'=>'F','dataNascita'=>'2001-04-13','citta'=>'Livorno','numTelefono'=>'3404945890','email'=>'allegra01@univpm.it','universita'=>'Univpm','facolta'=>'Ingegneria Meccanica','annoImmatricolazione'=>'2020'],
            ['username'=>'patrizio_bianchi','password'=>Hash::make('Patriziobianchi96'),'role' => 'locatario','fotoProfilo'=>'patrizio.gif','nome'=>'Patrizio','cognome'=>'Bianchi','sesso'=>'M','dataNascita'=>'1996-02-03','citta'=>'Roma','numTelefono'=>'3456782345','email'=>'patriziobianchi@gmail.com','universita'=>'Unibo','facolta'=>'Giurisprudenza','annoImmatricolazione'=>'2019'],
            ['username'=>'arturo_casagrande','password'=>Hash::make('Arturo00'),'role' => 'locatario','fotoProfilo'=>'arturo.gif','nome'=>'Arturo','cognome'=>'Casagrande','sesso'=>'M','dataNascita'=>'2000-08-25','citta'=>'Roma','numTelefono'=>'32109845','email'=>'arturocasagrande@gmail.com','universita'=>'Polito','facolta'=>'Architettura','annoImmatricolazione'=>'2019'],
            ['username'=>'tecla_mondo','password'=>Hash::make('Teclamondo02'),'role' => 'locatario','fotoProfilo'=>'tecla.gif','nome'=>'Tecla','cognome'=>'Mondo','sesso'=>'F','dataNascita'=>'2003-09-20','citta'=>'Parma','numTelefono'=>'3287645322','email'=>'teclamondo@libero.it','universita'=>'Uniba','facolta'=>'Ingegneria Informatica','annoImmatricolazione'=>'2022'],
            ['username'=>'paolo_chioggia','password'=>Hash::make('Paolo01'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Paolo','cognome'=>'Chioggia','sesso'=>'M','dataNascita'=>'2001-12-03','citta'=>'Termoli','numTelefono'=>'345493458','email'=>'paolo@gmail.com','universita'=>'Univpm','facolta'=>'Biologia','annoImmatricolazione'=>'2020'],
            ['username'=>'regina_falangi','password'=>Hash::make('Regina99'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Regina','cognome'=>'Falangi','sesso'=>'F','dataNascita'=>'1999-04-20','citta'=>'Ravenna','numTelefono'=>'3245956','email'=>'regina@gmail.com','universita'=>'Unimc','facolta'=>'Lingue','annoImmatricolazione'=>'2018'],
            ['username'=>'viola_rossi','password'=>Hash::make('ViolaRossi1'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Viola','cognome'=>'Rossi','sesso'=>'F','dataNascita'=>'1997-09-20','citta'=>'Enna','numTelefono'=>'34567545','email'=>'viola@gmail.com','universita'=>'Univpm','facolta'=>'Medicina','annoImmatricolazione'=>'2000'],
            ['username'=>'claudio_gori','password'=>Hash::make('Claudia1994'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Claudia','cognome'=>'Gritti','sesso'=>'F','dataNascita'=>'1994-04-12','citta'=>'Campobasso','numTelefono'=>null,'email'=>'gritticlaudia@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'silvia_sauro','password'=>Hash::make('Silvia99silvia'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Silvia','cognome'=>'Sauro','sesso'=>'F','dataNascita'=>'1999-08-30','citta'=>'Piacenza','numTelefono'=>'31211245','email'=>'silvia@gmail.com','universita'=>'Unimore','facolta'=>'Scienze','annoImmatricolazione'=>'2018'],
            ['username'=>'dennis_sarra','password'=>Hash::make('Dennis00denni'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Dennis','cognome'=>'Sarra','sesso'=>'M','dataNascita'=>'2000-04-28','citta'=>'Treia','numTelefono'=>'3809823943','email'=>'rapa@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],
            ['username'=>'cisse_cecca','password'=>Hash::make('Cisse00cisse'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Cisse','cognome'=>'Cecca','sesso'=>'M','dataNascita'=>'2000-04-07','citta'=>'Tolentino','numTelefono'=>'3675893458','email'=>'cisse@libero.it','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],
            ['username'=>'salvatore_parenti','password'=>Hash::make('Salvatore99'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Salvatore','cognome'=>'Parenti','sesso'=>'M','dataNascita'=>'1999-02-26','citta'=>'Fermo','numTelefono'=>'347204530','email'=>'salvatooore@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Edile','annoImmatricolazione'=>'2019'],
            ['username'=>'giuseppe_re','password'=>Hash::make('Peppino01'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Giuseppe','cognome'=>'Re','sesso'=>'M','dataNascita'=>'2001-07-02','citta'=>'Termoli','numTelefono'=>'3503956804','email'=>'peppino@hotmail.com','universita'=>'Uniluiss','facolta'=>'Scienze Politiche','annoImmatricolazione'=>'2020'],
            ['username'=>'alessandro_zampa','password'=>Hash::make('Alezampa99'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Alessandro','cognome'=>'Zampa','sesso'=>'M','dataNascita'=>'1999-08-26','citta'=>'Toletino','numTelefono'=>'32843056','email'=>'alezampa@gmail.com','universita'=>'Polito','facolta'=>'Ingegneria Chimica','annoImmatricolazione'=>'2022'],
            ['username'=>'nicola_zannini','password'=>Hash::make('Nicola99'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Nicola','cognome'=>'Zannini','sesso'=>'M','dataNascita'=>'1994-11-13','citta'=>'San Marcello','numTelefono'=>'324824924','email'=>'niconico@hotmail.it','universita'=>'Unimol','facolta'=>'Biologia','annoImmatricolazione'=>'2019'],
            ['username'=>'ugo_zannini','password'=>Hash::make('Ugougo11'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Ugo','cognome'=>'Zannini','sesso'=>'M','dataNascita'=>'2002-12-29','citta'=>'Corinaldo','numTelefono'=>'3543582032','email'=>'ugozanna@gmail.com','universita'=>'Poliba','facolta'=>'Veterinaria','annoImmatricolazione'=>'2018'],
            ['username'=>'mia_palazzetti','password'=>Hash::make('Formaggio1'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Ugo','cognome'=>'Palazzetti','sesso'=>'F','dataNascita'=>'2000-12-13','citta'=>'Tolentino','numTelefono'=>'394538234','email'=>'miaformaggio@gmail.com','universita'=>'Unibo','facolta'=>'Scienze dell\'alimentazione','annoImmatricolazione'=>'2018'],
            ['username'=>'giovanni_delfino','password'=>Hash::make('Giovanni99'),'role' => 'locatario','fotoProfilo'=>null,'nome'=>'Giovanni','cognome'=>'Delfino','sesso'=>'M','dataNascita'=>'1999-06-29','citta'=>'Chiaravalle','numTelefono'=>'3285940','email'=>'giovannigio@gmail.com','universita'=>'Univpm','facolta'=>'Ingegneria Elettronica','annoImmatricolazione'=>'2019'],      
            ['username'=>'mario_rossi','password'=>Hash::make('Mariorossi00'),'role' => 'locatore','fotoProfilo'=>'mario.gif','nome'=>'Mario','cognome'=>'Rossi','sesso'=>'M','dataNascita'=>'2000-12-12','citta'=>'Ancona','numTelefono'=>'3218934634','email'=>'mariorossi00@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'simone_parini','password'=>Hash::make('Eimone90'),'role' => 'locatore','fotoProfilo'=>'simone.gif','nome'=>'Simone','cognome'=>'Parini','sesso'=>'M','dataNascita'=>'1990-03-12','citta'=>'Ancona','numTelefono'=>'3218934634','email'=>'simoneparini@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'aurora_nicolini','password'=>Hash::make('Eurora80'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Aurora','cognome'=>'Nicolini','sesso'=>'F','dataNascita'=>'1980-12-10','citta'=>'Milano','numTelefono'=>'346273428','email'=>'aurorabella@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'camilla_piacentini','password'=>Hash::make('Camillacamilla00'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Camilla','cognome'=>'Piacentini','sesso'=>'F','dataNascita'=>'2000-05-19','citta'=>'Milano','numTelefono'=>'3232435','email'=>'camillapiacen@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'ennio_tosi','password'=>Hash::make('Ennioennio00'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Ennio','cognome'=>'Tosi','sesso'=>'M','dataNascita'=>'1950-12-26','citta'=>'Torino','numTelefono'=>'321435245','email'=>'camillacamilla@outlook.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'eleonora_gritti','password'=>Hash::make('Eleonora23'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Eleonora','cognome'=>'Gritti','sesso'=>'F','dataNascita'=>'1980-05-13','citta'=>'Torino','numTelefono'=>'3423645676','email'=>'elegritti@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lara_battaglia','password'=>Hash::make('Larabattaglia00'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Lara','cognome'=>'Battaglia','sesso'=>'F','dataNascita'=>'1954-08-24','citta'=>'Ancona','numTelefono'=>'087560987','email'=>'laraemail@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'vanessa_marrone','password'=>Hash::make('Vanessa12'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Vanessa','cognome'=>'Marrone','sesso'=>'F','dataNascita'=>'1980-07-12','citta'=>'Roma','numTelefono'=>'342835348','email'=>'vanessavani@outlook.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'alice_moretti','password'=>Hash::make('Alice00ali'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Alice','cognome'=>'Moretti','sesso'=>'F','dataNascita'=>'2000-06-28','citta'=>'Chiaravalle','numTelefono'=>'321233413','email'=>'s1093714@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'francesca_palazzetti','password'=>Hash::make('Francesca00fra'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Francesca','cognome'=>'Palazzetti','sesso'=>'F','dataNascita'=>'2000-11-28','citta'=>'Tolentino','numTelefono'=>'321345931','email'=>'s1094008@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'federica_parlapiano','password'=>Hash::make('Federica00fede'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Federica','cognome'=>'Parlapiano','sesso'=>'F','dataNascita'=>'2000-04-26','citta'=>'San Martino in Pensilis','numTelefono'=>'3478017136','email'=>'s1094589@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'arianna_ronci','password'=>Hash::make('Arianna00ari'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Arianna','cognome'=>'Ronci','sesso'=>'F','dataNascita'=>'2000-06-15','citta'=>'Chiaravalle','numTelefono'=>'3784958394','email'=>'s1093926@studenti.univpm.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lorenzo_fiore','password'=>Hash::make('Lollo0110'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Lorenzo','cognome'=>'Fiore','sesso'=>'M','dataNascita'=>'1998-06-23','citta'=>'Senigallia','numTelefono'=>'34452425','email'=>'lollo@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'piero_fenomeno','password'=>Hash::make('Pierino10'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Piero','cognome'=>'Fenomeno','sesso'=>'M','dataNascita'=>'1999-10-13','citta'=>'Termoli','numTelefono'=>'3433458593','email'=>'pierofenomeno@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'vera_potalivo','password'=>Hash::make('Vera1968'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Vera','cognome'=>'Potalivo','sesso'=>'F','dataNascita'=>'1968-10-14','citta'=>'Petacciato','numTelefono'=>'3773145623','email'=>'verapotalivo@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'antonio_burro','password'=>Hash::make('Antonio63'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Antonio','cognome'=>'Burro','sesso'=>'M','dataNascita'=>'1963-01-13','citta'=>'Avellino','numTelefono'=>'341029334','email'=>'antonioant@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'debora_bianchi','password'=>Hash::make('Debby1919'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Debora','cognome'=>'Bianchi','sesso'=>'F','dataNascita'=>'2000-04-20','citta'=>'Livorno','numTelefono'=>'087345245','email'=>'debby@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'lara_renna','password'=>Hash::make('laraLara12'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Lara','cognome'=>'Renna','sesso'=>'F','dataNascita'=>'1978-10-13','citta'=>'Senigallia','numTelefono'=>'09835482','email'=>'lara@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'valerio_monti','password'=>Hash::make('Valerio12'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Valerio','cognome'=>'Monti','sesso'=>'M','dataNascita'=>'1970-12-12','citta'=>'Milano','numTelefono'=>'3456342332','email'=>'valeriomonti@gmail.com','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null],
            ['username'=>'antonella_rapa','password'=>Hash::make('Anton1992'),'role' => 'locatore','fotoProfilo'=>null,'nome'=>'Antonella','cognome'=>'Rapa','sesso'=>'F','dataNascita'=>'1992-10-11','citta'=>'Torino','numTelefono'=>'324453234','email'=>'antorapa@libero.it','universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null]
            
            
            //['username'=>null,'password'=>null,'fotoProfilo'=>null,'nome'=>null,'cognome'=>null,'sesso'=>null,'dataNascita'=>null,'indirizzo'=>null,'numTelefono'=>null,'email'=>null,'universita'=>null,'facolta'=>null,'annoImmatricolazione'=>null]
            
            
            ]);
        
        
        DB::table('annuncio')->insert([
            ['id' => 1, 'titolo'=>'Appartamento ristrutturato da poco', 'tipologia' => 'Appartamento', 'locatore'=> 'lorelore', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Brecce Bianche', 'canoneAffitto' => 500.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-05-01', 'finePeriodoDisponibilita' => '2023-05-31',
                'disponibilita' => false, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            
            ['id' => 2, 'titolo'=>'Appartamento luminoso','tipologia' => 'Appartamento', 'locatore'=> 'lorelore', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Brecce Bianche', 'canoneAffitto' => 520.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2021-09-01', 'finePeriodoDisponibilita' => '2022-09-30',
                'disponibilita' => false, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 3, 'titolo'=>'Posto letto per studenti', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'lorelore', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Via Francesco Sforza', 'canoneAffitto' => 200.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2022-07-10', 'finePeriodoDisponibilita' => '2024-01-28',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 4, 'titolo'=>'Posto letto a Torino', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'lorelore', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Torino',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Corso Torino','canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-01-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 5, 'titolo'=>'Posto letto in stanza condivisa', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'lorelore', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Torino',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Corso Torino','canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-09-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            
            ['id' => 6, 'titolo'=>'Appartamento a Torino, zona strategica', 'tipologia' => 'Appartamento', 'locatore'=> 'lorelore', 'descrizione' => 'Appartamento ',
                'zonaLocazione' => 'Torino', 'indirizzo' => 'Viale Antonio Gramsci','canoneAffitto' => 450.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2023-01-01',
                'disponibilita' => false, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            
            ['id' => 7, 'titolo'=>'Posto letto in un appartamento nuovissimo', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'camilla_piacentini', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Como','canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2021-09-10', 'finePeriodoDisponibilita' => '2022-12-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            
            ['id' => 8, 'titolo'=>'Posto letto in camera doppia a Roma', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'lara_battaglia', 'descrizione' => 'Posto letto in camera singola situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Gaeta', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2025-06-10',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 9, 'titolo'=>'Posto letto in riva al mare', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'vanessa_marrone', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Firenze',
                'zonaLocazione' => 'Firenze', 'indirizzo' => 'Viale Corsica', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2021-09-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 1],
            
            ['id' => 10, 'titolo'=>'Posto letto bellissimo', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Firenze',
                'zonaLocazione' => 'Firenze', 'indirizzo' => 'Via del Romito', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2022-12-31',
                'disponibilita' => false, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 1],
            
            ['id' => 11, 'titolo'=>'Appartamento bello', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona','indirizzo' => 'Via Maestri del Lavoro', 'canoneAffitto' => 600.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-02-10', 'finePeriodoDisponibilita' => '2023-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            
            ['id' => 12, 'titolo'=>'Appartamento in riva al mare', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle', 'canoneAffitto' => 520.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-06-20',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 13, 'titolo'=>'Posto letto stupendo', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle', 'canoneAffitto' => 200.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 14, 'titolo'=>'Posto letto meraviglioso', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Milano','indirizzo' => 'Via Lanzone', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 2],
            
            ['id' => 15, 'titolo'=>'Posto letto economico', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova', 'indirizzo' => 'Via Dante', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 16, 'titolo'=>'Appartamento fantastico', 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via del Santo', 'canoneAffitto' => 700.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            
            ['id' => 17, 'titolo'=>'Posto letto invidiabile', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Ognissanti', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 1],
            
            ['id' => 18, 'titolo'=>'Posto letto simpatico', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Via Ippocrate', 'canoneAffitto' => 700.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 2],
            
            ['id' => 19, 'titolo'=>'Posto letto invidiabile', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino',  'indirizzo' => 'Via delle Mura', 'canoneAffitto' => 800.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 20, 'titolo'=>'Appartamento a basso costo', 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata',  'indirizzo' => 'Via Domenico Costantini', 'canoneAffitto' => 500.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => 3,'postiNellaStanza' => null],
            
            ['id' => 21, 'titolo'=>'Appartamento super fornito', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via delle Tavernelle','canoneAffitto' => 500.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2023-02-10', 'finePeriodoDisponibilita' => '2025-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            
            ['id' => 22, 'titolo'=>'Appartamento romantico ed elegante', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via Eugenio Montale', 'canoneAffitto' => 650.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-01-01', 'finePeriodoDisponibilita' => '2022-12-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 23, 'titolo'=>'Stanza per studenti studiosi', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Corso Italia', 'canoneAffitto' => 300.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 24, 'titolo'=>'Camera spaziosa e luminosa', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Milano', 'indirizzo' => 'Corso Italia','canoneAffitto' => 350.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 25, 'titolo'=>'Camera doppia per studenti di ingegneria', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Ugo Bassi', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-06-30',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            
            ['id' => 26, 'titolo'=>'Abitazione in centro', 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via San Mattia', 'canoneAffitto' => 900.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2023-01-10', 'finePeriodoDisponibilita' => '2023-12-31',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            
            ['id' => 27, 'titolo'=>'Stanza perfetta per studenti', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via San Massimiliano', 'canoneAffitto' => 300.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2023-12-31',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 2],
            
            ['id' => 28, 'titolo'=>'Camera vicino all\'università', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona vicina al centro della città',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via del Soccorso', 'canoneAffitto' => 500.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 2],
            
            ['id' => 29, 'titolo'=>'Camera per studenti e lavoratori', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via del Soccorso', 'canoneAffitto' => 550.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-09-10',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 4,'postiNellaStanza' => 2],
            
            ['id' => 30, 'titolo'=>'Appartamento nel centro storico', 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata', 'indirizzo' => 'Via Luigi Bertelli', 'canoneAffitto' => 600.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-03-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 31, 'titolo'=>'Appartamento di lusso', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Appartamento al secondo piano situato nei pressi del centro storico',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via del Commercio', 'canoneAffitto' => 400.00, 'superficie' => 60, 'inizioPeriodoDisponibilita' => '2022-02-10', 'finePeriodoDisponibilita' => '2023-07-31',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 5,'postiNellaStanza' => null],
            
            ['id' => 32, 'titolo'=>'Appartamento appena ristrutturato', 'tipologia' => 'Appartamento', 'locatore'=> 'arianna_ronci', 'descrizione' => 'Affitto appartamento solo per studenti universitari',
                'zonaLocazione' => 'Ancona', 'indirizzo' => 'Via Monte D\'Ago', 'canoneAffitto' => 620.00, 'superficie' => 75, 'inizioPeriodoDisponibilita' => '2022-09-01', 'finePeriodoDisponibilita' => '2023-06-20',
                'disponibilita' => true, 'numCamere' => 2, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 33, 'titolo'=>'Stanza vicino al Colosseo', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento in centro',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze', 'canoneAffitto' => 350.00, 'superficie' => null, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-02-28',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 1],
            
            ['id' => 34, 'titolo'=>'Camera perfetta per gli studenti', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in un appartamento situato in una zona tranquilla di Catania',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze ', 'canoneAffitto' => 200.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-01-01', 'finePeriodoDisponibilita' => '2024-01-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 1,'postiNellaStanza' => 1],
            
            ['id' => 35, 'titolo'=>'La camera dei tuoi sogni', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Padova',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Trieste', 'canoneAffitto' => 250.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 2,'postiNellaStanza' => 1],
            
            ['id' => 36, 'titolo'=>'Appartamento da sogno', 'tipologia' => 'Appartamento', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Gattamelata', 'canoneAffitto' => 750.00, 'superficie' => 100, 'inizioPeriodoDisponibilita' => '2022-03-10', 'finePeriodoDisponibilita' => '2023-03-10',
                'disponibilita' => true, 'numCamere' => 1, 'postiLettoTotali' => 2,'postiNellaStanza' => null],
            
            ['id' => 37, 'titolo'=>'Posto letto vicino al supermercato', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Posto letto in camera doppia situato in una zona tranquilla di Vanezia',
                'zonaLocazione' => 'Padova',  'indirizzo' => 'Via Nazareth', 'canoneAffitto' => 350.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-06-10', 'finePeriodoDisponibilita' => '2023-06-10',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 4,'postiNellaStanza' => 2],
            
            ['id' => 38, 'titolo'=>'Posto letto con vista bellissima', 'tipologia' => 'PostoLettoSingolo', 'locatore'=> 'francesca_palazzetti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Roma',
                'zonaLocazione' => 'Roma', 'indirizzo' => 'Viale delle Scienze', 'canoneAffitto' => 400.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2024-03-01',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 3,'postiNellaStanza' => 1],
            
            ['id' => 39, 'titolo'=>'Posto letto in riva al mare', 'tipologia' => 'PostoLettoDoppia', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Pesaro Urbino',
                'zonaLocazione' => 'Urbino', 'indirizzo' => 'Via Giacomo Matteotti', 'canoneAffitto' => 450.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2023-09-10', 'finePeriodoDisponibilita' => '2025-09-10',
                'disponibilita' => true, 'numCamere' => null, 'postiLettoTotali' => 5,'postiNellaStanza' => 2],
            
            ['id' => 40, 'titolo'=>'Appartamento in un borgo', 'tipologia' => 'Appartamento', 'locatore'=> 'alice_moretti', 'descrizione' => 'Appartamento situato in una zona tranquilla di Macerata',
                'zonaLocazione' => 'Macerata',  'indirizzo' => 'Via Giovanni Falcone', 'canoneAffitto' => 450.00, 'superficie' => 40, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-02-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => 4,'postiNellaStanza' => null],
            
            ['id' => 41, 'titolo'=>'Appartamento in riva al mare', 'tipologia' => 'Appartamento', 'locatore'=> 'federica_parlapiano', 'descrizione' => 'Appartamento situato in una zona tranquilla di Ancona. L\'appartamento è stato ristrutturato nel 2019. A dieci minuti a piedi c\'è la facoltà di ingegneria; a tre minuti è situata la fermata del 46. Inoltre, la vista sul porto è mozzafiato. Tutti i ragazzi che hanno precedentemente abitato la casa sono rimasti molto contenti. Il terrazzo è molto accogliente, ci si possono organizzare feste.' ,
                'zonaLocazione' => 'Ancona',  'indirizzo' => 'Via Brecce Bianche 25', 'canoneAffitto' => 250.00, 'superficie' => 80, 'inizioPeriodoDisponibilita' => '2022-09-10', 'finePeriodoDisponibilita' => '2023-02-10',
                'disponibilita' => true, 'numCamere' => 3, 'postiLettoTotali' => 5,'postiNellaStanza' => null]
           
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
            ['immagine' => 'home.jpg', 'annuncio'=> 11],
            ['immagine' => 'lago.jpg', 'annuncio'=> 11],
            ['immagine' => 'mura.jpeg', 'annuncio'=> 11],
            ['immagine' => 'paesaggio.jpeg', 'annuncio'=> 11],
            ['immagine' => 'room.jpg', 'annuncio'=> 13],
            ['immagine' => 'room2.jpg', 'annuncio'=> 13],
            ['immagine' => 'room3.jpg', 'annuncio'=> 13],
            ['immagine' => 'room5.jpg', 'annuncio'=> 13],
            ['immagine' => 'room6.jpg', 'annuncio'=> 13],
            ['immagine' => 'room7.jpg', 'annuncio'=> 14],
            ['immagine' => 'room8.jpg', 'annuncio'=> 14],
            ['immagine' => 'statua.jpeg', 'annuncio'=> 14],
            ['immagine' => 'room.jpg', 'annuncio'=> 1],
            ['immagine' => 'room2.jpg', 'annuncio'=> 1],
            ['immagine' => 'room8.png', 'annuncio'=> 1],
            ['immagine' => 'room8.png', 'annuncio'=> 2],
            ['immagine' => 'room7.jpg', 'annuncio'=> 2],
            ['immagine' => 'room2.jpg', 'annuncio'=> 2],
            ['immagine' => 'room4.jpg', 'annuncio'=> 3]
            
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
           
        ]);
        
        
        /* affitto(locatario, annuncio, dataStipulaContratto, dataFineContratto, canoneConcordato)*/
        DB::table('affitti') -> insert ([
            ['locatario' => 'enzo_ferante', 'annuncio'=> '1', 'dataStipulaContratto'=> '2022-05-01','dataFineContratto'=> '2022-08-01', 'canoneConcordato'=> 500.00 ],
            ['locatario' => 'flora_rossini', 'annuncio'=> '2', 'dataStipulaContratto'=> '2022-04-15','dataFineContratto'=> '2022-09-15', 'canoneConcordato'=> 470.00 ],
            ['locatario' => 'allegra_medici', 'annuncio'=> '3', 'dataStipulaContratto'=> '2022-07-10','dataFineContratto'=> '2023-07-10', 'canoneConcordato'=> 200.00 ],
            ['locatario' => 'patrizio_bianchi', 'annuncio'=> '4', 'dataStipulaContratto'=> '2022-06-01','dataFineContratto'=> '2022-12-31', 'canoneConcordato'=> 225.00 ],
            ['locatario' => 'arturo_casagrande', 'annuncio'=> '5', 'dataStipulaContratto'=> '2022-09-01','dataFineContratto'=> '2023-07-01', 'canoneConcordato'=> 250.00 ],
            ['locatario' => 'tecla_mondo', 'annuncio'=> '6', 'dataStipulaContratto'=> '2022-01-20','dataFineContratto'=> '2022-06-20', 'canoneConcordato'=> 400.00 ],
            ['locatario' => 'paolo_chioggia', 'annuncio'=> '7', 'dataStipulaContratto'=> '2022-09-10','dataFineContratto'=> '2023-06-10', 'canoneConcordato'=> 300.00],
            ['locatario' => 'regina_falangi', 'annuncio'=> '8', 'dataStipulaContratto'=> '2022-01-01','dataFineContratto'=> '2022-09-01', 'canoneConcordato'=> 280.00],
            ['locatario' => 'viola_rossi', 'annuncio'=> '9', 'dataStipulaContratto'=> '2022-03-10','dataFineContratto'=> '2022-07-10', 'canoneConcordato'=> 200.00],
            ['locatario' => 'claudio_gori', 'annuncio'=> '10', 'dataStipulaContratto'=> '2022-09-20','dataFineContratto'=> '2023-06-20', 'canoneConcordato'=> 300.00],
        ]);

        /* messaggio(destinatario, mittente, testo, dataOraInvio)*/
        DB::table('messaggi')->insert([
            ['destinatario' => 'mario_rossi', 'mittente' => 'enzo_ferrante', 'testo' =>
            'Buongiorno, ho visto il tuo annuncio, volevo chiderti alcune informazioni.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'enzo_ferrante', 'mittente' => 'mario_rossi', 'testo' =>
            'Certo Enzo chiedimi pure.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'mario_rossi', 'mittente' => 'enzo_ferrante', 'testo' =>
            'Volevo sapere quanto fosse distante il posto letto che ha pubblicato dalla biblioteca, poichè lavoro lì tutti i giorni quindi ho bisogno di trovare una sistwmazione nelle vicinanze.',
            'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'simone_parini', 'mittente' => 'flora_rossini', 'testo' =>
            'Salve, è ancora disponibile il suo appartamento?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'flora_rossini', 'mittente' => 'simone_parini', 'testo' =>
            'Si è ancora disponibile, tuttavia altri studenti mi hanno già contattato per cui non so dirle con certezza se potrò affittarlo a lei.',
            'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'aurora_nicolini', 'mittente' => 'allegra_medici', 'testo' =>
            'Salve, sono ammessi gatti nell\'annuncio?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'allegra_medici', 'mittente' => 'aurora_nicolini', 'testo' =>
            'Si certamente.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'ennio_tosi', 'mittente' => 'partizio_bianchi', 'testo' =>
            'Buonasera, sarei interessato al suo ultimo annuncio, potrei venire a vedere l\'appartamento in settimana?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'partizio_bianchi', 'mittente' => 'ennio_tosi', 'testo' =>
            'Si Patrizio, io sono disponibile a mostrarle l\'apparamento giovedì pomeriggio o venerdì mattina, mi dica lei quando prefrisce',
            'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'ennio_tosi', 'mittente' => 'partizio_bianchi', 'testo' =>
            'Venerdì mattina è perfetto, a che ora?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'partizio_bianchi', 'mittente' => 'ennio_tosi', 'testo' =>
            '10:30 davanti all\'annuncio', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'camilla_piacentini', 'mittente' => 'arturo_casagrande', 'testo' =>
            'Buongiorno, ho visto il tuo annuncio, volevo chiderle alcune informazioni.',
            'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'arturo_casagrande', 'mittente' => 'camilla_piacentini', 'testo' =>
            'Mi dispiace ma è appena stato affittato.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'eleonora_gritti', 'mittente' => 'claudio_gori', 'testo' =>
            'Ciao, posso venire a visitare il suo annuncio.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'claudio_gori', 'mittente' => 'eleonora_gritti', 'testo' =>
            'Salve, certamente, che giorno vorrebbe venire?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'eleonora_gritti', 'mittente' => 'claudio_gori', 'testo' =>
            'Se per lei va bene anche domani pomeriggio.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'claudio_gori', 'mittente' => 'eleonora_gritti', 'testo' =>
            'Okay', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'lara_battaglia', 'mittente' => 'silvia_sauro', 'testo' =>
            'Salve, sono ammessi cani nell\'allogio?', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'silvia_sauro', 'mittente' => 'lara_battaglia', 'testo' =>
            'No.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'lara_battaglia', 'mittente' => 'silvia_sauro', 'testo' =>
            'Okay grazie lo stesso.', 'dataOraInvio' => date("Y-m-d H:i:s")],
            ['destinatario' => 'vanessa_marrone', 'mittente' => 'enzo_ferrante', 'testo' =>
            'Buongiorno, ho visto il tuo annuncio, volevo chiderti alcune informazioni.', 'dataOraInvio' => date("Y-m-d H:i:s")],
        ]);

        /* richiesta(locatore, locatario, annuncio, canoneProposto*, messaggio*, stato, inizioAffitto, fineAffitto) */
        DB::table('richieste')->insert([
            ['locatore' => 'mario_rossi', 'locatario' => 'enzo_ferrante', 'annuncio' => 1, 'canoneProposto' => 500.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-05-01' , 'fineAffitto' => '2022-08-01'],
            ['locatore' => 'simone_parini', 'locatario' => 'flora_rossini', 'annuncio' => 2, 'canoneProposto' => 470.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-04-15' , 'fineAffitto' => '2022-09-15'],
            ['locatore' => 'aurora_nicolini', 'locatario' => 'allegra_medici', 'annuncio' => 3, 'canoneProposto' => 200.00,'messaggio' => 'E\' disponibile ad affittare il posto letto',
            'stato' => 'accettato', 'inizioAffitto' => '2022-07-10' , 'fineAffitto' => '2023-07-10'],
            ['locatore' => 'ennio_tosi', 'locatario' => 'partizio_bianchi', 'annuncio' => 4, 'canoneProposto' => 225.00,'messaggio' => 'Vorrei affitare il posto letto.',
            'stato' => 'accettato', 'inizioAffitto' => '2022-06-01' , 'fineAffitto' => '2022-12-31'],
            ['locatore' => 'ennio_tosi', 'locatario' => 'arturo_casagrande', 'annuncio' => 5, 'canoneProposto' => 250.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-09-01' , 'fineAffitto' => '2023-07-01'],
            ['locatore' => 'eleonora_gritti', 'locatario' => 'tecla_mondo', 'annuncio' => 6, 'canoneProposto' => 400.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-01-20' , 'fineAffitto' => '2022-06-20'],
            ['locatore' => 'camilla_piacentini', 'locatario' => 'paolo_chioggia', 'annuncio' => 7, 'canoneProposto' => 300.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-09-10' , 'fineAffitto' => '2023-06-10'],
            ['locatore' => 'lara_battaglia', 'locatario' => 'regina_falangi', 'annuncio' => 8, 'canoneProposto' => 280.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-01-01' , 'fineAffitto' => '2022-09-01'],
            ['locatore' => 'vanessa_marrone', 'locatario' => 'viaola_rossi', 'annuncio' => 9, 'canoneProposto' => 200.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022-03-10' , 'fineAffitto' => '2022-07-10'],
            ['locatore' => 'arianna_ronci', 'locatario' => 'claudio_gori', 'annuncio' => 10, 'canoneProposto' => 300.00,'messaggio' => '',
            'stato' => 'accettato', 'inizioAffitto' => '2022/09/20' , 'fineAffitto' => '2023/06/20'],
            ['locatore' => 'arianna_ronci', 'locatario' => 'nicola_zannini', 'annuncio' => 11, 'canoneProposto' => 500.00,'messaggio' => 'Posso proporre il canone ', 'stato' => 'da valutare', 'inizioAffitto' => '2022-02-10' , 'fineAffitto' => '2022-09-15'],
            ['locatore' => 'arianna_ronci', 'locatario' => 'ugo_zannini', 'annuncio' => 12, 'canoneProposto' => 520.00,'messaggio' => '',
            'stato' => 'rifiutato', 'inizioAffitto' => '2022-10-15' , 'fineAffitto' => '2022-12-15'],
            ['locatore' => 'federica_parlapiano', 'locatario' => 'dennis_serra', 'annuncio' => 13, 'canoneProposto' => 200.00,'messaggio' => '',
            'stato' => 'rifiutato', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-02-15'],
            ['locatore' => 'federica_parlapiano', 'locatario' => 'cisse_cecca', 'annuncio' => 14, 'canoneProposto' => 200.00,'messaggio' => 'Posso',
            'stato' => 'rifiutato', 'inizioAffitto' => '2023-10-01' , 'fineAffitto' => '2024-03-15'],
            ['locatore' => 'federica_parlapiano', 'locatario' => 'salvatore_parenti', 'annuncio' => 15, 'canoneProposto' => 250.00,'messaggio' => '',
            'stato' => 'da valutare', 'inizioAffitto' => '2024-01-01' , 'fineAffitto' => '2024-09-10'],
            ['locatore' => 'francesca_palazzetti', 'locatario' => 'ugo_zannini', 'annuncio' => 16, 'canoneProposto' => 600.00,'messaggio' => 'Posso',
            'stato' => 'da valutare', 'inizioAffitto' => '2023-09-01' , 'fineAffitto' => '2024-03-01'],
            ['locatore' => 'francesca_palazzetti', 'locatario' => 'dennis_serra', 'annuncio' => 17, 'canoneProposto' => 250.00,'messaggio' => '',
            'stato' => 'rifiutato', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-01-15'],
            ['locatore' => 'francesca_palazzetti', 'locatario' => 'cisse_cecca', 'annuncio' => 18, 'canoneProposto' => 700.00,'messaggio' => 'Mi propongo per affittare il suo annuncio.',
            'stato' => 'rifiutato', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-01-15'],
            ['locatore' => 'alice_moretti', 'locatario' => 'mia_palazzetti', 'annuncio' => 19, 'canoneProposto' => 600.00,'messaggio' => 'Non posso pagare un canone mensile più alto di quello indicato.',
            'stato' => 'da valutare', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-02-01'],
            ['locatore' => 'alice_moretti', 'locatario' => 'giovanni_delfino', 'annuncio' => 20, 'canoneProposto' => 500.00,'messaggio' => 'Vorrei affittare il suo appartamento.',
            'stato' => 'da valutare', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-02-15'],
            ['locatore' => 'lorelore', 'locatario' => 'lariolario', 'annuncio' => 1, 'canoneProposto' => 500.00,'messaggio' => 'Vorrei affittare il suo appartamento.',
            'stato' => 'da valutare', 'inizioAffitto' => '2023-09-10' , 'fineAffitto' => '2024-02-15'],
        ]);        
        
        DB::table('chat')->insert([
            ['user1' => 'enzo_ferrante', 'user2' => 'mario_rossi'],
            ['user1' => 'flora_rossini', 'user2' => 'simone_parini'],
            ['user1' => 'allegra_medici', 'user2' => 'aurora_nicolini'],
            ['user1' => 'partizio_bianchi', 'user2' => 'ennio_tosi'],
            ['user1' => 'arturo_casagrande', 'user2' => 'camilla_piacentini'],
            ['user1' => 'claudio_gori', 'user2' => 'eleonora_gritti'],
            ['user1' => 'silvia_sauro', 'user2' => 'lara_battaglia'],
            ['user1' => 'enzo_ferrante', 'user2' => 'vanessa_marrone'],
            ['user1' => 'lariolario', 'user2' => 'lorelore'],
            ['user1' => 'enzo_ferrante', 'user2' => 'lorelore'],
            ['user1' => 'flora_rossini', 'user2' => 'lorelore'],
            ['user1' => 'allegra_medici', 'user2' => 'lorelore'],

        ]);
        
    }

}
