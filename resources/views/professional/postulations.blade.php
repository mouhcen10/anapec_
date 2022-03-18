@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-profess-menu></x-profess-menu>
            <x-slider></x-slider>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
            <?php 
                $professional = Auth::user()->professional;    
            ?>
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
                <span class="f-90 mx-1 text-secondary">Postulations</span>
            </div>
            <!--Identification-->
            <div class="d-flex flex-column rounded-0 borded-blue bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow-blue.png" alt="">
                    <span class="text-grey">Liste des postulations</span>
                </div>
                <div class="my-4">
                    <table class="table table-sm table-responsive">
                        <thead class="thead-inverse blue-bg small">
                            <tr>
                                <th>Référence</th>
                                <th>Poste</th>
                                <th>Date</th>
                                <th>Etat</th>
                                <th>Nbr postes</th>
                                <th>Motivations</th>
                                <th>CV</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($postulations as $postule)
                                @if($postule->offre->professional_id == Auth::user()->professional->id)
                                <tr>
                                    <td>{{ $postule->offre->ref }}</td>
                                    <td>{{ $postule->offre->poste }}</td>
                                    <td>{{ $postule->offre->date }}</td>
                                    <td>
                                        @if($postule->offre->etat == 'En cours')
                                        <span class="badge badge-success text-white">{{ $postule->offre->etat }}</span>
                                        @elseif($postule->offre->etat == 'Suspendue')
                                        <span class="badge badge-danger text-white">{{ $postule->offre->etat }}</span>
                                        @else
                                        <span class="badge badge-warning text-white">{{ $postule->offre->etat }}</span>
                                        @endif
                                    </td>
                                    <td>{{ $postule->offre->nbr_postes }}</td>
                                    <td>{{ $postule->motivations }}</td>
                                    <td>
                                        @foreach($postule->candidate->cvs as $cv)
                                            <div class="d-flex flex-row align-items-center my-1">
                                                <img style="width: 30px;height:30px;" src="/storage/images/cv.png" alt="">
                                                <a class="nav-link" href="{{ route('download', ['cv' => $cv->id]) }}">{{ basename($cv->file) }}</a>
                                            </div>
                                        @endforeach
                                    </td>
                                </tr> 
                                @endif 
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