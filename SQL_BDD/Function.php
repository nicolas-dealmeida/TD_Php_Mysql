<?php



Function afficher_requet($requete1, $requete2, $requete3){ // Affiche la requette en tableau HTML.
        
    try {
        $requete = "SELECT `nom`,`prenom`,`numSS` FROM `Patient` WHERE ".$requete1." ".$requete2." ".$requete3;
        echo $requete;
        $BDD=new PDO('mysql:host=http://192.168.64.106; dbname=Pie_TD1_Medecin; charset=utf8','root','root');
        $BRUTE=$BDD->query($requete);
        $TAB=$BRUTE;    
                     

        if  ($BRUTE->rowCount()==0){
            echo '<p class="Rouge";>Pas de réponse</p>';
        }else{
            ?>
                <table>
                    <tbody>
                        <tr>
                            <td>Nom</td>
                            <td>Prénom</td>
                            <td>NumSS</td>
                        </tr>
                            <?php  
                            while($TAB=$BRUTE->fetch()){
                                echo'<tr>
                                        <td>'.$TAB["Nom"].'</td>
                                        <td>'.$TAB["Prénom"].'</td>
                                        <td>'.$TAB["NumSS"].'</td>
                                    </tr>';
                            }             
                            ?>
                    </tbody>
                </table>
            <?php 
        }

    }catch(Exception $e){ // If Error

    }
}



?>