@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="glb col-md-12 d-flex flex-row m-0 p-0">
        <!--Connexion-->
        <div class="frst col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-candidate-menu></x-candidate-menu>
            <div class="slider-2">
                <x-atelier></x-atelier>
            </div>
        </div>
        <!--/Connexion-->
        <div class="scnd col-md-9 pr-0">
            <div class="bloc-bienvenue w-100 mb-3 p-1 d-flex flex-row justify-content-between">
                <span class="ml-3"><b>Bienvenue {{ Str::upper($candidate->prenom) }} {{ Str::upper($candidate->nom) }} à votre espace personnel</b></span>
                <a class="nav-link text-green p-0 mr-3" href="{{ route('logout') }}"
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
                <span class="f-90 mx-1 text-secondary">Espace personnel</span>
            </div>
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Vos Informations personnelles</span>
                </div>
                <div class="info d-flex flex-row justify-content-between mt-5">
                    <div class="photo">
                        <img style="width: 140px;height: 150px" class="mx-4 border shadow" src="{{ Storage::url($candidate->image->path ?? 'images/avatar.jpg') }}" alt="">
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
                            <div class="statut d-flex flex-row justify-content-center border-b-dashed">
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
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn m-2 nav-bg border-0 btn-sm shadow-xl text-white" data-toggle="modal" data-target="#staticBackdrop">Visualiser votre cv</button>
                    <a href="{{ route('candidates.edit', ['candidate' => $candidate->id]) }}" class="btn m-2 btn-secondary border-0 btn-sm shadow">Actualiser votre cv</a>
                </div>
            </div>
            <!--/Informations-->
            <div class="">
                @include('candidat.modal')
            </div>
            
            <!--/Statistiques-->
            <div class="stc d-flex flex-row justify-content-between mt-3">
                <div class="one w-50 p-2 rounded-0 borded bg-white shadow-sm">
                    <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                        <div>
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Statistiques</span>
                        </div>
                        <img class="mx-2" src="/storage/images/statistique.png" alt="">
                    </div>
                    <ul class="list-group d-flex flex-column mt-3">
                        <div class="d-flex flex-row justify-content-between bg-green-light p-2">
                            <span class="text-grey small">Postulations effectuées</span>
                            <span class="f-90">{{ count($candidate->postulations) }}</span>
                        </div>
                        <div class="d-flex flex-row justify-content-between p-2">
                            <span class="text-grey small">Candidatures en cours</span>
                            <span class="f-90">{{ count($candidate->postulations) }}</span>
                        </div>
                    </ul>
                </div>
                <div class="two w-50 p-2 ml-1 rounded-0 borded bg-white shadow-sm">
                    <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                        <div>
                            <img class="mx-2" src="/storage/images/arrow.png" alt="">
                            <span class="text-grey">Vos Candidatures en cours</span>
                        </div>
                        <img class="mx-2" src="/storage/images/dernier_offre.png" alt="">
                    </div>
                    <div>
                        <table class="table table-sm table-bordred my-4">
                            <thead class="bg-green-light text-secondary">
                                <th class="text-center f-13">Date</th>
                                <th class="text-center f-13">Référence</th>
                                <th class="text-center f-13">Entreprise</th>
                            </thead>
                            <tbody>
                                @foreach ($candidate->postulations as $postule)
                                <tr class="text-center">
                                    <td>{{ $postule->offre->date }}</td>
                                    <td>{{ $postule->offre->ref }}</td>
                                    <td>{{ $postule->offre->professional->entreprise }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/Statistiques-->
            
            <!--Dernières offres-->
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2 mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="mx-2" src="/storage/images/arrow.png" alt="">
                        <span class="text-grey">Les dernières offres qui correspondent à votre profil</span>
                    </div>
                    <img class="mx-2" src="/storage/images/candidature.png" alt="">
                </div>
                <div>
                    <table class="table table-sm my-4">
                        <thead class="nav-bg text-white small">
                            <th>Référence de l'offre</th>
                            <th>Date de l'offre</th>
                            <th>Intitulé du poste</th>
                            <th>Entreprise</th>
                            <th>Lieu de travail</th>
                        </thead>
                        <tbody>
                            @if(count($candidate->formations) != 0)
                                @foreach ($offres as $offre)
                                    <tr>
                                        <td>{{ $offre->ref }}</td>
                                        <td>{{ $offre->date }}</td>
                                        <td>{{ $offre->poste }}</td>
                                        <td>{{ $offre->professional->entreprise }}</td>
                                        <td>{{ $offre->lieu_travail }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end my-3">
                        <a class="btn nav-bg border-0 btn-sm shadow-xl text-white" href="{{ route('offres.index') }}">Voir toutes les offres</a>
                    </div>
                </div>
            </div>
            <!--/Dernières offres-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection