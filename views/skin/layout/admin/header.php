<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="Toiha ISSIHACA">
		
			<link rel="apple-touch-icon" sizes="57x57" href="views/skin/img/apple-touch-icon-57x57.png" />
            <link rel="apple-touch-icon" sizes="114x114" href="views/skin/img/apple-touch-icon-114x114.png" />
            <link rel="apple-touch-icon" sizes="72x72" href="views/skin/img/apple-touch-icon-72x72.png" />
            <link rel="apple-touch-icon" sizes="144x144" href="views/skin/img/apple-touch-icon-144x144.png" />
            <link rel="apple-touch-icon" sizes="60x60" href="views/skin/img/apple-touch-icon-60x60.png" />
            <link rel="apple-touch-icon" sizes="120x120" href="views/skin/img/apple-touch-icon-120x120.png" />
            <link rel="apple-touch-icon" sizes="76x76" href="views/skin/img/apple-touch-icon-76x76.png" />
            <link rel="apple-touch-icon" sizes="152x152" href="views/skin/img/apple-touch-icon-152x152.png" />
            <link rel="icon" type="image/png" href="views/skin/img/favicon-96x96.png" sizes="96x96" />
            <link rel="icon" type="image/png" href="views/skin/img/favicon-32x32.png" sizes="32x32" />
            <link rel="icon" type="image/png" href="views/skin/img/favicon-16x16.png" sizes="16x16" />
            <meta name="msapplication-TileColor" content="views/skin/img/#ffc40d" />
            <meta name="msapplication-TileImage" content="views/skin/img//mstile-144x144.png" />

		<title>CHEIKH MC</title>

		<!-- Bootstrap core CSS -->
		<link href="<?= WEBROOT ?>views/skin/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?= WEBROOT ?>views/skin/css/admin.css" rel="stylesheet">
		<link href="<?= WEBROOT ?>views/skin/css/menu.css" rel="stylesheet">
		<link href="<?= WEBROOT ?>views/skin/css/pace.css" rel="stylesheet">
		<link href="<?= WEBROOT ?>views/skin/css/whhg.css" rel="stylesheet">

		<script src="<?=WEBROOT?>views/skin/js/ckeditor/ckeditor.js"></script>

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
	</head>
	<body id="page">

		<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="<?= WEBROOT ?>admin" class="navbar-brand">Cheikh MC - Admin</a>
				</div>
				<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
					<ul class="nav navbar-nav">
						<li class='News'><a href="<?= WEBROOT ?>admin/actus">Actus</a></li>
						<li class='Videos'><a href="<?= WEBROOT ?>admin/videos">Videos</a></li>
						<li class='Musique'><a href="<?= WEBROOT ?>admin/musiques">Musiques</a></li>
						<li class='Presse'><a href="<?= WEBROOT ?>admin/presse">Presse</a></li>
						<li class='Photos'><a href="<?= WEBROOT ?>admin/photos">Photos</a></li>
						<?php if (isset($_SESSION['login'])): ?>
							<li><a href="<?= WEBROOT ?>admin/logout" class="icon-off" style="font-weight: 600; font-size: 10px; color: #bc0000"> Logout</a></li>
						<?php endif ?>
					</ul>
				</nav>
			</div>
		</header>
		<div class="corps">
			<div class="container"> <br />