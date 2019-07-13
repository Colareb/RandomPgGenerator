<?php 
include 'newPg.php';

$stats = array(); $race; $raceDescription; $raceLink; $class; $classDescription; $classLink; $background; $backgroundLink;

//newBackground($background, $backgroundLink);

newRace($race, $raceDescription, $raceLink);

newClass($class, $classDescription, $classLink);

newStats($stats);
 
?><!DOCTYPE html>

<html>
        <head>

            <meta name="viewport" content="width=device-width, minimum-scale=0.25, maximum-scale=1.6, initial-scale=1.0" />

            <title>RandomPgGenerator</title>

            <link rel="stylesheet" type="text/css" href="css/style.css">
            
            <link rel="shortcut icon" href="D&D.ico">

        </head>

        <body class = "container">
            <figure class = "left">
            <a href = "<?php echo $raceLink?>" target = "_blank"><img src = "<?php echo $race?>"> </a>
            
            <figcaption><?php echo $raceDescription; ?></figcaption>
            </figure>
            
            
            <span class = "center"><p><button><a href = "index.html"><b>Rules</b></a></button></p>
            <p><ul>
                <li>Strength: <?php echo $stats[0]; ?> </li>
                <li>Dexterity: <?php echo $stats[1]; ?> </li>
                <li>Constitution: <?php echo $stats[2]; ?> </li>
                <li>Intelligence: <?php echo $stats[3]; ?> </li>
                <li>Wisdom: <?php echo $stats[4]; ?> </li>
                <li>Charisma: <?php echo $stats[5]; ?> </li>
            </ul></p>
            <p><button><a href = "randomPgGenerator.php"><b>Who are you?</b></a></button></p>
            </span>

            <figure class = "right">
            <a href = "<?php echo $classLink?>" target = "_blank"><img src = "<?php echo $class?>"></a>
            <figcaption><?php echo $classDescription; ?></figcaption>
            </figure>

        </body>
</html>