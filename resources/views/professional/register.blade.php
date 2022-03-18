@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-login></x-login>
            <x-atelier></x-atelier>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
            <div class="d-flex flex-row align-items-center my-2">
                <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Informations Employeur</span>
                </div>
                <form method="POST" action="{{ route('professionals.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column m-5">
                        <div class="d-flex flex-row justify-content-between align-items-start">
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row align-items-start">
                                    <label class="title" for="">Raison sociale :<span class="text-danger">*</span></label>
                                    <input type="text" name="raison_sociale" class="rounded-0 text-blue w-40 ml-72" required>
                                </div>
                                <div class="d-flex flex-row align-items-start">
                                    <label class="title" for="">Entreprise :<span class="text-danger">*</span></label>
                                    <input type="text" name="entreprise" class="rounded-0 text-blue w-40 ml-72" required>
                                </div>
                                <div class="d-flex flex-row align-items-start">
                                    <label class="title" for="">Secteur activité :<span class="text-danger">*</span></label>
                                    <select class="rounded-0 text-blue w-40 ml-72" name="secteur" required>
                                        <option>[Choisissez votre secteur]</option>
                                        <option>Activités des ménages </option>
                                        <option>Développement et Multimédia</option>
                                        <option>Internet</option>
                                        <option>Infographie</option>
                                    </select>
                                </div>
                                <div class="d-flex flex-row align-items-start">
                                    <label class="title" for="">CIN :<span class="text-danger">*</span></label>
                                    <input type="text" name="cin" class="rounded-0 text-blue w-40 ml-72" required>
                                </div>
                            </div>
                            <div class="bord-dash d-flex flex-column justify-content-between align-items-start p-2">
                                <img class="avatar mx-5" src="/storage/images/avatar.jpg" alt="" id="imgSelected">
                                <input class="small" type="file" name="logo" id="imgInp">
                            </div>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Nom :<span class="text-danger">*</span></label>
                            <input type="text" name="nom" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Prénom :<span class="text-danger">*</span></label>
                            <input type="text" name="prenom" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Votre N° d'affiliation à la CNSS :</label>
                            <input type="text" name="num_aff_cnss" class="rounded-0 text-blue w-40 ml-72">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Fonction :</label>
                            <input type="text" name="fonction" class="rounded-0 text-blue w-40 ml-72">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Email :<span class="text-danger">*</span></label>
                            <input type="email" name="email" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Confirmation Email :<span class="text-danger">*</span></label>
                            <input type="email" name="confirmEmail" class="rounded-0 text-blue w-40 ml-72">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Confirmation Mot de passe :<span class="text-danger">*</span></label>
                            <input type="password" name="password" class="rounded-0 text-blue w-40 ml-72">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Adresse :<span class="text-danger">*</span></label>
                            <textarea class="w-area ml-72 my-3 text-blue" name="adress" rows="4" required></textarea>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Tél :</label>
                            <input type="tel" name="tel" class="rounded-0 text-blue w-40 ml-72">
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">GSM :<span class="text-danger">*</span></label>
                            <input type="tel" name="gsm" class="rounded-0 text-blue w-40 ml-72" required>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Ville : <span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="ville" required>
                                <option>[Choisissez votre Ville]</option>
                                <option>Agadir</option>
                                <option>Rabat</option>
                                <option>Casablanca</option>
                                <option>Marrakech</option>
                            </select>
                        </div>
                        <div class="d-flex flex-row align-items-start">
                            <label class="title" for="">Commune : <span class="text-danger">*</span></label>
                            <select class="rounded-0 text-blue w-40 ml-72" name="commune" required>
                                <option>[Choisissez votre commune]</option>
                                <option>Agadir</option>
                                <option>Marrakech</option>
                                <option>Casablanca</option>
                                <option>Rabat</option>
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
<script>
    imgInp.onchange = evt => {
        const [file] = imgInp.files
        if (file) {
            imgSelected.src = URL.createObjectURL(file)
        }
    };
</script>
@endsection