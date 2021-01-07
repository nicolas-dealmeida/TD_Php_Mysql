<!-- Déclaration des Variables PHP -->

<?php
    include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
    include "Function.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
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

        <?php
        // Class
        Class User {

            // Variables (Variables)
            Public $Nom = 'User' ;
            Public $Prenom = 'User' ;

            // Protected Function (Utilisable uniquement par la Class et ceux qui en héritent et parentent)

            // Public Function (Utilisable par tous)

            // Private Function (Utilisable Uniquement par la Class)
            Private Function AfficheUser() {
                echo 'Je suis un User' ;
            }
        }
        ?>

        <div>
            <h1 class="TITRE">
                <?php
                    echo "$File_Name" ;
                ?>
            </h1>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>