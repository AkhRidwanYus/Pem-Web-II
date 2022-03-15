<?php
	$nilai = 120;
	if ($nilai >= 80) {echo "A";}
	else if ($nilai >= 70 && $nilai <= 79) {echo "B";}
	else if ($nilai >= 60 && $nilai <= 69) {echo "C";}
	else if ($nilai >= 50 && $nilai <= 59) {echo "D";}
	else echo "E";
	
	
	switch($nilai){
		case $nilai >=80:
			echo "A";
			break;
		case range(70, 79):
			echo "B";
			break;
		case range(60, 69):
			echo "C";
			break;
		case range(50, 59):
			echo "D";
			break;
		default:
			echo "E";
			break;
	}
?>
