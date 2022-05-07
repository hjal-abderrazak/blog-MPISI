@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">S'inscrire</div>

                <div class="card-body">

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 control-label">Nom*</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @if($errors->has('name')) is-invalid @endif" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>
                        
                        
                        <divdiv class="row mb-3">
                            <label for="email" class="col-md-4 control-label">Adresse Email *</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @if($errors->has('email')) is-invalid @endif" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                       <div class="row mb-3">
                            <label for="phone" class="col-md-4 control-label">Téléphone</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone" value="">

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 control-label">Mot de passe*</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @if($errors->has('password')) is-invalid @endif" name="password">

                                @if ($errors->has('password'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirmé le Mot de passe*') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" autocomplete="new-password">
                            </div>
                        </div>


                        <div class="row mb-3">
                            <label for="adresse" class="col-md-4 control-label">Adresse postale</label>

                            <div class="col-md-6">
                                <input id="adresse" type="text" class="form-control" name="adresse">


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="ville" class="col-md-4 control-label">Ville</label>

                            <div class="col-md-6">
                                <input id="ville" type="text" class="form-control" name="ville">


                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="code_postale" class="col-md-4 control-label">Code postale</label>

                            <div class="col-md-6">
                                <input id="code_postale" type="text" class="form-control" name="code_postale">


                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
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