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
        ?>

        <div class="Div1">
            <form action="" method="post">
                <label for="name">SELECT `Nom`,`Prénom`,`NumSS` FROM `Patient` WHERE </label>
                <select name="option1" id="option1">
                    <option value="Nom">Nom</option>
                    <option value="Prénom">Prénom</option>
                    <option value="NumSS">NumSS</option>
                </select>
                <select name="option2" id="option2">
                    <option value="=">=</option>
                    <option value="LIKE">LIKE</option>
                    <option value="ORDER BY">ORDER BY</option>
                </select>
                <input type="text" name="recherche" id="recherche"> 
                <input type="submit" name="submit" value="Envoyer">
            </form>
            <?php
                if(isset($_POST['recherche'])){
                    afficher_requet($_POST['option1'], $_POST['option2'], $_POST['recherche']);
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