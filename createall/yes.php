<?php
	header('Content-type:text/html;charset=utf-8');
	session_start();
	include "config.php";
	
	$user=$pass=$msg="";
	function test_input($data){
	$data = trim($data);  // 去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
	$data = stripslashes($data); // 删除用户输入数据中的反斜杠（\）
	$data = htmlspecialchars($data);
	return $data;
}

	
	if($_SERVER['REQUEST_METHOD']=="POST"){ //
		if(!empty($_POST["username"]))
		{
			$user = test_input($_POST["username"]);
		}else{
			$msg = "请输入用户名";
			$jupurl = "../html-php/login.php";
			include "fail.php";
			exit;	
		};
		if(!empty($_POST["password"])){
			
			$pass = test_input($_POST["password"]);
		}else{
			$msg = "请输入密码";
			$jupurl = "../html-php/login.php";
			include "fail.php";
			exit;	
		};
	}

		
	$conn = new mysqli($server_name,$server_user,$server_pass,'bootstrap');
	if($conn->connect_error){
		die("链接数据库失败");
	}
	
	$sql = "SELECT * FROM user_info where username='$user'";
	$result = $conn->query($sql);
	
	if($result->num_rows > 0){
		
		while($row = $result->fetch_assoc()){
			if($row["password"]==$pass){
				$msg = "登陆成功！";
				$jupurl = "http://localhost/createku//html-php/index.php";
				$_SESSION["user"]=$user;
				include "fail.php";
				exit;
			}else{
				$msg = "您输入密码不正确！";
				$jupurl = "../html-php/login.php";
				include "fail.php";
				exit;	
			}
		}
		
	}else{
		$msg = "您输入的用户名不存在！";
		$jupurl = "../html-php/login.php";
		include "fail.php";
		exit;
	}
	
?>