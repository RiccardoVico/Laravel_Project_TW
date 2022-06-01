<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() {
       //DB::table('users')->insert([
       
     //  ['nome' => 'Martina', 'cognome' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'martymarty',
//'password' => Hash::make('martymarty'), 'role' => 'user2'],
    //       ['nome' => 'Alex', 'Rossi' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'adminadmin',
//'password' => Hash::make('adminadmin'), 'role' => 'admin'],
         //  ['nome' => 'Alex', 'Rossi' => 'Mamy', 'mail' => 'mario@rossiii.it', 'username' => 'alexalex',
//'password' => Hash::make('alexalex'), 'role' => 'user'],
//]);
     DB::table('annuncio')->insert([
            [ 'nomeannuncio' => 'Prima casa', 'canoneaffitto' => '200', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis'],
            [ 'nomeannuncio' => 'Seconda casa', 'canoneaffitto' => '100', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis'],
            [ 'nomeannuncio' => 'Terza casa', 'canoneaffitto' => '500', 'cap' => '222', 'numerocivico' => '1', 'citta' => 'Tole', 'disponibilita' => '1', 'datacc' => null, 'superficie' => '222', 'postiletto' => '1', 'wifi' => '1', 'angolostudio' => '1', 'climatizzatore' => '1', 'etamin' => '1', 'etamax' => '99', 'tipologia' => '1', 'descrizione' => 'Casa bellissima zona ok, per info contattatemi.', 'utenze' => 'Nessuna', 'via' => 'Brombeis']
        ]);    
    }   
}
