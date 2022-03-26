@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-12 d-flex flex-row p-0">
        <div class="second col-md-3 bg-white p-0 rounded-top-right shadow-sm">
            <x-login></x-login>
            <div class="slider-2">
              <x-slider></x-slider>
            </div>
        </div>
        <div class="first col-md-9">
            <div class="d-flex flex-row align-items-center my-2">
                <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>/
                <span class="f-90 mx-1 text-secondary">Envoyer lien de reset mot de passe</span>
            </div>
            <div class="rounded-0 borded bg-white">
                <div class="card-header bg-white rounded-0 border-0 shadow-sm">Reset Mot de passe</div>

                <div class="p-5">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">Adresse Email :</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn nav-bg shadow-xl text-white">
                                    {{ __('Envoyer Lien de reset mot de passe') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
