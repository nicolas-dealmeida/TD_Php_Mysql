<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo3';

?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'> <!-- Assignement du CSS -->
        <meta name="description" content="Site concernant <?php echo $EXO?> "> <!-- Description pour SEO -->
        <link rel="shortcut icon" href="img/Avatar.png"> <!-- Icone de page -->
        <title>Nicolas - PHP - <?php echo $EXO?></title> <!-- Titre Page -->
    </head>
    <!-- Début Header / Menu -->
    <header>
        <div class="Menu-Nav">
            <nav>
                <ul class="Menu">
                    <li class="Logo"><img src="img/Avatar.png" alt="Logo"></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Fin Header / Menu -->

    <!-- body -->
    <body>
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

    <footer>
        <div class="Div1">
            <?php 
            echo "Code Source du site : <p></p>";

            highlight_file(__FILE__)?>
        </div>
    </footer>
</html>