<?php


Function Moyenne() // Fonction permetant de calculer une moyenne avec PHP. Source : http://www.zone-webmasters.net/codes-sources/php/48-calculer-une-moyenne.html
{ 
	$Nombres = func_get_args(); 
	$Nb = sizeof($Nombres);
	$Somme = 0; 
	foreach ($Nombres as $Valeur)
	{ 
		$Somme += $Valeur; 
	} 
	return ($Somme / $Nb); 
} 


// TABLEAU 1
Function TABLEAU1() {
    echo '
        <table>
            <thead>
                <tr>
                    <th>Entête 1</th>
                    <th>Entête 2</th>
                    <th>Entête 3</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>VA 1</td>
                    <td>VB 1</td>
                    <td>VC 1</td>
                </tr>
                <tr>
                    <td>VA 2</td>
                    <td>VB 2</td>
                    <td>VC 2</td>
                </tr>
            </tbody>
        </table>
    ';
};

if(isset($Entete1)) {
    $C = $_POST['C'];
}


// TABLEAU 2
Function TABLEAU2($Entete1,$Entete2,$Entete3) {
    echo '
        <table>
            <thead>
                <tr>
                    <th>';
    if(isset($Entete1)) {
        echo $Entete1;
    };
    echo '</th><th>';
    if(isset($Entete2)) {
        echo $Entete2;
    };
    echo '</th><th>';
    if(isset($Entete3)) {
        echo $Entete3;
    };
    echo '
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>VA 1</td>
                    <td>VB 1</td>
                    <td>VC 1</td>
                </tr>
                <tr>
                    <td>VA 2</td>
                    <td>VB 2</td>
                    <td>VC 2</td>
                </tr>
            </tbody>
        </table>
    ';
};


// TABLEAU 3
Function TABLEAU3($VA1,$VA2,$VA3,$MOYENNE) {
    echo '
        <table>
            <thead>
                <tr>
                    <th>Valeurs :</th>
                    <th>
        ';
    echo $VA1;
    echo '
                    </th>
                    <th>
        ';
    echo $VA2;
    echo '
                    </th>
                    <th>
        ';
    echo $VA3;
    echo '
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Moyenne :</td>
                    <td colspan="3">
        ';
    echo $MOYENNE;
    echo '
                    </td>
                </tr>
            </tbody>
        </table>
    ';
};


// Formulaire Final
Function FORMFINAL($MDP,$VERIF_MDP) {

    session_start() ;

    if (isset($_SESSION['VERIF'])) { // Si Session VERIF True, alors met directement le Lien Secret.
        if($_SESSION['VERIF'] == TRUE) { 
            echo '<p><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout/Concepts_de_base_flexbox">Lien Secret</a>';
            return ; // !!! - Met fin au process - !!!
        }
    }

    if (isset($_POST['MDP'])) { // Si post MDP.
        if ($_POST['MDP'] == $VERIF_MDP) {
            $_SESSION['VERIF'] = TRUE ;
            echo '<p><a href="https://developer.mozilla.org/fr/docs/Web/CSS/CSS_Flexible_Box_Layout/Concepts_de_base_flexbox">Lien Secret</a>';
            return ; // !!! - Met fin au process - !!!
        }
        if ($_POST['MDP'] == '-!-NEUTRE-!-') { // Si post MDP = '-!-NEUTRE-!-' (Défaut).
            echo "
            <form method='POST'>
                <table>
                    <tr><td><p>Mots de Passe :</p></td><td><p><input type='text' name='MDP'></p></td></tr>
                    <tr><td><p><input type='submit' name='Envoyer'></p></td></tr>
                </table>
            </form>
            ";
            return ; // !!! - Met fin au process - !!!
        }
        else{
            echo "<p>Le MDP est Incorrect.</p>" ;
            echo "
            <form method='POST'>
                <table>
                    <tr><td><p>Mots de Passe :</p></td><td><p><input type='text' name='MDP'></p></td></tr>
                    <tr><td><p><input type='submit' name='Envoyer'></p></td></tr>
                </table>
            </form>
            ";
            return ; // !!! - Met fin au process - !!!
        }
    }
}
?>