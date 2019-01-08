<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chifoumi</title>
        <link rel="shortcut icon" href="./IMG/favi.gif">
        <link rel="stylesheet" href="./ChifoumiCSS.css" />
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    </head>

    <body>
        <section>
            <br>
            <div>
                <br>
                <br>
                <h2>Bienvenue !</h2>
                <br>
                <p>Entre le nombre de manche(s):</p>

                <form id="entree" method="post" action="chifoumi.php">

                    <input class="entre" type="number" min="1" name="manche" required value="">
                    <p>Entre ton nom:</p>
                    <input class="entre2" type="text" name="joueur" value="">
                    <br><br>
                    <input class="entre1" type="submit" name="login" value="C'est parti !">
                    <input class="hidden" type="text" name="scoreHumain" value="0">
                    <input class="hidden" type="text" name="scoreRobot" value="0">

                </form>
            </div>
            <br>
            <h3 id="amstrad"><b># CHIFOUMI #</b></h3>
        </section>
    </body>
</html>
