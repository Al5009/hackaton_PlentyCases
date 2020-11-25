<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "hackaton");
	$ins = "INSERT INTO user (author, link, img, name) VALUES ('" . $_GET['author'] . "', '" . $_GET['link'] . "', '" . $_GET['img'] . "', '" . $_GET['name'] . "')";
	mysqli_query($connect, $ins);
	header('Location: index.php');
 ?>