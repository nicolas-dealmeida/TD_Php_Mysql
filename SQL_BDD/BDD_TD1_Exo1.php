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
            <h2>Relation MCD dans un Mariage</h2>
            <p>Pas de polygamie :</p>
            <p>1-1 / 1-1</p>
            <p>Avec polygamie :</p>
            <p>1-n / 1-n</p>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>