<?php 	
	$alles = array(		
		array(
			'tijd' => "09:15", 
			'naam' => "Mevr. Pietersen"
			),
		array(
			'tijd' => "09:30", 
			'naam' => "Mevr. Willems"
			),
		array(
			'tijd' => "09:45", 
			'naam' => ""
			),
		array(
			'tijd' => "10:00", 
			'naam' => "Paul van den Broek"
			),
		array(
			'tijd' => "10:15",
			'naam' => "Karel de Meeuw"
			),
		array(
			'tijd' => "10:30", 
			'naam' => ""
			)
		);
	echo "Index"." | "."Waarde"."<br>"."<br>";
	foreach ($alles as $gegevens) {
 		echo $gegevens["tijd"];
 		echo " | ".$gegevens["naam"];
		echo "<br>";
	}
 ?>