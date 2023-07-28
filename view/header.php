<?php
	session_start();
    if(!isset($_COOKIE['flag']))
	{
		header('location: login.php');
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/style.css">
    <title>Dashboard</title>
</head>
<body>
<div class="parrent-container">
<h1 class= "main-header">Pharmacy Management System </h1>
<h2 class="sub-header">Hello <?php echo  $_SESSION['user']['name'] ?></h2>
