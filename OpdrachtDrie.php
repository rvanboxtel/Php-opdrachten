<center>
<?php
	
	$regel = 25;//de hoogte van de kerstboom
	$stam = 4;
	for ($i=1; $i <= $regel; $i++) { 
		# code...
		for ($j=0; $j < $i; $j++) { 
			# code...
			echo "*";
		}
		echo "<br>";
	}
	for ($k=1; $k < $stam; $k++){ 
	# code...
		echo "*****";
		echo "<br>";
	}
?>