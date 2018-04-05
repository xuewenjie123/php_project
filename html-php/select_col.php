<?php
	include "select.php";		
	$page = $_GET['page'];  // 第几页参数
	$page_size = 4;   // 一页几条
	$num = $page*$page_size;  // 从第几条开始查询
	
	$col = $_GET['col'];
	if($col=="全部课程"){
		$sql = "SELECT * FROM article limit $num,$page_size ";  // 查找所有数据的第几页数据
		$totsql = "SELECT * FROM article";	// 查找所有的数据
	}else{
		$sql = "SELECT * FROM article where s_clm ='$col' limit $num,$page_size "; // 查找指定栏目下的第几页数据
		$totsql = "SELECT * FROM article where s_clm='$col'";	// 查找指定栏目下的所有数据
	}
	$result = $conn->query($sql);
	$totresult=$conn->query($totsql);
	
	$max_num = ceil(($totresult->num_rows)/4);   // 最大页数
	if($result->num_rows>0){
?>
	<div class="container">
	<div class="row">
<?php
		while($row=$result->fetch_assoc()){
?>
<div class="col-lg-3">
    <a href="http://www.ajax.com/html-php/content.php?showid=<?php echo $row['id']; ?>" class="thumbnail">
        <img class="lazy" src="<?php echo "../umeditor/".$row['s_thumb']; ?>" width="100%" data-src="<?php echo "../umeditor/".$row['s_thumb']; ?>" alt="<?php echo $row['s_title']; ?>">
    </a>
</div>
<?php
			}
	}else{
		echo "该栏目下没有内容！";	
	}
	
?>
</div>
<nav>
  <ul class="pager">
    <li class="previous"><a href="javascript:showHint('<?php echo $col;?>',<?php if($page-1<=0){echo 0;}else{echo $page-1;} ?>)">&larr; Older</a></li>
    <li class="next"><a href="javascript:showHint('<?php echo $col;?>',<?php if($page+1>=$max_num){echo $page;}else{echo $page+1;}; ?>)">Newer &rarr;</a></li>
  </ul>
</nav>

</div>















