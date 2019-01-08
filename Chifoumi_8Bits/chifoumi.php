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

                     $tableau = array(
                         "pierre",
                         "feuille",
                         "ciseaux"
                     );
                     $random = array_rand($tableau,1);
                     $robot = $tableau[$random];
                     $resultat = 3;
                     $human = 3;
                     $manche = $_POST["manche"];
                     $scoreHumain = $_POST["scoreHumain"];
                     $scoreRobot = $_POST["scoreRobot"];
                     $joueur = $_POST["joueur"];
                     $joueur = ucwords($joueur);

                     if (isset($_POST["pierre"]))
                     {
                         $human = $_POST["pierre"];

                         if($robot == "feuille")
                         {
                             $resultat = 0;
                         }
                         elseif($robot == "ciseaux")
                         {
                             $resultat =  1;
                         }
                         elseif($robot == $human)
                         {
                             $resultat = 2;
                         }
                     }
                     elseif (isset($_POST["feuille"]))
                     {
                         $human = $_POST["feuille"];

                         if($robot == "ciseaux")
                         {
                             $resultat = 0;
                         }
                         elseif($robot == "pierre")
                         {
                             $resultat =  1;
                         }
                         elseif($robot == $human)
                         {
                             $resultat = 2;
                         }
                     }
                     elseif (isset($_POST["ciseaux"]))
                     {
                         $human = $_POST["ciseaux"];

                         if ($robot == "pierre")
                         {
                             $resultat = 0;
                         }
                         elseif ($robot == "feuille")
                         {
                             $resultat =  1;
                         }
                         elseif ($robot == $human)
                         {
                             $resultat = 2;
                         }
                     }

                     if ($resultat == 0)
                     {
                         echo "<br><br><br><br>Tu as perdu !<br><br>";
                         $scoreRobot++;
                     }
                     elseif ($resultat == 1)
                     {
                         echo "<br><br><br><br>Tu as gagné !<br><br>";
                         $scoreHumain++;
                     }
                     elseif ($resultat == 2)
                     {
                         echo "<br><br><br><br>Egalité !<br><br>";
                     }

                     if (isset($_POST["pierre"]) || isset($_POST["feuille"]) || isset($_POST["ciseaux"]))
                     {
                         $manche--;
                         echo "J'ai joué " . $robot . " !<br><br>";
                     }
                     else
                     {
                         echo "<br><br><br><br>A toi de jouer " . $joueur . " !";
                     }

                     if ($manche == 0)
                     {
                         header('location: ./chifoumiFin.php?scoreRobot=' . $scoreRobot . '&scoreHumain=' . $scoreHumain . '&joueur=' . $joueur);
                     }

                ?>
            </div>
            <br>
            <h3 id="amstrad"><b># CHIFOUMI #</b></h3>
        </section>
            <aside>

                <p>Score <?php echo  $joueur ?>:<?php echo $scoreHumain ?></p>
                <p>Score Robot:<?php echo $scoreRobot ?></p>
                <p>Manche n°<?php echo $manche ?></p>

            </aside>

                <form method="post" action="chifoumi.php">

                    <input id="pierre" type="submit" name="pierre" value="pierre">
                    <input id="feuille" type="submit" name="feuille" value="feuille">
                    <input id="ciseaux" type="submit" name="ciseaux" value="ciseaux">
                    <input class="hidden" type="number" name="manche" value="<?php echo  $manche ?>">
                    <input class="hidden" type="text" name="scoreHumain" value="<?php echo $scoreHumain ?>">
                    <input class="hidden" type="text" name="scoreRobot" value="<?php echo $scoreRobot ?>">
                    <input class="hidden" type="text" name="joueur" value="<?php echo  $joueur ?>">

                </form>
    </body>
</html>
