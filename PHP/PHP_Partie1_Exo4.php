<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo4';

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
            <?php

                if(isset($_POST['A'])){      // Assignation de Variable A
                    $A = $_POST['A'];
                }
                else{ 
                    $A = 1;
                }
                
                if(isset($_POST['B'])){      // Assignation de Variable A
                    $B = $_POST['B'];
                }
                else{
                    $B = 1;
                }

                if(isset($_POST['C'])){      // Assignation de Variable A
                    $C = $_POST['C'];
                }
                else{
                    $C = 1;
                }

                $Delta = ($B * $B) - (4 * $A * $C); // Calcule de Delta

                if($Delta>0){
                    echo '<p>Delta ('.$Delta.') est supérieur à 0, il y a donc deux solutions réels à l\'équation.</p>';
                    $Solution1 = (-$B-sqrt($Delta)/2*$A);
                    $Solution2 = (-$B+sqrt($Delta)/2*$A);
                    echo '<p>Les deux solutions réels à l\'équation sont '.$Solution1.' et '.$Solution2.'</p>';
                    }
                if($Delta==0){
                    echo '<p>Delta ('.$Delta.') est égal à 0, il y a donc une solution réel à l\'équation.</p>';
                    $Solution0 = (-$B/2*$A);
                    echo '<p>La solution réel à l\'équation est '.$Solution0.'</p>';
                    }
                if($Delta<0){
                    echo '<p>Delta ('.$Delta.') est inférieur à 0, il n\'y a donc pas de solution réel à l\'équation.</p>';
                    }
            ?>
        </div>
        <div class="Div1">
            <form class="Jaune" action="" method="POST">
                Variable A : <input type="text" name="A">
                Variable B : <input type="text" name="B">
                Variable C : <input type="text" name="C">
                <input type="submit">
            </form>
            </p>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>