<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo Final 2';

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

        <div class="Div1"> <!-- Formulaire -->

            <!-- PHP -->
            <?php
                if (isset($_POST['MDP'])) {
                }
                else {
                    $_POST['MDP'] = '-!-NEUTRE-!-' ;
                }
                FORMFINAL($_POST['MDP'],1234);
            ?>
        </div>

        <!-- Divers pour les Test -->
        <div class="Div1">
            <form class="" action="" method="POST">
                <button id="Refresh" onclick="window.location.reload(false)">Cliquez ici pour Rafraichir la page.</button>
            </form>
        </div>

    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>