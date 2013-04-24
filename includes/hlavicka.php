<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Provádíme stavby na klíč, stavby domů, projekty, realizace staveb, projektové dokumentace, hrubé stavby, rodinné domy." />
        <meta name="author" content="Batha" />
        <meta name="description" content="Provádíme stavby na klíč, stavby domů, projekty, realizace staveb, projektové dokumentace, hrubé stavby, rodinné domy." />
        <title><?php echo (isset($title) ? $title." :: " : "") ?>VMD - Projekty - Stavby</title>

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="/css/font-awesome.min.css" rel="stylesheet">
        <link href="/css/bootswatch.css" rel="stylesheet">  
        <link href="/css/style.css" rel="stylesheet">
        
        <script src="/js/jquery.min.js" type="text/javascript"></script>
        <?php if(isset($active) && $active == "home"): ?>
        <script type="text/javascript">
        	jQuery.noConflict();
        </script>
        <?php endif; ?>
        <script src="/js/bootstrap.min.js"></script>
        <?php echo (isset($meta) ? $meta : "") ?>
        <?php include("analytics.php"); ?>
    </head>
    <body>
        <div class="container" style="width: 900px">
            <div class="header-logo"><a href="/"><img src="../images/loga/vmdstavby.png" alt="VMD Stavby"></a></div>
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <div class="container" style="width: auto;">
                        <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <div class="nav-collapse">
                            <ul class="nav">
                                <li<?php echo ((isset($active) && $active == "home") ? " class=\"active\"" : "") ?>><a href="/index.php">Home</a></li>
                                <li<?php echo ((isset($active) && $active == "stavby-na-klic") ? " class=\"active\"" : "") ?>><a href="/stavby-na-klic.php">Stavby na klíč</a></li>
                                <li<?php echo ((isset($active) && $active == "typove-domy") ? " class=\"active\"" : "") ?>><a href="/typove-domy.php">Typové domy</a></li>
                                <li<?php echo ((isset($active) && $active == "projekty-na-zakazku") ? " class=\"active\"" : "") ?>><a href="/projekty-na-zakazku.php">Projekty na zakázku</a></li>
                                <li<?php echo ((isset($active) && $active == "doplnkove-sluzby") ? " class=\"active\"" : "") ?>><a href="/doplnkove-sluzby.php">Doplňkové služby</a></li>
                                <li<?php echo ((isset($active) && $active == "galerie") ? " class=\"active\"" : "") ?>><a href="/galerie.php">Galerie</a></li>
                                <li<?php echo ((isset($active) && $active == "kontakt") ? " class=\"active\"" : "") ?>><a href="/kontakt.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>