<?php
	header('Content-type:text/html;charset=utf-8');
	include"config.php";
	$mydb = "bootstrap";
	$cont = new mysqli($server_name,$server_user,$server_pass,$mydb);//读取这个数据库
	if($cont->connect_error){//如果链接不上
		die("链接数据库失败：".$cont->connect_error);
	}
	//连上之后创建一个表格id 标题 栏目 描述 发布日期 关键词  内容  缩略图
	$table = "CREATE TABLE rems(			
		id INT(11) AUTO_INCREMENT PRIMARY KEY,
		username VARCHAR(100) NOT NULL,
		userpass VARCHAR(100) NOT NULL
	)";
	
	if(mysqli_query($cont,$table)){
		echo "数据表创建成功";
	}else{
		echo "数据表创建失败：".mysqli_error($cont);	
	}
	
	
	
	
	//修改
/*	$sql = "UPDATE article SET s_keyword='软件开发'";   // 修改数据，一定要记住加上where条件，否则整个表的数据都就被修改
	$result = $cont->query($sql);  
	if($result){
		echo "修改成功";	
	}*/
	
	
	//删除
	/*$table = "DROP TABLE article";
	if(mysqli_query($cont,$table)){
		echo "数据表删除成功";
	}else{
		echo "数据表删除失败：".mysqli_error($cont,$table);	
	}*/
?>	