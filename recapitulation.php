<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Exercice 8</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
	
		<h3>Votre candidature</h3>

		<table>	
		<tr><td>Nom : </td><td><?php echo $_GET["Nom"]."\n"; ?> <br/></td></tr>
        <tr><td>Prénom : </td><td><?php echo $_GET["Prénom"]."\n"; ?> <br/></td></tr>
		<tr><td>Civilité : </td><td><?php echo $_GET["Civilité"]."\n"; ?> <br/></td></tr> 
		<tr><td>Date de naissance : </td><td><?php echo $_GET["DateNaissance"]."\n"; ?> <br/></td></tr>		
		<tr><td>Numéro de téléphone : </td><td><?php echo $_GET["NumTel"]."\n"; ?> <br/></td></tr>
		<tr><td>Adresse mail : </td><td><?php echo $_GET["Email"]."\n"; ?> <br/></td></tr>
		<tr><td>Niveau en PHP : </td><td><?php echo $_GET["Niveau"]."\n"; ?> <br/></td></tr>
		<tr><td>Framework(s) pratiqué(s) : </td><td><?php echo $_GET["n1"]."\n"; ?> 		
								   <?php echo $_GET["n2"]."\n"; ?> 
								   <?php echo $_GET["n3"]."\n"; ?> 
								   <?php echo $_GET["n4"]."\n"; ?> 
								   <?php echo $_GET["n5"]."\n"; ?> <br/></td></tr>
		<tr><td>Moi : </td><td><?php echo $_GET["Message"]."\n"; ?> <br/></td></tr>
		</table>
								   
		<br/>
		<br/>

		<a href="saisieCandidature.html">
		<?php echo "Retourner au formulaire" ; ?>
		</a>
	</body>
</html>
