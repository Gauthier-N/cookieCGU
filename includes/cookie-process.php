
<?php
    session_start();
    function updateCookie ($valeur) {
        setcookie (
            "AcceptCGU",
            $valeur,
            time()+3600*24*365,
            "/",
            null,
            false,
            true
        );
    }

    function deleteCookie ($valeur) {
        setcookie (
            "AcceptCGU",
            $valeur,
            time()-3600*24*365,
            "/",
            null,
            false,
            true
        );
    }


    
    $reponse=[];
    if(isset($_POST['gateau'])) {
        $reponse['AcceptCGU'] = $_POST['gateau'];
        $_SESSION['AcceptCGU'] = $_POST['gateau'];
        if ($_POST['gateau'] == "true") {
            $valeur = "true";
            updateCookie ($valeur);
        }
        else {
            $valeur = "false";
            deleteCookie ($valeur);
        }
    }
    else {
        $reponse["erreur"]="Choix non recu";
    }
    echo json_encode($reponse);
?>