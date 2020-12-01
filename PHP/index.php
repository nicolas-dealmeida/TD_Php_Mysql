<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <?php
        head($FILE_LOCAL) ;
    ?>
    <body>
    <?php
        menu() ;
    ?>


    <!-- body -->
        <div>
            <h1 class="TC">Accueil</h1>
        </div>
        <div class="Div1">
            <?php
                for($n=1;$n<9;$n++){
                    echo "<p class='Vert'>TP1 Exo $n : <a href='TD_1_Exo_$n.php'>Lien</a></p>";
                }
            ?>
            <p class='Vert'>TP1 Final : <a href='TD_1_Final.php'>Lien</a></p>
        </div>
        <div class="Div1">
            <?php
                for($n=1;$n<4;$n++){
                    echo "<p class='Bleu'>TP2 Exo $n : <a href='TD_2_Exo_$n.php'>Lien</a></p>";
                }
            ?>
            <p class='Bleu'>TP2 Final : <a href='TD_2_Final.php'>Lien</a></p>
        </div>

        <div class="Div1">
            <p class='Violet'>Test PHP PDO : <a href='TestPDO.php'>Lien</a></p>
        </div>

        </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>