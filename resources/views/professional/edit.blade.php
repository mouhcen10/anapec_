@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="glb col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="frst col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-profess-menu></x-profess-menu>
            <div class="slider-2">
                <x-slider></x-slider>
            </div>
        </div>
        <!--/Connexion-->
        <div class="scnd col-md-9 pr-0">
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
                <span class="f-90 mx-1 text-secondary">Editer votre compte</span>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Modifier Votre compte Professionnel</span>
                </div>
                <form class="d-flex flex-column" method="POST" action="{{ route('professionals.update', ['professional' => $professional->id]) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="box d-flex flex-column mt-5 mx-3">
                        <div class="item d-flex flex-row justify-content-between align-items-start">
                            <div class="box d-flex flex-column">
                                <div class="item d-flex flex-row align-items-start">
                                    <label class="lbl title" for="">Raison sociale :<span class="text-danger">*</span></label>
                                    <input type="text" name="raison_sociale" class="rounded-0 text-blue w-40" value="{{ old('raison_sociale', $professional->raison_sociale ?? null) }}" required>
                                </div>
                                <div class="item d-flex flex-row align-items-start">
                                    <label class="lbl title" for="">Entreprise :<span class="text-danger">*</span></label>
                                    <input type="text" name="entreprise" class="rounded-0 text-blue w-40" value="{{ old('entreprise', $professional->entreprise ?? null) }}" required>
                                </div>
                                <div class="item d-flex flex-row align-items-start">
                                    <label class="lbl title" for="">Secteur activité :<span class="text-danger">*</span></label>
                                    <select class="rounded-0 text-blue w-40" name="secteur" required>
                                        <option value="{{ old('secteur', $professional->secteur ?? null) }}">{{ $professional->secteur }}</option>
                                        <option>Activités des ménages </option>
                                        <option>Développement et Multimédia</option>
                                        <option>Internet</option>
                                        <option>Infographie</option>
                                    </select>
                                </div>
                                <div class="item d-flex flex-row align-items-start">
                                    <label class="lbl title" for="">CIN :<span class="text-danger">*</span></label>
                                    <input type="text" name="cin" class="rounded-0 text-blue w-40" value="{{ old('cin', $professional->cin ?? null) }}" required>
                                </div>
                            </div>
                            <div class="pic bord-dash d-flex flex-column justify-content-between align-items-start p-2">
                                @if($professional->logo)
                                    <img class="avatar mx-5" src="{{ Storage::url($professional->logo) }}" id="imgSelected" alt="">
                                @else
                                    <img class="avatar mx-5" src="/storage/images/avatar.jpg" id="imgSelected" alt="">
                                @endif
                                <input class="small" type="file" name="logo" id="imgInp">
                            </div>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Nom :<span class="text-danger">*</span></label>
                            <input type="text" name="nom" class="rounded-0 text-blue w-40" value="{{ old('nom', $professional->nom ?? null) }}" required>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Prénom :<span class="text-danger">*</span></label>
                            <input type="text" name="prenom" class="rounded-0 text-blue w-40" value="{{ old('prenom', $professional->prenom ?? null) }}" required>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Votre N° d'affiliation à la CNSS :</label>
                            <input type="text" name="num_aff_cnss" class="rounded-0 text-blue w-40" value="{{ old('num_aff_cnss', $professional->num_aff_cnss ?? null) }}">
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Fonction :</label>
                            <input type="text" name="fonction" class="rounded-0 text-blue w-40" value="{{ old('prenom', $professional->prenom ?? null) }}">
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Email :<span class="text-danger">*</span></label>
                            <input id="email" type="email" name="email" class="rounded-0 text-blue w-40" value="{{ old('email', $professional->email ?? null) }}" required disabled>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Confirmation Email :<span class="text-danger">*</span></label>
                            <input type="email" name="confirmEmail" class="rounded-0 text-blue w-40" value="{{ old('email', $professional->email ?? null) }}" disabled>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40" value="{{ old('password', $professional->password ?? null) }}" required>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Confirmation Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40" value="{{ old('password', $professional->password ?? null) }}">
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Adresse :<span class="text-danger">*</span></label>
                            <textarea class="w-area my-3 text-blue" name="adress" rows="4" value="{{ old('adress', $professional->adress ?? null) }}" required>{{ $professional->adress ?? null }}</textarea>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Tél :</label>
                            <input type="tel" name="tel" class="rounded-0 text-blue w-40" value="{{ old('tel', $professional->tel ?? null) }}">
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">GSM :<span class="text-danger">*</span></label>
                            <input type="tel" name="gsm" class="rounded-0 text-blue w-40" value="{{ old('gsm', $professional->gsm ?? null) }}" required>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Ville : <span class="text-danger">*</span></label>
                            <select id="ville" class="rounded-0 text-blue w-40" name="ville" required disabled>
                                <option value="{{ old('ville', $professional->ville ?? null) }}">{{ $professional->ville ?? null }}</option>
                                <option>Agadir</option>
                                <option>Rabat</option>
                                <option>Casablanca</option>
                                <option>Marrakech</option>
                            </select>
                        </div>
                        <div class="item d-flex flex-row align-items-start">
                            <label class="lbl title" for="">Commune : <span class="text-danger">*</span></label>
                            <select id="commune" class="rounded-0 text-blue w-40" name="commune" required disabled>
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

    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            imgSelected.src = URL.createObjectURL(file)
        }
    };
</script>
@endsection