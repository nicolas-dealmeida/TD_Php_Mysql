<?php
    header("Status: 301 Moved Permanently", false, 301); // Redirection Permanente (301)
    header("Location: Accueil.php"); // Page vers la quelle il redirige
    exit(); // Fin
?>