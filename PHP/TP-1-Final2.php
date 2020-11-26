<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo Final 2';

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

        <?php include('Function.php') ?> <!-- Include des fonctions -->

    <!-- body -->
    <body>
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

    <footer>
        <div class="Div1">
            <?php 
            echo "Code Source du site : <p></p>";

            highlight_file(__FILE__)?>
        </div>
    </footer>
</html>