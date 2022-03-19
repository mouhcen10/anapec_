@extends('layouts.app')

@section('content')
<div class="container p-0">
    <div class="col-md-12 d-flex flex-row m-0 p-0">
        <!--Connexion-->
        <div class="col-md-3 rounded-top-right bg-white shadow-sm p-0">
            <x-login></x-login>
            <x-slider></x-slider>
        </div>
        <!--/Connexion-->
        <div class="col-md-9 pr-0">
            <div class="d-flex flex-row align-items-center my-2">
                <a href="/"><i class="fa fa-home text-dark mx-1"></i></a>/
                <span class="f-90 mx-1 text-secondary">Reset Password</span>
            </div>
            <div class="d-flex flex-column rounded-0 borded bg-white shadow-sm p-2">
                <div class="rounded-0 mx-2 d-flex justify-content-start align-items-center">
                    <img class="mx-2" src="/storage/images/arrow.png" alt="">
                    <span class="text-grey">Reset Password</span>
                </div>
                <form method="POST" action="{{ route('update-password') }}" class="my-5" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="d-flex flex-row justify-content-start align-items-center ml-72">
                        <label class="title_" for="">Email:<span class="text-danger">*</span></label>
                        <input type="email" name="email" class="rounded-0 w-40 ml-72">
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-center ml-72">
                        <label class="title_" for="">Nouveau Mot de passe :<span class="text-danger">*</span></label>
                        <input type="password" name="nouveau_password" class="rounded-0 w-40 ml-72">
                    </div>
                    <div class="d-flex flex-row justify-content-start align-items-center ml-72">
                        <label class="title_" for="">Confirmation Nouveau Mot de passe :<span class="text-danger">*</span></label>
                        <input type="password" name="c_nouveau_password" class="rounded-0 w-40 ml-72">
                    </div>
                    <button type="submit" class="btn btn-sm nav-bg shadow-xl text-white float-right px-4 mx-5 mt-3">Reset</button>
                </form>
            </div>
        </div>
    </div>
  </div>
@endsection

@section('script')
@endsection