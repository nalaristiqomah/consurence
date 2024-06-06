<?php
	$jenis_kelamin = filter_input(INPUT_POST, 'jenis_kelamin', FILTER_SANITIZE_STRING);
	echo "Jenis Kelamin: $_POST[jenis_kelamin]";
	echo "Umur: $_POST[umur]";
	echo "Pendapatan: $_POST[gaji]";
	$sakit = filter_input(INPUT_POST, 'sakit', FILTER_SANITIZE_STRING);
	echo "Riwayat Penyakit: $_POST[sakit]";
?>