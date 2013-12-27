
<?php 
	$titreActu = (isset($actu['titre']) && !empty($actu['titre'])) ? $actu['titre'] : null ;
	$contenuActu = (isset($actu['contenu']) && !empty($actu['contenu'])) ? $actu['contenu'] : null ;
	$dateActu = (isset($actu['date']) && !empty($actu['date'])) ? $actu['date'] : date("Y-m-d H:i:s"); ;
	$idActu = (isset($actu['id']) && !empty($actu['id'])) ? $actu['id'] : null ;
	$slugActu = (isset($actu['slug']) && !empty($actu['slug'])) ? $actu['slug'] : null ;
?>
<br />
<div class="btn-group">
	<a href="<?= WEBROOT ?>admin/actus"  class="btn btn-sm btn-info">List des Actus</a>
	<a href="<?= WEBROOT ?>admin/actus/add"  class="btn btn-sm btn-primary">Ajouter</a>
</div>
<h3>Edit actu</h3>
<form action="" method="POST" role="form" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name='titre' id="titre" placeholder="Titre du Actu" <?= ($titreActu !=null) ? "value='".htmlspecialchars_decode($titreActu)."'" : "";?> >
	</div>
	<div class="form-group">
		<label for="slug">Alias</label>
		<input type="text" class="form-control" name='slug' id="slug" placeholder="Alias du Actu" <?= ($slugActu !=null) ? "value='$slugActu'" : "";?> >
	</div>
	<div class="form-group">
		<label >Contenu</label>
		<textarea class="form-control" id="editor1" name='contenu' rows="10"><?= ($contenuActu !=null) ? $contenuActu : "";?></textarea>
	</div>

	<div class='form-group'>
		<label for='date'>Date de publication</label>
		<?= ($dateActu !=null) ? "<input type='text' class='form-control' id='date' name='date' value='$dateActu'>" : "";?>
	</div>
	
	<div class='form-group'>
		<label >Image</label>
		<input type="file" name="image" class='form-control' />
	</div>


	<input type="hidden" name="id" id="id" <?= ($idActu !=null) ? "value='$idActu'" : "";?>>
	
	<button type="submit" class="btn btn-success">Enregister</button>
</form>