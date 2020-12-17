<!-- Déclaration des Variables PHP -->

<?php
	include "../Config/Function-Web.php" ; // Include des fonctions.  /!\ (Attention à ce que ce soit valide, unique variable à définir et à modifier.) /!\
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
                <?php

                $TableConnect1 = 'Patient' ; // Nom de la Table à la quelle je veut me connecter
                $Lettre = 'B'; // Lettre du nom que je cible
                echo "<p>Je vais afficher la liste des patients dont le nom commence par la lettre ".$Lettre.".</p>";
                    try{
                        // Connect à ma BDD et définition de l'objet BDD.
                        $ConnectBDD = new PDO("mysql:host=192.168.64.106; dbname=Pie_TD1_Medecin; charset=utf8","PieTest", "PieTest");
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

        <?php
            Highlight($FILE_LOCAL)
        ?>
    </body>
</html>