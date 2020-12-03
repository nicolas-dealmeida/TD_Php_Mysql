<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo1';
if(isset($_GET['Color']))
    $NbColor = $_GET['Color']
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
        <div class="Div1 Div_PHP_Color_<?php
        if(isset($_GET['Color']))
            if ($NbColor%2 == 1) // Si Impaire
                echo '2';
            else // Si Paire
                echo '1';
        else // Si null
            echo '0';
        ?>">
        <p class="Blanc">Texte Test</p>

        <form class="Blanc" action="" method="GET">
            Nombre : <input type="text" name="Color">
            <input type="submit">
        </form>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>