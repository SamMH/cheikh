<div class="container">
	<a href="<?= WEBROOT?>actus" class="btn btn-default btn-sm"><i class="icon-chevron-left" style="font-size: 10px;"></i> REVENIR A LA LISTE DES ACTUS</a>
	<br />
	<br />
	<div class="row">
		<div class="col-md-8">
			<img src="<?= WEBROOT."views/uplaods/actus/".$actu['image'] ?>" width="100%">
		</div>
		<div class="col-md-4">
			<h2 style="margin: 0; padding: 0"><?= $actu['titre']?></h2>
			<p class="auteur">CHeikh Mc, le <?= $actu['date']?></p>
			<p><?= htmlspecialchars_decode($actu['contenu'])?></p>
		
		<ul style="margin: 0; padding: 0">
			<li style="display: inline-block; vertical-align: top;"><div class="fb-share-button" data-href="<?= $_SERVER['REQUEST_URI'] ?>" data-type="button_count"></div></li>
			<li style="display: inline-block; vertical-align: top;"><a href="https://twitter.com/share" class="twitter-share-button" data-lang="fr">Tweeter</a></li>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		</ul>

		</div>
		

		
	</div>
</div>