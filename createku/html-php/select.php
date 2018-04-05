<?php
	header("Content-type:text/html;charset=utf-8");
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$mydb = "bootstrap";  // 数据库名称
	$table = "article";
	$conn = new mysqli($servername,$username,$password,$mydb);
	if($conn->connect_error){
		$msg = "服务器异常，后台人员正在检修之中";
		$jupurl = "../html.php/register.php";
		include "../createall/fail.php";
	}
	//这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的"
	
	//$sql = "UPDATE article SET s_descri='这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的'";   
//	 (where 条件前端课程推荐'修改数据，一定要记住加上where条件，否则整个表的数据都就被修改
//	$result = $conn->query($sql);  
	//if($result){
//		echo "修改成功";	
//	}
	
	//$sql = "DELETE FROM article";  // 删除数据
	//$result = $conn->query($sql);  
	//if($result){
		//echo "删除成功";	
//	}
?>
