<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>
<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo3';

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

            <?php // Initialisation des valeurs
            $Tab = array("Nom","Prenom","MDP");
            $Tab[1] = array("Nom" => "Nom1", "Prenom" => "Prenom1", "MDP" => "MotsDePasse1");
            $Tab[2] = array("Nom" => "Nom2", "Prenom" => "Prenom2", "MDP" => "MotsDePasse2");
            $Tab[3] = array("Nom" => "Nom3", "Prenom" => "Prenom3", "MDP" => "MotsDePasse3"); 
            $Tab[4] = array("Nom" => "Nom4", "Prenom" => "Prenom4", "MDP" => "MotsDePasse4"); 
            $Tab[5] = array("Nom" => "Nom5", "Prenom" => "Prenom5", "MDP" => "MotsDePasse5"); 
            $Tab[6] = array("Nom" => "Nom6", "Prenom" => "Prenom6", "MDP" => "MotsDePasse6"); 
            ?>

            <table border="1">
                    <?php
                    for($i=1;$i<7;$i++){
                    echo "<tr><td>".$Tab[$i]["Nom"]. "|" .$Tab[$i]["Prenom"]. "|" .$Tab[$i]["MDP"]."</td></tr>";}
                    ?>
            </table>
        </div>
    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>