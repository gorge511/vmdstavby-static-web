<?php
    $title = "Typové domy";
	$active = "typove-domy";
	$meta = "
	<script type=\"text/javascript\">
	jQuery(document).ready(function() {
		jQuery('div.typove-domy .span4:nth-child(4n+1)').addClass('novy-radek');
	});
	</script>
	";
	include("includes/hlavicka.php");
?>
            <div class="row-fluid">
                <div class="span8 well" style="height: 278px;">
                    <h3>Typové domy</h3>
		
<p>Hlavní snahou naší firmy od počátku bylo realizovat a projektovat stavby na klíč a to vždy originálního provedení, ale díky poptávce, jsme již z&nbsp;některých realizovaných či projektovaných staveb vytvořili typové projekty, z&nbsp;kterých si můžete vybrat, nebo se jimi nechat inspirovat pro podobnou stavbu, kterou pro Vás rádi zprojektujeme a zrealizujeme ve stejných cenách jako tyto typové stavby.</p><br /><br />
<br />
                </div>
<?php include("includes/side-kontakt.php"); ?>
</div>

<div class="row-fluid typove-domy">
            <ul class="thumbnails">
            <?php
			include("includes/typove-domy.php");
			foreach($domy as $k => $dum){
				if(!file_exists("typove-domy/".$dum[7])) {
					$dis = " disabled";
					$adresa = "#";
				}
				else {
					$dis = "";
					$adresa = "typove-domy/".$dum[7];
				}
				
				echo'
				<li class="span4">
                <div class="thumbnail">
				<a href="'.$adresa.'">
	                  <img alt="'.$dum[0].'" src="images/typove_domy/'.$dum[1].'">
				  </a>
                  <div class="caption">
                    <h3>'.$dum[0].'</h3>
<p><strong>Počet podlaží:</strong> '.$dum[2].'<br>
<strong>Dispozice:</strong> '.$dum[3].'<br>
<strong>Zastavěná plocha:</strong> '.$dum[4].'<br>
<strong>Stavba na klíč:</strong> '.$dum[5].'<br>
<strong>Hrubá stavba:</strong> '.$dum[6].'</p>
                    <p><a href="'.$adresa.'" class="btn btn-primary pull-right'.$dis.'">Více info</a></p>
                  </div>
                </div>
              </li>';
			  if(($k % 3) == 2)
			  	echo '<div class="clearfix"></div>';
			}
              ?>
            </ul>
          </div>


<?php include("includes/paticka.php"); ?>
