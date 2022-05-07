@extends('layouts.app')
@section('content')



    <div class="row">
        <div class="col-md-8 offset-md-2 px-3 py-3 pt-md-4 pb-md-4">
            <div class="card">
                <div class="card-header">Nouveau cours</div>

                <div class="card-body">
                    <form class="form-horizontal" method="POST">
                        <?php echo csrf_field() ?>
					
					
						<div class="row mb-3">
							<label for="course_name" class="col-sm-3 offset-sm-1 col-form-label">Nom</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="nom" name="nom">
							</div>
						</div>
						<div class="row mb-3">
							<label for="icon_url" class="col-sm-3 offset-sm-1 col-form-label">URL icone</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="icone" name="icone">
							</div>
						</div>
						<div class="row mb-3">
							<label for="description" class="col-sm-3 offset-sm-1 col-form-label">Description</label>
							<div class="col-sm-7">
							  <input type="text" class="form-control" id="description" name="description">
							</div>
						</div>
						<div class="row mb-3">
							<label for="course_text" class="col-sm-3 offset-sm-1 col-form-label">Texte</label>
							<div class="col-sm-7">
							  <textarea class="form-control" rows="7" id="texte" name="texte">Hello, World!</textarea>
							</div>
						</div>
						
						
						
						<div class="row mb-3">
							<div class="offset-sm-4 col-sm-7">
							  <button type="submit" class="btn btn-primary">Envoyer</button>
							</div>
						</div>
					

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>






@endsection

