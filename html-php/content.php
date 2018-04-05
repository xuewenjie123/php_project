<?php
	include "select.php";
	$showkey = "";
	if($_GET["showid"]==NULL){
		$msg = "你查找的文章不存在！";
		$jupurl = "index.php";
		include "../createall/fail.php";
		exit;
	}else{
		$showid = $_GET["showid"];	
	}
	include "header.php";
	$sql = "SELECT * FROM article where id = $showid ";
	$result = $conn->query($sql);
	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){	
?>
<div class="projects-header page-header container">
       <h2><?php echo $row['s_title']; ?></h2>
       <p>发布日期：<?php echo $row['s_datetime']; ?></p>
    </div>
    <div class="textIndet container">
    	<p><?php	echo $row['s_content'];?></p></div>
    <?php
    	
		$showkey = $row['s_keyword'];	
		}
	}else{
		
		echo "你查找的文章不存在或已被删除！";
	}
	$key = "SELECT * FROM article where s_keyword = '$showkey' order by s_datetime desc";
	$keyresult = $conn->query($key);
	if($keyresult->num_rows>0){
		
			
	
	?>
		<div class="list-group container">
          <a class="list-group-item list-group-item-success">
            相关文章
          </a>
          <?php 
		  	while($krow = $keyresult->fetch_assoc()){ 
		?>
          <a href="http://www.ajax.com/html-php/content.php?showid=<?php echo $krow['id'] ?>" class="list-group-item"><span class="glyphicon glyphicon-star-empty"></span><?php echo $krow['s_title']; ?></a>
          		
                
          <?php
		  
		  			
          		}
		}
		  ?>
      
        
    </div>

    
<?php
include "footer.php";
?>
