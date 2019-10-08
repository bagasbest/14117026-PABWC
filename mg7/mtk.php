<?php
	
	include_once "function.php";
	$a = $_POST["operator1"];
	$b = $_POST["operator2"];


	if ($_POST["aritmatika"] == "penambahan"){
		$operator = "+";
		$hasil = penambahan($a,$b);
	}

	else if ($_POST["aritmatika"] == "pengurangan"){
		$hasil = pengurangan($a,$b);
	}

echo "$a $operator $b = $hasil";

?>