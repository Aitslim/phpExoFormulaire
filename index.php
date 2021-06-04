<?php

$erreur = [];

if (!$_POST) {
    require "view/leFormulaire.php";
} else {

    $erreur = ControleForm($_POST);
    if ($erreur) {
        require "view/leFormulaire.php";
    } else {
        require "view/viewfinale.php";
    }
}

function ControleForm(array $poste): array
{
    $erreur = [];
    if (strlen($poste["lastname"]) <= 2) {
        $erreur["lastname"] = "Veuillez entrer un Nom complet";
    }
    if (strlen($poste["firstname"]) <= 2) {
        $erreur["firstname"] = "Veuillez entrer un Prénom complet";
    }
    if (!is_numeric($poste["phone"]) || strlen(trim($poste["phone"])) != 10) {
        $erreur["phone"] = "Veuillez entrer un N° de téléphone valide";
    }
    return $erreur;
}
