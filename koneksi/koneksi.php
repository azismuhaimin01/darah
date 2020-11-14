<?php
	$server="localhost";
	$pengguna="root";
	$password="lupapas123";
	$database="dewi_permata_trans";

	mysql_connect ($server, $pengguna, $password) or die ("Tidak bisa konek dengan database".mysql_error); mysql_select_database ($database) or die ("Gagal membuka database".mysql_error); ?>

?>