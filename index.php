<?php

// if ($_POST === []) {
if (!$_POST) {
    echo "Afficher le formulaire" . "<br>";
    require "view/leFormulaire.php";
} else {
    echo "Afficher la validation du formulaire" . "<br>";
    require "view/ctrlFormulaire.php";
}
