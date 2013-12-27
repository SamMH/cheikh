<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Toiha ISSIHACA">
        <!-- <link rel="shortcut icon" href="views/skin/img/favicon.png"> -->

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
        <link href="<?= WEBROOT ?>views/skin/css/main.css" rel="stylesheet">
        <link href="<?= WEBROOT ?>views/skin/css/menu.css" rel="stylesheet">
        <link href="<?= WEBROOT ?>views/skin/css/pace.css" rel="stylesheet">
        <link href="<?= WEBROOT ?>views/skin/css/whhg.css" rel="stylesheet">
        <link href="<?= WEBROOT ?>views/skin/css/colorbox.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body id="page">
        <div id="fb-root"></div>
        <script>(function(d, s, id) {
          var js, fjs = d.getElementsByTagName(s)[0];
          if (d.getElementById(id)) return;
          js = d.createElement(s); js.id = id;
          js.src = "//connect.facebook.net/fr_FR/all.js#xfbml=1";
          fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));</script>
        <div class="header">
            <img src='<?= WEBROOT ?>views/skin/img/hd15.png' width='100%'/>
            <a href="<?= WEBROOT ?>"></a>
        </div>

        <div class="navbar navbar-default" role="navigation">
            <div class="container container-menu">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a style="display: none;" class="navbar-brand" href="<?= WEBROOT ?>" >CHEIKH <span>MC / <span><?= strtoupper(explode('/', $_GET['p'])[0]); ?></span></span></a>
                </div>
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li ><a href="<?= WEBROOT ?>">Accueil</a></li>
                        <li ><a href="<?= WEBROOT ?>actus">Actualités</a></li>
                        <li ><a href="<?= WEBROOT ?>bio">Biographie</a></li>
                        <li ><a href="<?= WEBROOT ?>musiques">Musiques</a></li>
                        <li ><a href="<?= WEBROOT ?>videos">Videos</a></li>
                        <li ><a href="<?= WEBROOT ?>photos">Photos</a></li>
                        <li ><a href="<?= WEBROOT ?>presse">Presse</a></li>
                        <!-- <li ><a class="btn" data-toggle="modal" data-target="#myModal">Photos</a></li> -->
                        <li ><a href="<?= WEBROOT ?>contact">Contact</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
<!--         <div class="tete default">
            <div class="container">
                <div class="logo">
                    <a href="<?= WEBROOT ?>"><span><span><?= strtoupper(explode('/', $_GET['p'])[0]); ?></span></span></a>
                </div>
            </div>
        </div> -->
        <div class="corps">