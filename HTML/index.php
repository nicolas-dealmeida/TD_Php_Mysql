<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <title>Index</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'>
    </head>
    <body class="TexteCentre">
        <?php
            Menu() ;
        ?>
        <p class="marge-p-index">Lien vers : <a href="Exo1.php" rel="stylesheet">Exo1</a>.</p>
        <p class="marge-p-index">Lien vers : <a href="Exo2.php" rel="stylesheet">Exo2</a>.</p>
        <p class="marge-p-index">Lien vers : <a href="Exo3.php" rel="stylesheet">Exo3</a>.</p>

        <p class="marge-p-index">Lien vers : <a href="ExoCSS_1.php" rel="stylesheet">Exo_1</a>.</p>
        <p class="marge-p-index">Lien vers : <a href="ExoCSS_2.css" rel="stylesheet">Exo_2</a>.</p>
        <p class="marge-p-index">Lien vers : <a href="Formulaire.php" rel="stylesheet">Formulaire</a>.</p>
    </body>
</html>