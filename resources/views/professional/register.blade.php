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
                <input type="email" name="cin" class="form-control rounded-0 text-blue h-25" placeholder="CIN">
                </div>
                <div class="form-group">
                <input type="password" name="password" class="form-control rounded-0 text-blue h-25" placeholder="Password">
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
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Informations Employeur</span>
                </div>
                <form method="POST" action="{{ route('professionals.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="d-flex flex-column m-5">
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
@endsection