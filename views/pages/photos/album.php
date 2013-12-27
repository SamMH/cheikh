<div class="container">
	<a href="<?= WEBROOT?>photos"><i class="icon-chevron-left btn bnt-link" style="font-size: 10px;"></i> Revenir à la liste des articles</a>
	<h3><?= $photo['titre']?></h3>
		<img src="<?= WEBROOT."views/uplaods/photos/".$photo['image'] ?>" width="100%">
		<p class="auteur">CHeikh Mc, le <?= $photo['date']?></p>
		<p><?= htmlspecialchars_decode($photo['contenu'])?></p>
</div>