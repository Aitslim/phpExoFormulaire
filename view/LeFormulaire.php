<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- meta référencement -->
    <meta name="description" content="Web Dev PHP : Conditions, requêtes GET">
    <meta name="author" content="Camile Ghastine">

    <title>Questionnaire de satisfaction du service client Amazin</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://bootswatch.com/4/lumen/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>

    <div class="container">

        <h1> Amazin</h1>

        <form class="mb-5" method="POST" action="index.php">
            <fieldset>
                <legend>Formulaire de satisfaction</legend>
                <div class="form-group has-danger">
                    <label for="lastname" class="form-label mt-2">Nom : </label>
                    <input type="text" name="lastname" class="form-control <?= (isset($erreur["lastname"])) ? 'is-invalid' : '' ?>" id="lastname" aria-describedby="lastnameHelp" value="<?= ($_POST) ? $_POST["lastname"] : "" ?>" placeholder="Enter votre nom" required="">
                    <div class="invalid-feedback"><?= $erreur["lastname"] ?></div>
                </div>
                <div class="form-group">
                    <label for="firstname" class="form-label mt-2">Prénom : </label>
                    <input type="text" name="firstname" class="form-control <?= (isset($erreur["firstname"])) ? 'is-invalid' : '' ?>" id="firstname" aria-describedby="firstnameHelp" value="<?= ($_POST) ? $_POST["firstname"] : "" ?>" placeholder="Enter votre prénom" required="">
                    <!-- <div class="invalid-feedback">Veuillez entrer un Prénom complet</div> -->
                    <div class="invalid-feedback"><?= $erreur["firstname"] ?></div>
                </div>

                <div class="form-group">
                    <label for="phone" class="form-label mt-2">Numéro de téléphone : </label>
                    <input type="tel" name="phone" class="form-control <?= (isset($erreur["phone"])) ? 'is-invalid' : '' ?>" id="phone" aria-describedby="phoneHelp" value="<?= ($_POST) ? $_POST["phone"] : "" ?>" placeholder="0123456789" required="">
                    <div class="invalid-feedback"><?= $erreur["phone"] ?></div>
                </div>

                <div class="form-group">
                    <label for="date" class="form-label mt-2">Date d'achat : </label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" value="<?= ($_POST) ? $_POST["date"] : "" ?>" placeholder="01/01/2021">
                </div>

                <legend class="mt-2">L'agent a-t-il été agréable ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" <?= (isset($_POST["question1"]) && ($_POST["question1"] == "2")) ? 'checked' : '' ?> required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" <?= (isset($_POST["question1"]) && ($_POST["question1"] == "0")) ? 'checked' : '' ?> required="">
                        non </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" <?= (isset($_POST["question1"]) && ($_POST["question1"] == "1")) ? 'checked' : '' ?> required="">
                        sans avis</label>
                </div>
                <legend class="mt-2">L'agent a-t-il compris votre problème</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" <?= (isset($_POST["question2"]) && ($_POST["question2"] == "2")) ? 'checked' : '' ?> required="">
                        Oui</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" <?= (isset($_POST["question2"]) && $_POST["question2"] == "0") ? 'checked' : '' ?> required="">
                        non </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" <?= (isset($_POST["question2"]) && $_POST["question2"] == "1") ? 'checked' : '' ?> required="">
                        sans avis</label>
                </div>
                <legend class="mt-2">L'agent a-t-il résolu votre problème ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" <?= (isset($_POST["question3"]) && $_POST["question3"] == "1") ? 'checked' : '' ?> required="">
                        Oui</label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" <?= (isset($_POST["question3"]) && $_POST["question3"] == "-1") ? 'checked' : '' ?> required="">
                        non </label>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label mt-2">Dites-nous en plus : </label>
                    <textarea name="message" class="form-control" id="message" rows="2"><?= ($_POST) ? $_POST["message"] : "" ?></textarea>
                </div>
                <legend class="mt-2">Acceptez vous d'être rappelé ?</legend>
                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall">
                    <label class="form-check-label" for="recall">
                        Cochez-cette case si vous acceptez d'être rappelé.</label>
                </div>
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </fieldset>
        </form>
    </div>

</body>

</html>