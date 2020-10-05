@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Registreerimis vorm</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <input id="userIdBox" type="hidden" value="18">
                            <company-component></company-component>
                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Nimi</label>
                                <div class="col-md-6">
                                    <input id="name" type="text" class="reg form-control @error('name') is-invalid @enderror" name="name" required autofocus autocomplete="off">
                                    @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                                <slider-component>
                                </slider-component>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-mail</label>
                                <div class="col-md-6">
                                    <input id="email" type="email" class="reg form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Parool</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="reg form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Kinnita Parool</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="reg form-control" name="password_confirmation" required autocomplete="off">
                                </div>
                            </div>

                            <div class="form-group row mb-5">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Registreeri
                                    </button>
                                </div>
                            </div>
                                    <Users-Component>
                                    </Users-Component>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
