<?php
	header('Content-type:text/html;charset=utf-8');
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$mydb = "bootstrap";
	$cont = new mysqli($servername,$username,$password,$mydb);//读取这个数据库
	if($cont->connect_error){//如果链接不上
		die("链接数据库失败：".$cont->connect_error);
	}
	//连上之后创建一个表格
	$table = "CREATE TABLE user_info(			
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(32) NOT NULL,
		password VARCHAR(32) NOT NULL,
		email VARCHAR(32) NOT NULL,
		sex VARCHAR(32) NOT NULL,
		tel VARCHAR(32) NOT NULL,
		area VARCHAR(32) NOT NULL,
		hob VARCHAR(32) NOT NULL
	)";
	
	if(mysqli_query($cont,$table)){
		echo "数据表创建成功";
	}else{
		echo "数据表创建失败：".mysqli_error($cont);	
	}
	/*$table = "DROP TABLE user_info";
	if(mysqli_query($cont,$table)){
		echo "数据表删除成功";
	}else{
		echo "数据表删除失败：".mysqli_error($cont,$user_info);	
	}*/
?>	