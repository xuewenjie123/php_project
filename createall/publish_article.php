<style>
	a{font-size:30px;color:#0F3;}
</style>
<?php
header('Content-type:text/html;charset=utf-8');
	$content='';
	include"config.php";
	$mydb = "bootstrap";  // 数据库名称
	$conn = new mysqli($server_name,$server_user,$server_pass,$mydb);
	if($conn->connect_error){
			$msg="服务器运行异常，后台人员正在努力修复中";
			$jupurl = "../umeditor/publish.php";
		include "fail.php";
		die("链接数据库失败：".$conn->connect_error);
	}
if($_SERVER['REQUEST_METHOD']=="POST"){
	if(!empty($_POST["title"])){
			$title= $_POST["title"];
		}
	else
	{
		$msg.="请输入标题";
		include "fail.php";
		$jupurl = "../umeditor/publish.php";
		exit;
	};
	
	if(!empty($_POST["column"])){
			$column= $_POST["column"];
		}
	else
	{
		$msg.="请选择栏目";
		include "fail.php";
		$jupurl = "../umeditor/publish.php";
		exit;
	};
	
	if(!empty($_POST["describe"])){
			$describe= $_POST["describe"];
		}
	else
	{
		$msg.="请添加描述";
		include "fail.php";
		$jupurl = "../umeditor/publish.php";
		exit;
	};
	
	if(!empty($_POST["keyworld"])){
			$keyworld= $_POST["keyworld"];
		}
	else
	{
		$msg.="请输入关键词";
		include "fail.php";
		$jupurl = "../umeditor/publish.php";
		exit;
	};
	$datetime = date("Y-m-d h:i:s");
	$content =  $_POST["editorValue"];
	$imgUrl = "";
	
	if($_FILES["upfile"]["name"]!=""){
		$myImg = $_FILES["upfile"]["name"];
		$myarr = explode('.',$myImg);
		$mytype = array_pop($myarr);
		$myName = date("Y").date("m").date("d").date("H").date("i").date("s").rand(0,9).".".$mytype;
		move_uploaded_file($_FILES["upfile"]["tmp_name"],"../umeditor/upload/".$myName);
		$imgUrl = "/upload/".$myName;
	}
	
};
	//$title、$column、$describe、$keyworld、myEditor、upfile   upfile keyworld describe column  title
	//插入数据   插入   到里面  user_info(创建的table)（要添加到那个字段）分别是什么（把添加的数据和字段
	$sqlInfo = "INSERT INTO article(s_title,s_clm,s_descri,s_datetime,s_keyword,s_content,s_thumb)VALUES ('$title','$column','$describe','$datetime','$keyworld','$content','$imgUrl')";
	// INSERT INTO 表名(表的字段) VALUES (各字段对应的值) 
	if(mysqli_query($conn,$sqlInfo)){
		$msg ="发布成功";
		$jupurl = "../umeditor/publish.php";
		include "fail.php";
	}else{
		$msg="服务器运行异常，后台人员正在努力修复中";
		$jupurl = "../umeditor/publish.php";
		include "fail.php";	
		exit;
	}
	
	
?>
