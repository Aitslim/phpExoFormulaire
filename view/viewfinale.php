<?php
// Controle formulaire -->

$nbpoint = $_POST["question1"] + $_POST["question2"] + $_POST["question3"];
$nbpoint = ($nbpoint < 0) ? 0 : $nbpoint;

echo "Merci pour votre notation : " . str_repeat("⭐", $nbpoint) . str_repeat("⚫", 5 - $nbpoint) . "<br>" . "<br>";

if (isset($_POST["question3"]) && isset($_POST["recall"])) {
    echo "Vous serez rappelé au numéro : " . $_POST["phone"];
}
echo "<br>";
