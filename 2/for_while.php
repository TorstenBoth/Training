<?php
/**
 * comyo.media
 * @link http://www.comyo-media.de
 * Projekt: Training
 * @link $ProjectUrl$
 *
 * @author "Torsten Both" <both@comyo-media.de>
 * @created 29.03.13 - 12:26
 */
?>
<html>
<head>
    <?php
    function ziehung($type) {                       // Function mit benötigten Parameter
        $zahlen = array();                          // Hier setze ich erst mal einen leeren array in die Variabel $zahlen
        if ($type == '6aus49'){
            for($i = 0; $i<6; $i++){                // Hier will ich das eine for-Schleife solange durchläuft und $i mit +1 erhöht solange $i kleiner als 6 ist
                do {
                    $rand = mt_rand(1,49);          // Hier definiere ich das $rand immer eine Zufallszahl zwischen 1-49 sein soll.
                } while(in_array($rand, $zahlen));  // Ab hier wird die Zahl aus $rand in den zuvor angelegen leeren array gespeichert sofern diese Zahl nicht bereits im array existiert.
                $zahlen[$i] = $rand;                // Ich hab dazu eine while-Schleife genutzt, da ich vorher nicht weiss wie viele Durchläufe er braucht um eine Zahl zu bekommen die noch nicht im array enthalten ist.
                echo $rand . ' ';                   // Ausgabe der pro Durchlauf gezogenen Zahl.
            }
        } elseif ($type == 'Spiel77') {
            for($i = 0; $i<7; $i++) {
                $rand = mt_rand(0,9);
                echo $rand;
            }
        } else {
            for($i = 0; $i<6; $i++) {
                $rand = mt_rand(0,9);
                echo $rand;
            }
        }
    }
    ?>
</head>
<body>
    <?php
    echo '<p>6 aus 49: ' . ziehung('6aus49') . '</p><br />';
    echo '<p>Spiel 77: ' . ziehung('Spiel77') . '</p><br />';
    echo '<p>Super  6: ' . ziehung('Super6') . '</p><br />';
    ?>
</body>
</html>