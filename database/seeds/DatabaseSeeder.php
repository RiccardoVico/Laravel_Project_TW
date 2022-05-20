<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
          DB::table('faq')->insert([
        ['idfaq'=> '0','domanda'=>'prova1?','risposta'=>'risp1','categoria'=>'generale'],
        ['idfaq'=>'1','domanda'=>'prova2','risposta'=>'risp2','categoria'=>'generale'],
        ['idfaq'=>'2','domanda'=>'prova3','risposta'=>'risp3','categoria'=>'generale'],
        ['idfaq'=> '3','domanda'=>'prova1?','risposta'=>'risp1','categoria'=>'generale'],
        ['idfaq'=>'4','domanda'=>'prova2','risposta'=>'risp2','categoria'=>'generale'],
        ['idfaq'=>'5','domanda'=>'prova3','risposta'=>'risp3','categoria'=>'generale'],
    ]);
DB::table('utente')->insert([
        ['username'=> 'prova0','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova0','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova2','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova3','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova4','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova5','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],
        ['username'=> 'prova6','nome'=>'Milena','cognome'=>'Rossi','recapito'=>'327584454','tipologia'=>'l','password'=>'billy','cittainteresse'=>'chieti','via'=>'viabutti','numerocivico'=>'25','citta'=>'chieti','provincia'=>'ch','cap'=>'66011','paese'=>'italia','mail'=>'martyògmail.com'],

    ]);
    }
}
