<?php
	include "header.php";
	include "select.php";
	$listid="";
	$csql = "";
	$page = 0;
	
	if(isset($_GET['page'])){  // 如果存在则返回真
		$page = $_GET['page']-1;
	};
	
	if(isset($_GET['listid'])){
		$listid = $_GET['listid'];
	}
	switch($listid){
		case 1:
			$listid="Web前端开发";
			break;
		case 2:
			$listid="UI设计";
			break;
			case 3:
			$listid="php开发";
			break;
			case 4:
			$listid="JAVA开发";
			break;
			case 5:
			$listid="网络营销课程";
			break;
			case 6:
			$listid="c语言课程";
			break;
			case 7:
			$listid="web精品课程开发";
			break;
			case 8:
			$listid="JAVA开发";
			break;
		default:
			$listid = "全部课程";
			break;
				
	}
	
	if($listid=="全部课程"){
		$csql = "SELECT * FROM article";
			
	}else{
		$csql = "SELECT * FROM article where s_clm = '$listid'";		
	}
	$crecult = $conn->query($csql);
	//var_dump($crecult);
	
	$page_size= 6;
	$count = $crecult->num_rows;
	
	$num = $page*$page_size;
	if($listid=="全部课程"){
		$sql = "SELECT * FROM article limit $num,6";
	}else{
		$sql = "SELECT * FROM article where s_clm = '$listid' limit $num,6";
	}
	
	$result = $conn->query($sql);
	
	  //  
?>

<div class="projects-header page-header container">
   <h2><a><?php echo $listid; ?></a></h2>
</div>
<ul class="list-group container">
	<?php
    	if($result->num_rows > 0){
			while($row = $result->fetch_assoc()){
	
	?>
  <li class="list-group-item"><a href="http://www.ajax.com/html-php/content.php?showid=<?php echo $row['id']; ?>"><?php echo mb_substr($row['s_title'],0,30); ?></a></li>
  <?php
  			//  mb_substr(要截取的字符串,开始位置（从头开始:0）,截取多少个字（无论汉字、英文字母、符号都算一个字）,编码（选填）)
			//  substr  按字节截取的	
			}
		}
  ?>
</ul>
<!--分页开始-->
<nav aria-label="Page navigation" style="text-align:center;">
  <ul class="pagination">
    <li>
    
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php if($page<=0){echo 1;}else{echo $page;}; ?>" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <?php
    	for($i=1;$i<=ceil($count/$page_size); $i++){
	?>
    <li><a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php echo $i; ?>" style="<?php if($page+1==$i){echo 'background:#eaeaea;';} ?>"><?php echo $i; ?></a></li>
    <?php
    			}
	?>
    <li>
      <a href="<?php echo $_SERVER['PHP_SELF']; ?>?<?php if($listid!='全部课程'){ echo 'listid='.$_GET['listid'].'&'; } ?>page=<?php if($page+2>ceil($count/$page_size)){echo ceil($count/$page_size);}else{echo $page+2;}; ?>" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>

<!--分页结束-->
<?php
	include "footer.php";
?>