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
	$File_CSS = "../global.css" ; // Définition du Fichier CSS correspondant.
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
			.Menu-Nav ul { /* S'applique sur la liste */
				margin: 0px;
				padding: 0px;
				background: #0D1F2D;
				list-style:none;
			} 

			.Menu-Nav a { /* S'applique sur les liens dans le menu */
				padding-top: 5px;
				padding-bottom: 5px;
				padding-left: 10px;
				padding-right: 10px;
				
				display: block;
				text-align:center;
				text-decoration: none;
				color: #EEEEEE;
				font-size: 22px;
			}

			.Menu a:hover { /*CSS des liens lors du survole du curseur */
				text-decoration: underline white;
			}

			.Menu-Nav .Menu {
				display: flex;
				flex-flow: row wrap;
				justify-content: center;
				box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.40);
			}


				/*			ATTENTION : SOUS-MENU			*/


			.Sous-Menu-1 { 
				position: relative;
			}
			.Sous-Menu-2 { 
				position: relative;
			}
			
			.Sous-Menu-1:hover > .Sous-Menu-1a { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1:hover > .Sous-Menu-1b { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1:active > .Sous-Menu-1c { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1:active > .Sous-Menu-1d { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1:hover > .Sous-Menu-1e { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1:hover > .Sous-Menu-1f { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2:active > .Sous-Menu-2a { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2:hover > .Sous-Menu-2b { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2:hover > .Sous-Menu-2c { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2:active > .Sous-Menu-2d { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2:active > .Sous-Menu-2e { /* Active le sous menu lors du survole*/
				display: flex;
			}


			.Sous-Menu-1a { /* Sous Menu HTML */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-1b { /* Sous Menu PHP1 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-1c { /* Sous Menu PHP2 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-1d { /* Sous Menu SQL1 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-1e { /* Sous Menu SQL2 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-1f { /* Sous Menu SQL3 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-2a { /* Sous Menu PHP TP1 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-2b { /* Sous Menu PHP TP2 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-2c { /* Sous Menu SQL 1 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-2d { /* Sous Menu SQL 2 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			.Sous-Menu-2e { /* Sous Menu SQL 3 */
				display: none ; 
				flex-flow: column wrap;
				min-width: 205px;
				position: absolute;
			}
			
			.Sous-Menu-1a.is-active { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1b.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			.Sous-Menu-1c.is-active { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1d.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			.Sous-Menu-1e.is-active { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-1f.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			.Sous-Menu-2a.is-active { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2b.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			.Sous-Menu-2c.is-active { /* Active le sous menu lors du survole*/
				display: flex;
			}
			.Sous-Menu-2d.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			.Sous-Menu-2e.is-active { /* Active le sous menu lors du survole */
				display: flex;
			}
			
			.Sous-Menu-1a a, Sous-Menu-1b a, Sous-Menu-1c a, Sous-Menu-1d a, Sous-Menu-1e, Sous-Menu-1f, {
				text-align: left;
			}
			.Sous-Menu-2a a, Sous-Menu-2b a, Sous-Menu-2c a, Sous-Menu-2d a, Sous-Menu-2e {
				text-align: left;
			}
			

				/*			CSS MEDIA			*/
			

			@media (max-width: 480px) { /* Si Ecran trop petit (Donc téléphone, etc) */
				.Menu-Nav a { /* Menu */
					font-size: 14px;
					padding-top: 5px;
					padding-bottom: 5px;
					padding-left: 5px;
					padding-right: 5px;
				}
				.Sous-Menu-1a.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-1b.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-1c.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-1d.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-1e.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-2a.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-2b.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-2c.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-2d.is-active { /* Désactive le sous menu */
					display: none;
				}
				.Sous-Menu-2e.is-active { /* Désactive le sous menu */
					display: none;
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
				
					<li><a href='Accueil.php'>Accueil</a></li>

					<li class='Sous-Menu-1'><a href='HTML/index.php'>HTML</a>
						<ul class='Sous-Menu-1a'>
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