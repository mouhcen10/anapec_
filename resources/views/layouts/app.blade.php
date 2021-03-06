<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- Styles -->
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
    <link href="{{ mix('/css/theme.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--Slider-->
        <div id="carouselExampleControls" class="carousel slide py-2 px-lg-5" data-ride="carousel">
            <div class="carousel-inner" style="height: 100px;">
              <div class="carousel-item active">
                <img style="height: 100px;" src="/storage/images/img4.png" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="height: 100px;" src="/storage/images/img5.jpg" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img style="height: 100px;" src="/storage/images/img6.jpg" class="d-block w-100" alt="...">
              </div>
            </div>
           <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </button>
        </div>
        <!--/Slider-->
        <!--Navbar-->
        @if(Auth::user() && Auth::user()->is_prof == 1)
            <nav class="first-menu shadow-sm blue-bg">
                <div class="">
                    <ul class="d-flex justify-content-center align-items-center nav">
                        <li class="nav-item separator"><a class="nav-link text-white" href="/">Accueil</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('offres.index') }}" id="">Offres d'emploi</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('professionals.show',['professional' =>Auth::user()->professional->id]) }}" 0="0">Espace personnel</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="#" 0="0">Conseils et infos</a></li>
                        <li class="nav-item last"><a class="nav-link text-white" href="#">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="menu navbar navbar-expand-lg navbar-light blue-bg p-0 d-none">
                <a class="nav-link text-white text-right rounded-0 border-0 blue-bg" href="#" data-toggle="collapse" data-target="#prof" aria-controls="prof" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list text-white border rounded" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
              
                <div class="collapse navbar-collapse" id="prof">
                    <li class="list-group-item bg-blue-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="/">Accueil</a></li>
                    <li class="list-group-item bg-blue-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('offres.index') }}" id="">Offres d'emploi</a></li>
                    <li class="list-group-item bg-blue-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('professionals.show',['professional' =>Auth::user()->professional->id]) }}">Espace personnel</a></li>
                    <li class="list-group-item bg-blue-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="">Conseils et infos</a></li>
                    <li class="list-group-item bg-blue-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="">Contact</a></li>
                </div>
            </nav>
        @elseif(Auth::user() && Auth::user()->is_prof == 0)
            <nav class="first-menu shadow-sm nav-bg">
                <div class="">
                    <ul class="d-flex justify-content-center align-items-center nav">
                        <li class="nav-item separator"><a class="nav-link text-white" href="/">Accueil</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('offres.index') }}" id="">Offres d'emploi</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('candidates.show',['candidate' =>Auth::user()->candidate->id]) }}" 0="0">Espace personnel</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="" 0="0">Conseils et infos</a></li>
                        <li class="nav-item last"><a class="nav-link text-white" href="">Contact</a></li>
                    </ul>
                </div>
            </nav>
            
            <nav class="menu navbar navbar-expand-lg navbar-light nav-bg p-0 d-none">
                <a class="nav-link text-white text-right rounded-0 border-0 nav-bg" href="#" data-toggle="collapse" data-target="#candidat1" aria-controls="candidat1" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list text-white border rounded" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
              
                <div class="collapse navbar-collapse" id="candidat1">
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="/">Accueil</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('offres.index') }}" id="">Offres d'emploi</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('candidates.show',['candidate' =>Auth::user()->candidate->id]) }}" 0="0">Espace personnel</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="" 0="0">Conseils et infos</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="">Contact</a></li>
                </div>
            </nav>
        @else
            <nav class="first-menu shadow-sm nav-bg">
                <div class="">
                    <ul class="d-flex justify-content-center align-items-center nav">
                        <li class="nav-item separator"><a class="nav-link text-white" href="/">Accueil</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('offres.index') }}" id="">Offres d'emploi</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="{{ route('login') }}" 0="0">Espace personnel</a></li>
                        <li class="nav-item separator"><a class="nav-link text-white" href="#" 0="0">Conseils et infos</a></li>
                        <li class="nav-item last separator"><a class="nav-link text-white" href="mailto:econtact@anapec.org">Contact</a></li>
                    </ul>
                </div>
            </nav>
            <nav class="menu navbar navbar-expand-lg navbar-light nav-bg p-0 d-none">
                <a class="nav-link text-white text-right rounded-0 border-0 nav-bg" href="#" data-toggle="collapse" data-target="#normal" aria-controls="normal" aria-expanded="false" aria-label="Toggle navigation">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list text-white border rounded" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
                    </svg>
                </a>
              
                <div class="collapse navbar-collapse" id="normal">
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="/">Accueil</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('offres.index') }}">Offres d'emploi</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="{{ route('login') }}">Espace personnel</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="">Conseils et infos</a></li>
                    <li class="list-group-item bg-green-light border-bottom py-2 d-flex flex-row justify-content-start align-items-center"><a class="nav-link text-secondary mx-2  p-0 small" href="">Contact</a></li>
                </div>
            </nav>
        @endif
        <!--/Navbar-->
        @if(session('success'))
            <div class="alert alert-success mx-5 my-1">
                {{ session('success') }}
            </div>
        @elseif(session('danger'))
            <div class="alert alert-danger mx-5 my-1">
                {{ session('danger') }}
            </div>
        @endif
        <main class="py-4">
            @yield('content')
        </main>
        
        <!--/Footer-->
        <div class="footer container d-flex flex-row bg-dark justify-content-around p-0">
            <div class="one col-md-4 border-dashed text-white pt-4">
                <div class="d-flex flex-column justify-content-between align-items-center">
                    <div id="logofoot">
                        <a class="nav-link" href="#">
                            <img class="w-h-78 m-2" src="/storage/images/img2.jpg" alt="">
                        </a>
                    </div>
                    <span class="copy">Copyrights ?? 2022</span>
                    <span class="f-size-16">Suivez-Nous sur</span>
                    <div class="social d-flex flex-row">
                        <a class="nav-link" href="https://www.facebook.com/anapec.org" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                            </svg>
                        </a>
                        <a class="nav-link" href="https://www.twitter.com/anapec" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter text-info" viewBox="0 0 16 16">
                                <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                            </svg>
                        </a>
                        <a class="nav-link" href="https://www.linkedin.com/company/anapec" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-linkedin rounded-circle" viewBox="0 0 16 16">
                                <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"/>
                            </svg>
                        </a>	
                    </div>
                </div>
            </div>
            <div class="two col-md-4 border-dashed text-white pt-4 d-flex flex-column align-items-center">
                <span class="f-size-16 ml-3">Chercheurs d'emploi</span>
                <ul>
                    <li class="f-size-11">Cr??er votre espace</li>
                    <li class="f-size-11"> Acc??der ?? votre espace </li>
                    <li class="f-size-11">Consulter les offres</li>
                    <li class="f-size-11">Offres correspondant ?? votre profil</li>
                    <li class="f-size-11">G??rer alertes</li>
                    <li class="f-size-11">Plan d'action</li>
                    <li class="f-size-11">Vos candidatures en cours</li>
                    <li class="f-size-11">Offres m??moris??es</li>
                </ul>
            </div>
            <div class="three col-md-4 text-white pt-4 d-flex flex-column align-items-center">
                <span class="f-size-16">Professionnels</span>
                <ul>
                    <li class="f-size-11">Cr??er votre espace</li>
                    <li class="f-size-11">Acc??der ?? votre espace</li>
                    <li class="f-size-11">Cr??er nouvelle offre</li>
                    <li class="f-size-11">G??rer vos offres</li>
                    <li class="f-size-11">Consulter la CVTh??que</li>
                    <li class="f-size-11">G??rer alertes</li>
                    <li class="f-size-11">Proposer un Contrat d'Insertion</li>
                    <li class="f-size-11"> Visualiser vos contrats</li>
                </ul>
            </div>
        </div>
        <!--/Footer-->
    </div>
    <!-- Scripts -->
    <script src="{{ mix('/js/app.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    @yield('script')
    <script>
        $( document ).ready(function() {
            $(".alert").fadeTo(2000, 500).slideUp(500, function(){
                $(".alert").slideUp(500);
            });
        });
    </script>
</body>
</html>
