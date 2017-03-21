<?php 

	$locatiefoto = "pictures/opdrachtzwembad.png";
	$zwembaden = array(
		array('naam' => "De Spartelkuikens", 'aantal' => 25, 'fotos' => 5),
		array('naam' => "De Waterbuffels", 'aantal' => 32, 'fotos' => 6),
		array('naam' => "Plonsmderin", 'aantal' => 11, 'fotos' => 2),
		array('naam' => "Bommetje", 'aantal' => 23, 'fotos' => 4)
		);

 	foreach ($zwembaden as $zwembad) {
 		echo $zwembad["naam"];
 		echo " ".$zwembad["aantal"];
		for ($i=0; $i < $zwembad["fotos"]; $i++) {echo (" "."<img src='$locatiefoto'>"."");}
		echo "<br>";
	}
 ?>