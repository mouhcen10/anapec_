@extends('layouts.app')

@section('content')
    <div class="container p-0">
      <div class="principal col-md-12 d-flex flex-row p-0">
        <div class="first col-md-9 pl-0">
            <div class="d-flex flex-column bg-white rounded-top-right p-0 shadow-sm">
              @if(Auth::user() && Auth::user()->is_prof == 1)
                <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
                  <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
                  Trouver un emploi
                </div>
              @else
                <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                  <img class="mx-3" src="/storage/images/arrow.png" alt="">
                  Trouver un emploi
                </div>
              @endif
              <div class="search d-flex flex-row my-3">
                <form method="GET" action="{{ route('offres-query') }}" class="frm-search card-body px-4 d-flex flex-row">
                  {{-- @csrf --}}
                    <div class="form-group d-flex flex-column">
                      <div>
                        <label for="">Mot clé:</label>
                        <input type="text" name="motCle" class="form-control rounded-0">
                      </div>
                      <div class="mb-3">
                        <label for="">Type:</label>
                        <select class="form-control rounded-0" name="type">
                            <option>Type</option>
                            <option>Stage pré-embouche</option>
                            <option>Stage Rémunéré</option>
                            <option>Stage Non Rémunéré</option>
                            <option>Freelance</option>
                            <option>Offre d'emploi</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group d-flex flex-column align-items-end ml-3">
                      <div class="mb-3">
                        <label for="">Ville:</label>
                        <select class="form-control rounded-0" name="ville">
                            <option>Tout</option>
                            <option>Agadir</option>
                            <option>Marrakech</option>
                            <option>Casablanca</option>
                            <option>Rabat</option>
                            <option>Tanger</option>
                        </select>
                      </div>
                      <button style="background: var(--bg-green);" type="submit" class="btn btn-sm text-white my-4 w-25"><i class="fa fa-search"></i></button>
                    </div>
                </form>
                <div class="map px-2">
                    <img src="/storage/images/map.png" alt="map">
                </div>
              </div>
            </div>
            <div class="entreprise d-flex flex-row justify-content-between mt-4">
                <div class="col-md-5 p-0 bg-white rounded-top-right shadow-sm">
                  @if(Auth::user() && Auth::user()->is_prof == 1)
                    <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
                      Les entreprises qui recrutent
                    </div>
                  @else
                    <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="/storage/images/arrow.png" alt="">
                      Les entreprises qui recrutent
                    </div>
                  @endif
                  <div class="ste d-flex flex-row flex-wrap justify-content-between p-3">
                    @foreach (\App\Models\Professional::all() as $professional)
                      <img class="w-h-78 m-2" src="{{ Storage::url($professional->logo) }}" alt="">
                    @endforeach
                  </div>
                </div>
                <div class="col-md-6 p-0 bg-white rounded-top-right shadow-sm">
                  @if(Auth::user() && Auth::user()->is_prof == 1)
                    <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
                      Les dernières offres
                    </div>
                  @else
                    <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="/storage/images/arrow.png" alt="">
                      Les dernières offres
                    </div>
                  @endif
                  <div>
                    <table class="table my-3">
                      <tbody>
                        @foreach (\App\Models\Offre::all() as $offre)
                          <tr>
                            <td class="d-flex flex-row justify-content-between"><a href="{{ route('offres.show',['offre' =>$offre->id]) }}">{{ $offre->poste }}</a>{{ $offre->lieu_travail }}</td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                    <hr>
                    <center><a class="btn btn-warning btn-sm my-2 shadow text-white" href="{{ route('offres.index') }}">Voir tout les offres</a></center>
                  </div>
                </div>
            </div>
        </div>
        <div class="second col-md-3 bg-white p-0 rounded-top-right shadow-sm">
          <x-login></x-login>
          @if(!Auth::user())
          <div class="d-flex flex-column align-items-center border-top pt-2">
            <a href="{{ route('candidates.create') }}" style="width: 90%;" class="btn btn-info mb-1 rounded-pill">Créer un espace candidat</a>
            <a href="{{ route('professionals.create') }}" style="width: 90%;" class="btn btn-primary mb-1 rounded-pill">Créer un espace professionnel</a>
          </div>
          @endif
          <div class="slider-2">
            <x-slider></x-slider>
          </div>
        </div>
      </div>
    </div>
@endsection
