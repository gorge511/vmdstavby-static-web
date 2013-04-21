<!DOCTYPE html>
<html lang="cs-cz">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Provádíme stavby na klíč, stavby domů, projekty, realizace staveb, projektové dokumentace, hrubé stavby, rodinné domy." />
        <meta name="author" content="Batha" />
        <meta name="description" content="Provádíme stavby na klíč, stavby domů, projekty, realizace staveb, projektové dokumentace, hrubé stavby, rodinné domy." />
        <title>Stavby na klíč :: VMD - Projekty - Stavby</title>
        <link rel="stylesheet" href="modules/smooth_gallery/jd.gallery.css" type="text/css" />

        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/font-awesome.min.css" rel="stylesheet">
        <link href="css/bootswatch.css" rel="stylesheet">  
        <link href="css/style.css" rel="stylesheet">  

        <script src="js/mootools-core.js" type="text/javascript"></script>
        <script src="js/mootools-more.js" type="text/javascript"></script>
        <script src="modules/smooth_gallery/jd.gallery.js" type="text/javascript"></script>
        
        
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js" type="text/javascript"></script>
        <link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>


    </head>
    <body>
        <div class="container" style="width: 900px">
            <div class="header-logo"><img src="../images/loga/vmdstavby.png" alt="VMD Stavby"></div>
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
                                <li><a href="index.php">Home</a></li>
                                <li class="active"><a href="stavby-na-klic.php">Stavby na klíč</a></li>
                                <li><a href="typove-domy.php">Typové domy</a></li>
                                <li><a href="projekty-na-zakazku.php">Projekty na zakázku</a></li>
                                <li><a href="doplnkove-sluzby.php">Doplňkové služby</a></li>
                                <li><a href="galerie.php">Galerie</a></li>
                                <li><a href="kontakt.php">Kontakt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row-fluid">
                <div class="span8 well">

                    <ul class="gallery clearfix">
                        <?php
                        $i = 20;
                        while ($i < 40) {

                            echo '<a href="galerie/vzorove-stavby/detail/' . $i . '-nase-pracec903.jpg" rel="prettyPhoto[gallery2]"><img src="galerie/vzorove-stavby/detail/' . $i . '-nase-pracec903.jpg" width="100px" height="100px" alt="" style="float: left; margin-right: 10px; margin-top: 10px" /></a>';


                            $i++;
                            ?>


                            <?php
                        }
                        ?>
                    </ul>

                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function(){
                            $("area[rel^='prettyPhoto']").prettyPhoto();
				
                            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'light_square',slideshow:3000, autoplay_slideshow: false});
                            $(".gallery:gt(0) a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'fast',slideshow:10000, hideflash: false});
		
                            $("#custom_content a[rel^='prettyPhoto']:first").prettyPhoto({
                                custom_markup: '<div id="map_canvas" style="width:260px; height:265px"></div>',
                                changepicturecallback: function(){ initialize(); }
                            });

                            $("#custom_content a[rel^='prettyPhoto']:last").prettyPhoto({
                                custom_markup: '<div id="bsap_1259344" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div><div id="bsap_1237859" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6" style="height:260px"></div><div id="bsap_1251710" class="bsarocks bsap_d49a0984d0f377271ccbf01a33f2b6d6"></div>',
                                changepicturecallback: function(){ _bsap.exec(); }
                            });
                        });
                    </script>
                </div>
                <?php include("includes/side-kontakt.php"); ?>
            </div>
            <?php include("includes/paticka.php"); ?>
