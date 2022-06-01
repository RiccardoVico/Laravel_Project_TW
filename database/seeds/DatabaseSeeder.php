<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
       DB::table('annuncio')->insert([
           ['idannuncio' => '1', 'nomeannuncio' => 'Prima casa', 'canoneaffitto' => '200', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis','in_at'=>'2022-06-02 00:00:01','out_at'=>'2022-06-13 00:00:01','created_at'=>'2022-05-29 00:00:01','updated_at'=>'2022-05-29 00:00:01'],
            
           ['idannuncio' => '2', 'nomeannuncio' => 'Seconda casa', 'canoneaffitto' => '100', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis','in_at'=>'2022-06-02 00:00:01','out_at'=>'2022-07-06 00:00:01','created_at'=>'2022-05-26 00:00:01','updated_at'=>'2022-05-26 00:00:01'],
           ['idannuncio' => '3', 'nomeannuncio' => 'Terza casa', 'canoneaffitto' => '500', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis','in_at'=>'2022-02-02 00:00:01','out_at'=>'2022-03-03 00:00:01','created_at'=>'2022-05-13 00:00:01','updated_at'=>'2022-05-13 00:00:01']
        ]);  
       DB::table('users')->insert([
           ['nome' => 'Martina', 'cognome' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'martymarty',
               'password' => Hash::make('martymarty'), 'role' => 'user2'],
           ['nome' => 'Alex', 'Rossi' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'adminadmin',
               'password' => Hash::make('adminadmin'), 'role' => 'admin'],
           ['nome' => 'Alex', 'Rossi' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'alexalex',
               'password' => Hash::make('alexalex'), 'role' => 'user']
        ]);
        
       DB::table('faq')->insert([
           [ 'domanda' => 'In che cosa consiste HomexStudents?', 'risposta' => 'La domanda dei possibili locatari ha modo di incontrarsi con i le offerte dei vari proprietari.Puoi effettuare ricerche,applicando anche filtri,confrontare le varie proposte e contattare i locatori che avranno modo di interagire con te.Se hai un alloggio a disposizione, visita la tua area e proponila a migliori di studenti!', 'categoria' => 'Consiste in un motore di ricerca annunci dedicato a tutti gli studenti'],
           [ 'domanda' => 'Quali tipologie di alloggio posso trovare su HomexStudents?', 'risposta' => 'La tipologia della locazione è fornita nelle info aggiuntive della propria scelta,relativamente alla quale è possibile visulizzare anche i servizi a disposizione', 'categoria' => 'Sono disponibili diverse categorie di alloggio:stanze singole,appartamenti,stanze doppie'],
           [ 'domanda' => 'In quali città sono disponibili alloggi?', 'risposta' => ' In particolare il sito gestisce annunci relati alle città in cui sono presenti Università con cui collaboriamo,sono loro stesse a proporci a promuoverci per affiancare gli studenti nei primi giorni in città', 'categoria' => 'Il sito attualmente gestisce alloggi presenti in tutta Italia'],
            [ 'domanda' => 'Il servizio offerto è gratuito?', 'risposta' => 'Il servizio è gratuito per tutti gli studenti che intendono affittare un alloggio ed anche per tutti i locatari che intendono proporre i loro locali da affittare', 'categoria' => 'Il sito è gratuito per tutti gli utenti'],
           [ 'domanda' => 'Devo registrarmi per accedere ai servizi?', 'risposta' => ' La miglior esperienza utente è offerta previa registrazione.Senza registrazione è possibile solamnete scorrere il catalogo', 'categoria' => 'Sì, altrimenti è possibile visualizzare solo il catalogo'],
        ]);
    
    
}}

