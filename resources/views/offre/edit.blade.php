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