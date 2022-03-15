<?php
	//NIM = 2010817210020 -> bangun tabung
	//rumus tabung = PHI * r * r * t
	$r = 4.2;
	$t = 8.9;
	
	$hasil = M_PI * $r * $r * $t;
	
	echo number_format($hasil, 3, '.', ' ');
?>