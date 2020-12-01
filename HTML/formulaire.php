<html 5>
    <html lang="fr">
        <head>
            <meta charset='utf-8'>
            <title>Formulaire</title>
            <meta name='viewport' content='width=device-width, initial-scale=1'>
            <link rel='stylesheet' type='text/css' media='screen' href='global.css'>
        </head>
        <body>
            <form action="/formulaire" method="post">
                <!-- Civilité -->
                <div>
                    <label for="civilite">Civilité :</label>
                        <input type="radio" name="user_civilite" value="Homme" >
                            <label for="Homme">Mr</label>
                        <input type="radio" name="user_civilite" value="Femme" >
                            <label for="Femme">Mme ou Mlle</label>
                </div>
                <!-- Nom -->
                <div>
                    <label for="name">Nom :</label>
                    <input type="text" id="name" name="user_name">
                </div>
                <!-- Prénom -->
                <div>
                    <label for="surname">Prénom :</label>
                    <input type="text" id="surname" name="user_surname">
                </div>
                <!-- Date de Naisance -->
                <div>
                    <label for="naisance">Date de Naisance :</label>
                    <select name="day" id="day">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                        <option value="11">11</option>
                        <option value="12">12</option>
                        <option value="13">13</option>
                        <option value="14">14</option>
                        <option value="15">15</option>
                        <option value="16">16</option>
                        <option value="17">17</option>
                        <option value="18">18</option>
                        <option value="19">19</option>
                        <option value="20">20</option>
                        <option value="21">21</option>
                        <option value="22">22</option>
                        <option value="23">23</option>
                        <option value="24">24</option>
                        <option value="25">25</option>
                        <option value="26">26</option>
                        <option value="27">27</option>
                        <option value="28">28</option>
                        <option value="29">29</option>
                        <option value="30">30</option>
                        <option value="31">31</option>
                    </select>
                    <select name="mouth" id="mouth">
                        <option value="Janvier">Janvier</option>
                        <option value="Fevrier">Fevrier</option>
                        <option value="Mars">Mars</option>
                        <option value="Avril">Avril</option>
                        <option value="Mai">Mai</option>
                        <option value="Juin">Juin</option>
                        <option value="Juillet">Juillet</option>
                        <option value="Aout">Aout</option>
                        <option value="Septembre">Septembre</option>
                        <option value="Octobre">Octobre</option>
                        <option value="Novembre">Novembre</option>
                        <option value="Décembre">Décembre</option>
                    </select>
                <!-- Année -->
                    <label for="Annee">Année :</label>
                    <input type="number" id="annee" name="user_annee"/>
                </div>
                <!-- Adresse -->
                <div class="Adresse-Form">
                    <label for="Adresse">Adresse :</label>
                    <!-- Numéro -->
                    <div>
                        <label for="nb">Numéro :</label>
                        <input type="number" id="nb" name="user_nb">
                    <!-- Rue -->
                        <label for="Rue">Rue :</label>
                        <input type="text" id="Rue" name="user_Rue">
                    </div>
                    <!-- Code Postal -->
                    <div>
                        <label for="cp">Code Postal :</label>
                        <input type="number" id="cp" name="user_cp">
                    <!-- Ville -->
                        <label for="ville">Ville :</label>
                        <input type="text" id="ville" name="user_ville">
                    </div>
                </div>
                <!-- Téléphone -->
                <div>
                    <label for="tel">Téléphone :</label>
                    <input type="tel" id="tel" name="user_tel">
                </div>
                <!-- E-Mail -->
                <div>
                    <label for="mail">E-mail :</label>
                    <input type="mail" id="mail" name="user_mail">
                </div>
                <div>
                    <input type="submit" value="Envoyer" />
                    <input type="reset" value="Reset" />
                </div>
            </form>
        </body>
    </html>
</html>