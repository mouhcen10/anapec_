@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="glb col-md-12 d-flex flex-row m-0 p-0">
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
                <span class="f-90 mx-1 text-secondary">Espace personnel</span>
            </div>
            <!--Informations-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Vos Informations</span>
                </div>
                <div class="info d-flex flex-row justify-content-between mt-5">
                    <div class="photo">
                        @if($professional->logo != null)
                            <img style="width: 140px;height: 150px" class="mx-4 border shadow" src="{{ Storage::url($professional->logo) }}" alt="">
                        @else
                            <img style="width: 140px;height: 150px" class="mx-4 border shadow" src="/storage/images/avatar.jpg" alt="">
                        @endif
                    </div>
                    <div class="bg-grey w-100 h-100">
                        <ul class="list-group d-flex flex-column">
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Email :</span>
                                    <span class="f-90 mx-5">{{ $professional->email }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row ">
                                    <span class="text-blue small font-weight-bold">GSM / Tél :</span>
                                    <span class="f-90 mx-5">{{ $professional->gsm }} / {{ $professional->tel }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Adresse :</span>
                                    <span class="f-90 mx-5">{{ $professional->adress }}</span>
                                </li>
                            </div>
                            <div class="border-b-dashed">
                                <li class="m-2 bg-grey border-0 d-flex flex-row">
                                    <span class="text-blue small font-weight-bold">Ville :</span>
                                    <span class="f-90 mx-5">{{ $professional->ville }}</span>
                                </li>
                            </div>
                        </ul>
                    </div>
                </div>
                <div class="d-flex justify-content-end">
                    <a href="{{ route('professionals.edit', ['professional' => $professional->id]) }}" class="btn my-2 blue-bg border-0 btn-sm shadow-xl">Modifier votre compte</a>
                </div>
            </div>
            <!--/Informations-->
            
            <!--/Statistiques-->
            <div class="rounded-0 borded-blue bg-white shadow-sm mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                        <span class="text-grey">Statistiques</span>
                    </div>
                    <img class="m-2" src="/storage/images/statistique.png" alt="">
                </div>
                <div class="d-flex flex-column mt-3">
                    <ul class="d-flex flex-row justify-content-between mb-0 py-2 px-4 bg-grey">
                        <span class="text-grey small">Offres déposées</span>
                        <span class="f-90 ml-3">{{ count($professional->offres) }}</span>
                        <span class="text-grey small mr-2">Offres en cours</span>
                        <span class="f-90">{{ $en_cours }}</span>
                    </ul>
                    <ul class="d-flex flex-row justify-content-between mt-0 py-2 px-4">
                        <span class="text-grey small">Offres suspendues</span>
                        <span class="f-90">{{ $suspendue }}</span>
                        <span class="text-grey small">Offres conclues</span>
                        <span class="f-90">{{ $conclue }}</span>
                    </ul>
                </div>
            </div>
            <!--/Statistiques-->
            
            <!--Dernières offres-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2 mt-3">
                <div class="rounded-0 mx-2 d-flex justify-content-between align-items-center">
                    <div>
                        <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                        <span class="text-grey">Vos dernières offres</span>
                    </div>
                    <img class="mx-2" src="/storage/images/dernier-offre-blue.png" alt="">
                </div>
                <div class="tbl">
                    <table class="table table-sm my-4">
                        <thead class="blue-bg text-white small">
                            <th>Référence</th>
                            <th>Poste</th>
                            <th>Date</th>
                            <th>Etat</th>
                            <th>Description</th>
                            <th>Nbr postes</th>
                        </thead>
                        <tbody>
                            @foreach ($lastOffres as $offre)
                                <tr>
                                    <td>{{ $offre->ref }}</td>
                                    <td>{{ $offre->poste }}</td>
                                    <td>{{ $offre->date }}</td>
                                    <td>
                                        @if($offre->etat == 'En cours')
                                        <span class="badge badge-success text-white">{{ $offre->etat }}</span>
                                        @elseif($offre->etat == 'Suspendue')
                                        <span class="badge badge-danger text-white">{{ $offre->etat }}</span>
                                        @else
                                        <span class="badge badge-warning text-white">{{ $offre->etat }}</span>
                                        @endif
                                    </td>
                                    <td>{{ substr($offre->description,0,30) }}...</td>
                                    <td>{{ $offre->nbr_postes }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-end my-3">
                        <a class="btn blue-bg border-0 btn-sm shadow-xl text-white" href="{{ route('profOffres', ['professional' =>$professional->id]) }}">Voir toutes les offres</a>
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