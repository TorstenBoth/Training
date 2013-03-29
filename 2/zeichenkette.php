<?php
/**
 * comyo.media
 * @link http://www.comyo-media.de
 * Projekt: Training
 * @link $ProjectUrl$
 *
 * @author "Torsten Both" <both@comyo-media.de>
 * @created 29.03.13 - 10:42
 */
?>

<html>
<body>
<?php
$liter = 10;
$preis = 1.65;
$zahlung = $liter * $preis;
$einheit1 = "Liter";
$einheit2 = "Euro";

$gesamt = "<p>Tankfüllung:" . $liter . " " . $einheit1;
$gesamt .= " kosten" . $zahlung . " " . $einheit2 . ".</p>";
echo $gesamt;
echo "<p>Tankfüllung: $liter $einheit1 kosten $zahlung $einheit2.</p>"
?>
</body>
</html>