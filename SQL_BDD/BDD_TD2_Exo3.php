<!-- Déclaration des Variables PHP -->

<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>

<!-- Page Web -->
<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <?php
        Head($FILE_LOCAL) ;
    ?>
    <body>
    <?php
        Menu() ;
    ?>

        <div>
            <h1 class="TITRE">
                <?php
                    echo "$File_Name" ;
                ?>
            </h1>
        </div>

        <div class="Div1"> 
            <img src="img/TD_2_3.png" alt="TD 2 Exo 3">
            <img src="img/TD_2_30.png" alt="TD 2 Exo 3">
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>