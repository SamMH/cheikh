
<?php 
	$titrePhoto = (isset($photo['titre']) && !empty($photo['titre'])) ? $photo['titre'] : null ;
	$contenuPhoto = (isset($photo['contenu']) && !empty($photo['contenu'])) ? $photo['contenu'] : null ;
	$datePhoto = (isset($photo['date']) && !empty($photo['date'])) ? $photo['date'] : date("Y-m-d H:i:s"); ;
	$idPhoto = (isset($photo['id']) && !empty($photo['id'])) ? $photo['id'] : null ;
	$slugPhoto = (isset($photo['slug']) && !empty($photo['slug'])) ? $photo['slug'] : null ;
?>
<br />
<div class="btn-group">
	<a href="<?= WEBROOT ?>admin/photos"  class="btn btn-sm btn-info">List des photos</a>
	<a href="<?= WEBROOT ?>admin/photos/add"  class="btn btn-sm btn-primary">Ajouter</a>
</div>
<h3>Edit Photo</h3>
<form action="" method="POST" role="form" enctype="multipart/form-data" style="width:100%">
	<div class="row">
		<div class="col-md-9">
			<div class="form-group">
				<label for="titre">Titre de la photo</label>
				<input type="text" class="form-control" name='titre' id="titre" placeholder="Titre de la photo" <?= ($titrePhoto !=null) ? "value='".htmlspecialchars_decode($titrePhoto)."'" : "";?> >
			</div>
			<input type="hidden" class="form-control" name='slug' id="slug" placeholder="Alias du Photo" <?= ($slugPhoto !=null) ? "value='$slugPhoto'" : "";?> >
			<div class="form-group">
				<label for="titre">Description</label>
				<textarea class="form-control" id="editor1"  name='contenu' rows="10"><?= ($contenuPhoto !=null) ? $contenuPhoto : "";?></textarea>
			</div>
			<div class='form-group'>
				<label for='date'>Date de publication</label>
				<?= ($datePhoto !=null) ? "<input type='text' class='form-control' id='date' name='date' value='$datePhoto'>" : "";?>
			</div>
			<div class='form-group'>
				<label for='date'>Couverture</label>
				<input type="file" name="image" class='form-control' />
			</div>
			<input type="hidden" name="id" id="id" <?= ($idPhoto !=null) ? "value='$idPhoto'" : "";?>>
			<button type="submit" class="btn btn-success">Enregister</button>
		</div>
		<div class="col-md-3">
			<div class="radio">
				<label>
				<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
					Option one is
				</label>
			</div>
			<div class="radio">
				<label>
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Option two can be something
				</label>
			</div>
			<div class="radio">
				<label for="titre_album">
				<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
					Nouvel album
				</label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" name='titre_album' id="titre_album" placeholder="Titre du nouvel album">
			</div>
		</div>
	</div>
</form>