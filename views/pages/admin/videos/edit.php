<?php 
	$titreVideo = (isset($video['titre']) && !empty($video['titre'])) ? $video['titre'] : null ;
	$contenuVideo = (isset($video['contenu']) && !empty($video['contenu'])) ? $video['contenu'] : null ;
	$dateVideo = (isset($video['date']) && !empty($video['date'])) ? $video['date'] : date("Y-m-d H:i:s"); ;
	$idVideo = (isset($video['id']) && !empty($video['id'])) ? $video['id'] : null ;
	$slugVideo = (isset($video['slug']) && !empty($video['slug'])) ? $video['slug'] : null ;
	$youtube_idVideo = (isset($video['youtube_id']) && !empty($video['youtube_id'])) ? $video['youtube_id'] : null ;
?>
<br />
<div class="btn-group">
	<a href="<?= WEBROOT ?>admin/videos"  class="btn btn-sm btn-info">List des videos</a>
	<a href="<?= WEBROOT ?>admin/videos/add"  class="btn btn-sm btn-primary">Ajouter</a>
</div>
<h3>Edit actu</h3>
<form action="" method="POST" role="form" enctype="multipart/form-data">
	
	<div class="form-group">
		<label for="titre">Titre</label>
		<input type="text" class="form-control" name='titre' id="titre" placeholder="Titre du Actumuniqué" <?= ($titreVideo !=null) ? "value='".htmlspecialchars_decode($titreVideo)."'" : "";?> >
	</div>
	<div class="form-group" style="display: none; ">
		<label for="slug">Alias</label>
		<input type="text" class="form-control" name='slug' id="slug" placeholder="Alias du Actumuniqué" <?= ($slugVideo !=null) ? "value='$slugVideo'" : "";?> >
	</div>
	<div class="form-group">
		<label for="youtube_id">Id youtube</label>
		<input type="text" class="form-control" name='youtube_id' id="youtube_id" placeholder="ID youtube" <?= ($youtube_idVideo !=null) ? "value='$youtube_idVideo'" : "";?> >
	</div>
	<div class="form-group">
		<label for="titre">Contenu</label>
		<textarea class="form-control" id="editor1" name='contenu' rows="10"><?= ($contenuVideo !=null) ? $contenuVideo : "";?></textarea>
	</div>

	<div class='form-group'>
		<label for='date'>Date de publication</label>
		<?= ($dateVideo !=null) ? "<input type='text' class='form-control' id='date' name='date' value='$dateVideo'>" : "";?>
	</div>


	<input type="hidden" name="id" id="id" <?= ($idVideo !=null) ? "value='$idVideo'" : "";?>>
	
	<button type="submit" class="btn btn-success">Enregister</button>
</form>