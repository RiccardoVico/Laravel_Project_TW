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
        ['idfaq'=>'0','domanda'=>'In che cosa consiste HomexStudents?','risposta'=>'La domanda dei possibili locatari ha modo di incontrarsi con i le offerte dei vari proprietari.Puoi effettuare ricerche,applicando anche filtri,confrontare le varie proposte e contattare i locatori che avranno modo di interagire con te.Se hai un alloggio a disposizione, visita la tua area e proponila a migliori di studenti!','categoria'=>'Consiste in un motore di ricerca annunci dedicato a tutti gli studenti'],
        ['idfaq'=>'1','domanda'=>'Quali tipologie di alloggio posso trovare su HomexStudents?','risposta'=>'La tipologia della locazione è fornita nelle info aggiuntive della propria scelta,relativamente alla quale è possibile visulizzare anche i servizi a disposizione','categoria'=>'Sono disponibili diverse categorie di alloggio:stanze singole,appartamenti,stanze doppie'],
        ['idfaq'=>'2','domanda'=>'In quali città sono disponibili alloggi?','risposta'=>' In particolare il sito gestisce annunci relati alle città in cui sono presenti Università con cui collaboriamo,sono loro stesse a proporci a promuoverci per affiancare gli studenti nei primi giorni in città','categoria'=>'Il sito attualmente gestisce alloggi presenti in tutta Italia'],
        ['idfaq'=> '3','domanda'=>'Il servizio offerto è gratuito?','risposta'=>'Il servizio è gratuito per tutti gli studenti che intendono affittare un alloggio ed anche per tutti i locatari che intendono proporre i loro locali da affittare','categoria'=>'Il sito è gratuito per tutti gli utenti'],
        ['idfaq'=>'4','domanda'=>'Devo registrarmi per accedere ai servizi?','risposta'=>' La miglior esperienza utente è offerta previa registrazione.Senza registrazione è possibile solamnete scorrere il catalogo','categoria'=>'Sì, altrimenti è possibile visualizzare solo il catalogo'],
        
    ]);
          

    }
}
