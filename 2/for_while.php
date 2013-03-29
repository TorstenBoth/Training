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
<body>
<?php
$zahlen = array();                      // Hier setze ich erst mal einen leeren array in die Variabel $zahlen
for($i = 0; $i<6; $i++){                // Hier will ich das eine for-Schleife solange durchläuft und $i mit +1 erhöht solange $i kleiner als 6 ist
    do {
        $rand = rand(1,49);             // Hier definiere ich das $rand immer eine Zufallszahl zwischen 1-49 sein soll.
    } while(in_array($rand, $zahlen));  // Ab hier wird die Zahl aus $rand in den zuvor angelegen leeren array gespeichert sofern diese Zahl nicht bereits im array existiert.
    $zahlen[$i] = $rand;                // Ich hab dazu eine while-Schleife genutzt, da ich vorher nicht weiss wie viele Durchläufe er braucht um eine Zahl zu bekommen die noch nicht im array enthalten ist.
    echo $rand;                         // Ausgabe der pro Durchlauf gezogenen Zahl.
}
?>
</body>
</html>