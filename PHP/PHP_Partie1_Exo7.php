<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo7';

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
            <p><form class="" action="" method="POST">
                Texte : <input type="text" name="Texte">
                <input type="submit" name="Envoyer" onclick="document.location.reload(false)">
            </p></form>
            <?php
                session_start();
                    if(isset($_POST['Texte'])){
                        $Texte = $_POST['Texte'];
                        echo '</div><div class="Div1"><p>Le texte écrit est : '.$Texte.'</p>';
                    }
                    else{
                        echo '</div><div class="Div1"><p>Il n\'y a pas encore de texte.</p>';
                    }
            ?>
        </div>
        <div class="Div1">
            <button id="Refresh" onclick="window.location.reload(false)">Cliquez ici pour Rafraichir la page.</button>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>