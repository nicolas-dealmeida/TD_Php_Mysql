<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo Final 1';

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
        
            <form class='' action='' method='POST'>
                <table>
                    <tr><td><p>Login :</p></td><td><p><input type='text' name='VLOGIN'></p></td></tr>
                    <tr><td><p>Mots de Passe :</p></td><td><p><input type='text' name='VMDP'></p></td></tr>
                    <tr><td><p><input type='submit' name='Envoyer'></p></td></tr>
                </table>
            </form>
            <?php
                if (isset($_POST['MDP'])&isset($_POST['LOGIN'])){
                    if ($_POST['MDP'] = "1234"){
                        $VMDP="Oui";
                    }
                    else{
                        $VMDP="NON";
                        echo "<p>Le Login est inconnu.";
                    }
                    if ($_POST['LOGIN'] = "Julien"){
                        $VLOGIN="OUI";
                    }
                    else{
                        $VLOGIN="NON";
                        echo "<p>Le Mots de Passe est incorrect.";
                    }
                }
                else{
                    echo "<p>Champs vides !</p>";
                }
            ?>
        </div>
        <div class="Div1">
            <form class="" action="" method="POST">
                <button id="Refresh" onclick="window.location.reload(false)">Cliquez ici pour Rafraichir la page.</button>
                <button type="submit" name="Delet" onclick="window.location.reload(false)">Supprimer le texte.</button>
            </form>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>