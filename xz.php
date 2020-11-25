<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "hackaton");
	$ins = "INSERT INTO adm (name, text, img, author) VALUES ('" . $_GET['name'] . "', '" . $_GET['text'] . "', '" . $_GET['img'] . "', '" . $_GET['author'] . "')";
	mysqli_query($connect, $ins);
	header('Location: loshok.php');
 ?>