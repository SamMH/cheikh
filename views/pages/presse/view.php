<div class="container">
	<a href="<?= WEBROOT?>presse" class="btn btn-default btn-sm"><i class="icon-chevron-left" style="font-size: 10px;"></i> REVENIR A LA LISTE DES ARTICLES</a>
	
		<br /><br /><img src="<?= WEBROOT."views/uplaods/presses/".$presse['image'] ?>" width="100%">
		
		<h1 class="titre-gros"><?= $presse['titre']?></h1>
		<p class="auteur">CHeikh Mc, le <?= $presse['date']?></p>
		<p><?= htmlspecialchars_decode($presse['contenu'])?></p>

		<br /><ul style="margin: 0; padding: 0">
			<li style="display: inline-block; vertical-align: top;"><div class="fb-share-button" data-href="<?= $_SERVER['REQUEST_URI'] ?>" data-type="button_count"></div></li>
			<li style="display: inline-block; vertical-align: top;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a></li>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</ul>
</div>