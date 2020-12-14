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
            <h2 class="PAD1"><a href='..\Config\Accueil.php'>Accueil</a></h2>
            <h2 class="PAD1"><a href='..\HTML\index.php'>HTML/CSS</a></h2>
                <h3 class="PAD2"><a href='..\HTML\index.php#HTML'>HTML</a></h3>
                    <p class="PAD3"><a href='..\HTML\Exo1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\HTML\Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\HTML\Exo3.php'>Exercice 3</a></p>
                <h3 class="PAD2"><a href='..\HTML\index.php#CSS'>CSS</a></h3>
                    <p class="PAD3"><a href='..\HTML\ExoCSS_1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\HTML\ExoCSS_2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\HTML\Formulaire.php'>Formulaire</a></p>
            <h2 class="PAD1"><a href='#'>PHP</a></h2>
                <h3 class="PAD2"><a href='#'>TD1</a></h3>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo3.php'>Exercice 3</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo4.php'>Exercice 4</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo5.php'>Exercice 5</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo6.php'>Exercice 6</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo7.php'>Exercice 7</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_Exo8.php'>Exercice 8</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie1_ExoFinal.php'>TP Final</a></p>
                <h3 class="PAD2"><a href='#'>TD2</a></h3>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie2_Exo1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie2_Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie2_Exo3.php'>Exercice 3</a></p>
                    <p class="PAD3"><a href='..\PHP\PHP_Partie2_ExoFinal.php'>TP Final</a></p>
            <h2 class="PAD1"><a href='#'>SQL / BDD</a></h2>
                <h3 class="PAD2"><a href='#'>TD1</a></h3>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo3.php'>Exercice 3</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo3.php'>Exercice 4</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo3.php'>Exercice 5</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo3.php'>Exercice 6</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD1_Exo3.php'>Exercice 7</a></p>
                <h3 class="PAD2"><a href='#'>TD2</a></h3>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD2_Exo1.php'>Exercice 1</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD2_Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\BDD_TD2_Exo3.php'>Exercice 3</a></p>
                <h3 class="PAD2"><a href='#'>TD3</a></h3>
                    <p class="PAD3"><a href='..\SQL_BDD\SQL_TD3_Exo2.php'>Exercice 2</a></p>
                <h3 class="PAD2"><a href='#'>TD4</a></h3>
                    <p class="PAD3"><a href='..\SQL_BDD\SQL_TD4_Exo2.php'>Exercice 2</a></p>
                    <p class="PAD3"><a href='..\SQL_BDD\SQL_TD4_Exo3.php'>Exercice 3</a></p>
        </div>

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>