<?php
/**
 * Created by PhpStorm.
 * User: romek
 * Date: 06-04-17
 * Time: 09:10
 */
#T(°C) = 300K - 273.15 = 26.85 °C
#T(°F) = T(°C) × 9/5 + 32
#T(K) = (T(°F) + 459.67) × 5/9

$Celsius = $_GET["T(°C)"];
$fahrenheit = $_GET["T(°F)"];
$kelvin = $_GET["(°CK)"];
$kelvinToCel = $_GET["T(K)"];
#$tempC = $fahrenheit - 32/1.8;
#$tempF = $Celsius * 1.8 + 32;
#$tempKC = $kelvinToCel - 273.15;
#$tempK = $kelvin + 273.15;
$dividenumber = $_GET["dbdd"];

#$yesno = $dividenumber / 3;
function globalcalc(){
    $GLOBALS["tempC"] = $GLOBALS["fahrenheit"] - 32/1.8;
    $GLOBALS["tempF"] = $GLOBALS["Celsius"] * 1.8 + 32;
    $GLOBALS["tempKC"] = $GLOBALS["kelvinToCel"] - 273.15;
    $GLOBALS["tempK"] = $GLOBALS["kelvin"] + 273.15;
    $GLOBALS["yesno"] = $GLOBALS["dividenumber"] /3;
}
globalcalc();
$truefalse;
if (is_float($yesno)){
    $truefalse = false;

} elseif (is_int($yesno)){
    $truefalse = true;
}
if ($truefalse == true){
    $divadeablebythree = "The number you put in is dividable by Three.";
} elseif ($truefalse  == false){
    $divadeablebythree = "The number you put in is NOT dividable by Three.";
}
function websiteTop(){
    include("resultaat.php");
}
function websiteBottom(){
    include ("footer.php");
}
?>
<?php websiteTop();?>
<div name="Result transfusion">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2 class="koptekst">Results temperature differences</h2>
                <p class="h3">Temperature from Celsius to Fahrenheit = <?php echo $tempF . "°F"; ?></p>
                <p class="h3">Temperature from Fahrenheit to Celsius = <?php echo $tempC . "°C"; ?></p>
                <p class="h3">Temperature from Celsius to Kelvin = <?php echo $tempK . "K"; ?></p>
                <p class="h3">Temperature from Kelvin to Celsius = <?php echo $tempKC . "°C"; ?></p>
            </div>
        </div>
    </div>
</div>
<div name="Result Divide">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <h2 class="koptekst">Results Dividable or not.</h2>
                <p class="h3"><?php echo "Your number was: ".$dividenumber." ".$divadeablebythree; ?></p>
            </div>
        </div>
    </div>
</div>
<?php websiteBottom();?>

