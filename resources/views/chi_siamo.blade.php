<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="copyright" content="MACode ID, https://macodeid.com/">

        <title>Chi Siamo</title>

        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/maicons.css">
        <link rel="stylesheet" href="css/owl-carousel/owl.carousel.css">
        <link rel="stylesheet" href="css/theme.css">

    </head>
    <body>

        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
            </div>

            <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(images/foto1.jpg);">
                <div class="container h-100">
                  <div class="row justify-content-center align-items-center h-100">
                    <div class="col-lg-8">
                      <nav aria-label="breadcrumb">
                        <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                          <li class="breadcrumb-item"><a href="../public">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">Chi Siamo</li>
                        </ol>
                      </nav>
                      <h1 class="fg-white text-center">Chi Siamo</h1>
                    </div>
                  </div>
                </div>
            </div>
        </header>

        <main>
            <div class="page-section">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-6 py-3">
                    <div class="subhead">Chi Siamo</div>
                    <h2 class="title-section">Un team di studenti nato per aiutare gli studenti</h2>
        
                    <p>Siamo un team nato all'interno dell'università politecnica delle marche che ha deciso 
                      di sviluppare un portale online per semplificare la ricerca degli alloggi da parte degli studenti. 
                      Gli annunci degli affitti presenti nel sito riguardano singole stanze o interi appartamenti che posso essere affittati 
                      agli studenti che possono scegliere tra le varie offerte messe a diposizione dai vari affittuari.</p>
                  </div>
                  <div class="col-lg-6 py-3">
                    <div class="about-img">
                      <img src="images/chi_siamo.png" alt="">
                    </div>
                  </div>
                  <div class="paragrafo" style="margin: 20px">
                    <p>
                      Lavoriamo per facilitare la ricerca di un alloggio in una nuova città, un problema che sta aumentando fra  studenti fuorisede e studenti internazionali.Al contempo, offriamo la possibilità, a coloro che dispongono di alloggi da mettere a disposizione, di gestire la loro offerta in maniera semplice e veloce.
                      SCEGLI E OFFRI L'ALLOGGIO IDEALE: IL NOSTRO SITO RIUNISCE UNA VASTA GAMMA DI ANNUNCI ALLOGGI PER STUDENTI
                      Il nostro prodotto offre la possibilità a coloro che dispongono di offerte di affitti di locazione e a coloro che sono alla ricerca di un alloggio (studenti) di far incontrare le loro esigenze.A tal fine, ricordiamo che, la miglior esperienza utente è offerta previa registrazione. Le pagine iniziali, accessibili anche a coloro non registrati, hanno la finalità di illustrare semplicemente il prodotto, il catalogo,..
                      I locatori, dopo essersi registrati, possono inserire i dati relativi ai locali messi a disposizione, definire le varie specifiche e i vari vincoli, visulizzare gli alloggi che sono stati opzionati, visulizzare i dettagli dei richiedenti.In particolare, per un singolo alloggio, può essere speicifcato se si tratta di uno stanza/appartamento, stanza singola/doppia, la tipologia di utenze disponibili, connessione WI-FI, presenza di climatizzatore, superifice,disponibilità dell'angolo studio,presenza di un locale ricreativo nella casa, prezzo,...
                      I locatari, dopo essersi registrati, possono scorrere il catalogo e opzionare le varie offerte disponibili a cui sono interessati. E'disponibile anche la funzionalità di filtraggio catalogo per questa tipologia di utenti, in base a:
                      fascia prezzo, tipogia di alloggio, periodo di locazione, caratteristiche dell'alloggio
                      Il sito prevede, inoltre, un sistema di messaggistica per gli utenti registarti in modo da permettere la comunicazione fra locatari e locatori: i locatari, infatti, possono comunicare con i proprietari dei vari alloggi disponibili a cui sono interessati e i locatori possono rispondere ai potenziali locatari che hanno opzionato un'offerta. L'opzionamento di un'offerta da parte di uno studente prevede, infatti, l'invio di un messaggio preimpostato al locatore (è possibile anche la modifica).
                      Il nostro obiettivo è quello di affiancare lo studente nella ricerca di un alloggio nella nuova città che lo ospita, per questo siamo in costante contatto con le varie Università italiane per offrire una migliore esperienza agli studenti.
                    </p>
                  </div>
                </div>
              </div> <!-- .container -->
            </div> <!-- .page-section -->
        
            <div class="page-section">
              <div class="container">
                <div class="text-center">
                  <div class="subhead">Chi siamo</div>
                  <h2 class="title-section">Il nostro Team</h2>
                </div>
        
                <div class="owl-carousel team-carousel mt-5">
                  <div class="team-wrap">
                    <div class="team-profile">
                      <img src="images/teams/team_1.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h5>Riccardo Vico</h5>
                      <div class="social-button">
                        <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-mail"></span></a>
                      </div>
                    </div>
                  </div>
                    
                  <div class="team-wrap">
                    <div class="team-profile">
                      <img src="images/teams/team_2.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h5>Marisonia Ferrandino</h5>
        
                      <div class="social-button">
                        <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-mail"></span></a>
                      </div>
                    </div>
                  </div>
        
                  <div class="team-wrap">
                    <div class="team-profile">
                      <img src="images/teams/prova.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h5>Riccardo Malpiedi</h5>
        
                      <div class="social-button">
                        <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-mail"></span></a>
                      </div>
                    </div>
                  </div>
        
                  <div class="team-wrap">
                    <div class="team-profile">
                      <img src="images/teams/team_3.jpg" alt="">
                    </div>
                    <div class="team-content">
                      <h5>Martina Mammarella</h5>
                      
        
                      <div class="social-button">
                        <a href="#"><span class="mai-logo-facebook-messenger"></span></a>
                        <a href="#"><span class="mai-call"></span></a>
                        <a href="#"><span class="mai-mail"></span></a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
             <center>
    <div class="page-section">
              <div class="container">
                <div class="text-center">
                  <div class="subhead">Dove siamo</div>
                  <h2 class="title-section">Vieni a trovarci nella nostra Università</h2>
                </div>
        <iframe width="638" height="525" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.it/maps?f=q&amp;source=s_q&amp;hl=it&amp;geocode=&amp;q=Via+Brecce+Bianche,+12,+Ancona&amp;aq=0&amp;sll=41.442726,12.392578&amp;sspn=23.377375,53.657227&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Brecce+Bianche,+12,+60131+Ancona,+Marche&amp;z=14&amp;ll=43.581248,13.515684&amp;output=embed"></iframe><br /><small><a href="http://maps.google.it/maps?f=q&amp;source=embed&amp;hl=it&amp;geocode=&amp;q=Via+Brecce+Bianche,+12,+Ancona&amp;aq=0&amp;sll=41.442726,12.392578&amp;sspn=23.377375,53.657227&amp;ie=UTF8&amp;hq=&amp;hnear=Via+Brecce+Bianche,+12,+60131+Ancona,+Marche&amp;z=14&amp;ll=43.581248,13.515684" style="color:#0000FF;text-align:left">Ingrandisci</a></small>
    </center>
        </main>

        <footer class="page-footer">
            @include('layouts/footer_public')
        </footer>

        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/owl-carousel/owl.carousel.min.js"></script>
        <script src="js/theme.js"></script>
        
    </body>
</html>