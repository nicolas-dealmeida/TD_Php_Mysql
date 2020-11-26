<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo2';

?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='global.css'> <!-- Assignement du CSS -->
        <meta name="description" content="Site concernant <?php echo $EXO?>." <!-- Description pour SEO -->
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
            <table border="1">
                <tr>
                    <?php
                    $Tableau = array(1,2,3,4,5);

                    for($i=0;$i<5;$i++){
                    echo "<td>".$Tableau[$i]."</td>";}
                    ?>
                </tr>
            </table>
        </div>
        <div class="Div1">
        <?php

            $Tableau["Nom"] = 'Name';
            $Tableau["Prenom"] = 'Prénom';
            $Tableau["MDP"] = 'Mots de Passe';
            
            echo "<p>" .$Tableau["Nom"]. "</p>";
            echo "<p>" .$Tableau["Prenom"]. "</p>";
            echo "<p>" .$Tableau["MDP"]. "</p>"

        ?>
        </div>
    </body>

    <footer>
        <div class="Div1">
            <?php 
            echo "Code Source du site :";

            highlight_file(__FILE__)?>
        </div>
    </footer>
</html>