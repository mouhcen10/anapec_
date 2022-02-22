@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <div class="col-md-3 border-1 rounded-0 bg-white shadow-sm p-0">
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white mt-3">
                <img class="mx-3" src="images/arrow.png" alt="">
                Connexion
            </div>
            <div class="d-flex flex-row justify-content-around align-items-center mt-4 mx-2">
              <div class="form-check mx-2">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                <label class="form-check-label" for="exampleRadios1">
                  Candidat
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                <label class="form-check-label" for="exampleRadios2">
                  Employeur
                </label>
              </div>
            </div>
            <form class="card-body py-2 px-4">
                <div class="form-group">
                  <input type="email" name="cin" class="form-control rounded-0 h-25" placeholder="CIN">
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control rounded-0 h-25" placeholder="Password">
                </div>
                <div class="form-group d-flex  justify-content-between align-items-start align-items-center">
                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                  <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
                  <button style="background: var(--bg-green);" type="submit" class="btn btn-sm text-white">Ok</button>
                </div>
            </form>
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white mt-3">
                <img class="mx-3" src="images/arrow.png" alt="">
                Atelier
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
        <div class="col-md-9 pr-0">
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-0">
                <div class="rounded-0 m-3 d-flex justify-content-start align-items-center">
                  <img class="mx-2" src="images/arrow.png" alt="">
                  <span class="text-grey">Identification</span>
                </div>
                <form class="d-flex flex-column p-4">
                    <div class="col-md-8 d-flex flex-row justify-content-center m-2">
                        <div class="mr-3"><input type="radio" name="check_cin" id="" checked> cin</div>
                        <div><input type="radio" name="check_sejour" id=""> carte séjour</div>
                    </div>
                    <div class="d-flex flex-row">
                        <div class="d-flex flex-column justify-content-between align-items-center">
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
                            <img class="avatar mx-5" accept="image/*" src="images/avatar.jpg" alt="" id="imgSelected">
                            <input class="small" type="file" name="image" id="imgInp">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Nom :<span class="text-danger">*</span></label>
                        <input type="text" name="name" class="rounded-0 w-40">
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
                        <select class="rounded-0 w-40" name="situation">
                            <option>[Choisissez votre situation familiale]</option>
                            <option>Célibataire</option>
                            <option>Marié(e)</option>
                            <option>Divorcé(e)</option>
                            <option>Veuf(e)</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Date de naissance :<span class="text-danger">*</span></label>
                        <input type="date" name="datenais" class="rounded-0 w-40">
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
                        <select class="rounded-0 w-40" name="situation">
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
                        <input type="tel" name="gsm1" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">GSM 2 :</label>
                        <input type="tel" name="gsm2" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Tél :</label>
                        <input type="tel" name="tel" class="rounded-0 w-40">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Situation actuelle :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="situation_prof">
                            <option>[Choisissez votre situaltio professionnelle]</option>
                            <option>Avec emploi</option>
                            <option>Sans emploi</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Au chômage depuis :</label>
                        <select class="rounded-0 w-10 mr-5" name="mois_chom" disabled>
                            <option>[--]</option>
                        </select>
                        <select class="rounded-0 w-20" name="anne_chom" disabled>
                            <option>[-------]</option>
                        </select>
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
                            <input class="mb-1" type="checkbox" name="mobilite" id="">
                            <input class="my-1" type="checkbox" name="mobilite" id="">
                            <input class="my-1" type="checkbox" name="mobilite" id="">
                            <input class="my-1" type="checkbox" name="mobilite" id="">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between my-3">
                        <label class="title" for="">Handicap : </label>
                        <div class="d-flex flex-row align-items-center">
                            <div class="mr-5"><span class="title">Oui </span><input type="radio" name="handicap" id=""></div>
                            <div><span class="title">Non </span><input type="radio" name="handicap" id="" checked></div>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between align-items-start">
                        <label class="title" for="">Nature du handicap</label>
                        <select class="rounded-0 w-40" name="situation_prof" disabled>
                            <option>[Choisissez la nature du handicap]</option>
                            <option>Aveugle</option>
                            <option>Moteur</option>
                            <option>Sourd muet</option>
                            <option>Mental</option>
                        </select>
                    </div>
                </form>
            </div>
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
        }
    </script>
@endsection