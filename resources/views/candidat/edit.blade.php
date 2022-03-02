@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                <img class="mx-3" src="/storage/images/arrow.png" alt="">
                Votre espace personnel
            </div>
            <div class="d-flex flex-row justify-content-start align-items-start mt-4">
                <ul class="list-group w-100">
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Recherche des offres
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Consulter la banque d'offres</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Consulter les offres International</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Offres correspandant à votre profil</a></li>
                        </div>
                    </div>
                    <div class="my-1">
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent1" aria-controls="navbarToggleExternalContent1" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Vos alertes aux offres
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent1">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Créer alertes</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Gérer les alertes</a></li>
                        </div>
                    </div>
                    <div>
                        <a class="nav-link text-grey rounded-0 border-0 bg-green-light small" href="#" data-toggle="collapse" data-target="#navbarToggleExternalContent2" aria-controls="navbarToggleExternalContent2" aria-expanded="false" aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-chevron-right text-grey" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"/>
                            </svg>
                            Votre Historique
                        </a>
                        <div class="collapse p-2" id="navbarToggleExternalContent2">
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Vos candidatures</a></li>
                            <li class="list-group-item border-0 py-1 px-2 d-flex flex-row justify-content-start align-items-center"><i class="fa fa-caret-right text-green"></i><a class="nav-link text-grey mx-2  p-0 small" href="">Offres mémorisées</a></li>
                        </div>
                    </div>
                </ul>
            </div>
            <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white mt-3">
                <img class="mx-3" src="/storage/images/arrow.png" alt="">
                Ateliers
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
            <form method="POST" action="{{ route('candidates.update',['candidate' => $candidate->id]) }}" enctype="multipart/form-data" class="d-flex flex-column">
                @csrf
                @method('PUT')
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
                                <input type="text" name="cin" class="rounded-0 w-40 ml-72" value="{{ old('cin', $candidate->cin ?? null) }}">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Confirmation CIN:<span class="text-danger">*</span></label>
                                <input type="text" name="cin" class="rounded-0 w-40 ml-72" value="{{ old('cin', $candidate->cin ?? null) }}">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Mot de passe :<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="rounded-0 w-40 ml-72" value="{{ old('password', $candidate->password ?? null) }}">
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center">
                                <label class="title" for="">Confirmation Mot de passe :<span class="text-danger">*</span></label>
                                <input type="password" name="password" class="rounded-0 w-40 ml-72" value="{{ old('password', $candidate->password ?? null) }}">
                            </div>
                        </div>
                        <div class="bord-dash d-flex flex-column justify-content-between align-items-start p-2">
                            <img class="avatar mx-5" src="/storage/images/avatar.jpg" alt="" id="imgSelected">
                            <input class="small" type="file" name="picture" id="imgInp">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Nom :<span class="text-danger">*</span></label>
                        <input type="text" name="nom" class="rounded-0 w-40" value="{{ old('nom', $candidate->nom ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Prénom :<span class="text-danger">*</span></label>
                        <input type="text" name="prenom" class="rounded-0 w-40" value="{{ old('prenom', $candidate->prenom ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Sexe :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="sexe">
                            <option value="{{ old('sexe', $candidate->sexe ?? null) }}">{{ old('sexe', $candidate->sexe ?? null) }}"</option>
                            <option>Masculin</option>
                            <option>Féminin</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Situation familiale :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="situation_f">
                            <option value="{{ old('cin', $candidate->cin ?? null) }}">{{ old('cin', $candidate->cin ?? null) }}"</option>
                            <option>Célibataire</option>
                            <option>Marié(e)</option>
                            <option>Divorcé(e)</option>
                            <option>Veuf(e)</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Date de naissance :<span class="text-danger">*</span></label>
                        <input type="date" name="date_nais" class="rounded-0 w-40" value="{{ old('date_nais', $candidate->date_nais ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start my-3">
                        <label class="title" for="">Adresse :<span class="text-danger">*</span></label>
                        <textarea class="w-area" name="adress" rows="4" value="{{ old('adress', $candidate->adress ?? null) }}"></textarea>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Province ou préfecture : <span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="province">
                            <option value="{{ old('province', $candidate->province ?? null) }}">{{ old('province', $candidate->province ?? null) }}</option>
                            <option>Agadir</option>
                            <option>Rabat</option>
                            <option>Casablanca</option>
                            <option>Marrakech</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Commune : <span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="commune">
                            <option value="{{ old('commune', $candidate->commune ?? null) }}">{{ old('password', $candidate->password ?? null) }}</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Email :<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="rounded-0 w-40" value="{{ old('email', $candidate->email ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Confirmation Email :<span class="text-danger">*</span></label>
                        <input type="email" name="confirmEmail" class="rounded-0 w-40" value="{{ old('email', $candidate->email ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">GSM 1 :<span class="text-danger">*</span></label>
                        <input type="tel" name="gsm_1" class="rounded-0 w-40" value="{{ old('gsm_1', $candidate->gsm_1 ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">GSM 2 :</label>
                        <input type="tel" name="gsm_2" class="rounded-0 w-40" value="{{ old('gsm_2', $candidate->gsm_2 ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Tél :</label>
                        <input type="tel" name="tel" class="rounded-0 w-40" value="{{ old('tel', $candidate->tel ?? null) }}">
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Situation actuelle :<span class="text-danger">*</span></label>
                        <select class="rounded-0 w-40" name="situation_prof">
                            <option value="{{ old('situation_prof', $candidate->situation_prof ?? null) }}">{{ old('situation_prof', $candidate->situation_prof ?? null) }}</option>
                            <option>Avec emploi</option>
                            <option>Sans emploi</option>
                        </select>
                    </div>
                    <div class="col-md-8 d-flex flex-row  justify-content-between align-items-start">
                        <label class="title" for="">Au chômage depuis :</label>
                        <input type="date" name="au_chomage" class="rounded-0 w-40" value="{{ old('au_chomage', $candidate->au_chomage ?? null) }}">
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
                            <input class="mb-1" type="checkbox" name="mobilite[]"  value="{{ old('mobilite', $candidate->mobilite ?? null) }}">
                            <input class="my-1" type="checkbox" name="mobilite[]"  value="{{ old('mobilite', $candidate->mobilite ?? null) }}">
                            <input class="my-1" type="checkbox" name="mobilite[]"  value="{{ old('mobilite', $candidate->mobilite ?? null) }}">
                            <input class="my-1" type="checkbox" name="mobilite[]"  value="{{ old('mobilite', $candidate->mobilite ?? null) }}">
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between my-3">
                        <label class="title" for="">Handicap : </label>
                        <div class="d-flex flex-row align-items-center">
                            <div class="mr-5">
                                <span class="title">Oui </span>
                                <input type="radio" name="oui" value="true" value="{{ old('handicap', $candidate->handicap ?? null) }}">
                            </div>
                            <div>
                                <span class="title">Non </span>
                                <input type="radio" name="non" value="false" value="{{ old('handicap', $candidate->handicap ?? null) }}">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8 d-flex flex-row justify-content-between align-items-start">
                        <label class="title" for="">Nature du handicap</label>
                        <select class="rounded-0 w-40" name="situation_prof" disabled>
                            <option value="{{ old('nature_handicap', $candidate->nature_handicap ?? null) }}">{{ old('nature_handicap', $candidate->nature_handicap ?? null) }}</option>
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
                                        <option value="{{ old('diplome', $candidate->formations->diplome ?? null) }}">{{ old('diplome', $candidate->formations->diplome ?? null) }}</option>
                                        <option>Bac +2</option>
                                        <option>Bac +3</option>
                                    </select>
                                    <select class="rounded-0 w-40 my-2" name="specialite">
                                        <option value="{{ old('specialite', $candidate->specialite ?? null) }}">{{ old('specialite', $candidate->formations->specialite ?? null) }}</option>
                                        <option>Développement Informatique</option>
                                        <option>Graphic Design</option>
                                    </select>
                                    <select class="rounded-0 w-40 my-2" name="option">
                                        <option value="{{ old('option', $candidate->formations->option ?? null) }}">{{ old('option', $candidate->formations->option ?? null) }}</option>
                                        <option>Développement Informatique</option>
                                        <option>Graphic Design</option>
                                    </select>
                                    <select class="rounded-0 w-40 my-2" name="grp_etab">
                                        <option value="{{ old('grp_etab', $candidate->formations->grp_etab ?? null) }}">{{ old('grp_etab', $candidate->formations->grp_etab ?? null) }}</option>
                                        <option>OFPPT</option>
                                        <option>ENCG</option>
                                        <option>EMSI</option>
                                    </select>
                                    <select class="rounded-0 w-40 my-2" name="etab">
                                        <option value="{{ old('etab', $candidate->formations->etab ?? null) }}">{{ old('etab', $candidate->formations->etab ?? null) }}</option>
                                        <option>Institut Spécialisé des Technologies Appliquées</option>
                                        <option>IGA</option>
                                        <option>Lycée</option>
                                    </select>
                                </div>
                            </div>
                            <div class="d-flex flex-row justify-content-between align-items-center my-2">
                                <label class="title" for="">Année d’obtention :</label>
                                <input class="rounded-0 w-40" name="annee_obt" type="number" min="1970" max="2022" step="1"  value="{{ old('annee_obt', $candidate->formations->annee_obt ?? null) }}" />
                            </div>
                            <div class="d-flex flex-row  justify-content-between align-items-center my-3">
                                <label class="title" for="">Commentaire :</label>
                                <textarea class="w-area" name="commentaire" rows="4" value="{{ old('commentaire', $candidate->formations->commentaire ?? null) }}"></textarea>
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
                                    <input type="date" name="date_debut" class="rounded-0 w-40" value="{{ old('date_debut', $candidate->experiences->date_debut ?? null) }}">
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <label class="title" for="">Date fin :</label>
                                    <input type="date" name="date_fin" class="rounded-0 w-40" value="{{ old('date_fin', $candidate->experiences->date_fin ?? null) }}">
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <label class="title" for="">Entreprise :</label>
                                    <input type="text" name="entreprise" class="rounded-0 w-40" value="{{ old('entreprise', $candidate->experiences->entreprise ?? null) }}">
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center">
                                    <label class="title" for="">Intitulé du poste :</label>
                                    <input type="text" name="intitule" class="rounded-0 w-40" value="{{ old('intitule', $candidate->experiences->intitule ?? null) }}">
                                </div>
                                <div class="d-flex flex-row justify-content-between align-items-center my-1">
                                    <label class="title" for="">Description :</label>
                                    <textarea class="w-area" name="description" rows="4" value="{{ old('description', $candidate->experiences->description ?? null) }}"></textarea>
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
                                            <option value="{{ old('langue_1', $candidate->competences->langue_1 ?? null) }}">{{ old('langue_1', $candidate->competences->langue_1 ?? null) }}</option>
                                            <option>Arabe</option>
                                            <option>Français</option>
                                            <option>Anglais</option>
                                        </select>
                                        <select class="rounded-0 w-40 mx-2" name="niveau_langue_1">
                                            <option value="{{ old('niveau_langue_2', $candidate->competences->niveau_langue_1 ?? null) }}">{{ old('niveau_langue_1', $candidate->competences->niveau_langue_1 ?? null) }}</option>
                                            <option>Langue maternelle</option>
                                            <option>Courant</option>
                                            <option>Bon</option>
                                            <option>Moyen</option>
                                            <option>Notions</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-row justify-content-around align-items-center my-2">
                                        <select class="rounded-0 w-40" name="langue_2">
                                            <option value="{{ old('langue_2', $candidate->competences->langue_1 ?? null) }}">{{ old('langue_2', $candidate->competences->langue_2 ?? null) }}</option>
                                            <option>Arabe</option>
                                            <option>Français</option>
                                            <option>Anglais</option>
                                        </select>
                                        <select class="rounded-0 w-40 mx-2" name="niveau_langue_2">
                                            <option value="{{ old('niveau_langue_2', $candidate->competences->niveau_langue_2 ?? null) }}">{{ old('niveau_langue_2', $candidate->competences->niveau_langue_2 ?? null) }}</option>
                                            <option>Langue maternelle</option>
                                            <option>Courant</option>
                                            <option>Bon</option>
                                            <option>Moyen</option>
                                            <option>Notions</option>
                                        </select>
                                    </div>
                                    <div class="d-flex flex-row justify-content-around align-items-center my-2">
                                        <select class="rounded-0 w-40" name="langue_3">
                                            <option value="{{ old('langue_3', $candidate->competences->langue_3 ?? null) }}">{{ old('langue_3', $candidate->competences->langue_3 ?? null) }}</option>
                                            <option>Arabe</option>
                                            <option>Français</option>
                                            <option>Anglais</option>
                                        </select>
                                        <select class="rounded-0 w-40 mx-2" name="niveau_langue_3">
                                            <option value="{{ old('niveau_langue_3', $candidate->competences->niveau_langue_3 ?? null) }}">{{ old('niveau_langue_3', $candidate->competences->niveau_langue_3 ?? null) }}</option>
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
                                <input class="mb-1" type="checkbox" name="bureautique[]" value="{{ old('bureautique', $candidate->competences->bureautique ?? null) }}">
                                <input class="my-1" type="checkbox" name="bureautique[]" value="{{ old('bureautique', $candidate->competences->bureautique ?? null) }}">
                                <input class="my-1" type="checkbox" name="bureautique[]" value="{{ old('bureautique', $candidate->competences->bureautique ?? null) }}">
                                <input class="my-1" type="checkbox" name="bureautique[]" value="{{ old('bureautique', $candidate->competences->bureautique ?? null) }}">
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row justify-content-satrt align-items-center">
                            <label class="title" for="">Compétences spécifiques :</label>
                            <div class="d-flex flex-column ml-3 mt-3">
                                <input type="text" name="comp_specifiques" class="rounded-0 w-40" value="{{ old('comp_specifiques', $candidate->competences->comp_specifiques ?? null) }}">
                                <span class="text-green small">ex(PhotoShop, DreamWeaver, Flash....)</span>
                            </div>
                        </div>
                        <hr>
                        <div class="d-flex flex-row justify-content-start align-items-center my-4">
                            <label class="title" for="">Permis de conduire :</label>
                            <div class="d-flex flex-column">
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]" value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">A</span>
                                    <img src="/storage/images/a.jpg" alt="">
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]" value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">B</span>
                                    <img src="/storage/images/b.jpg" alt="">
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]" value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">C</span>
                                    <img src="/storage/images/c.jpg" alt="">
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]"  value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">D</span>
                                    <img src="/storage/images/d.jpg" alt="">
                                </div>
                            </div>
                            <div class="d-flex flex-column mx-5">
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]"  value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">EB</span>
                                    <img src="/storage/images/eb.jpg" alt="">
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]"  value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
                                    <span class="small text-green mx-2">EC</span>
                                    <img src="/storage/images/ec.jpg" alt="">
                                </div>
                                <div class="d-flex flex-row align-items-center">
                                    <input class="" type="checkbox" name="permis_conduire[]"  value="{{ old('permis_conduire', $candidate->competences->permis_conduire ?? null) }}">
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
                            <textarea class="form-control w-50 rounded-0" name="title" rows="5"value="{{ old('title', $candidate->activities->title ?? null) }}"></textarea>
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
                            <input class="form-control" type="file" name="cv"value="{{ old('file', $candidate->cvs->file ?? null) }}">
                        </div>
                    </div>
                </div>
                <!--/Cv personnel-->

                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-dark nav-bg border-0 btn-sm my-2 shadow-xl">Update</button>
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