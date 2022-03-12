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
                    <span class="text-grey">Modifier Votre compte Employeur</span>
                </div>
                <form method="POST" action="{{ route('professionals.update', ['professional' => $professional->id]) }}" enctype="multipart/form-data" class="d-flex flex-column">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-column m-5">
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Raison sociale :<span class="text-danger">*</span></label>
                            <input type="text" name="raison_sociale" class="rounded-0 text-blue w-40 ml-72" value="{{ old('raison_sociale', $professional->raison_sociale ?? null) }}" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Secteur activité :<span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="secteur" required>
                                <option value="{{ old('secteur', $professional->secteur ?? null) }}">{{ $professional->secteur ?? null }}</option>
                                <option>Activités des ménages </option>
                                <option>Développement et Multimédia</option>
                                <option>Internet</option>
                                <option>Infographie</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">CIN :<span class="text-danger">*</span></label>
                            <input id="cin" type="text" name="cin" class="rounded-0 text-blue w-40 ml-72" value="{{ old('cin', $professional->cin ?? null) }}" required disabled>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Nom :<span class="text-danger">*</span></label>
                            <input type="text" name="nom" class="rounded-0 text-blue w-40 ml-72" value="{{ old('nom', $professional->nom ?? null) }}" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Prénom :<span class="text-danger">*</span></label>
                            <input type="text" name="prenom" class="rounded-0 text-blue w-40 ml-72" value="{{ old('prenom', $professional->prenom ?? null) }}" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Votre N° d'affiliation à la CNSS :</label>
                            <input type="text" name="num_aff_cnss" class="rounded-0 text-blue w-40 ml-72" value="{{ old('num_aff_cnss', $professional->num_aff_cnss ?? null) }}">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Fonction :</label>
                            <input type="text" name="fonction" class="rounded-0 text-blue w-40 ml-72" value="{{ old('prenom', $professional->prenom ?? null) }}">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Email :<span class="text-danger">*</span></label>
                            <input id="email" type="email" name="email" class="rounded-0 text-blue w-40 ml-72" value="{{ old('email', $professional->email ?? null) }}" required disabled>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Confirmation Email :<span class="text-danger">*</span></label>
                            <input type="email" name="confirmEmail" class="rounded-0 text-blue w-40 ml-72" value="{{ old('email', $professional->email ?? null) }}" disabled>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40 ml-72" value="{{ old('password', $professional->password ?? null) }}" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Confirmation Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40 ml-72" value="{{ old('password', $professional->password ?? null) }}">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Adresse :<span class="text-danger">*</span></label>
                            <textarea class="w-area ml-72 my-3 text-blue" name="adress" rows="4" value="{{ old('adress', $professional->adress ?? null) }}" required>{{ $professional->adress ?? null }}</textarea>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Tél :</label>
                            <input type="tel" name="tel" class="rounded-0 text-blue w-40 ml-72" value="{{ old('tel', $professional->tel ?? null) }}">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">GSM :<span class="text-danger">*</span></label>
                            <input type="tel" name="gsm" class="rounded-0 text-blue w-40 ml-72" value="{{ old('gsm', $professional->gsm ?? null) }}" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Ville : <span class="text-danger">*</span></label>
                            <select id="ville" class="rounded-0 text-blue w-40 ml-72" name="ville" required disabled>
                                <option value="{{ old('ville', $professional->ville ?? null) }}">{{ $professional->ville ?? null }}</option>
                                <option>Agadir</option>
                                <option>Rabat</option>
                                <option>Casablanca</option>
                                <option>Marrakech</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Commune : <span class="text-danger">*</span></label>
                            <select id="commune" class="rounded-0 text-blue w-40 ml-72" name="commune" required disabled>
                                <option value="{{ old('commune', $professional->commune ?? null) }}">{{ $professional->commune ?? null }}</option>
                                <option>Agadir</option>
                                <option>Marrakech</option>
                                <option>Casablanca</option>
                                <option>Rabat</option>
                            </select>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button id="save" type="submit" class="btn blue-bg border-0 btn-sm my-2 shadow-xl">Enregistrer</button>
                    </div>
                </form>
            </div>
            <!--/Identification-->
        </div>
    </div>
  </div>
@endsection

@section('script')
<script>
    $('#save').click(function(){
        $("#cin").prop('disabled', false);
        $("#email").prop('disabled', false);
        $("#ville").prop('disabled', false);
        $("#commune").prop('disabled', false);
    });
</script>
@endsection