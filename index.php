<?php

$erreur = false;
$err = array();

if (!$_POST) {
    echo "1re fois : afficher le formulaire" . "<br>";
    require "view/leFormulaire.php";
} else {
    $err = array();
    $erreur = ControleForm($_POST, $err);
    if ($erreur) {
        echo "Retour au formulaire. Il y a des erreur " . "<br>";
        require "view/leFormulaire.php";
    } else {
        echo "Afficher la validation du formulaire" . "<br>";
        require "view/viewfinale.php";
    }
}

function ControleForm(array $poste, &$err)
{
    $resultat = false;
    if (strlen($poste["lastname"]) <= 2) {
        $err["lastname"] = "toto";
        $resultat = true;
    }
    if (strlen($poste["firstname"]) <= 2) {
        $err["firstname"] = "toto";
        $resultat = true;
    }
    if (!is_numeric($poste["phone"]) || strlen(trim($poste["phone"])) != 10) {
        $err["phone"] = "toto";
        $resultat = true;
    }
    return $resultat;
}
