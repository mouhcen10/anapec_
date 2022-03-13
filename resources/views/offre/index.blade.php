@extends('layouts.app')

@section('content')
    <div class="container p-0">
        <div class="principal col-md-12 d-flex flex-row p-0">
            <div class="first col-md-9 pl-0">
                <div class="w-100 p-0 bg-white rounded-top-right shadow-sm">
                    <div class="rounded-half mb-4 d-flex justify-content-start align-items-center bg-dark text-white">
                        <img class="mx-3" src="/storage/images/arrow.png" alt="">
                        Nos dernières offres
                    </div>
                    <span class="text-green my-5 px-3">Nombre d'offres emploi : <b>{{ count($offres) }}</b></span>
                    {{-- <span>{{ $ref }}</span> --}}
                    <div class="my-3">
                        <table class="table table-sm my-3">
                            <thead class="nav-bg text-white text-center small">
                                <th>Référence</th>
                                <th>Date de l'offre</th>
                                <th>Intitulé du Poste</th>
                                <th>Entreprise</th>
                                <th>Lieu de travail</th>
                            </thead>
                            <tbody>
                                @foreach ($offres as $offre)
                                <tr class="text-center">
                                    <td class="text-uppercase"><a href="{{ route('offres.show', ['offre' => $offre->id]) }}">{{ $offre->ref }}</a></td>
                                    <td> {{ $offre->date }} </td>
                                    <td> {{ $offre->poste }} </td>
                                    <td> - </td>
                                    <td> {{ $offre->lieu_travail }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="second col-md-3 bg-white p-0 rounded-top-right shadow-sm">
                <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                    <img class="mx-3" src="/storage/images/arrow.png" alt="">
                    Connexion
                </div>
                @if(!Auth::user())
                    <form method="POST" action="{{ route('login') }}" class="card-body pt-4 px-4">
                        @csrf
                        <div class="form-group">
                        <input type="email" name="email" class="form-control @error('email') is-invalid @enderror rounded-0 h-25" placeholder="Email" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="form-group">
                        <input type="password" name="password" class="form-control @error('password') is-invalid @enderror rounded-0 h-25" placeholder="Password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group d-flex justify-content-between align-items-center pl-3">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
                        <button style="background: var(--bg-green);" type="submit" class="btn btn-sm text-white">Ok</button>
                        </div>
                        @if (Route::has('password.request'))
                            <a class="nav-link text-grey small p-0" href="{{ route('password.request') }}">
                                {{ __('Mot de passe oublié ?') }}
                            </a>
                        @endif
                    </form>
                    <div class="d-flex flex-column align-items-center">
                        <a href="{{ route('candidates.create') }}" style="width: 90%;" class="btn btn-info mb-1 rounded-pill">Créer un espace candidat</a>
                        <a href="{{ route('professionals.create') }}" style="width: 90%;" class="btn btn-primary mb-1 rounded-pill">Créer un espace professionnel</a>
                    </div>
                @else
                    <div class="d-flex flex-column align-items-center p-2">
                    <?php 
                        $candidate = Auth::user()->candidate;
                    ?>
                    <img class="my-2 p-1 rounded-circle border-shadow w-pic" src="{{ Storage::url($candidate->image->path ?? '/images/avatar.jpg') }}" alt="">
                    <a class="btn btn-sm nav-bg rounded-pill text-white shadow-xl d-flex align-items-center" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-box-arrow-left mr-2" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0v2z"/>
                        <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3z"/>
                        </svg>
                        {{ __('Déconnexion') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    </div>
                @endif
                <div class="slider-2">
                    <x-slider></x-slider>
                </div>
            </div>
        </div>
    </div>
@endsection
