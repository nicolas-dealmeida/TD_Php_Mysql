<!-- Déclaration des Variables PHP -->

<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
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
              
        <?php
            include "Function.php" ;

            session_start ();
            if(isset($_POST['submit2'])) { // Deco
                session_unset();
                session_destroy();
            }
        ?>

        <div class="Div1">
            <form action="" method="post">
                <label for="Name">Nom du patient :</label>
                <input type="text" name="Nom" id="Nom" required>
                <label for="Prename">Prénom du patient :</label>
                <input type="text" name="Prename" id="Prename" required>
                <input type="submit" name="submit" value="Envoyer">
            </form>
            <?php
                    if(isset($_POST['submit'])){
                        ajoutPatient($_POST['Nom'], $_POST['Prename']);
                    }else{
                        
                    }
            ?>
            <form action="" method="post">
                <input type="submit" name="submit2" value="Deconnexion">    
            </form>
        </div>
        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>