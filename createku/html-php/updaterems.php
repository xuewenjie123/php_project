<?php
header("Content-type:text/html;charset=utf-8");
	include "../createall/config.php";
	$msg="";
	$title = $_POST["title"];
	$column = $_POST["column"];
	$describe = $_POST["describe"];
	$keyworld = $_POST["keyworld"];
	$editorValue = $_POST["editorValue"];
	$imgUrl = "";
	//$datetime = date("Y-m-d H:i:s");
	$id=$_GET['id'];
	//$thumb= $_POST["upflie"];
	
	if($_FILES["upfile"]["name"]!=""){
		$myImg = $_FILES["upfile"]["name"];
		$myarr = explode('.',$myImg);
		$mytype = array_pop($myarr);
		$myName = date("Y").date("m").date("d").date("H").date("i").date("s").rand(0,9).".".$mytype;
		move_uploaded_file($_FILES["upfile"]["tmp_name"],"../upload/".$myName);
		$imgUrl = "/upload/".$myName;
		
	}
	
	$conn = new mysqli($server_name,$server_user,$server_pass,"bootstrap");
	if($conn->connect_error){
		die("链接失败".$conn->connect_error);
	}
	if($imgUrl==""){
		$sql = "UPDATE article SET s_title='$title',s_clm='$column',s_descri='$describe',s_keyword='$keyworld',s_content='$editorValue'  where id = '$id'";	
	}else{
		$sql = "UPDATE article SET s_title='$title',s_clm='$column',s_descri='$describe',s_keyword='$keyworld',s_content='$editorValue',s_thumb='$imgUrl'  where id = '$id'";	
	}
	
	if($conn->query($sql)){
		
		$msg = "修改成功";
		$jupurl = "RMS.php";
		include "../createall/fail.php";
	}
	
	
	/*$sql = "INSERT INTO article(s_title,s_column,s_describe,s_keyworld,s_content,s_datetime,s_thumb) VALUES ('$title','$column','$describe','$keyworld','$editorValue','$datetime','$imgUrl')";
	if(mysqli_query($conn,$sql)){
		$msg = "插入数据成功！";
		$jupurl = "publish.php";
		include "../tips.php";
		exit;
	}else{
		echo "插入失败".mysqli_error();	
	}*/
	
	
	
?>