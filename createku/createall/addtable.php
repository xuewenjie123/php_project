<style>
	a{font-size:30px;color:#0F3;}
</style>
<?php
header('Content-type:text/html;charset=utf-8');
$name = $email = $passwd = $sex = $areaselect= $like = $hob = $tel= $msg="";
if($_SERVER['REQUEST_METHOD']=="POST"){ //
		if(!empty($_POST["username"])){
			$name = test_input($_POST["username"]);
			if(!preg_match('/^[a-zA-Z]\w{5,11}$/',$name)){
				$msg .="用户名输入错误";
				include "fail.php";
				$jupurl = "../html-php/register.php";
				exit;
			}
			
		}
		
		if(!empty($_POST["selected"])){
			$areaselect= $_POST["selected"];
			
		}else
		{
			$msg.="没有选择城市";
			include "fail.php";
			$jupurl = "../html-php/register.php";
				exit;
		}
			
		if(!empty($_POST["hob"]))
		{
			$hob = $_POST["hob"];
			
			foreach($hob as $value){
				$like.=$value;
				
			}
		}
		
		if(!empty($_POST["email"])){
			$email = $_POST["email"];
			if(!preg_match('/\w+\@\w+\.\w+/',$email)){
			$msg .= "邮箱输入错误";	
			$jupurl = "../html-php/register.php";
			include "fail.php";
			exit;
			
			}
		}
		
		
		if(!empty($_POST["passwd1"]) && !empty($_POST["passwd2"]) ){
			if($_POST["passwd1"]==$_POST["passwd2"])
			{
				$passwd = test_input($_POST["passwd2"]);
			}else{
				$msg.= "密码错误";
			$jupurl = "../html-php/register.php";
				include "fail.php";
				exit;
			}
			
			
			
		}
				
		if(!empty($_POST["inlineRadioOptions"])){
			$sex = test_input($_POST["inlineRadioOptions"]);
		}else
		{
			$msg .= "请选择性别";
			$jupurl = "../html-php/register.php";
			include "fail.php";
			exit;
			
		}
		
		if(!empty($_POST["telphone"])){
			$tel = test_input($_POST["telphone"]);
		}else
		{
			$msg .="请输入电话号码";
			$jupurl = "../html-php/register.php";
			include "fail.php";
			exit;
		
		}
	
	
}
function test_input($data){
	$data = trim($data);  // 去除用户输入数据中不必要的字符（多余的空格、制表符、换行）
	$data = stripslashes($data); // 删除用户输入数据中的反斜杠（\）
	$data = htmlspecialchars($data);
	return $data;
}

	
	
	$servername = "localhost";
	$username = "root";
	$password = "root";
	$mydb = "bootstrap";  // 数据库名称
	$conn = new mysqli($servername,$username,$password,$mydb);
	if($conn->connect_error){
			$jupurl = "../html-php/register.php";
		include "fail.php";
		die("链接数据库失败：".$conn->connect_error);
		exit;
	}
	$sql = "SELECT username FROM user_info"; // * 通配符，查找所有的
	$result = $conn->query($sql);  // 返回的是你查找的所有数据
	if($result->num_rows > 0){  // $result->num_rows  数据有多少条
		while($row = $result->fetch_assoc()){   // 每次读取一条，如果指针为空则返回false
			if($row["username"]== $name){
				$msg .="用户名已存在";
			$jupurl = "../html-php/register.php";
				include "fail.php";
				exit;
			}
		}
		
	}
	
	$user="$name";
	$userpass="$passwd";//$name  $email  $sex  $passwd
	$email="$email";
	$sex="$sex";
	$tel="$tel";
	$area = "$areaselect";
	$hoblike = "$like";
	//插入数据   插入   到里面  user_info(创建的table)（要添加到那个字段）分别是什么（把添加的数据和字段对应起来）
	$sqlInfo = "INSERT INTO user_info(username,password,email,sex,tel,area,hob)VALUES ('$user','$userpass','$email','$sex','$tel','$area','$hoblike')";
	// INSERT INTO 表名(表的字段) VALUES (各字段对应的值) 
	if(mysqli_query($conn,$sqlInfo)){
		$msg ="注册成功";
		$jupurl = "../html-php/login.php";
		include "fail.php";
	}else{
		$msg="服务器运行异常，请稍后再试";
		$jupurl = "../html-php/login.php";
		include "fail.php";	
		exit;
	}
	
	
?>
