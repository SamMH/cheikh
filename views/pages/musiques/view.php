<div class="container">
	
	<div class="row">
		<div class="col-md-12" style="text-align: center">

			<a style="text-align: center"href="<?= WEBROOT?>musiques" class="btn btn-default btn-sm"><i class="icon-chevron-left" style="font-size: 10px;"></i> REVENIR A LA LISTE DES ALBUMS</a>
	
			<br /><br /><img src="<?= WEBROOT."views/uplaods/musiques/".$musique['image'] ?>" width="50%">
			<h1 class="titre-gros-bis"><?= $musique['titre']?></h1>
			
			<br /><p class="auteur">Sorti en <?= $musique['date']?> <br /><br />TRACKLIST:</p>
			<div><?= htmlspecialchars_decode($musique['piste'])?></div>

			<br /><p><?= htmlspecialchars_decode($musique['contenu'])?></p>

			<br /><ul style="margin: 0; padding: 0">
			<li style="display: inline-block; vertical-align: top;"><div class="fb-share-button" data-href="<?= $_SERVER['REQUEST_URI'] ?>" data-type="button_count"></div></li>
			<li style="display: inline-block; vertical-align: top;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a></li>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</ul>
		
		</div>

		
	</div>
</div>