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
                <ul class="list-group w-100">
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-blue-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Gérer vos comptes
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Modifier Votre Entreprise</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Modifier Votre Compte Employeur</a></li>
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
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Créer une nouvelle offre</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-blue"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Gérer vos offres d'emploi</a></li>
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
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Vos Informations</span>
                </div>
                <div class="d-flex flex-row justify-content-between mt-5">
                    <div class="px-2">
                        <img style="width: 140px;height: 150px" class="mx-4 border shadow" src="{{ Storage::url($professional->image->path ?? 'images/avatar.jpg') }}" alt="">
                    </div>
                    <div class="bg-grey mx-2 w-100 h-100">
                        <ul class="list-group d-flex flex-column">
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Email :</span>
                                    <span class="f-90 mx-5">{{ $professional->email }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row ">
                                    <span class="text-blue small font-weight-bold">GSM / Tél :</span>
                                    <span class="f-90 mx-5">{{ $professional->gsm }} / {{ $professional->tel }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Adresse :</span>
                                    <span class="f-90 mx-5">{{ $professional->adress }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Ville :</span>
                                    <span class="f-90 mx-5">{{ $professional->ville }}</span>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn m-2 nav-bg border-0 btn-sm shadow-xl text-white" data-toggle="modal" data-target="#staticBackdrop">Modifier infos  E/se</button>
                    <button type="submit" class="btn m-2 btn-warning border btn-sm text-white shadow-lg">Actualiser description E/se</button>
                    <a href="{{ route('professionals.edit', ['professional' => $professional->id]) }}" class="btn m-2 blue-bg border-0 btn-sm shadow">Modifier votre compte</a>
                </div>
            </div>
            <!--/Informations-->
            
            <!--/Statistiques-->
            <div class="rounded-0 borded-blue bg-white shadow-sm mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                        <span class="text-grey">Statistiques</span>
                    </div>
                    <img class="m-2" src="/storage/images/statistique.png" alt="">
                </div>
                <div class="d-flex flex-column mt-3">
                    <ul class="d-flex flex-row justify-content-between mb-0 py-2 px-4 bg-grey">
                        <span class="text-grey small">Offres déposées</span>
                        <span class="f-90 ml-3">0</span>
                        <span class="text-grey small mr-2">Offres en cours</span>
                        <span class="f-90">0</span>
                    </ul>
                    <ul class="d-flex flex-row justify-content-between mt-0 py-2 px-4">
                        <span class="text-grey small">Offres suspendues</span>
                        <span class="f-90">0</span>
                        <span class="text-grey small">Offres conclues</span>
                        <span class="f-90">0</span>
                    </ul>
                </div>
            </div>
            <!--/Statistiques-->
            
            <!--Dernières offres-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2 mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                        <span class="text-grey">Vos dernières offres</span>
                    </div>
                    <img class="mx-2" src="/storage/images/dernier-offre-blue.png" alt="">
                </div>
                <div>
                    <table class="table table-sm my-4">
                        <thead class="blue-bg text-white small">
                            <th>Référence</th>
                            <th>Poste</th>
                            <th>Date</th>
                            <th>Etat</th>
                            <th>Traitement</th>
                            <th>Nbr postes</th>
                            <th>CV</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end my-3">
                        <a class="btn blue-bg border-0 btn-sm shadow-xl text-white" href="#">Voir toutes les offres</a>
                    </div>
                </div>
            </div>
            <!--/Dernières offres-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection