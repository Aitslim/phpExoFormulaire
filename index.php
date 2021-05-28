<?php

var_dump($_POST);
echo "<br>";
$erreur = false;

if (!$_POST) {
    echo "Afficher le formulaire" . "<br>";
    require "view/leFormulaire.php";
} else {
    $erreur = ControleForm($_POST);
    echo "Erreur après controle : ";
    if ($erreur) {
        echo "Il y a erreur" . "<br>";
        require "view/leFormulaire.php";
    } else {
        echo "Pas d'erreur" . "<br>";
        echo "Afficher la validation du formulaire" . "<br>";
        require "view/ctrlFormulaire.php";
    }
}

function ControleForm(array $poste)
{
    if (strlen($poste["lastname"]) <= 2) {

        return true;
    } else {
        return false;
    }
}
