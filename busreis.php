<?php
/**
 * Created by PhpStorm.
 * User: romek
 * Date: 16-02-17
 * Time: 08:36
 */
$leeftijd = array(3, 12, 66);
$prijzen = array(0,5,10);
if ($prijzen[0] <= $leeftijd[0]){
    echo "De prijs van de bus reis van onder 3 jaar is: ". $prijzen[0]. " Euro.";
} if ($leeftijd[1] >= $leeftijd[0]){
    echo "<br>"."De prijs van de bus reis van onder 12 jaar is: ". $prijzen[1]. " Euro.";
}
if ($leeftijd[1] <= $leeftijd[2]){
    echo "<br>"."De prijs van de bus reis tussen 12 en 65 jaar is: ". $prijzen[2]. " Euro.";
}
if ($leeftijd[2]){
    echo "<br>"."De prijs van de bus reis boven 65 jaar is: ". $prijzen[1]. " Euro.";
}
?>