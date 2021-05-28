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
                <div class="form-group">
                    <label for="lastname" class="form-label mt-4">Nom : </label>
                    <input type="text" name="lastname" class="form-control" id="lastname" aria-describedby="lastnameHelp" placeholder="Enter votre nom" required="">
                </div>
                <div class="form-group">
                    <label for="firstname" class="form-label mt-4">Prénom : </label>
                    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="firstnameHelp" placeholder="Enter votre prénom" required="">
                </div>
                <div class="form-group">
                    <label for="phone" class="form-label mt-4">Numéro de téléphone : </label>
                    <input type="tel" name="phone" class="form-control" id="phone" aria-describedby="phoneHelp" placeholder="0123456789" required="">
                </div>
                <!-- <div class="form-group">
                    <label for="date" class="form-label mt-4">Date d'achat : </label>
                    <input type="date" name="date" class="form-control" id="date" aria-describedby="dateHelp" placeholder="01/01/2021">
                </div>
                <legend class="mt-4">L'agent a-t-il été agréable ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios1" value="2" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios2" value="0" required="">
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question1" id="optionsRadios3" value="1" required="">
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il compris votre problème</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios1" value="2" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios2" value="0" required="">
                        non </label>
                </div>
                <div class="form-check-label">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question2" id="optionsRadios3" value="1" required="">
                        sans avis
                    </label>
                </div>
                <legend class="mt-4">L'agent a-t-il résolu votre problème ?</legend>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios1" value="1" required="">
                        Oui
                    </label>
                </div>
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="question3" id="optionsRadios2" value="-1" required="">
                        non </label>
                </div>

                <div class="form-group">
                    <label for="message" class="form-label mt-4">Dites-nous en plus : </label>
                    <textarea name="message" class="form-control" id="message" rows="3"></textarea>
                </div>
                <legend class="mt-4">Acceptez vous d'être rappelé ?</legend>
                <div class="form-check">
                    <input name="recall" class="form-check-input" type="checkbox" value="true" id="recall">
                    <label class="form-check-label" for="recall">
                        Cochez-cette case si vous acceptez d'être rappelé.
                    </label>
                </div> -->
                <button type="submit" class="btn btn-primary mt-5">Submit</button>
            </fieldset>
        </form>
    </div>

</body>

</html>