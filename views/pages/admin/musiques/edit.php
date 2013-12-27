
<?php 
	$titreMusique = (isset($musique['titre']) && !empty($musique['titre'])) ? $musique['titre'] : null ;
	$contenuMusique = (isset($musique['contenu']) && !empty($musique['contenu'])) ? $musique['contenu'] : null ;
	$pisteMusique = (isset($musique['piste']) && !empty($musique['piste'])) ? $musique['piste'] : null ;
	$dateMusique = (isset($musique['date']) && !empty($musique['date'])) ? $musique['date'] : date("Y-m-d H:i:s"); ;
	$idMusique = (isset($musique['id']) && !empty($musique['id'])) ? $musique['id'] : null ;
	$slugMusique = (isset($musique['slug']) && !empty($musique['slug'])) ? $musique['slug'] : null ;
?>
<br />
<div class="btn-group">
	<a href="<?= WEBROOT ?>admin/musiques"  class="btn btn-sm btn-info">List des musiques</a>
	<a href="<?= WEBROOT ?>admin/musiques/add"  class="btn btn-sm btn-primary">Ajouter</a>
</div>
<h3>Edit Musique</h3>
<form action="" method="POST" role="form" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name='titre' id="titre" placeholder="Titre du Musique" <?= ($titreMusique !=null) ? "value='".htmlspecialchars_decode($titreMusique)."'" : "";?> >
	</div>

	<div class="form-group">
		<label for="slug">Alias</label>
		<input type="text" class="form-control" name='slug' id="slug" placeholder="Alias du Musique" <?= ($slugMusique !=null) ? "value='$slugMusique'" : "";?> >
	</div>

	<div class="form-group">
		<label for="titre">Piste</label>
		<textarea class="form-control" id="editor1" name='piste' rows="10"><?= ($pisteMusique !=null) ? $pisteMusique : "";?></textarea>
	</div>

	<div class="form-group">
		<label for="titre">Description</label>
		<textarea class="form-control" id="editor2"  name='contenu' rows="10"><?= ($contenuMusique !=null) ? $contenuMusique : "";?></textarea>
	</div>

	<div class='form-group'>
		<label for='date'>Date de publication</label>
		<?= ($dateMusique !=null) ? "<input type='text' class='form-control' id='date' name='date' value='$dateMusique'>" : "";?>
	</div>
	
	<div class='form-group'>
		<label >Image</label>
		<input type="file" name="image" class='form-control' />
	</div>


	<input type="hidden" name="id" id="id" <?= ($idMusique !=null) ? "value='$idMusique'" : "";?>>
	
	<button type="submit" class="btn btn-success">Enregister</button>
</form>