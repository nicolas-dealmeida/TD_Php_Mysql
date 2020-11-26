<!-- Déclaration des Variables PHP -->

<?php
$EXO = 'Exo1';
if(isset($_GET['Color']))
    $NbColor = $_GET['Color']
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
        <div class="Div1 Div_PHP_Color_<?php
        if(isset($_GET['Color']))
            if ($NbColor%2 == 1) // Si Impaire
                echo '2';
            else // Si Paire
                echo '1';
        else // Si null
            echo '0';
        ?>">
        <p class="Blanc">Texte Test</p>

        <form class="Blanc" action="" method="GET">
            Nombre : <input type="text" name="Color">
            <input type="submit">
        </form>
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