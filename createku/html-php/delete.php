<?php
include"select.php";
$id = $_GET['listid'];
$sql= "DELETE FROM $table where id=$id";
$result = $conn->query($sql);
if($result){
		$msg = "删除成功";
		$jupurl = "RMS.php";		
}else{
		$msg = "服务器运行异常后台人员正在检修";
		$jupurl = "RMS.php";	
};
include "../createall/fail.php";
?>