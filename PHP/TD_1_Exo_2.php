<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo2';

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


    <!-- body -->
        <div>
            <h1 class="TC"><?php echo "$EXO" ?></h1>
        </div>
        <div class="Div1">
            <table border="1">
                <tr>
                    <?php
                    $Tableau = array(1,2,3,4,5);

                    for($i=0;$i<5;$i++){
                    echo "<td>".$Tableau[$i]."</td>";}
                    ?>
                </tr>
            </table>
        </div>
        <div class="Div1">
        <?php

            $Tableau["Nom"] = 'Name';
            $Tableau["Prenom"] = 'Prénom';
            $Tableau["MDP"] = 'Mots de Passe';
            
            echo "<p>" .$Tableau["Nom"]. "</p>";
            echo "<p>" .$Tableau["Prenom"]. "</p>";
            echo "<p>" .$Tableau["MDP"]. "</p>"

        ?>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>