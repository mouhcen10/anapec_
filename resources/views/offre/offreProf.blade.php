@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row m-0 p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
                <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
                Votre espace personnel
            </div>
            <div class="d-flex flex-row justify-content-start align-items-start mt-4">
                <?php 
                    $professional = Auth::user()->professional;
                ?>
                <ul class="list-group w-100">
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Gérer vos comptes
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('professionals.edit', ['professional' =>$professional->id]) }}">Modifier Votre Entreprise</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('professionals.edit', ['professional' =>$professional->id]) }}">Modifier Votre Compte Employeur</a></li>
                        </div>
                    </div>
                    <div class="my-1">
                        <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Vos offres d’emploi
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent1">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('offres.create') }}">Créer une nouvelle offre</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('profOffres', ['professional' => $professional->id]) }}">Gérer vos offres d'emploi</a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="slider-2 mt-5">
                <x-slider></x-slider>
            </div>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
            <?php 
                $professional = Auth::user()->professional;    
            ?>
            <div class="bloc-bienvenue-blue w-100 mb-3 p-1 d-flex flex-row justify-content-between">
                <span class="ml-3"><b>Bienvenue {{ Str::upper($professional->prenom) }} {{ Str::upper($professional->nom) }}  à votre espace personnel</b></span>
                <a class="nav-link text-blue p-0 mr-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    <img class="pb-1" src="/storage/images/logout.png" alt="">
                    {{ __('Déconnexion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            <div class="d-flex flex-row align-items-center my-2">
                <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>/
                <a class="text-dark text-decoration-none f-90 mx-1" href="{{ route('professionals.show', ['professional' =>$professional->id]) }}">Espace personnel</a>/ 
                <a class="text-dark text-decoration-none f-90 mx-1" href="{{ route('profOffres', ['professional' => $professional->id]) }}">Vos Offres</a>/
                <span class="f-90 mx-1 text-secondary">Détails de l'offre</span>
            </div>
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Détails de l'offre</span>
                </div>
                <div class="d-flex flex-column align-items-center mt-5">
                    <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Référence de l’offre:</span><span class="mx-1">{{ $offre->ref }}</span></li>
                    <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Date :</span><span class="mx-2">{{ $offre->date }}</span></li>
                    <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Agence :</span><span class="mx-2">{{ $offre->lieu_travail }}</span></li>
                </div>
                <div class="d-flex flex-column align-items-center mt-3 blue-bg text-white rounded-lg mx-3 p-1">
                    <h5>({{ $offre->nbr_postes }}) {{ $offre->poste }} sur {{ $offre->lieu_travail }}</h5>
                </div>
                <div class="d-flex flex-column align-items-start mt-3 mx-3">
                    <h5 class="text-blue my-3">Description de l'entreprise</h5>
                    <li class="d-flex flex-row align-items-center"><span class="small-puce">Secteur d’activité :</span><span class="mx-1">{{ $offre->professional->secteur }}</span></li>
                    <h5 class="text-blue my-3">Description de Poste</h5>
                    <li class="d-flex flex-row align-items-center"><span class="small-puce">Date de début :</span><span class="mx-1">{{ $offre->date }}</span></li>
                    <li class="d-flex flex-row align-items-center"><span class="small-puce">Type de contrat :</span><span class="mx-1">{{ $offre->contrat }}</span></li>
                    <li class="d-flex flex-row align-items-center"><span class="small-puce">Lieu de travail :</span><span class="mx-1">{{ $offre->lieu_travail }}</span></li>
                    <li class="d-flex flex-column align-items-start"><span class="small-puce">Caractéristiques du poste :</span><span class="mx-1 mt-1 mb-4">{{ $offre->description }}</span></li>
                </div>
            </div>
            <!--/Informations-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection