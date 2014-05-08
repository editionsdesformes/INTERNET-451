<?php

// on crée un objet pour le retour des information
$retour = new stdClass();

// on vérifie qu'on reçoit bien une url en paramètre
if(!empty($_GET['url'])){

    $url = $_GET['url'];

    // on vérifie si l'url existe
    $headers = @get_headers($url);

    if(strpos($headers[0],'200')===false){
        $retour->url = $url;
        $retour->exist = false;

    }else{
        $retour->url = $url;
        $retour->exist = true;
    }

}else{
    $retour->url = $url;
    $retour->exist = false;
}

// on renvoi le résultat sous forme de json à la page
echo json_encode($retour);