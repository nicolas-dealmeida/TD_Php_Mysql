<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Exo1</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'>
    </head>
    <body>
        <?php
            Menu() ;
        ?>
        <p><i>Bonjour</i>, il faut reconnaitre que la programation en <b>HTML</b> est facile.</p>
        <p><b>Toutefois</b>, il faut faire attention à tout pour obtenir le résultat voulu.</p>
    </body>
    <footer>
        <p class="TexteCentre"><a href="index.html" rel="stylesheet">Retour</a>.</p>
    </footer>
</html>