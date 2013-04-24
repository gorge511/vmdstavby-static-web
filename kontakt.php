<?php

if(isset($_POST['form-sended'])) {
	if(isset($_POST['e-mail']) and $_POST['e-mail'] != ""){
		$to      = 'michaldurech@seznam.cz';
		$subject = 'Dotaz z VMDStavby.cz: ' . $_POST['predmet'];
		$message = $_POST['text'].'

Telefon: '.$_POST['telefon'];
		$headers = 'From: ' . $_POST['jmeno'] . ' <'. $_POST['e-mail'] . ">\r\n" .
			'Reply-To: '. $_POST['e-mail'];
		$ok = mail($to, $subject, $message, $headers);
		if($ok) {
			$success = "<div class=\"alert alert-info\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
				  <strong>Děkujeme</strong> za odeslání dotazu!
				</div>";
		}
		else {
			$success = "<div class=\"alert alert-error\">
				  <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
				  <strong>Chyba!</strong> Při odesílání dotazu nastala chyba. Na odstranění problému pracujeme. Zkuste to později znovu.
				</div>";
		}
	}
	else {
		$success = "<div class=\"alert alert-error\">
              <button type=\"button\" class=\"close\" data-dismiss=\"alert\">×</button>
              <strong>Chyba!</strong> Nevyplnili jste emailovou adresu.
            </div>";
	}
}





    $title = "Kontakt";
	$active = "kontakt";
	include("includes/hlavicka.php");
?>
            <div class="row-fluid">
                <div class="span8 well">
                    <h3>Kontaktní formulář</h3>
                    <?php echo isset($success) ? $success : ""; ?>
	<form action="" method="post" class="form-horizontal">
		<fieldset>
			<p>Kontaktovat nám můžete nejlépe telefonicky nebo odeslání zprávy.<br>Všechna pole označená * jsou povinná.</p>
			<div class="control-group">
            	<label class="control-label" for="jmeno">Jméno:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="jmeno" name="jmeno"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="e-mail">E-mail:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="e-mail" name="e-mail"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="telefon">Telefon:</label>
                <div class="controls"><input type="text" class="input-xlarge" id="telefon" name="telefon"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="predmet">Předmět</label>
                <div class="controls"><input type="text" class="input-xlarge" id="predmet" name="predmet"></div>
            </div>
			<div class="control-group">
            	<label class="control-label" for="text">Zpráva</label>
                <div class="controls"><textarea class="input-xlarge" id="text" name="text" rows="8"></textarea></div>
            </div>
            <div class="control-group">
                <div class="controls"><button type="submit" name="form-sended" class="btn">Odeslat</button></div>
            </div>
		</fieldset>
	</form>
                </div>
<?php include("includes/side-kontakt.php"); ?>
            </div>
<?php include("includes/paticka.php"); ?>