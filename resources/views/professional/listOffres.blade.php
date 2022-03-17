@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
                <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
                Votre espace personnel
            </div>
            <x-profess-menu></x-profess-menu>
            <div class="slider-2 mt-5">
                <x-slider></x-slider>
            </div>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
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
                <span class="f-90 mx-1 text-secondary">Vos Offres</span>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Vos offres d'emploi</span>
                </div>
                <div class="my-4">
                    <a class="btn btn-sm blue-bg text-white my-1" href="{{ route('offres.create') }}"><i class="fa fa-plus"></i></a>
                    <table class="table table-sm">
                        <thead class="thead-inverse blue-bg small">
                            <tr>
                                <th>Référence</th>
                                <th>Poste</th>
                                <th>Date</th>
                                <th>Etat</th>
                                <th>Description</th>
                                <th>Nbr postes</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($professional->offres as $offre)
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
                                    <td class="d-flex flex-row justify-content-between">
                                        <a class="btn btn-sm btn-info" href="{{ route('show-offre', [$professional->id,'offre' =>$offre->id]) }}"><i class="fa fa-eye"></i></a>
                                        <a class="btn btn-sm btn-warning" href="{{ route('offres.edit', ['offre' =>$offre->id]) }}"><i class="fa fa-edit"></i></a>
                                        <form method="POST" class="fm-inline" action="{{ route('offres.destroy', ['offre' =>$offre->id]) }}">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>  
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!--/Identification-->
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection