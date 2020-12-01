<!-- Déclaration des Variables PHP -->

<?php
	include "Function-Web.php" ; // Include des fonctions. 
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>

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
            <p>Texte</p>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>