@if(Auth::user() && Auth::user()->is_prof == 1)
    <div class="rounded-half-blue d-flex justify-content-start align-items-center bg-dark text-white">
    <img class="mx-3" src="/storage/images/arrow-blue.png" alt="">
    Connexion
    </div>
@else
    <div class="rounded-half d-flex justify-content-start align-items-center bg-dark text-white">
    <img class="mx-3" src="/storage/images/arrow.png" alt="">
    Connexion
    </div>
@endif
@if(!Auth::user())
    <form method="POST" action="{{ route('login') }}" class="pt-4 px-4">
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
    </form>
    <a class="nav-link text-grey small m-3 p-0" href="{{ route('reset-password') }}">
        {{ __('Mot de passe oublié ?') }}
    </a>
@else
    <div class="d-flex flex-column align-items-center p-2">
        <?php 
            $professional = Auth::user()->professional;
        ?>
        @if(Auth::user()->is_prof == 1)
            @if($professional->logo)
                <img class="my-2 p-1 rounded-circle border-shadow-blue w-pic" src="{{ Storage::url($professional->logo) }}" alt="">
            @else
                <img class="my-2 p-1 rounded-circle border-shadow-blue w-pic" src="/storage/images/avatar.jpg" alt="">
            @endif
            <div class="d-flex flex-row">
                <a class="btn btn-sm blue-bg rounded-pill text-white shadow-xl d-flex align-items-center" href="{{ route('logout') }}"
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
                <a class="btn btn-sm blue-bg mx-1 rounded-pill text-white shadow-xl d-flex align-items-center" href="{{ route('professionals.show', ['professional' =>Auth::user()->professional->id]) }}">
                    <i class="fa fa-user mx-1"></i>
                    Mon profile
                </a>
            </div>
        @else
            <?php 
                $candidate = Auth::user()->candidate;
            ?>
            @if($candidate->image)
                <img class="my-2 p-1 rounded-circle border-shadow-blue w-pic" src="{{ Storage::url($candidate->image) }}" alt="">
            @else
                <img class="my-2 p-1 rounded-circle border-shadow-blue w-pic" src="/storage/images/avatar.jpg" alt="">
            @endif
            <div class="d-flex flex-row">
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
            <a class="btn btn-sm nav-bg mx-1 rounded-pill text-white shadow-xl d-flex align-items-center" href="{{ route('candidates.show', ['candidate' =>Auth::user()->candidate->id]) }}">
                <i class="fa fa-user mx-1"></i>
                Mon profile
            </a>
            </div>
        @endif
    </div>
@endif