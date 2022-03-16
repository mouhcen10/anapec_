@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
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
                        <?php 
                            $professional = Auth::user()->professional;
                        ?>
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
                <span class="f-90 mx-1 text-secondary">Créer Nouvelle Offre</span>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Créer nouvelle offre d'emploi</span>
                </div>
                <form method="POST" action="{{ route('offres.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column m-5">
                        {{-- <input type="hidden" name="professional_id" value="{{ Auth::user()->professional->id }}"> --}}
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Référence :<span class="text-danger">*</span></label>
                            <input type="text" name="ref" class="rounded-0 text-blue w-40 ml-72 text-uppercase" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Type de l'offre :<span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="type" required>
                                <option>[Choisissez le type de l'offre]</option>
                                <option>Stage Rémunéré</option>
                                <option>Stage Non Rémunéré</option>
                                <option>Stage pré-embouche</option>
                                <option>Offre d'emploi</option>
                                <option>Freelance</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Type de contrat :</label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="contrat">
                                <option>[Choisissez le type de contrat]</option>
                                <option>CDI</option>
                                <option>CDD</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Intitulé du Poste :<span class="text-danger">*</span></label>
                            <input type="text" name="poste" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Date :<span class="text-danger">*</span></label>
                            <input type="date" name="date" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Etat de l'offre :<span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="etat" required>
                                <option>[Choisissez l'état de l'offre]</option>
                                <option>En cours </option>
                                <option>Suspendue</option>
                                <option>Conclue</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Description :<span class="text-danger">*</span></label>
                            <textarea name="description" cols="32" rows="5" class="rounded-0 text-blue ml-72 mb-2" required></textarea>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Nbr postes :<span class="text-danger">*</span></label>
                            <input type="number" name="nbr_postes" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Lieu de travail : <span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="lieu_travail" required>
                                <option>[Lieu de travail]</option>
                                <option>Agadir</option>
                                <option>Rabat</option>
                                <option>Casablanca</option>
                                <option>Marrakech</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn blue-bg border-0 btn-sm my-2 shadow-xl">Enregistrer</button>
                    </div>
                </form>
            </div>
            <!--/Identification-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection