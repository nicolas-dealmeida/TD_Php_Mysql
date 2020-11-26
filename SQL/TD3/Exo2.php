<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo 2';
?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../../global.css'> <!-- Assignement du CSS -->
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
                <?php

                $TableConnect1 = 'Patient' ; // Nom de la Table à la quelle je veut me connecter
                $Lettre = 'B'; // Lettre du nom que je cible
                echo "<p>Je vais afficher la liste des patients dont le nom commence par la lettre ".$Lettre.".</p>";
                    try{
                        // Connect à ma BDD et définition de l'objet BDD.
                        $ConnectBDD = new PDO("mysql:host=192.168.64.106; dbname=Pie_TD1_Exo2; charset=utf8","PieTest", "PieTest");
                        echo "<p>Je suis Connecté à ".$TableConnect1.".</p>";

                        // Définition donné Brut
                        $BrutBDD = $ConnectBDD->query("SELECT * FROM $TableConnect1 WHERE Nom LIKE '$Lettre%'"); // Je selectionne ce qui est dans la table et ayant la condition demandée

                        echo"<table>
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Prénom</th>
                                    </tr>
                                </thead>
                                <tbody>";
                        while($Result = $BrutBDD->fetch()){ // Tant que c'est possible
                            echo "<tr><td>".$Result['Nom']."</td><td>".$Result['Prénom']."</td></tr>";
                        };
                        echo"
                                </tbody>
                            </table>";
                        echo "<p>C'est bon, j'ai récupérer la liste des patients dont le nom commence par la lettre ".$Lettre.".</p>";
                    }
                    catch (Exception $e){ // Bon ba ça c'est si j'ai une erreur.
                        Echo "<p>Erreur : ".$e ->getMessage()."</p>";
                        echo "<p>Je n'ai pas réussi à afficher ce que je demandé.</p>";
                    }
                    
                ?>
        </div>

        <div class="Div1">
            <p>Cela me donne en résultat :</p>
            <img src="liens" alt="Résultat">
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