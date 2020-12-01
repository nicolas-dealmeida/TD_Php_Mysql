<!-- Déclaration des Variables PHP -->

<?php
include "../Function-Web.php" ; // Include des fonctions
$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page.
?>

<?php
    Head($FILE_LOCAL) ;
?>

<!DOCTYPE html>
<html lang="fr"> <!-- Langue FR -->
    <?php
    //Head($FILE_LOCAL) ;
    ?>
    
    <!-- Début Header / Menu -->

    <!-- Fin Header / Menu -->

    <!-- body -->
    <body>
        <?php
        //    Menu() ;
        ?>











<header>
		<div class='Menu-Nav'>
			<nav>
				<ul class='Menu'>
				
					<li><a href='Accueil.php'>Accueil</a></li>

					<li class='Sous-Menu-1'><a href='HTML/index.php'>HTML</a>
						<ul class='Sous-Menu-1a'>
                            <li><a href='###'>###</a></li>
                            <li><a href='###'>###</a></li>
                            <li><a href='###'>###</a></li>
                            <li><a href='###'>###</a></li>
                            <li><a href='###'>###</a></li>
						</ul>
					</li>

					<li class='Sous-Menu-1'><a href='PHP/index.php'>PHP</a>
						<ul class='Sous-Menu-1b'>
							<li class='Sous-Menu-2'><a href='#'>TP1</a>
								<ul class='Sous-Menu-2a'>
									<li><a href='###'>###</a></li>
								</ul>
							</li>
						</ul>
						<ul class='Sous-Menu-1c'>
							<li class='Sous-Menu-2'><a href='#'>TP2</a>
								<ul class='Sous-Menu-2b'>
									<li><a href='###'>###</a></li>
								</ul>
							</li>
						</ul>
					</li>

					<li class='Sous-Menu-1'><a href='SQL/index.php'>SQL</a>
						<ul class='Sous-Menu-1d'>
							<li class='Sous-Menu-2'><a href='#'>TP1</a>
								<ul class='Sous-Menu-2c'>
									<li><a href='###'>###</a></li>
								</ul>
							</li>
						</ul>
						<ul class='Sous-Menu-1e'>
							<li class='Sous-Menu-2'><a href='#'>TP2</a>
								<ul class='Sous-Menu-2d'>
									<li><a href='###'>###</a></li>
								</ul>
							</li>
						</ul>
						<ul class='Sous-Menu-1f'>
							<li class='Sous-Menu-2'><a href='#'>TP3</a>
								<ul class='Sous-Menu-2e'>
									<li><a href='###'>###</a></li>
								</ul>
							</li>
						</ul>
					</li>
					
				</ul>

			</nav>
		</div>
	</header>













        <div>
            <h1 class="TC">
                <?php
                    echo "$File_Name" ;
                ?>
            </h1>
        </div>

        <div class="Div1"> 
            <p>Text Defaut pour Test</p>
            <?php
                    echo "<p>".$File_Name."</p>" ;
            ?>
        </div>

 
        <?php
            Highlight($FILE_LOCAL)
        ?>

    </body>
</html>