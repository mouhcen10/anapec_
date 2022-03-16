@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row m-0 p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                <img class="mx-3" src="/storage/images/arrow.png" alt="">
                Votre espace personnel
            </div>
            <div class="d-flex flex-row justify-content-start align-items-start mt-4">
                <ul class="list-group w-100">
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Recherche des offres
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="{{ route('offres.index') }}">Consulter la banque d'offres</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Consulter les offres International</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Offres correspandant à votre profil</a></li>
                        </div>
                    </div>
                    <div class="my-1">
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Vos alertes aux offres
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent1">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Créer alertes</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Gérer les alertes</a></li>
                        </div>
                    </div>
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Votre Historique
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent2">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Vos candidatures</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Offres mémorisées</a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white mt-3">
                <img class="mx-3" src="/storage/images/arrow.png" alt="">
                Ateliers
            </div>
            <div class="atelier m-2 p-2">
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Identifier et mettre en valeur ses compétences</a>
                </li>
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Oganiser sa recherche d'emploi et connaître le marché du travail</a>
                </li>
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Rédiger son CV</a>
                </li>
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Rédiger ses lettres de motivation</a>
                </li>
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Se préparer à un entretien d'embauche</a></li>
                <li class="d-flex flex-row justify-content-between align-items-start">
                    <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-caret-right m-2" viewBox="0 0 16 16">
                        <path d="M6 12.796V3.204L11.481 8 6 12.796zm.659.753 5.48-4.796a1 1 0 0 0 0-1.506L6.66 2.451C6.011 1.885 5 2.345 5 3.204v9.592a1 1 0 0 0 1.659.753z"/>
                    </svg>
                    <a class="m-0" href="/candidat">Prospecter les entreprises par téléphone</a>
                </li>
            </div>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
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
                    <a class="btn btn-sm nav-bg shadow-xl text-white" href="">Postuler</a>
                </div>
            </div>
            <!--/Informations-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection