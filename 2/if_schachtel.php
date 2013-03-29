<?php
/**
 * comyo.media
 * @link http://www.comyo-media.de
 * Projekt: Training
 * @link $ProjectUrl$
 *
 * @author "Torsten Both" <both@comyo-media.de>
 * @created 29.03.13 - 11:34
 */
?>
<html>
<body>
<?php
$stunden = 6;                           // Wert (Integer) ohne Quotes da kein String (Zeichenkette)
$minStunden = 8;                        // Richtwert (Integer) ohne Quotes da kein String (Zeichenkette)
$ergebnisNegativ = $minStunden - $stunden;  // Subtrations-Rechnung zweier Integerwerte mit hilfe des Minusoperators
$ergebnisPositiv = $stunden - $minStunden;  // Subtrations-Rechnung zweier Integerwerte mit hilfe des Minusoperators

if ($stunden < $minStunden) {           // wird ausgeführt wenn die Bedingung erfüllt (true) ist
    echo 'Torsten hat heute weniger als ' . $minStunden . ' Stunden gearbeitet.<br />';
    echo 'Er liegt damit ' . $ergebnisNegativ . ' Stunden unter seinem Tagessoll.';
} else {                                // wird ausgeführt wenn die obige Bedingung nicht erfüllt (false) ist
    if ($stunden == $minStunden) {
        echo 'Torsten hat heute genau ' . $minStunden . ' Stunden gearbeitet.<br />';
        echo 'Er hat damit seinen Tagessoll erfüllt.';
    } else {
        echo 'Torsten hat heute mehr als ' . $minStunden . ' Stunden gearbeitet.<br />';
        echo 'Er liegt damit ' . $ergebnisPositiv . ' Stunden über seinem Tagessoll.';
    }
}
?>
</body>
</html>