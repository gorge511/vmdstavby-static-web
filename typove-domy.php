<?php
    $title = "Kontakt";
	$active = "kontakt";
	include("includes/hlavicka.php");
?>
            <div class="row-fluid">
                <div class="span8 well">
                    <h3>Typové domy</h3>
		
<p>Hlavní snahou naší firmy od počátku bylo realizovat a projektovat stavby na klíč a to vždy originálního provedení, ale díky poptávce, jsme již z&nbsp;některých realizovaných či projektovaných staveb vytvořili typové projekty, z&nbsp;kterých si můžete vybrat, nebo se jimi nechat inspirovat pro podobnou stavbu, kterou pro Vás rádi zprojektujeme a zrealizujeme ve stejných cenách jako tyto typové stavby.</p>
<br />

<div class="row-fluid typove-domy">
            <ul class="thumbnails">
            <?php
			include("includes/typove-domy.php");
			foreach($domy as $dum){
				echo'
				<li class="span6">
                <div class="thumbnail">
                  <img alt="'.$dum[0].'" src="images/typove_projekty/'.$dum[1].'">
                  <div class="caption">
                    <h3>'.$dum[0].'</h3>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Počet podlaží:</strong>&nbsp;'.$dum[2].'</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Dispozice: </strong>'.$dum[3].'</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Zastavěná plocha:</strong>&nbsp;'.$dum[4].'</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Stavba na klíč:</strong> '.$dum[5].'</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Hrubá stavba: </strong>'.$dum[6].'</span></div>
                    <p><a href="typove-domy/'.$dum[7].'" class="btn btn-primary">Více info</a></p>
                  </div>
                </div>
              </li>';
			}
              ?>
              
              <li class="span6">
                <div class="thumbnail">
                  <img alt="Bungalov 60 2+kk" src="images/typove_projekty/Bungalov_60.jpg">
                  <div class="caption">
                    <h3>Bungalov 60 2+kk</h3>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Počet podlaží:</strong>&nbsp;1</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Dispozice: 2</strong>+kk</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Zastavěná plocha:</strong>&nbsp;60,3m2</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Stavba na klíč:</strong> od 990.000,- bez DPH</span></div>
<div><span style="font-family: arial, helvetica, sans-serif; font-size: 10pt;"><strong style="line-height: 1.3em;">Hrubá stavba: </strong>od 590.000,- bez DPH</span></div>
                    <p><a href="typove-domy/77-bungalov-60-2-kk.html" class="btn btn-primary">Více info</a></p>
                  </div>
                </div>
              </li>
            </ul>
          </div>


                </div>
<?php include("includes/side-kontakt.php"); ?>
            </div>
<?php include("includes/paticka.php"); ?>
