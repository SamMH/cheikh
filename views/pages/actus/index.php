<div class="container">
	<div class="actus">
		<div class="row">
			<?php foreach ($actus as $k => $v):?>	
				<div class="item-actu">
					<div class="col-md-12" id="<?= 'actu-'.$k; ?>" >
						<br /><p class="imgage"><img src="<?= WEBROOT."views/uplaods/actus/".$v['image'] ?>" width="80%"></p>
						<h1 class="titre-gros" ><?= $v['titre'] ?> / <?= $v['date'] ?></h1>
						<p class="contenu"><?= substr_replace(htmlspecialchars_decode($v['contenu']) , "...", 180, strlen($v['contenu']));?></p>
						<a href="<?= WEBROOT."actus/view/".$v['slug'] ?>" class="btn btn-inverse btn-sm">Lire plus <i class="icon-fastright"></i></a>	
					</div>
				</div>	
			<?php endforeach ?>
		</div>
	</div>
</div>