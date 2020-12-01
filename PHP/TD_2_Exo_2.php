<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'TP2 - Exo 2';

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


    <?php include('Function.php') ?> <!-- Include des fonctions -->



    <!-- body -->
        <div>
            <h1 class="TC"><?php echo "$EXO" ?></h1>
        </div>
        <div class="Div1">
            <?php
                $Entete1 = 'Para1'; // Définition de Variable
                $Entete2 = 'Para2'; // Définition de Variable
                $Entete3 = 'Para3'; // Définition de Variable
                TABLEAU2($Entete1,$Entete2,$Entete3); // Invocation du Tableau 2.
            ?>
        </div>
    </body>


        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>