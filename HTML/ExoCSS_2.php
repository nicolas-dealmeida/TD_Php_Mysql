<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!DOCTYPE html>
    <html lang="fr">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Exo CSS 2</title>
            <link rel='stylesheet' type='text/css' media='screen' href='ExoCSS_2.css'>
        </head>
    <body>
        <?php
            Menu() ;
        ?>
        <div class="header"><b><p>Bandeau</b></p></div>
        <nav class="menu">
            <ul><p>Menu</p>
            </ul>
        </nav>
        <div class="body"><p>Contenu</p></div>
        <div class="footer"><b><p>Pied de page</b></p></div>
    </body>
</html>