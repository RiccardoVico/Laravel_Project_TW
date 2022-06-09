<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Messaggistica</title>

        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ asset('css/registration_form.css') }}">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />


    </head>
    <body>
        <div class="back-to-top"></div>

        <header>
            <div id="menu">
                @include('layouts/navpublic')
            </div>
        </header>

        <main>
            <div class="page-section">
                <div class="container">
                    <div class="row clearfix">
                        <div class="col-lg-12">
                            <div class="card chat-app">
                                <div id="plist" class="people-list">
                                    @isset($utenti)
                                    <ul class="list-unstyled chat-list mt-2 mb-0">
                                        @foreach ($utenti as $utente)
                                        <a href="{{ route('messaggistica', [Auth::user()->id, $utente->id]) }}">
                                            <li class="clearfix" >
                                                <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                                <div class="about">
                                                    <div class="name">{{ $utente->nome }} {{ $utente->cognome }}</div>
                                                </div>
                                            </li> </a>
                                        @endforeach
                                    </ul>
                                    @endisset()
                                </div>

                                <div class="chat">
                                    @if(isset($destinatario))
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0">
                                                        {{ $destinatario->nome }} {{ $destinatario->cognome }}
                                                        {{-- @if ($messaggi->first()->idutente1!=Auth::user()->id)
                                                        {{ $utenti->where('id', $messaggi->first()->idutente1)->first()->nome }}
                                                        {{ $utenti->where('id', $messaggi->first()->idutente1)->first()->cognome }}
                                                        @else
                                                        {{ $utenti->where('id', $messaggi->first()->idutente2)->first()->nome }}
                                                        {{ $utenti->where('id', $messaggi->first()->idutente2)->first()->cognome }}
                                                        @endif --}}
                                                    </h6>                                                    
                                                    {{-- <small>Last seen: 2 hours ago</small> --}}
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @isset($messaggi)
                                    <div class="chat-history">
                                        <ul class="m-b-0">
                                            @foreach ($messaggi as $messaggio)
                                            @if ($messaggio->idutente1==Auth::user()->id)
                                            <li class="clearfix">
                                                <div class="message-data text-right">
                                                    <span class="message-data-time">{{ $messaggio->data }}</span>
                                                </div>
                                                <div class="message other-message float-right"> {{ $messaggio->testo }} </div>
                                            </li>
                                            @endif
                                            @if ($messaggio->idutente2==Auth::user()->id)
                                            <li class="clearfix">
                                                <div class="message-data">
                                                    <span class="message-data-time">{{ $messaggio->data }}</span>
                                                </div>
                                                <div class="message my-message">{{ $messaggio->testo }}</div>                            
                                            </li>
                                            @endif                              
                                            @endforeach
                                        </ul>
                                    </div>
                                    @endisset()
                                    {{ Form::open(array('route' => ['messaggistica_store', 'idutente'=>Auth::user()->id, 'idutente2'=>$destinatario->id], 'class' => 'contact-form')) }}
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                                                {{ Form::submit('Send', ['class' => 'form-btn1 btn btn-primary']) }}
                                            </div>
                                            {{ Form::text('testo', '', ['class' => 'input form-control','placeholder' => 'Inserisci testo']) }}                                    
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                    @else
                                    @if(!isset($destinatario) && $utenti->isEmpty())
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                            </div>
                                        </div>
                                    </div>
                                    @can('isLocatore')
                                    <div class="chat-history">
                                        <div class="col-xs-1" align="center">
                                            <h3>Nessun locatario ti ha ancora contattato</h3>
                                            <h5 class="text-secondary">Puoi avviare conversazioni solo con locatari che hanno opzionato i tuoi annunci o che ti hanno già scritto in precedenza</h5>
                                        </div>
                                    </div>
                                    @endcan
                                    @can('isLocatario')
                                    <div class="chat-history">
                                        <div class="col-xs-1" align="center">
                                            <h3>Non hai avviato alcuna conversazione</h3>
                                            <h5 class="text-secondary">Puoi contattare un locatore selezionando un qualsiasi annuncio nel catalogo</h5>
                                        </div>
                                    </div>
                                    @endcan
                                    @else
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                {{-- <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a> --}}
                                                {{-- <div class="chat-about">
                                                    <h6 class="m-b-0">{{ $utente->nome }} {{ $utente->cognome }}</h6>
                                                    {{-- <small>Last seen: 2 hours ago</small> 
                                                </div> --}}
                                        </div>
                                        {{-- <div class="col-lg-6 hidden-sm text-right">
                                        <a href="javascript:void(0);" class="btn btn-outline-secondary"><i class="fa fa-camera"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-primary"><i class="fa fa-image"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-info"><i class="fa fa-cogs"></i></a>
                                    <a href="javascript:void(0);" class="btn btn-outline-warning"><i class="fa fa-question"></i></a>
                                            </div> --}}
                                </div>
                            </div>
                            <div class="chat-history">
                                <div class="place_holder">
                                <span>Seleziona una chat per visualizzarla</span>
                        </div>
                        {{-- <li class="clearfix">
                                                <div class="message-data text-right">
                            <span class="message-data-time">10:10 AM, Today</span>

                       </div>
                            <div class="m                            essage other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                        </li>
                                                        <li class="clearfix">
                                <div class="                                message-data">
                                    <span class="message-dat                                    a-time">10:12 AM, Today</span>
                                                </div>
                                                <div class="message my-message">Are we meeting today?</div>                                    
                                            </li>                               
                                            <li class="clearfix">
                                                <div class="message-data">
                                            <span class="message-data-time">10:15 AM, Today</span>
                                                </div>
                                                <div class="message my-message">Project has been already finished and I have results to show you.</div>
                                            </li>
                                                    <li class="clearfix">
                                                        <div class="message-data">
                                                            <span class="message-data-time">10:18 AM, Today</span>
                                                        </div>
                                                        <div class="message my-message">Dio Cane</div>
                                                    </li>
                                            <li class="clearfix">
                                                <div class="message-data text-right">
                                            <span class="message-data-time">10:20 AM, Today</span>

               </div>
                                                                     <div class="message other-message float-right"> Porc                                        a Madonna </div>
                            </li> --}}
                        </div>
                        {{-- <                                    div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                        <span class="input-group-text"><i class="fa fa-send"></i></span>
                                            </div>
                                                <input type="text" class="form-control" placeholder="Enter text here...">                                    
            </div>
        <                    /div> --}}
        @endif
        @endif
    </                div>
</div>
</div>
</div>
</div>
</div>
</main>

<footer class="page-footer">
    @include('layouts/footer_public')
</footer>
<!-- end #footer -->

{{-- <script src="../js/profilo_locatario.js"></script> --}}
<script src="../js/jquery-3.5.1.min.js"></script>
<script src="../js/bootstrap.bundle.min.js"></script>
<script src="../js/theme.js"></script>

</body>
</html>