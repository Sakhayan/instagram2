<?php 
	$connect = mysqli_connect("127.0.0.1", "root", "", "insta");
	mysqli_query($connect, "UPDATE posts SET text ='{$_GET['text']}', img='{$_GET['img']}' WHERE id='{$_GET['id']}' ");
	header("location:index.php");
 ?>