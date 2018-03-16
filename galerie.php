<?php
    $title = "Galerie";
	$active = "galerie";
	$meta = '
	<link rel="stylesheet" href="css/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
        <script src="js/jquery.prettyPhoto.js" type="text/javascript" charset="utf-8"></script>';
		
	include("includes/hlavicka.php");
?>
            <div class="row-fluid">
                <div class="span8 well" style="text-align: center;">
                    <ul class="gallery clearfix">
                        <?php
                        $nazev_slozky = "galerie/vzorove-stavby";

                        $slozka = opendir($nazev_slozky);
                        if ($slozka == false)
                            die;
                        while ($soubor = readdir($slozka)) {
                            if ($soubor == ".." || $soubor == ".")
                                continue;
                            if (preg_match("/jpg/", $soubor)) {
                                $obrazky[] = $soubor;
                            }
                        }
                        closedir($slozka);

                        rsort($obrazky);

                        $pocet_obrazku = count($obrazky);

						$pocet_na_stranku = 21;
						$posledni = ceil($pocet_obrazku / $pocet_na_stranku);
						
						if (isset($_GET['stranka']) &&
							is_numeric($_GET['stranka']) &&
							$_GET['stranka'] <= $posledni)
							$stranka = $_GET['stranka'];
						else $stranka = 1;

						$zacatek = ($stranka - 1) * $pocet_na_stranku;

						$konec = $zacatek + $pocet_na_stranku;
						if($konec >= $pocet_obrazku)
							$konec = $pocet_obrazku;
						
                        $i=$zacatek;

                        while($i<$konec){
                            echo "<a href=\"" . $nazev_slozky . "/" . $obrazky[$i] . "\" rel=prettyPhoto[gallery2] ><img src=\"" . $nazev_slozky . "/nahledy/" . $obrazky[$i] . "\" alt=\"Galerie VMD Stavby\" class=\"img-polaroid\" style=\"float: left; margin-right: 20px; margin-top: 10px\" /></a>&nbsp;\n";
                            $i++;
                        }
                        ?>
                    </ul>
                    
                    <div class="pagination pagination-centered">
  <ul>
    <?php 
	if($stranka == 1)
		echo "<li class=\"disabled\"><span>&laquo;</span></li>\n";
	else
		echo "<li><a href=\"?stranka=".($stranka - 1)."\">&laquo;</a></li>\n";

	for($i = 1; $i <= $posledni; $i++){		
		if($i == $stranka){
			echo "<li class=\"active\"><span>".$i."</span></li>\n";
		}
		else {
			echo "<li><a href=\"?stranka=".$i."\">".$i."</a></li>\n";
		}
	}
		if($stranka == $posledni)
		echo "<li class=\"disabled\"><span>&raquo;</span></li>\n";
	else
		echo "<li><a href=\"?stranka=".($stranka + 1)."\">&raquo;</a></li>\n";

    ?>
  </ul>
</div>
                    
                    

                    <script type="text/javascript" charset="utf-8">
                        $(document).ready(function(){
                            $("area[rel^='prettyPhoto']").prettyPhoto();
				
                            $(".gallery:first a[rel^='prettyPhoto']").prettyPhoto({animation_speed:'normal',theme:'pp_default',slideshow:3000, autoplay_slideshow: false});
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
