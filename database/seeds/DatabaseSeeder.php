<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder {

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
        DB::table('annuncio')->insert([
            ['nomeannuncio' => 'Appartamento zona centro', 'canoneaffitto' => '600', 'cap' => '60080', 'numerocivico' => '1', 'citta' => 'Torino', 'disponibilita' => '1', 'superficie' => '100', 'postiletto' => '3', 'wifi' => '1', 'climatizzatore' => '1', 'angolostudio' => '-1', 'etamin' => '18', 'etamax' => '99', 'tipologia' => '0', 'descrizione' => 'Appartamento in zona centro, ben collegato ai principali servizi e al politecnico. Camere spaziose, un bagno moderno. Affittasi solo a studenti.', 
                'utenze' => "A carico dell'affittuario", 'via' => 'Filippi', 'numerototalicamere' => '2', 'genere' => '-1', 'lavatrice' => '1', 'lavastov' => '0', 'cucina' => '1', 'localericrativo' => '0', 'parcheggio' => '1', 'balcone' => '0', 'tipo_stanza' => '0', 'numeroletticamera' => '1', 'in_at' => '2022-06-02 00:00:00', 'out_at' => '2022-10-13 00:00:00', 'created_at' => '2022-05-29 00:00:00', 'updated_at' => '2022-05-29 00:00:00'],
            ['nomeannuncio' => 'Posto letto Torino', 'canoneaffitto' => '200', 'cap' => '60080', 'numerocivico' => '11', 'citta' => 'Torino', 'disponibilita' => '1', 'superficie' => '80', 'postiletto' => '3', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '0', 'etamin' => '18', 'etamax' => '40', 'tipologia' => '1', 'descrizione' => 'Posto letto per studenti locato in zona università. La camera è comoda e luminosa, contattarmi per ulteriori informazioni.', 
                'utenze' => "A carico dell'affittuario", 'via' => 'Emanuele', 'numerototalicamere' => '2', 'genere' => '1', 'lavatrice' => '-1', 'lavastov' => '-1', 'cucina' => '-1', 'localericrativo' => '-1', 'parcheggio' => '-1', 'balcone' => '-1', 'tipo_stanza' => '0', 'numeroletticamera' => '1', 'in_at' => '2022-06-02 00:00:00', 'out_at' => '2022-07-06 00:00:00', 'created_at' => '2022-05-26 00:00:00', 'updated_at' => '2022-05-26 00:00:00'],
            ['nomeannuncio' => 'Posto letto Roma', 'canoneaffitto' => '220', 'cap' => '59992', 'numerocivico' => '42', 'citta' => 'Roma', 'disponibilita' => '1', 'superficie' => '80', 'postiletto' => '4', 'wifi' => '1', 'angolostudio' => '0', 'climatizzatore' => '1', 'etamin' => '14', 'etamax' => '50', 'tipologia' => '1', 'descrizione' => 'Posto letto per studenti locato in zona San Giovanni. Camera spaziosa e ben arredata, presenti due bagni.', 
                'utenze' => "A carico dell'affittuario", 'via' => 'San Michele', 'numerototalicamere' => '2', 'genere' => '0', 'lavatrice' => '-1', 'lavastov' => '-1', 'cucina' => '-1', 'localericrativo' => '-1', 'parcheggio' => '-1', 'balcone' => '-1', 'tipo_stanza' => '1', 'numeroletticamera' => '2', 'in_at' => '2022-06-02 00:00:00', 'out_at' => '2022-07-06 00:00:00', 'created_at' => '2022-05-25 00:00:00', 'updated_at' => '2022-05-25 00:00:00']
        ]);

        DB::table('users')->insert([
            ['nome' => 'Lario', 'cognome' => 'Lario', 'mail' => 'lario@lario.it', 'username' => 'lariolario', 'recapito' => '12345', 'genere' => 'M', 'via' => 'Uliveti',
                'citta' => 'Roma', 'numerocivico' => '2', 'cap' => '123', 'provincia' => 'RO', 'paese' => 'Italia', 'password' => Hash::make('2fDtf4Wc'), 'eta' => '18 ', 'role' => 'locatario'],
            ['nome' => 'Admin', 'cognome' => 'Admin', 'mail' => 'admin@admin.it', 'username' => 'adminadmin', 'recapito' => '12345', 'genere' => 'M', 'via' => 'Uliveti',
                'citta' => 'Roma', 'numerocivico' => '2', 'cap' => '123', 'provincia' => 'RO', 'paese' => 'Italia', 'password' => Hash::make('2fDtf4Wc'), 'eta' => '18', 'role' => 'admin'],
            ['nome' => 'Lore', 'cognome' => 'Lore', 'mail' => 'lore@lore.it', 'username' => 'lorelore', 'recapito' => '12345', 'genere' => 'M', 'via' => 'Uliveti',
                'citta' => 'Roma', 'numerocivico' => '2', 'cap' => '123', 'provincia' => 'RO', 'paese' => 'Italia', 'password' => Hash::make('2fDtf4Wc'), 'eta' => '18', 'role' => 'locatore'],
            ['nome' => 'Martina', 'cognome' => 'Mamy', 'mail' => 'marty@marty.it', 'username' => 'martymarty', 'recapito' => '12345', 'genere' => 'F', 'via' => 'Uliveti',
                'citta' => 'Roma', 'numerocivico' => '2', 'cap' => '123', 'provincia' => 'RO', 'paese' => 'Italia', 'password' => Hash::make('martymarty'), 'eta' => '18', 'role' => 'locatario'],
            ['nome' => 'Pippo', 'cognome' => 'Pippo', 'mail' => 'pippo@pippo.it', 'username' => 'pippopippo', 'recapito' => '12345', 'genere' => 'M', 'via' => 'Uliveti',
                'citta' => 'Roma', 'numerocivico' => '2', 'cap' => '123', 'provincia' => 'RO', 'paese' => 'Italia', 'password' => Hash::make('pippopippo'), 'eta' => '22', 'role' => 'locatore']
        ]);

        DB::table('faq')->insert([
            ['domanda' => 'In che cosa consiste HomexStudents?', 'risposta' => 'La domanda dei possibili locatari ha modo di incontrarsi con i le offerte dei vari proprietari.Puoi effettuare ricerche,applicando anche filtri,confrontare le varie proposte e contattare i locatori che avranno modo di interagire con te.Se hai un alloggio a disposizione, visita la tua area e proponila a migliori di studenti!', 'categoria' => 'Consiste in un motore di ricerca annunci dedicato a tutti gli studenti'],
            ['domanda' => 'Quali tipologie di alloggio posso trovare su HomexStudents?', 'risposta' => 'La tipologia della locazione è fornita nelle info aggiuntive della propria scelta,relativamente alla quale è possibile visulizzare anche i servizi a disposizione', 'categoria' => 'Sono disponibili diverse categorie di alloggio:stanze singole,appartamenti,stanze doppie'],
            ['domanda' => 'In quali città sono disponibili alloggi?', 'risposta' => ' In particolare il sito gestisce annunci relati alle città in cui sono presenti Università con cui collaboriamo,sono loro stesse a proporci a promuoverci per affiancare gli studenti nei primi giorni in città', 'categoria' => 'Il sito attualmente gestisce alloggi presenti in tutta Italia'],
            ['domanda' => 'Il servizio offerto è gratuito?', 'risposta' => 'Il servizio è gratuito per tutti gli studenti che intendono affittare un alloggio ed anche per tutti i locatari che intendono proporre i loro locali da affittare', 'categoria' => 'Il sito è gratuito per tutti gli utenti'],
            ['domanda' => 'Devo registrarmi per accedere ai servizi?', 'risposta' => ' La miglior esperienza utente è offerta previa registrazione.Senza registrazione è possibile solamnete scorrere il catalogo', 'categoria' => 'Sì, altrimenti è possibile visualizzare solo il catalogo'],
        ]);

        DB::table('operazione')->insert([
            ['data' => Carbon::parse('2000-01-01'), 'descrizione' => 'inserimento', 'idutente' => '3', 'idannuncio' => '1'],
            ['data' => Carbon::parse('2000-01-01'), 'descrizione' => 'inserimento', 'idutente' => '3', 'idannuncio' => '2'],
            ['data' => Carbon::parse('2000-01-01'), 'descrizione' => 'inserimento', 'idutente' => '5', 'idannuncio' => '3']
        ]);

        DB::table('foto')->insert([
            ['descrizione' => '2egqc6AfsdG.jpg', 'idannuncio' => '1'],
            ['descrizione' => 'default', 'idannuncio' => '2'],
            ['descrizione' => '4kAyUTEi4SF.jpg', 'idannuncio' => '3']
        ]);

        DB::table('messaggio')->insert([
            ['idutente1' => '1', 'idutente2' => '3', 'testo' => 'Ciao, sono interessanto a annuncio', 'data' => '2022-06-02 00:00:01'],
            ['idutente1' => '3', 'idutente2' => '1', 'testo' => 'Ciao, bello disponibile annuncio e?', 'data' => '2022-06-02 00:00:02'],
            ['idutente1' => '1', 'idutente2' => '3', 'testo' => 'io volere annuncio', 'data' => '2022-06-02 00:00:03'],
            ['idutente1' => '1', 'idutente2' => '5', 'testo' => 'Ciao Pipooooooo', 'data' => '2022-06-02 00:00:03']
        ]);
    }

}
