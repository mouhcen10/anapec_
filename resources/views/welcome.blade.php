@extends('layouts.app')

@section('content')
    <div class="container p-0">
      <div class="col-md-12 d-flex flex-row p-0">
          <div class="col-md-9 pl-0">
            <div class="d-flex flex-column bg-white rounded-top-right p-0 shadow-sm">
                <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                  <img class="mx-3" src="images/arrow.png" alt="">
                  Trouver un emploi
                </div>
                <div class="d-flex flex-row my-3">
                  <form class="card-body p-4 d-flex flex-row">
                      <div class="form-group d-flex flex-column">
                        <div>
                          <label for="">Mot clé:</label>
                          <input type="text" name="query" class="form-control rounded-0">
                        </div>
                        <div>
                          <label for="">Entreprise:</label>
                          <input type="text" name="society" class="form-control rounded-0">
                        </div>
                        <button style="background: var(--bg-green);" type="submit" class="btn btn-sm w-25 text-white my-3">Ok</button>
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
                  <div class="p-2">
                      <img src="images/map.png" alt="map">
                  </div>
                </div>
              </div>
              <div class="d-flex flex-row justify-content-between mt-4">
                  <div class="col-md-5 p-0 bg-white rounded-top-right shadow-sm">
                    <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="images/arrow.png" alt="">
                      Les entreprises qui recrutent
                    </div>
                    <div class="d-flex flex-row flex-wrap justify-content-between p-3">
                      <img class="w-h-78 m-2" src="images/img1.png" alt="">
                      <img class="w-h-78 m-2" src="images/img2.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img3.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img3.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img1.png" alt="">
                      <img class="w-h-78 m-2" src="images/img2.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img2.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img3.jpg" alt="">
                      <img class="w-h-78 m-2" src="images/img1.png" alt="">
                    </div>
                  </div>
                  <div class="col-md-6 p-0 bg-white rounded-top-right shadow-sm">
                    <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                      <img class="mx-3" src="images/arrow.png" alt="">
                      Les dernières offres
                    </div>
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
          <div class="col-md-3 bg-white p-0 rounded-top-right shadow-sm">
              <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
                <img class="mx-3" src="images/arrow.png" alt="">
                Connexion
              </div>
              {{-- <div class="d-flex flex-row justify-content-around align-items-center mt-3 mx-2">
                <div class="form-check mx-2">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                  <label class="form-check-label" for="exampleRadios1">
                    Candidat
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                  <label class="form-check-label" for="exampleRadios2">
                    Professionnel
                  </label>
                </div>
              </div> --}}
              <form method="POST" action="{{ route('login') }}" class="card-body pt-5 px-4">
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
                  <div class="form-group d-flex justify-content-between align-items-center">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
                    <button style="background: var(--bg-green);" type="submit" class="btn btn-sm text-white">Ok</button>
                  </div>
                  @if (Route::has('password.request'))
                      <a class="btn btn-link" href="{{ route('password.request') }}">
                          {{ __('Mot de passe oublié ?') }}
                      </a>
                  @endif
              </form>
              <div class="d-flex flex-column align-items-center">
                  <a href="/candidat" style="width: 240px;" class="btn btn-info mb-1 rounded-pill">Créer un espace candidat</a>
                  <a href="/candidat" style="width: 240px;" class="btn btn-primary mb-1 rounded-pill">Créer un espace professionnel</a>
              </div>
              <x-slider></x-slider>
          </div>
      </div>
    </div>
@endsection
