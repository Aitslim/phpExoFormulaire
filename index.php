<?php

// var_dump($_POST);
echo "<br>";
$erreur = false;
$err = array();

if (!$_POST) {
    echo "Afficher le formulaire" . "<br>";
    echo "<br>";
    require "view/leFormulaire.php";
} else {
    $err = array();
    $erreur = ControleForm($_POST, $err);
    if ($erreur) {
        // $err["phone"] = "toto";
        echo "Retour au formulaire. Il y a des erreur " . "<br>";
        var_dump($err);
        echo "<br>";
        require "view/leFormulaire.php";
    } else {
        echo  "<br>" . "Pas d'erreur" . "<br>";
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
    if (!is_numeric($poste["phone"])) {
        $err["phone"] = "toto";
        $resultat = true;
    }
    return $resultat;
}
