<div class="container">
	<div class="row">
		<div class="col-md-4"><?php var_dump($_SERVER); ?></div>
		<div class="col-md-4"> <?= (!empty($_SESSION))? var_dump($_SESSION) : "";  ?></div>
		<div class="col-md-4"> <?= (!empty($_POST))? var_dump($_POST) : "";  ?></div>
	</div>
</div>