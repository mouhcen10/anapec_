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
                <form class="frm-search card-body px-4 d-flex flex-row">
                    <div class="form-group d-flex flex-column">
                      <div>
                        <label for="">Mot clé:</label>
                        <input type="text" name="query" class="form-control rounded-0">
                      </div>
                      <div>
                        <label for="">Entreprise:</label>
                        <input type="text" name="society" class="form-control rounded-0">
                      </div>
                      <button style="background: var(--bg-green);" type="submit" class="btn btn-sm w-50 text-white my-3">Ok</button>
                    </div>
                    <div class="form-group d-flex flex-column ml-3">
                      <div>
                        <label for="">Secteur d'activité:</label>
                        <select class="form-control rounded-0" name="secteur">
                            <option>Tout</option>
                            <option>Informatique et Multimedia</option>
                            <option>Services Doméstique</option>
                            <option>Construction</option>
                            <option>Santé</option>
                            <option>Assurance</option>
                        </select>
                      </div>
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
                    <img class="w-h-78 m-2" src="/storage/images/img1.png" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img2.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img3.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img9.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img8.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img1.png" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img7.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img3.jpg" alt="">
                    <img class="w-h-78 m-2" src="/storage/images/img2.jpg" alt="">
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
                        <tr>
                          <td><a href="#">Responsable de production Textile</a></td>
                          <td>Marrakech</td>
                        </tr>
                        <tr>
                          <td><a href="#">Développeur Informatique</a></td>
                          <td>Casablanca</td>
                        </tr>
                        <tr>
                          <td><a href="#">Dessinateur du bâtiment</a></td>
                          <td>Rabat</td>
                        </tr>
                        <tr>
                          <td><a href="#">Conducteur routier de transport de marchandises</a></td>
                          <td>Agadir</td>
                        </tr>
                      </tbody>
                    </table>
                    <hr>
                    <center><a class="btn btn-warning btn-sm my-2" href="#">Voir tout les offres</a></center>
                  </div>
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
