<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'TP2 - Exo 3';

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
                    $VA1 = '15'; // Définition de Variable
                    $VA2 = '30'; // Définition de Variable
                    $VA3 = '45'; // Définition de Variable
                    $MOYENNE = Moyenne($VA1,$VA2,$VA3); // Définition de $MOYENNE via ma Fonction Moyenne.
                    TABLEAU3($VA1,$VA2,$VA3,$MOYENNE); // Invocation du Tableau 3.
            ?>
        </div>
    </body>


        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>