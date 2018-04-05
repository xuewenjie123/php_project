<?php

	include "header.php";
	include "select.php";
	$num = 0;
	$web = "SELECT * FROM article limit 0,4";
	$wresult = $conn->query($web);
	
	//  Web前端开发   1
	//  UI    2
	
?>

<div class="container mt20">
	
	<div class="list-group col-md-6 col-sm-12">
     <a href="#" class="list-group-item list-group-item-success"><i class="glyphicon glyphicon-user"></i> 面试技巧</a>
      
      <?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
          <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title'];
				}
			}
		   ?></a>
         
          
          
         
    </div>
   
    <div class="row">
 	<div class="list-group col-md-6 col-sm-12">

        
          <a href="#" class="list-group-item list-group-item-info"><i class="glyphicon glyphicon-question-sign"></i> 常见问题</a>
		  <?php
	$web = "SELECT * FROM article limit 4,4";
	$wresult = $conn->query($web);
?>

		  <?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
            <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title'];	}
			}
		   ?></a>
        </div>
    </div>
    
    
    
    <div class="list-group col-md-6 col-sm-12">
    
      <a href="#" class="list-group-item list-group-item-active"><i class="glyphicon glyphicon-th-large"></i> HTML5</a>
	  <?php
	$web = "SELECT * FROM article where s_clm = 'Web前端开发' limit 2,4";
	$wresult = $conn->query($web);
?>

	  <?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
       <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title']; 	}
			}
		   ?></a>
    </div>
    
    
    
    <div class="row">
    <div class="list-group col-md-6 col-sm-12">    
   
     <a href="#" class="list-group-item active"><i class="glyphicon glyphicon-list-alt"></i> JavaScript</a>
     <?php
	$web = "SELECT * FROM article where s_clm = 'Web前端开发' limit 1,4";
	$wresult = $conn->query($web);
?>
       <?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
          
           <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title']; 	}
			}
		   ?></a>
    </div>
    </div>
    
    
    
 	 <div class="list-group col-md-6 col-sm-12">     
    
     <a href="#" class="list-group-item list-group-item-warning"><i class="glyphicon glyphicon-list"></i> JQuery</a>
     <?php
		$web = "SELECT * FROM article where s_clm = 'Web前端开发' limit 3,4";
		$wresult = $conn->query($web);
	?>

     	 <?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
      <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title'];	}
			}
		   ?></a>
    </div>
    
    
      <div class="row">
   		<div class="list-group col-md-6 col-sm-12">
        
      	<a href="#" class="list-group-item list-group-item-danger"><i class="glyphicon glyphicon-align-left"></i> 前端框架</a>
	<?php
		$web = "SELECT * FROM article where s_clm = 'Web前端开发' limit 4,4";
		$wresult = $conn->query($web);
	?>

		<?php
          	if($wresult->num_rows>0){
				while($wrow = $wresult->fetch_assoc()){
		  ?>
          <a href="http://www.ajax.com/html-php/column.php?listid=<?php echo $wrow['id']; ?>" class="list-group-item"><?php echo $wrow['s_title'];
		  		}
			} ?></a> 
          </div>
    </div>
    </div>
</div>

<?php
include "footer.php";
?>