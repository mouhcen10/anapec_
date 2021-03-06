@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="glb col-md-12 d-flex flex-row m-0 p-0">
        <!--Connexion-->
        <div class="frst col-md-3 rounded-top-right bg-white shadow-sm p-0">
            @if(Auth::user() && Auth::user()->is_prof == 0)
                <x-candidate-menu></x-candidate-menu>
                <div class="slider-2">
                    <x-atelier></x-atelier>
                </div>
            @elseif(Auth::user() && Auth::user()->is_prof == 1)
                <x-profess-menu></x-profess-menu>
                <div class="slider-2">
                    <x-slider></x-slider>
                </div>
            @else
                <x-login></x-login>
                <div class="slider-2">
                    <x-atelier></x-atelier>
                </div>
            @endif
        </div>
        <!--/Connexion-->
        <div class="scnd col-md-9 pr-0">
            @if(Auth::user() && Auth::user()->is_prof == 0)
                <?php 
                    $candidate = Auth::user()->candidate;    
                ?>
                <div class="bloc-bienvenue w-100 mb-3 p-1 d-flex flex-row justify-content-between">
                    <span class="ml-3"><b>Bienvenue {{ Str::upper($candidate->prenom) }} {{ Str::upper($candidate->nom) }} à votre espace personnel</b></span>
                    <a class="nav-link text-green p-0 mr-3" href="{{ route('logout') }}"
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
                    <a href="{{ route('candidates.show', ['candidate' =>$candidate->id]) }}" class="f-90 mx-1 text-dark text-decoration-none">Espace personnel</a>/
                    <span class="f-90 mx-1 text-secondary">Détails de l'offre</span>
                </div>
                <!--Informations-->
                <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                    <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                        <img class="mx-2" src="/storage/images/arrow.png" alt="">
                        <span class="text-grey">Détails de l'offre</span>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-5">
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Référence de l’offre:</span><span class="mx-1">{{ $offre->ref }}</span></li>
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Date :</span><span class="mx-2">{{ $offre->date }}</span></li>
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Agence :</span><span class="mx-2">{{ $offre->lieu_travail }}</span></li>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-3 nav-bg text-white rounded-lg mx-3 p-1">
                        <h5>({{ $offre->nbr_postes }}) {{ $offre->poste }} sur {{ $offre->lieu_travail }}</h5>
                    </div>
                    <div class="d-flex flex-column align-items-start mt-3 mx-3">
                        <h5 class="text-green my-3">Description de l'entreprise</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Secteur d’activité :</span><span class="mx-1">{{ $offre->professional->secteur }}</span></li>
                        <h5 class="text-green my-3">Description de Poste</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Date de début :</span><span class="mx-1">{{ $offre->date }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Type de contrat :</span><span class="mx-1">{{ $offre->contrat }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Lieu de travail :</span><span class="mx-1">{{ $offre->lieu_travail }}</span></li>
                        <li class="d-flex flex-column align-items-start"><span class="small-puce">Caractéristiques du poste :</span><span class="mx-1">{{ $offre->description }}</span></li>
                    </div>
                    <div class="d-flex flex-row justify-content-end p-2">
                        <button type="button" class="btn btn-sm nav-bg shadow-xl text-white" data-toggle="modal" data-target="#postuler">Postuler</button>
                    </div>
                </div>
                <!--/Informations-->
                @include('postulation.modal')
            @elseif(Auth::user() && Auth::user()->is_prof == 1)
                <div class="d-flex flex-row align-items-center my-2">
                    <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>/
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
                    <div class="d-flex flex-column align-items-start my-3 mx-3">
                        <h5 class="text-blue my-3">Description de l'entreprise</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Secteur d’activité :</span><span class="mx-1">{{ $offre->professional->secteur }}</span></li>
                        <h5 class="text-blue my-3">Description de Poste</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Date de début :</span><span class="mx-1">{{ $offre->date }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Type de contrat :</span><span class="mx-1">{{ $offre->contrat }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Lieu de travail :</span><span class="mx-1">{{ $offre->lieu_travail }}</span></li>
                        <li class="d-flex flex-column align-items-start"><span class="small-puce">Caractéristiques du poste :</span><span class="mx-1">{{ $offre->description }}</span></li>
                    </div>
                </div>
                <!--/Informations-->
            @else
                <div class="d-flex flex-row align-items-center my-2">
                    <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>/
                    <span class="f-90 mx-1 text-secondary">Détails de l'offre</span>
                </div>
                <!--Informations-->
                <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                    <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                        <img class="mx-2" src="/storage/images/arrow.png" alt="">
                        <span class="text-grey">Détails de l'offre</span>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-5">
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Référence de l’offre:</span><span class="mx-1">{{ $offre->ref }}</span></li>
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Date :</span><span class="mx-2">{{ $offre->date }}</span></li>
                        <li class="d-flex flex-row align-items-center m-0"><span class="small-puce">Agence :</span><span class="mx-2">{{ $offre->lieu_travail }}</span></li>
                    </div>
                    <div class="d-flex flex-column align-items-center mt-3 nav-bg text-white rounded-lg mx-3 p-1">
                        <h5>({{ $offre->nbr_postes }}) {{ $offre->poste }} sur {{ $offre->lieu_travail }}</h5>
                    </div>
                    <div class="d-flex flex-column align-items-start my-3 mx-3">
                        <h5 class="text-green my-3">Description de l'entreprise</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Secteur d’activité :</span><span class="mx-1">{{ $offre->professional->secteur }}</span></li>
                        <h5 class="text-green my-3">Description de Poste</h5>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Date de début :</span><span class="mx-1">{{ $offre->date }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Type de contrat :</span><span class="mx-1">{{ $offre->contrat }}</span></li>
                        <li class="d-flex flex-row align-items-center"><span class="small-puce">Lieu de travail :</span><span class="mx-1">{{ $offre->lieu_travail }}</span></li>
                        <li class="d-flex flex-column align-items-start"><span class="small-puce">Caractéristiques du poste :</span><span class="mx-1">{{ $offre->description }}</span></li>
                    </div>
                    <div class="d-flex flex-row justify-content-end p-2">
                        <button type="button" class="btn btn-sm nav-bg shadow-xl text-white" data-toggle="modal" data-target="#postuler">Postuler</button>
                    </div>
                </div>
                <!--/Informations-->
                @include('postulation.modal')
            @endif
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection