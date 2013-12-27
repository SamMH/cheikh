<?php 
	$titrePresse = (isset($presse['titre']) && !empty($presse['titre'])) ? $presse['titre'] : null ;
	$contenuPresse = (isset($presse['contenu']) && !empty($presse['contenu'])) ? $presse['contenu'] : null ;
	$datePresse = (isset($presse['date']) && !empty($presse['date'])) ? $presse['date'] : date("Y-m-d H:i:s"); ;
	$idPresse = (isset($presse['id']) && !empty($presse['id'])) ? $presse['id'] : null ;
	$slugPresse = (isset($presse['slug']) && !empty($presse['slug'])) ? $presse['slug'] : null ;
?>
<br />
<div class="btn-group">
	<a href="<?= WEBROOT ?>admin/presse"  class="btn btn-sm btn-info">List des presses</a>
	<a href="<?= WEBROOT ?>admin/presse/add"  class="btn btn-sm btn-primary">Ajouter</a>
</div>
<h3>Edit Presse</h3>
<form action="" method="POST" role="form" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name='titre' id="titre" placeholder="Titre du Presse" <?= ($titrePresse !=null) ? "value='".htmlspecialchars_decode($titrePresse)."'" : "";?> >
	</div>
	<div class="form-group">
		<label for="slug">Alias</label>
		<input type="text" class="form-control" name='slug' id="slug" placeholder="Alias du Presse" <?= ($slugPresse !=null) ? "value='$slugPresse'" : "";?> >
	</div>
	<div class="form-group">
		<label for="titre">Contenu</label>
		<textarea class="form-control" id="editor1" name='contenu' rows="10"><?= ($contenuPresse !=null) ? $contenuPresse : "";?></textarea>
	</div>

	<div class='form-group'>
		<label for='date'>Date de publication</label>
		<?= ($datePresse !=null) ? "<input type='text' class='form-control' id='date' name='date' value='$datePresse'>" : "";?>
	</div>
	
	<div class='form-group'>
		<label for='date'>Image</label>
		<input type="file" name="image" class='form-control' />
	</div>


	<input type="hidden" name="id" id="id" <?= ($idPresse !=null) ? "value='$idPresse'" : "";?>>
	
	<button type="submit" class="btn btn-success">Enregister</button>
</form>