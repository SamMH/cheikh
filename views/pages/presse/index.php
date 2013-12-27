<div class="container">
	<div class="presses">
		<?php foreach ($presses as $k => $v):?>	
			<div class="item-presse" id="<?= 'presse-'.$k; ?>" style='text-align: center'>
				<img src="<?= WEBROOT."views/uplaods/presses/".$v['image'] ?>" width="100%">
				<div class="content">
					<h1 class="titre-gros"><?= $v['titre'] ?></h1>
					<p class="contenu"><?= substr_replace(htmlspecialchars_decode($v['contenu']) , "...", 180, strlen($v['contenu']));?></p>
					<a href="<?= WEBROOT."presse/view/".$v['slug'] ?>" class="btn btn-sm btn-inverse">Lire plus <i class="icon-fastright"></i></a>	
				</div>
			</div>	
		<?php endforeach ?>
	</div>
</div>