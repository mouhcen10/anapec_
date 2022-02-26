@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row m-0 p-0">
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
            <div class="bloc-bienvenue w-100 mb-3 p-1 d-flex flex-row justify-content-between">
                <span class="ml-3">Bienvenue {{ $candidate->prenom }} {{ $candidate->nom }}</span>
                <a class="nav-link text-green p-0 mr-3" href="{{ route('logout') }}"
                    onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Déconnexion') }}
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Vos Informations personnelles</span>
                </div>
                <div class="d-flex flex-row justify-content-between mt-5">
                    <div class="px-2">
                        <img style="width: 140px;height: 150px" class="mx-4" src="{{ Storage::url($candidate->image->path ?? 'images/avatar.jpg') }}" alt="">
                    </div>
                    <div class="bg-green-light mx-2 w-100 h-100">
                        <ul class="list-group d-flex flex-column">
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Email :</span>
                                    <span class="f-90">{{ $candidate->email }}</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">GSM :</span>
                                    <span class="f-90">{{ $candidate->gsm_1 }}</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Date dernière actualisation :</span>
                                    <span class="f-90">{{ $candidate->updated_at->format('d.m.Y') }}</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Agence rattachement :</span>
                                    <span class="f-90">{{ $candidate->province }}</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-between border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'activité :</span>
                                    <span class="f-90">Actif</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'inscription :</span>
                                    <span class="f-90">Déclaratif</span>
                                </li>
                            </div>
                            <div class="d-flex flex-row justify-content-center border-b-dashed">
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut de positionnement :</span>
                                    <span class="f-90">Non positionné</span>
                                </li>
                                <li class="m-2 bg-green-light border-0 d-flex w-50 flex-row justify-content-start align-items-center">
                                    <span class="text-grey small">Statut d'accompagnement :</span>
                                    <span class="f-90">Non accompagné</span>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div><div class="d-flex justify-content-end">
                    <button type="submit" class="btn m-2 nav-bg border-0 btn-sm shadow-xl text-white">Visualiser votre cv</button>
                    <button type="submit" class="btn m-2 btn-secondary border-0 btn-sm shadow">Actualiser votre cv</button>
                    <button type="submit" class="btn m-2 btn-warning border-0 btn-sm text-white shadow">Actualiser votre situation</button>
                </div>
            </div>
            <!--/Informations-->
            
            <!--/Statistiques-->
            <div class="d-flex flex-row justify-content-between mt-3">
                <div class="w-50 p-2 rounded-0 borded bg-white shadow-sm">
                    <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                        <div>
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Statistiques</span>
                        </div>
                        <img class="mx-2" src="/storage/images/statistique.png" alt="">
                    </div>
                    <ul class="list-group d-flex flex-column mt-4">
                        <div class="d-flex flex-row justify-content-between bg-green-light p-2">
                            <span class="text-grey small">Postulations effectuées</span>
                            <span class="f-90">17</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-2">
                            <span class="text-grey small">Candidatures en cours</span>
                            <span class="f-90">17</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between bg-green-light p-2">
                            <span class="text-grey small">Employeurs ayant lu votre CV</span>
                            <span class="f-90">0</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-2">
                            <span class="text-grey small">Messages reçus</span>
                            <span class="f-90">5</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between bg-green-light p-2">
                            <span class="text-grey small">Nouveaux messages</span>
                            <span class="f-90">0</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-2">
                            <span class="text-grey small">Alertes créées</span>
                            <span class="f-90">0</span>
                        </div>
                    </ul>
                </div>
                <div class="w-50 p-2 ml-1 rounded-0 borded bg-white shadow-sm">
                    <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                        <div>
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Vos Candidatures en cours</span>
                        </div>
                        <img class="mx-2" src="/storage/images/dernier_offre.png" alt="">
                    </div>
                    <div>
                        <table class="table my-4">
                            <thead class="bg-green-light text-secondary">
                                <th>Date</th>
                                <th>Référence</th>
                                <th>Entreprise</th>
                            </thead>
                            <tbody>
                                <tr class="text-center">
                                    <td>12/24/2022</td>
                                    <td>EL211218559539</td>
                                    <td>-</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/Statistiques-->
            
            <!--Dernières offres-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Les dernières offres qui correspondent à votre profil</span>
                </div>
                <div>
                    <table class="table my-4">
                        <thead class="nav-bg text-white small">
                            <th>Référence de l'offre</th>
                            <th>Date de l'offre</th>
                            <th>Intitulé du post</th>
                            <th>Entreprise</th>
                            <th>Lieu de travail</th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/Dernières offres-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection