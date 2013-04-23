<?php
    $title = "Kontakt";
	$active = "kontakt";
	include("includes/hlavicka.php");
?>
            <div class="row-fluid">
                <div class="span8 well">
                    <h3>Kontaktní formulář</h3>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
			<p>Kontaktovat nám můžete nejlépe telefonicky nebo odeslání zprávy.<br>Všechna pole označená * jsou povinná.</p>
			<div class="control-group">
            	<label class="control-label" for="jmeno">Jméno:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="jmeno"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="e-mail">E-mail:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="e-mail"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="telefon">Telefon:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="telefon"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="predmet">Předmět</label>
                <div class="controls"><input type="text" class="input-xlarge" id="predmet"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="text">Zpráva</label>
                <div class="controls"><textarea class="input-xlarge" id="text" rows="8"></textarea></div>
            </div>
		</fieldset>
	</form>
                </div>
<?php include("includes/side-kontakt.php"); ?>
            </div>
<?php include("includes/paticka.php"); ?>