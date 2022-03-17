@extends('layouts.app')

@section('content')
    <div class="container p-0">
        <div class="principal col-md-12 d-flex flex-row p-0">
            <div class="first col-md-9 pl-0">
                <div class="w-100 p-0 pb-4 bg-white rounded-top-right shadow-sm">
                    <div class="rounded-half mb-4 d-flex justify-content-start align-items-center bg-dark text-white">
                        <img class="mx-3" src="/storage/images/arrow.png" alt="">
                        Nos dernières offres
                    </div>
                    <span class="text-green my-5 px-3">Nombre d'offres emploi : <b>{{ count($offres) }}</b></span>
                    <div class="mt-3">
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
                                    <td> {{ $offre->professional->entreprise }}  </td>
                                    <td> {{ $offre->lieu_travail }} </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="second col-md-3 bg-white p-0 rounded-top-right shadow-sm">
                <x-login></x-login>
                <div class="slider-2">
                    <x-slider></x-slider>
                </div>
            </div>
        </div>
    </div>
@endsection
