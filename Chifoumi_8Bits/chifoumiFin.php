<!DOCTYPE html>
<html lang="fr" dir="ltr">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Chifoumi</title>
        <link rel="stylesheet" href="./ChifoumiCSS.css" />
        <link rel="shortcut icon" href="./IMG/favi.gif">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">

    </head>

    <body>
        <section>
            <br>
            <div>
                <?php

                    $scoreHumain = $_GET["scoreHumain"];
                    $scoreRobot = $_GET["scoreRobot"];
                    $joueur = $_GET["joueur"];

                    echo "<br>";
                    echo "<p>Ton score: " . $scoreHumain . "</p>";
                    echo "<p>Mon score: " . $scoreRobot . "</p>";
                    echo "<br><br>";

                    if ($scoreHumain < $scoreRobot)
                    {
                        echo "Tu as perdu " . $joueur . " !<br>";
                        echo "<h1>:p</h1>";
                        echo "On rejoue ?<br><br><br>";
                    }
                    elseif ($scoreHumain > $scoreRobot)
                    {
                        echo "Tu as gagné " . $joueur . "...<br>";
                        echo "<h1>:(</h1>";
                        echo "On rejoue ?<br><br><br>";
                    }
                    elseif ($scoreHumain == $scoreRobot)
                    {
                        echo "égalité !?!<br>";
                        echo "<h1>:o</h1>";
                        echo "On rejoue " . $joueur . " ?<br><br>";
                    }

                    if (isset($_GET["non"]))
                    {
                        header('location: ./bye.php?joueur=' . $joueur);
                    }

                ?>
                <br>
                <a href="./index.php">Oui!</a>

                <form id="entree" method="get">
                    <input id="non" type="submit" name="non" value="Nan!">
                    <input class="hidden" type="text" name="scoreHumain" value="<?php echo $scoreHumain ?>">
                    <input class="hidden" type="text" name="scoreRobot" value="<?php echo $scoreRobot ?>">
                    <input class="hidden" type="text" name="joueur" value="<?php echo  $joueur ?>">

                </form>
                <br>
            </div>
            <br>
            <h3 id="amstrad"><b># CHIFOUMI #</b></h3>
        </section>
    </body>
</html>
