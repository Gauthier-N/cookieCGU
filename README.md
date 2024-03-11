1a. Extraire le dossier à la racine de ton projet, pour que les fichiers s'ajoutent bien dans tes dossiers includes et assets.

1b. Si on te demande de remplacer jquery-3.7.1.js, répond comme tu veux.


2. Copier en haut de ton footer :
<?php
    include "../includes/cookie-popup.php";
?>


3. Pour changer le css, il faut modifier assets/css/gateau-style.css


4. Changer le texte ligne 29 de cookie-popup.php pour mettre ce que tu veux, par exemple 
"En cliquant sur "accepter", vous acceptez nos <a href="adressedetesCGU.php" _blank>CGU</a>."


5. Pour utiliser la variable, elle s'appelle : $_SESSION['AcceptCGU'] :
"true" si la personne a accepté,
"false" sinon. 
