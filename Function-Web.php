<?php


Function Menu() // Fonction affichant le menu.
{ 

} 


Function Highlight() // Fonction affichant le highlight file.
{ 

 
	echo '	<div class="Div1">
				<p>Code Source du site :</p>"

				highlight_file(__FILE__);
			</div>'

?>