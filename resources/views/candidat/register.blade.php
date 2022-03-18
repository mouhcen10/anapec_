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
            <form method="POST" action="{{ route('candidates.store') }}" enctype="multipart/form-data" class="d-flex flex-column">
                @csrf
                <!--Identification-->
                <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                    <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                        <img class="mx-2" src="/storage/images/arrow.png" alt="">
                        <span class="text-grey">Identification</span>
                    </div>
                    <div class="d-flex flex-row mt-5 mx-3">
                        <div class="d-flex flex-column justify-content-between align-items-center mb-1">
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">CIN :<span class="text-danger">*</span></label>
                                <input type="text" name="cin" class="rounded-0 w-40 ml-72">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Confirmation CIN:<span class="text-danger">*</span></label>
                                <input type="text" name="cin" class="rounded-0 w-40 ml-72">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Mot de passe :<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="rounded-0 w-40 ml-72">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Confirmation Mot de passe :<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="rounded-0 w-40 ml-72">
                            </div>
                        </div>
                        <div class="bord-dash d-flex flex-column justify-content-between align-items-start p-2">
                            <img class="avatar mx-5" src="/storage/images/avatar.jpg" alt="" id="imgSelected">
                            <input class="small" type="file" name="picture" id="imgInp">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Nom :<span class="text-danger">*</span></label>
                        <input type="text" name="nom" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Prénom :<span class="text-danger">*</span></label>
                        <input type="text" name="prenom" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Sexe :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="sexe">
                            <option>[Choisissez votre sexe]</option>
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Situation familiale :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="situation_f">
                            <option>[Choisissez votre situation familiale]</option>
                            <option>Célibataire</option>
                            <option>Marié(e)</option>
                            <option>Divorcé(e)</option>
                            <option>Veuf(e)</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Date de naissance :<span class="text-danger">*</span></label>
                        <input type="date" name="date_nais" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start my-3">
                        <label class="title" for="">Adresse :<span class="text-danger">*</span></label>
                        <textarea class="w-area" name="adress" rows="4"></textarea>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Province ou préfecture : <span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="province">
                            <option>[Choisissez votre province]</option>
                            <option>Agadir</option>
                            <option>Rabat</option>
                            <option>Casablanca</option>
                            <option>Marrakech</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Commune : <span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="commune">
                            <option>[Choisissez votre commune]</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Email :<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Confirmation Email :<span class="text-danger">*</span></label>
                        <input type="email" name="confirmEmail" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">GSM 1 :<span class="text-danger">*</span></label>
                        <input type="tel" name="gsm_1" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">GSM 2 :</label>
                        <input type="tel" name="gsm_2" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Tél :</label>
                        <input type="tel" name="tel" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Situation actuelle :<span class="text-danger">*</span></label>
                        <select id="situation" class="rounded-0 w-40" name="situation_prof">
                            <option>[Choisissez votre situaltio professionnelle]</option>
                            <option>Avec emploi</option>
                            <option>Sans emploi</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Au chômage depuis :</label>
                        <input id="au_chomage" type="date" name="au_chomage" class="rounded-0 w-40" disabled>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between align-items-start my-3">
                        <label class="title" for="">Mobilité </label>
                        <div class="d-flex flex-column align-items-start">
                            <span class="ml-4 small text-green">Locale :</span>
                            <span class="ml-4 small text-green">Régionale :</span>
                            <span class="ml-4 small text-green">Nationale :</span>
                            <span class="ml-4 small text-green">Internationale :</span>
                        </div>
                        <div class="d-flex flex-column align-items-start">
                            <input class="mb-1" type="checkbox" name="mobilite_locale">
                            <input class="my-1" type="checkbox" name="mobilite_regionale">
                            <input class="my-1" type="checkbox" name="mobilite_nationale">
                            <input class="my-1" type="checkbox" name="mobilite_internationale">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between my-3">
                        <label class="title" for="">Handicap : </label>
                        <div class="d-flex flex-row align-items-center">
                            <div class="mr-5">
                                <span class="title">Oui </span>
                                <input type="radio" name="oui" id="handicap">
                            </div>
                            <div>
                                <span class="title">Non </span>
                                <input type="radio" name="non" id="nonHandicap">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between align-items-start">
                        <label class="title" for="">Nature du handicap</label>
                        <select id="nature" class="rounded-0 w-40" name="situation_prof" disabled>
                            <option>[Choisissez la nature du handicap]</option>
                            <option>Aveugle</option>
                            <option>Moteur</option>
                            <option>Sourd muet</option>
                            <option>Mental</option>
                        </select>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button id="valider" type="submit" class="btn btn-dark nav-bg border-0 btn-sm my-2 shadow-xl">Valider</button>
                    </div>
                </div>
                <!--/Identification-->
            </form>
        </div>
    </div>
  </div>
@endsection

@section('script')
    <script>
        let situation = document.getElementById('situation');
        let au_chomage = document.getElementById('au_chomage');

        imgInp.onchange = evt => {
            const [file] = imgInp.files
            if (file) {
                imgSelected.src = URL.createObjectURL(file)
            }
        };

        situation.addEventListener("click", function(){
            if (situation.value == 'Sans emploi') {
                au_chomage.disabled = false;
            }else{
                au_chomage.disabled = true;
                au_chomage.value = null;
            }
        });

        $("#handicap").click(function(){
            $("#handicap").prop('checked', true);
            $("#nonHandicap").prop('checked', false);
            $("#nature").prop('disabled', false);
        });

        $("#nonHandicap").click(function(){
            $("#nonHandicap").prop('checked', true);
            $("#handicap").prop('checked', false);
            $("#nature").prop('disabled', true);
            $("#nature").val() = null;
        });

        $('#valider').click(function(){
            $("#au_chomage").prop('disabled', false);
        });
        
    </script>
@endsection