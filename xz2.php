<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "hackaton");
	$ins = "INSERT INTO suki (loh, money) VALUES ('" . $_GET['loh'] . "', '" . $_GET['money'] . "')";
	mysqli_query($connect, $ins);
	header('Location: loshok.php');
 ?>