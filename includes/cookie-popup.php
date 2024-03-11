<?php
// Les class, id et variables sont appelés "gateau" au lieu de "cookie" pour ne pas être bloqué par les bloqueurs de cookie intégrés aux navigateurs

// lance la session seulement si c'est pas déja fait
if(session_status() === PHP_SESSION_NONE) session_start();

// Si l'utilisateur a déjà accepté le cookie dans le passé, met à jour $_SESSION
if (isset($_COOKIE['AcceptCGU'])) {
    $_SESSION['AcceptCGU'] = $_COOKIE['AcceptCGU'];
}


// Affiche le popup uniquement si n'a pas déja répondu dans la session, ou n'a pas accepté au cours de l'année dernière
if (!isset($_SESSION['AcceptCGU']) && !isset($_COOKIE['AcceptCGU'])) {
    echo '
<!-- ////////////////////// CSS //////////////////////  -->
<link rel="stylesheet" href="../assets/css/gateau-style.css">


<!-- ////////////////////// JAVASCRIPT //////////////////////  -->
<script src="../assets/js/jquery-3.7.1.js" defer></script>
<script src="../assets/js/gateau-script.js" defer></script>


<!-- ////////////////////// HTML/PHP //////////////////////  -->
<div class="popupGateau">

    <div class="popupGateauText">
        Tape ton texte ici (includes/cookie-popup.php)
    </div>

    <div class="popupGateauBtn">
        <!-- <form> -->
        <form action="../includes/cookie-process.php" METHOD="POST" id="gateauRecetteOui">
            <input type="submit" class="gateauBtn" id="gateauRecetteOuiInput" value="Accepter">
        </form>

        <!-- <form> -->
        <form action="../includes/cookie-process.php" METHOD="POST" id="gateauRecetteNon">
            <input type="submit" class="gateauBtn" id="gateauRecetteNonInput" value="Refuser">
        </form>
    </div>
</div>
    ';
}
?>