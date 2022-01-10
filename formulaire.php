
<?php include("header.php"); ?>
<form method="post" action="traitement.php">
  <link rel="stylesheet" href="style.css" />

<fieldset>
<legend>Contactez-moi !</legend>

<p>Remplissez donc votre nom et votre message afin que nous prenions contact !</p>

<label> Votre nom : </label><input type="text" name="nom" id="nom" autofocus /><br />

<p><label for="message"> Votre message :</label>
<textarea name="message" id="message" cols="30" rows="10" default="cc">cc</textarea></p>
<input type="submit" value="Envoyer" />
</fieldset>
</form>
