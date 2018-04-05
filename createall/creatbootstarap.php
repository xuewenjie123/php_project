<?php
header('Content-type:text/html;charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "root";
	
	$conn = new mysqli($servername,$username,$password);
	if($conn->connect_error){
		die("链接数据库失败：".$conn->connect_error);
	}
	// create database 数据名
	$sql = "CREATE DATABASE bootstrap";   // 创建数据库
	if(mysqli_query($conn,$sql)){  // 检测数据库是否创建成功
		echo "创建成功";
	}else{
		die("创建数据库失败".mysqli_error($conn));	
	};
	
	/*$sql = "drop database bootstrap";   //此为删除
	if(mysqli_query($conn,$sql)){
		echo "删除成功";
	}else{
		echo "删除失败：".mysqli_error($conn);	
	}*/
?>
