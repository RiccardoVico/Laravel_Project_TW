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
                                    {{-- <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-search"></i></span>
                                        </div>
                                        <input type="text" class="form-control" placeholder="Search...">
                                    </div> --}}
                                    <ul class="list-unstyled chat-list mt-2 mb-0">
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Vincent Porter</div>
                                                {{-- <div class="status"> <i class="fa fa-circle offline"></i> left 7 mins ago </div>                                             --}}
                                            </div>
                                        </li>
                                        <li class="clearfix active">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Aiden Chavez</div>
                                                {{-- <div class="status"> <i class="fa fa-circle online"></i> online </div> --}}
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Mike Thomas</div>
                                                {{-- <div class="status"> <i class="fa fa-circle online"></i> online </div> --}}
                                            </div>
                                        </li>                                    
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Christian Kelly</div>
                                                {{-- <div class="status"> <i class="fa fa-circle offline"></i> left 10 hours ago </div> --}}
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Monica Ward</div>
                                                {{-- <div class="status"> <i class="fa fa-circle online"></i> online </div> --}}
                                            </div>
                                        </li>
                                        <li class="clearfix">
                                            <img src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="avatar">
                                            <div class="about">
                                                <div class="name">Dean Henry</div>
                                                {{-- <div class="status"> <i class="fa fa-circle offline"></i> offline since Oct 28 </div> --}}
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="chat">
                                    <div class="chat-header clearfix">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="avatar">
                                                </a>
                                                <div class="chat-about">
                                                    <h6 class="m-b-0">Aiden Chavez</h6>
                                                    {{-- <small>Last seen: 2 hours ago</small> --}}
                                                </div>
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
                                        <ul class="m-b-0">
                                            <li class="clearfix">
                                                <div class="message-data text-right">
                                                    <span class="message-data-time">10:10 AM, Today</span>
                                                    {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar"> --}}
                                                </div>
                                                <div class="message other-message float-right"> Hi Aiden, how are you? How is the project coming along? </div>
                                            </li>
                                            <li class="clearfix">
                                                <div class="message-data">
                                                    <span class="message-data-time">10:12 AM, Today</span>
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
                                                    {{-- <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="avatar"> --}}
                                                </div>
                                                <div class="message other-message float-right"> Porca Madonna </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="chat-message clearfix">
                                        <div class="input-group mb-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="fa fa-send"></i></span>
                                            </div>
                                            <input type="text" class="form-control" placeholder="Enter text here...">                                    
                                        </div>
                                    </div>
                                </div>
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