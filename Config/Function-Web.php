<?php

#############################################
#											#
#		Condition de fontionnement :		#
#											#
#############################################
#
#		Intégrer dans une balise PHP :
#
#	include "../Function-Web.php" ; // Include des fonctions
#	$FILE_LOCAL = basename(__FILE__) ; // Définition d'une variable ayant le nom de la page.
#	$File_Name = basename(__FILE__, ".php") ; // Définition du Nom de la page, avec retrait du ".php".
#	
############################################################################################


Function Head($FILE_LOCAL) // Fonction pour le Head et les metas de page.
{
	$File_Format = "UTF-8" ; // Définition du Format d'encodage.
	$File_CSS = "../Config/global.css" ; // Définition du Fichier CSS correspondant.
	$File_Name = basename($FILE_LOCAL, ".php") ; // Définition du Nom de la page.
	$File_Description = "Exercices de Nicolas - $File_Name" ; // Définition de la Description de la page.
	$File_Icon = "../Icon.png" ; // Définition de l'Icon de page.
	$File_Author = "Nicolas" ; // Définition de l'Auteur de la page.

	echo
	"
	<head>
				<!-- SEO et Affichagse Classiques -->
		<meta name='viewport' content='width=device-width, initial-scale=1.0'>
		<meta charset='$File_Format'>
		<link rel='stylesheet' type='text/css' media='screen' href='$File_CSS'>
		<title>Nicolas - $File_Name</title>
		<meta name='description' content='$File_Description'>
		<link rel='shortcut icon' href='$File_Icon'>
		<meta name='author' content='$File_Author'>

				<!-- Intégration Facebook -->
		<meta property='og:title' content='Nicolas - $File_Name'>
		<meta property='og:description' content='$File_Description'>
		<meta property='og:image' content='$File_Icon'>

				<!-- Intégration Twitter -->
		<meta name='twitter:title' content='Nicolas - $File_Name'>
		<meta name='twitter:description' content='$File_Description'>
		<meta name='twitter:image' content='$File_Icon'>
	</head>
	" ;
}


Function Menu() // Fonction affichant le menu.
{
	echo	//	CSS du MENU
	"
		<style>
			/*          CSS FLEXBOX MENU         */

			.Menu {
				background: #0D1F2D;
				box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.25);
				font-size: 25px;
			}
			
			.Menu-Nav ul { /* S'applique sur la liste du Menu */
				margin: 0px;
				padding: 0px;
				list-style: none;
				background: #0D1F2D;
			}
			
			.Menu-Nav a { /* S'applique sur les liens dans le menu */
				padding-top: 2.0%;
				padding-bottom: 2.0%;
			
				padding-left: 30px;
				padding-right: 30px;
			
				display: block;
				text-decoration: none;
				color: #EEEEEE;
			}
			
			.Menu a:hover { /* CSS des liens lors du survole du curseur */
				text-decoration: underline white;
			}
			
			.Menu-Nav .Menu {
				display: flex;
				flex-flow: row wrap; /* Permet que le menu se mette à la suite en retour de ligne */
				justify-content: center;
			}
			
			
			/* ATTENTION : SOUS-MENU */
			
			.Sous-Menu-1, .Sous-Menu-S1-1 { /* Menu de base affiché */
				position: relative;
			}
			
			.Sous-Menu-1:hover>.Sous-Menu-S1 { /* Menu de base affiché -> Active Sous Menu 1*/
				display: flex;
			}
			.Sous-Menu-S1-1:hover>.Sous-Menu-S1-A { /* Menu de base affiché -> Active Sous Menu 1*/
				display: flex;
			}
			.Sous-Menu-S1-1:hover>.Sous-Menu-S1-B { /* 1er Sous Menu A (Donc EPK/FUZ/PAL) */
				display: flex;
			}
			
			.Sous-Menu-S1 a { /* Formatage Texte sur le premier Sous-Menu, héréditaire */
				padding-left: 10px;
				padding-right: 10px;
				padding-top: 5px;
				padding-bottom: 5px;
				justify-content: center;
			}
			
			.Sous-Menu-S1-B.is-active, .Sous-Menu-S1-B.is-active, .Sous-Menu-S1.is-active { /* 3ème Sous Menu A et B (Donc F/S, F/M/S et ES/F/M/S/Y) */
				display: flex;
			}
			
			.Sous-Menu-S1 { /* Groupe de Sous Menu : Formatage Taille, Emplacement, Bordure */
				display: none;
				flex-flow: column wrap;
				position: absolute;
				left: 28px;
				border-style: groove;
				border-color: white;
				font-size: 20px;
			}
			.Sous-Menu-S1-A { /* 1er Sous Menu (Donc HTML/CSS) */
				display: none;
				flex-flow: column wrap;
				min-width: 135px;
				position: absolute;
				top: -3px;
				left: 128px;
				border-style: groove;
				border-color: white;
			}
			.Sous-Menu-S1-B { /* 2ème Sous Menu (Donc PHP/SQL) */
				display: none;
				flex-flow: column wrap;
				min-width: 135px;
				position: absolute;
				top: -3px;
				left: 57px;
				border-style: groove;
				border-color: white;
			}
			
			/*          Fond Image Des Divs            */
			
			@media (max-width: 480px) { /* S'applique si téléphone ou petit écrans. */
				.Menu {
					font-size: 20px;
				}
				.Menu-Nav a {
					padding-top: 1.0%;
					padding-bottom: 1.0%;
			
					padding-left: 5px;
					padding-right: 5px;
				}
			}
			
		</style>
	" ;
	echo
	"
	<header>
        <div class='Menu-Nav'>
            <nav>
				<ul class='Menu'>
				<li class='Sous-Menu-1'><a href='Accueil.php'>Accueil</a></li>
                    <li class='Sous-Menu-1'><a href='..\HTML\index.php'>HTML/CSS</a>
                        <ul class='Sous-Menu-S1'>
                            <li class='Sous-Menu-S1-1'><a href='..\HTML\index.php#HTML'>HTML</a>
                                <ul class='Sous-Menu-S1-A'>
                                    <li><a href='..\HTML\Exo1.php'>Exercice 1</a></li>
                                    <li><a href='..\HTML\Exo2.php'>Exercice 2</a></li>
                                    <li><a href='..\HTML\Exo3.php'>Exercice 3</a></li>
                                </ul>
                            </li>
                            <li class='Sous-Menu-S1-1'><a href='..\HTML\index.php#CSS'>CSS</a>
                                <ul class='Sous-Menu-S1-A'>
                                    <li><a href='..\HTML\ExoCSS_1.php'>Exercice 1</a></li>
                                    <li><a href='..\HTML\ExoCSS_2.php'>Exercice 2</a></li>
                                </ul>
                            </li>
                            <li><a href='..\HTML\Formulaire.php'>Formulaire</a></li>
                        </ul>
                    </li>
                    <li class='Sous-Menu-1'><a href='..\PHP\index.php'>PHP</a>
                        <ul class='Sous-Menu-S1'>
                            <li class='Sous-Menu-S1-1'><a href='..\PHP\index.php#TD1'>TD1</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\PHP\TD_1_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\PHP\TD_1_Exo_2.php'>Exercice 2</a></li>
									<li><a href='..\PHP\TD_1_Exo_3.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Exo_4.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Exo_5.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Exo_6.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Exo_7.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Exo_8.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_1_Final.php'>TP Final</a></li>
                                </ul>
                            </li>
                            <li class='Sous-Menu-S1-1'><a href='..\PHP\index.php#TD2'>TD2</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\PHP\TD_2_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\PHP\TD_2_Exo_2.php'>Exercice 2</a></li>
									<li><a href='..\PHP\TD_2_Exo_3.php'>Exercice 3</a></li>
									<li><a href='..\PHP\TD_2_Final.php'>TP Final</a></li>
                                </ul>
                            </li>
                            <li class='Sous-Menu-S1-1'><a href='..\PHP\index.php#TD3'>TD3</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\PHP\TD_3_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\PHP\TD_3_Exo_2.php'>Exercice 2</a></li>
                                    <li><a href='..\PHP\TD_3_Exo_3.php'>Exercice 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class='Sous-Menu-1'><a href='..\SQL\index.php'>SQL</a>
                        <ul class='Sous-Menu-S1'>
                            <li class='Sous-Menu-S1-1'><a href='..\SQL\index.php#TD1'>TD1</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\SQL\TD_1_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\SQL\TD_1_Exo_2.php'>Exercice 2</a></li>
                                    <li><a href='..\SQL\TD_1_Exo_3.php'>Exercice 3</a></li>
                                </ul>
                            </li>
                            <li class='Sous-Menu-S1-1'><a href='..\SQL\index.php#TD2'>TD2</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\SQL\TD_2_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\SQL\TD_2_Exo_2.php'>Exercice 2</a></li>
                                    <li><a href='..\SQL\TD_2_Exo_3.php'>Exercice 3</a></li>
                                </ul>
                            </li>
                            <li class='Sous-Menu-S1-1'><a href='..\SQL\index.php#TD3'>TD3</a>
                                <ul class='Sous-Menu-S1-B'>
                                    <li><a href='..\SQL\TD_3_Exo_1.php'>Exercice 1</a></li>
                                    <li><a href='..\SQL\TD_3_Exo_2.php'>Exercice 2</a></li>
                                    <li><a href='..\SQL\TD_3_Exo_3.php'>Exercice 3</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
	" ;
}



Function Highlight($FILE_LOCAL) // Fonction affichant le highlight_file.
{
	echo
	"
	<footer>
		<div class='Div1'>" ;
	echo
	"
			<p>Code Source du site :</p>
	" ;
			highlight_file($FILE_LOCAL) ;
	echo
	"
		</div>
	</footer>
	" ;
}

?>