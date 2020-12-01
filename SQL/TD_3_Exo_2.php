<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo 2';
?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
<?php
	include "../Function-Web.php" ; // Include des fonctions
	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.

    Head($FILE_LOCAL) ;
?>
    <!-- Début Header / Menu -->

    <!-- Fin Header / Menu -->

    <!-- body -->
    <body>
        <?php
            Menu()
        ?>
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


        <div class="Div1">
            <p>SELECT * FROM 'Patient','Consultation' WHERE 'Patient'.'IdPatient' = 'Consultation'.'IdPatient'</p>
        </div>
        <div class="Div1">
            <p>SELECT * FROM 'Consultation' WHERE 'Date" > '18h00'</p>
        </div>
        <div class="Div1">
            <p>SELECT 'Nom','Prénom' FROM 'Medecin' ODER BY 'Nom'</p>
        </div>
        <div class="Div1">
            <p> SELECT 'Medecin'.'Nom' AS 'Medecin', 'Patient'.'Nom' AS 'Malade'
                FROM 'Medecin','Patient','Consultation'
                WHERE 'Medecin'.'IdMedecin' = 'Consultation'.'IdMedecin' AND
                'Patient'.'IdPatient' = 'Consultation'.'IdPatient'</p>
        </div>
        <div class="Div1">
            <p>SELECT COUNT('Medicament'.'Nom'), AVG(Medicament'.'Prix') FROM 'Medicament'</p>
        </div>
        <div class="Div1">
            <p></p>
        </div>
        <div class="Div1">
            <p></p>
        </div>
        <div class="Div1">
            <p></p>
        </div>
        <div class="Div1">
            <p></p>
        </div>








    </body>

        <?php
            Highlight($FILE_LOCAL)
        ?>
</html>