@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-profess-menu></x-profess-menu>
            <x-slider></x-slider>
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
                <span class="f-90 mx-1 text-secondary">Editer Offre</span>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Modifier offre d'emploi</span>
                </div>
                <form method="POST" action="{{ route('offres.update', ['offre' =>$offre->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column m-5">
                        {{-- <input type="hidden" name="professional_id" value="{{ Auth::user()->professional->id }}"> --}}
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Référence :<span class="text-danger">*</span></label>
                            <input type="text" name="ref" value="{{ old('ref', $offre->ref ?? null) }}" class="rounded-0 text-blue w-40 ml-72 text-uppercase" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Type de l'offre :<span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="type" required>
                                <option value="{{ old('type', $offre->type ?? null) }}">{{ $offre->type }}</option>
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
                                <option value="{{ old('contrat', $offre->contrat ?? null) }}">{{ $offre->contrat }}</option>
                                <option>CDI</option>
                                <option>CDD</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Intitulé du Poste :<span class="text-danger">*</span></label>
                            <input type="text" name="poste" value="{{ old('poste', $offre->poste ?? null) }}" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Date :<span class="text-danger">*</span></label>
                            <input type="date" name="date" value="{{ old('date', $offre->date ?? null) }}" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Etat de l'offre :<span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="etat" required>
                                <option value="{{ old('etat', $offre->etat ?? null) }}">{{ $offre->etat }}</option>
                                <option>En cours </option>
                                <option>Suspendue</option>
                                <option>Conclue</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Description :<span class="text-danger">*</span></label>
                            <textarea name="description" value="{{ old('description', $offre->description ?? null) }}" cols="32" rows="5" class="rounded-0 text-blue ml-72 mb-2" required>{{ $offre->description }}</textarea>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Nbr postes :<span class="text-danger">*</span></label>
                            <input type="number" name="nbr_postes" value="{{ old('nbr_postes', $offre->nbr_postes ?? null) }}" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Lieu de travail : <span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="lieu_travail" required>
                                <option value="{{ old('lieu_travail', $offre->lieu_travail ?? null) }}">{{ $offre->lieu_travail }}</option>
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