<div class="container">
	<div class="videos">
		<div class="item-video">
			<div class="row">
				<?php $ytb_id = (isset(explode("?", $_SERVER['REQUEST_URI'])[1])) ? explode("?", $_SERVER['REQUEST_URI'])[1] : null; ?>

				<?php 

					if ( $ytb_id == null ): 
						$currentId = $videos[0]['youtube_id'];
						$autoplay=0;
					else : 
						$currentId = $ytb_id;
						$autoplay=1;
					endif; 

					$json = json_decode( file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$currentId."?v=2&prettyprint=true&alt=jsonc") );
					//var_dump( $json->data->id); var_dump( $json->data->title); var_dump( $json->data->description); var_dump( $json->data->thumbnail->hqDefault);
				?>

				<div class="col-md-12">
					<div id="<?= $json->data->id ?>" class="video">
						<h1 class="titre-gros" style="text-align:center"><?= $json->data->title ?></h1>
						
						<br /><iframe 
							width="1160" height="650" style="margin: auto" id="lastClip"
							src="//www.youtube.com/embed/<?= $json->data->id ?>?rel=0&amp;hd=1&amp;autoplay=<?= $autoplay; ?>&amp;wmode=transparent" frameborder="0" allowfullscreen>
						</iframe>
						<p class="contenu video-ytb-desc" style="display: none; border-top: 1px solid #eee; padding: 10px;"><?= htmlspecialchars_decode( $json->data->description ) ?></p>
						<span class="button-video-ytb-desc btn btn-inverse btn-sm">Description <i class="icon-chevron-down"></i></span>
						<hr />
					</div>
				</div>
				<div class="col-md-0">
					
				</div>
			</div>
			<div class="row">
				<?php foreach ($videos as $k => $v): ?>
					<?php $json = json_decode( file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$v['youtube_id']."?v=2&prettyprint=true&alt=jsonc") ); ?>
					<?php $is_active = ( $json->data->id == $currentId ) ? "active" : "" ; ?>
					<div class="col-md-3 <?= $is_active ?>">
						<a href="<?= WEBROOT.'videos?'.$json->data->id ?>">
							<div id="<?= $json->data->id ?>" class="video">
								<img src="http://img.youtube.com/vi/<?= $json->data->id ?>/0.jpg" alt="<?= $json->data->title ?>" width="100%">
							</div>
							<p><?= $json->data->title; ?></p>
						</a>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
	</div>
</div>