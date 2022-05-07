@extends('layouts.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">Nous contacter</div>

                <div class="card-body">
                    <?php if (isset($_POST['submit'])) { ?>
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Votre message a été envoyé correctement.</strong>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    <?php } ?>

                    <form class="form-horizontal" method="POST">
                        <?php echo csrf_field() ?>

                        <div class="row mb-3">
                            <label class="col-sm-3 offset-sm-1 col-form-label">Adresse</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">Avenue de l'environnement 5019 Monastir -TUNISIE</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 offset-sm-1 col-form-label">Téléphone</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">+216 73 500 276</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-3 offset-sm-1 col-form-label">Email</label>
                            <div class="col-sm-7">
                                <p class="form-control-plaintext">fsm@fsm.rnu.tn</p>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-sm-3 offset-sm-1 col-form-label">Nom *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('name')) is-invalid
                                @endif" id="name" name="name" value="{{ old('name') }}">
                                @if ($errors->has('name'))
                                <div class="invalid-feedback">{{ $errors->first('name') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="email" class="col-sm-3 offset-sm-1 col-form-label">Adresse Email *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('email')) is-invalid
                                @endif" id="email" name="email" value="{{ old('email') }}">
                                @if ($errors->has('email'))
                                <div class="invalid-feedback">{{ $errors->first('email') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-sm-3 offset-sm-1 col-form-label">Téléphone</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="subject" class="col-sm-3 offset-sm-1 col-form-label">Sujet *</label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @if ($errors->has('subject')) is-invalid
                                @endif" id="subject" name="subject" value="{{ old('subject') }}">
                                @if ($errors->has('subject'))
                                <div class="invalid-feedback">{{ $errors->first('subject') }}</div>
                                @endif
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="message" class="col-sm-3 offset-sm-1 col-form-label">Message</label>
                            <div class="col-sm-7">
                                <textarea class="form-control @if ($errors->has('message')) is-valid
                                @endif" rows="7" id="message" name="message">
                                </textarea>
                                @if ($errors->has('message'))
                                <div class="invalid-feedback">{{ $errors->first('message') }}</div>
                                @endif

                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="offset-sm-4 col-sm-7">
                                <p>(*) Champs obligatoires</p>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="offset-sm-4 col-sm-7">
                                <button type="submit" id="submit" name="submit" class="btn btn-primary">Envoyer</button>
                            </div>
                        </div>


                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection