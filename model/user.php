<?php
	
	require_once('db.php');
    function validateUser($username, $password){

		$conn = getConnection();

		$sql = "select * from users where username='{$username}' and pass='{$password}'";
		$result = mysqli_query($conn, $sql);
		//$row = mysqli_fetch_assoc($result);
		//print_r(mysqli_num_rows($result));
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			return $row;
		}else{
			return false;
		}
	}
	function createUser($name,$username, $password, $address, $phone){
		$conn = getConnection();
		$sql = "insert into users(name,username, pass,address,phone) values('{$name}','{$username}','{$password}','{$address}','{$phone}')";
		$result = mysqli_query($conn, $sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	function forgetPassword($username,$password){
		$conn = getConnection();
		$sql = "update users set pass='{$password}' where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		if($result){
			return true;
		}else{
			return false;
		}
	}
	function getUserByUsername($username){
		$conn = getConnection();
		$sql = "select * from users where username='{$username}'";
		$result = mysqli_query($conn, $sql);
		if(mysqli_num_rows($result) > 0){
			// $row = mysqli_fetch_assoc($result);
			return true;
		}else{
			return false;
		}
	}
?>