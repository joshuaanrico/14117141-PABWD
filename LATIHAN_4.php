<?php 
	for ($i=2; $i<=37 ; $i++) { 
		$prima = 1;
		for ($j = 2; $j <= $i/2; $j++) { 
			if ($i%$j == 0) {
				$prima = 0;
				break;
			}
		}
		if ($prima == 1) {
			echo "$i <br>";
		}
	}
 ?>