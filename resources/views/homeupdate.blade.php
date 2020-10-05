@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Muuda kasutajat</div>
                <div class="card-body">
                    <form action = "/edit/<?php echo $users[0]->id; ?>" method = "post">
                        <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
                        <input id="userIdBox" type="hidden" value="<?php echo $users[0]->age ?? 18; ?>">

                        @if($users[0]->company > 0)
                        <div class="form-group row">
                            <label for="companyName" class="col-md-4 col-form-label text-md-right">Ettevõtte nimi</label>
                            <div class="col-md-6">
                                <input id="companyName" type="text" class="reg form-control" name="companyName" autofocus autocomplete="off" value = '<?php echo$users[0]->companyName; ?>'>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="companyCode" class="col-md-4 col-form-label text-md-right">Ettevõtte registrikood</label>
                            <div class="col-md-6">
                                <input id="companyCode" type="number" class="reg form-control" name="companyCode" autofocus autocomplete="off" value = '<?php echo$users[0]->companyCode; ?>' maxlength="8">
                            </div>
                        </div>
                        @endif

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nimi</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="reg form-control @error('name') is-invalid @enderror" name="name" required autofocus autocomplete="off" value = '<?php echo$users[0]->name; ?>'>
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
                                <input id="email" type="email" class="reg form-control @error('email') is-invalid @enderror" name="email" required autocomplete="off" value = '<?php echo$users[0]->email; ?>'>
                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">Uus parool</label>
                            <div class="col-md-6">
                                <input id="password" type="password" class="reg form-control @error('password') is-invalid @enderror" name="password" autocomplete="off">
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
                                <input id="password-confirm" type="password" class="reg form-control" name="password_confirmation" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-2 offset-md-4">
                                <button type="submit" id="btnSubmit" name="edit" class="btn btn-primary">
                                    Uuenda
                                </button>
                            </div>
                            <div class="col-md-2 offset-md-2">
                                <button type="submit" id="btnDelete" formaction="/delete/<?php echo $users[0]->id; ?>" name="delete" class="btn btn-danger">
                                    Kustuta
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
