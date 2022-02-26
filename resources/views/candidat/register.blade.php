@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
            <!--Connexion-->
            <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
                <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                    <img class="mx-3" src="/storage/images/arrow.png" alt="">
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
                    <img class="mx-3" src="/storage/images/arrow.png" alt="">
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
            <!--/Connexion-->
            <div class="col-md-9 pr-0">
                <form method="POST" action="{{ route('candidates.store') }}" enctype="multipart/form-data" class="d-flex flex-column">
                    @csrf
                    <!--Identification-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Identification</span>
                        </div>
                        {{-- <div class="col-md-8 d-flex flex-row justify-content-center m-4">
                            <div class="mr-3"><input type="radio" name="check_cin" id="" checked> cin</div>
                            <div><input type="radio" name="check_sejour" id=""> carte séjour</div>
                        </div> --}}
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
                            <select class="rounded-0 w-40" name="situation_prof">
                                <option>[Choisissez votre situaltio professionnelle]</option>
                                <option>Avec emploi</option>
                                <option>Sans emploi</option>
                            </select>
                        </div>
                        <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                            <label class="title" for="">Au chômage depuis :</label>
                            <input type="date" name="au_chomage" class="rounded-0 w-40">
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
                                <input class="mb-1" type="checkbox" name="mobilite[]" value="Locale">
                                <input class="my-1" type="checkbox" name="mobilite[]" value="Régionale">
                                <input class="my-1" type="checkbox" name="mobilite[]" value="Nationale">
                                <input class="my-1" type="checkbox" name="mobilite[]" value="Internationale">
                            </div>
                        </div>
                        <div class="col-md-8 d-flex flex-row justify-content-between my-3">
                            <label class="title" for="">Handicap : </label>
                            <div class="d-flex flex-row align-items-center">
                                <div class="mr-5">
                                    <span class="title">Oui </span>
                                    <input type="radio" name="oui" value="true">
                                </div>
                                <div>
                                    <span class="title">Non </span>
                                    <input type="radio" name="non" value="false">
                                </div>
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
                    </div>
                    <!--/Identification-->

                    <!--Formation-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Formation</span>
                        </div>
                        <div class="d-flex flex-column p-4">
                            <div class="d-flex flex-column  justify-content-between align-items-start">
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <label class="title" for="">Diplôme :</label>
                                    <div class="d-flex flex-column">
                                        <span class="text-green small">Si vous n’avez aucun diplôme, choisissez « Sans diplôme » dans la liste</span>
                                        <select class="rounded-0 w-40 my-2" name="diplome">
                                            <option>[Type de diplome]</option>
                                            <option>Bac +2</option>
                                            <option>Bac +3</option>
                                        </select>
                                        <select class="rounded-0 w-40 my-2" name="specialite">
                                            <option>[Spécialistes]</option>
                                            <option>Développement Informatique</option>
                                            <option>Graphic Design</option>
                                        </select>
                                        <select class="rounded-0 w-40 my-2" name="option">
                                            <option>[Option]</option>
                                            <option>Développement Informatique</option>
                                            <option>Graphic Design</option>
                                        </select>
                                        <select class="rounded-0 w-40 my-2" name="grp_etab">
                                            <option>[Groupe d'établissement]</option>
                                            <option>OFPPT</option>
                                            <option>ENCG</option>
                                            <option>EMSI</option>
                                        </select>
                                        <select class="rounded-0 w-40 my-2" name="etab">
                                            <option>[Etablissement]</option>
                                            <option>Institut Spécialisé des Technologies Appliquées</option>
                                            <option>IGA</option>
                                            <option>Lycée</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center my-2">
                                    <label class="title" for="">Année d’obtention :</label>
                                    <input class="rounded-0 w-40" name="annee_obt" type="number" min="1970" max="2022" step="1" value="2022" />
                                </div>
                                <div class="d-flex flex-row  justify-content-between align-items-center my-3">
                                    <label class="title" for="">Commentaire :</label>
                                    <textarea class="w-area" name="commentaire" rows="4"></textarea>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square text-green shadow-sm" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/Formation-->

                    <!--Expériences-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Expérience</span>
                        </div>
                        <div class="d-flex flex-column p-4">
                            <div class="d-flex flex-row">
                                <div class="d-flex flex-column justify-content-between align-items-center">
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <label class="title" for="">Date début :</label>
                                        <input type="date" name="date_debut" class="rounded-0 w-40">
                                    </div>
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <label class="title" for="">Date fin :</label>
                                        <input type="date" name="date_fin" class="rounded-0 w-40">
                                    </div>
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <label class="title" for="">Entreprise :</label>
                                        <input type="text" name="entreprise" class="rounded-0 w-40">
                                    </div>
                                    <div class="d-flex flex-row justify-content-between align-items-center">
                                        <label class="title" for="">Intitulé du poste :</label>
                                        <input type="text" name="intitule" class="rounded-0 w-40">
                                    </div>
                                    <div class="d-flex flex-row justify-content-between align-items-center my-1">
                                        <label class="title" for="">Description :</label>
                                        <textarea class="w-area" name="description" rows="4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square text-green shadow-sm" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                    <!--/Expériences-->

                    <!--Compétences-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Compétences</span>
                        </div>
                        <div class="d-flex flex-column p-4">
                            <div class="col-md-8 d-flex flex-column  justify-content-between align-items-start">
                                <div class="d-flex flex-row justify-content-around align-items-center">
                                    <label class="title" for="">Langue :</label>
                                    <div class="d-flex flex-column">
                                        <div class="d-flex flex-row justify-content-around align-items-center my-2">
                                            <select class="rounded-0 w-40" name="langue_1">
                                                <option>[Langue]</option>
                                                <option>Arabe</option>
                                                <option>Français</option>
                                                <option>Anglais</option>
                                            </select>
                                            <select class="rounded-0 w-40 mx-2" name="niveau_langue_1">
                                                <option>[Niveau langue]</option>
                                                <option>Langue maternelle</option>
                                                <option>Courant</option>
                                                <option>Bon</option>
                                                <option>Moyen</option>
                                                <option>Notions</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-row justify-content-around align-items-center my-2">
                                            <select class="rounded-0 w-40" name="langue_2">
                                                <option>[Langue]</option>
                                                <option>Arabe</option>
                                                <option>Français</option>
                                                <option>Anglais</option>
                                            </select>
                                            <select class="rounded-0 w-40 mx-2" name="niveau_langue_2">
                                                <option>[Niveau langue]</option>
                                                <option>Langue maternelle</option>
                                                <option>Courant</option>
                                                <option>Bon</option>
                                                <option>Moyen</option>
                                                <option>Notions</option>
                                            </select>
                                        </div>
                                        <div class="d-flex flex-row justify-content-around align-items-center my-2">
                                            <select class="rounded-0 w-40" name="langue_3">
                                                <option>[Langue]</option>
                                                <option>Arabe</option>
                                                <option>Français</option>
                                                <option>Anglais</option>
                                            </select>
                                            <select class="rounded-0 w-40 mx-2" name="niveau_langue_3">
                                                <option>[Niveau langue]</option>
                                                <option>Langue maternelle</option>
                                                <option>Courant</option>
                                                <option>Bon</option>
                                                <option>Moyen</option>
                                                <option>Notions</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button type="submit" class="btn btn-sm">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-plus-square text-green shadow-sm" viewBox="0 0 16 16">
                                        <path d="M14 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h12zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
                                        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="d-flex flex-row justify-content-start align-items-center my-3">
                                <label class="title" for="">Bureautique:</label>
                                <div class="d-flex flex-column align-items-start">
                                    <span class="ml-4 small text-green">Word :</span>
                                    <span class="ml-4 small text-green">Excel :</span>
                                    <span class="ml-4 small text-green">Access :</span>
                                    <span class="ml-4 small text-green">PowerPoint :</span>
                                </div>
                                <div class="d-flex flex-column align-items-start mx-3">
                                    <input class="mb-1" type="checkbox" name="bureautique[]" value="Word">
                                    <input class="my-1" type="checkbox" name="bureautique[]" value="Excel">
                                    <input class="my-1" type="checkbox" name="bureautique[]" value="Access">
                                    <input class="my-1" type="checkbox" name="bureautique[]" value="PowerPoint">
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-row justify-content-satrt align-items-center">
                                <label class="title" for="">Compétences spécifiques :</label>
                                <div class="d-flex flex-column ml-3 mt-3">
                                    <input type="text" name="comp_specifiques" class="rounded-0 w-40">
                                    <span class="text-green small">ex(PhotoShop, DreamWeaver, Flash....)</span>
                                </div>
                            </div>
                            <hr>
                            <div class="d-flex flex-row justify-content-start align-items-center my-4">
                                <label class="title" for="">Permis de conduire :</label>
                                <div class="d-flex flex-column">
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="A">
                                        <span class="small text-green mx-2">A</span>
                                        <img src="/storage/images/a.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="B">
                                        <span class="small text-green mx-2">B</span>
                                        <img src="/storage/images/b.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="C">
                                        <span class="small text-green mx-2">C</span>
                                        <img src="/storage/images/c.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="D">
                                        <span class="small text-green mx-2">D</span>
                                        <img src="/storage/images/d.jpg" alt="">
                                    </div>
                                </div>
                                <div class="d-flex flex-column mx-5">
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="EB">
                                        <span class="small text-green mx-2">EB</span>
                                        <img src="/storage/images/eb.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="EC">
                                        <span class="small text-green mx-2">EC</span>
                                        <img src="/storage/images/ec.jpg" alt="">
                                    </div>
                                    <div class="d-flex flex-row align-items-center">
                                        <input class="" type="checkbox" name="permis_conduire[]" value="ED">
                                        <span class="small text-green mx-2">ED</span>
                                        <img src="/storage/images/ed.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--/Compétences-->

                    <!--Activitées extra-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Activités extra-professionnelles</span>
                        </div>
                        <div class="d-flex flex-column p-4">
                            <div class="d-flex flex-row justify-content-center align-items-center">
                                <textarea class="form-control w-50 rounded-0" name="title" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <!--/Activitées extra-->

                    <!--Cv personnel-->
                    <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                        <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">CV personnel</span>
                        </div>
                        <div class="d-flex flex-column p-4">
                            <div class="d-flex flex-column justify-content-start">
                                <span class="small my-1">Joindre votre CV personnel :</span>
                                <input class="form-control" type="file" name="cv">
                            </div>
                        </div>
                    </div>
                    <!--/Cv personnel-->

                    <div class="d-flex justify-content-end">
                        <button type="submit" class="btn btn-dark nav-bg border-0 btn-sm my-2 shadow-xl">Valider</button>
                    </div>
                </form>
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