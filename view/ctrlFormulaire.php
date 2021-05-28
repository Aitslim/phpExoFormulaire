<?php
// Controle formulaire -->

// foreach ($_POST as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }
// var_dump($_POST) . "<br>" . "<br>";

$nbpoint = 2;
// $nbpoint = $_POST["question1"] + $_POST["question2"] + $_POST["question3"];
$nbpoint = ($nbpoint < 0) ? 0 : $nbpoint;
echo "Merci pour votre notation : " . str_repeat("⭐", $nbpoint) . str_repeat("⚫", 5 - $nbpoint) . "<br>" . "<br>";

// if ($_POST["question3"] == "-1" && isset($_POST["recall"])) {
//     echo "Vous serez rappelé au numéro : " . $_POST["phone"];
// }
// echo "<br>";
// echo "Telephone est numerique : " . is_numeric($_POST["phone"]) . "<br>";
