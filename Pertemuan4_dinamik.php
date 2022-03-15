<html>
	<head><title></title></head>
	<body>
		<form action="" method="post">
			<input type="text" name="nilai"> 
			<input type="submit" value="Tampilkan Nilai">
		</form>
	</body>
</html>

<?php
	$nilai = $_POST['nilai'];
	echo "Nilai anda = ";
	if ($nilai >= 80) {echo "A";}
	else if ($nilai >= 70 && $nilai <= 79) {echo "B";}
	else if ($nilai >= 60 && $nilai <= 69) {echo "C";}
	else if ($nilai >= 50 && $nilai <= 59) {echo "D";}
	else echo "E";
	
	/*
	switch($nilai){
		case $nilai >=80:
			echo "A";
			break;
		case $nilai >= 70 && $nilai <= 79:
			echo "B";
			break;
		case $nilai >= 60 && $nilai <= 69:
			echo "C";
			break;
		case $nilai >= 50 && $nilai <= 59:
			echo "D";
			break;
		default:
			echo "E";
			break;
	}*/
?>