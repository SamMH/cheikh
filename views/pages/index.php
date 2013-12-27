        <div class="corps">
	        <div id="mySlide" class="container" >
	            <div class="row">
					<div class="col-md-12">
						<div id="myCarousel" class="carousel slide fisrt" data-ride="carousel">
							<div class="carousel-inner">
								<?php foreach ($actus as $k => $v): ?>
									<div class="item <?= ($k == 0) ? "active" : "" ;?>">
										<a href="<?= WEBROOT."actus/view/".$v['slug'] ?>">
										<img data-src="" src='<?= WEBROOT ?>views/uplaods/actus/<?= $v['image'] ?> ' width='100%' alt="First slide">
										</a>
									</div>
								<?php endforeach; ?>
							</div>

						</div>

						<div class="caption" style='margin: auto; padding: auto; text-align: center'>
											<h1 class="titre-gros"><?= $v['titre'] ?> / <?= $v['date'] ?></h1>
											<h1><?= substr_replace(htmlspecialchars_decode($v['contenu']) , "...", 150, strlen($v['contenu']));?></h1>
											<p><a class="btn btn-default btn-xs" href="<?= WEBROOT."actus/view/".$v['slug'] ?>" role="button">LIRE LA SUITE</a></p>
										</div>
					</div>
					<!-- <div class="col-md-4" style="margin-top: 15px;">
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Cheikh-Mc-Officiel/124217074284491?fref=ts" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
					</div> -->
				</div> <!-- .container -->
				<hr />
			</div> <!-- #mySlide -->
		</div> 


			<div class="corps2">
					<div class="container">
						
						<div class="row" style="text-align: center">
							<div class="col-md-12">
								<?php $json = json_decode( file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$videos[0]['youtube_id']."?v=2&prettyprint=true&alt=jsonc") );?>
										
								<iframe width="1124" height="580"  style="margin: auto; border: 1px solid gray" id="lastClipH" src="//www.youtube.com/embed/<?= $json->data->id; ?>?rel=0&amp;hd=1" frameborder="0" allowfullscreen></iframe>
								<br /><h1 class="titre-gros" style="text-align: center; margin: 0; padding: 0; "><?= $json->data->title; ?></h1>
								<br /><a href="<?= WEBROOT ?>videos" class="btn btn-default btn-xs"> VOIR PLUS DE VIDEOS <i class="icon-fastright"></i> </a></p>
							</div>

						<!-- <div class="row" style="text-align: center">
							<div class="col-md-9">
								<?php $json = json_decode( file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$videos[0]['youtube_id']."?v=2&prettyprint=true&alt=jsonc") );?>
								<iframe width="824" height="450" style="margin: auto; border: 1px solid gray" id="lastClipH" src="//www.youtube.com/embed/<?= $json->data->id; ?>?rel=0&amp;hd=1" frameborder="0" allowfullscreen></iframe>
								<br /><h1 class="titre-gros" style="text-align: center; margin: 0; padding: 0; "><?= $json->data->title; ?></h1>
								<br /><a href="<?= WEBROOT ?>videos" class="btn btn-default btn-xs"> VOIR PLUS DE VIDEOS <i class="icon-fastright"></i> </a></p>
							</div>

						<div class="col-md-3" style="margin-top: -14px; margin-left: -25px;">
							<div class="fb-like-box" data-href="https://www.facebook.com/pages/Cheikh-Mc-Officiel/124217074284491?fref=ts" data-colorscheme="light" data-show-faces="false" 
							data-header="true" data-stream="true" data-show-border="true" style="margin-top: 15px; background: white"></div>
						</div> -->
							
						</div>
					</div>
				</div>


		<div class="corps">
			<div class="container">
				<?php $json = json_decode( file_get_contents("http://gdata.youtube.com/feeds/api/videos/".$videos[0]['youtube_id']."?v=2&prettyprint=true&alt=jsonc") );?>
				<div class="row">

					<div class="col-md-12" style='text-align: center'>
						
						<!-- <iframe width="1124" height="580" style="margin: auto" id="lastClipH" src="//www.youtube.com/embed/<?= $json->data->id; ?>?rel=0&amp;hd=1" frameborder="0" allowfullscreen></iframe>
						 --><br /><h1 class="titre-gros" style="margin: 0; padding: 0; "><?= $json->data->title; ?></h1>
						<br /><a href="<?= WEBROOT ?>videos" class="btn btn-default btn-xs"> VOIR PLUS DE VIDEOS <i class="icon-fastright"></i> </a></p>
						

					</div>

				<!-- 	<br /><div class="col-md-3" style="margin-top: 15px;">
						<div class="fb-like-box" data-href="https://www.facebook.com/pages/Cheikh-Mc-Officiel/124217074284491?fref=ts" data-colorscheme="light" data-show-faces="false" data-header="true" data-stream="true" data-show-border="true"></div>
					</div> -->

				</div>
				<hr />
			</div>
		</div>

		<div class="corps2">
			<div class="container">
				<div class="row" style="text-align: center">
					<div class="col-md-4">
						<h1>BIOGRAPHIE</h1>
						<a href="<?= WEBROOT ?>bio">
							<img src='<?= WEBROOT ?>views/skin/images/hh4.jpg' width='100%'/>
							<h1 class="desc">Voir la biographie de Cheikh MC </h1>
						</a>
					</div>
					<div class="col-md-4">
						<h1>MUSIQUE</h1>
						<a href="<?= WEBROOT ?>musiques">
							<img src='<?= WEBROOT ?>views/skin/images/hh.jpg' width='100%'/>
							<h1 class="desc">Accéder à la discographie de Cheikh MC</h1>
						</a>
					</div>
					<div class="col-md-4">
						<h1>PHOTOS</h1>
						<a href="<?= WEBROOT ?>photos">
							<img src='<?= WEBROOT ?>views/skin/images/hh6.jpg' width='100%'/>
							<h1 class="desc">Accéder aux galeries photos de Cheikh MC</h1>
						</a>
					</div>
				</div>
			</div>
		</div>
		<div class="corps">
			<div class="container">
				<div id="carousel-example-generic" class="carousel slide car_parole" data-ride="carousel">
			        <div class="carousel-inner parole">
						<div class="item active">
							<!-- <span class="guillemet">&#8220;</span> -->
							<p>psa dolor quisquam quo ea delectus aut sint quae, illum, at architecto. 
							Voluptate aspernatur minima qui, rem sed eum laborum. Eligendi asperiores ducimus doloribus, 
							eum soluta veniam voluptatem asperiores distinctio vel.
							</p>
							<br /><p style="text-align: center; font-size: 14px !important; ">Titre - Album - 2013</p>
						</div>
						<div class="item">
							<!-- <span class="guillemet">&#8220;</span> -->
							<p>Ipsa dolor quisquam quo ea delectus aut sint quae, illum, at architecto. 
							Voluptate aspernatur minima qui, rem sed eum laborum. Eligendi asperiores ducimus doloribus, 
							eum soluta veniam voluptatem asperiores distinctio vel. </p>
							<br /><p style="text-align: center; font-size: 14px!important; ">Titre - Album - 2013</p>
						</div>
						<div class="item">
							<!-- <span class="guillemet">&#8220;</span> -->
							<p>Ipsa dolor quisquam quo ea delectus aut sint quae, illum, at architecto. 
							Voluptate aspernatur minima qui, rem sed eum laborum. Eligendi asperiores ducimus doloribus, 
							eum soluta veniam voluptatem asperiores distinctio vel. </p>
							<br /><p style="text-align: center; font-size: 14px !important; ">Titre - Album - 2013</p>
						</div>
					</div>
		      </div>
			</div>
		</div>