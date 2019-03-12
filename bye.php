<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8">
        <link rel="stylesheet" href="./ChifoumiCSS.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <title>ByeBye!</title>

    </head>

    <body>

        <?php $joueur = htmlspecialchars($_GET["joueur"]); ?>

        <img id="chien" src="./IMG/chien.png" alt="Tête de chien qui tourne"><br>
        <!-- Bisous MisuFtw -->
        <p id="tapi">Tant pis, au revoir <?php echo $joueur ?> !</p>

    </body>
</html>
