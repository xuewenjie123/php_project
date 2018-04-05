 <?php
	
	
	$col = $_GET['col'];
	
	if($col=="发布文章")
	{?>
		 <form method="post" action="../createall/publish_article.php" enctype="multipart/form-data">
            	<div class="form-group">
                    <label for="exampleInputEmail1">文章标题</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="文章标题">
                  </div>
                <div class="form-group">
                    <label for="column">栏目名称</label>
                    <select class="form-control" name="column">
                      <option value="Web前端开发">Web前端开发</option>
                      <option value="UI设计">UI设计</option>
                      <option value="PHP开发">PHP开发</option>
                      <option value="JAVA开发">JAVA开发</option>
                      <option value="网络营销">网络营销</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="describe">文章描述</label>
                    <textarea class="form-control" rows="3" id="describe" name="describe"></textarea>
                  </div>
                <div class="form-group">
                    <label for="keyworld">关键词</label>
                    <input type="text" class="form-control" id="keyworld" name="keyworld" placeholder="关键词">
                  </div>
                  <h5>文章内容</h5>
                 <!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:300px;">
                    <p>请添加文章内容……</p>
                </script>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">上传缩略图</label>
                    <input type="file" id="exampleInputFile" name="upfile">
                 </div>
                <input type="submit" class="btn btn-success" value="发布文章"> <input type="reset" class="btn btn-danger" value="重置内容">
                </form>
                <script type="text/javascript">
                    //实例化编辑器
                    var um = UM.getEditor('myEditor');
                    um.addListener('blur',function(){
                        $('#focush2').html('编辑器失去焦点了')
                    });
                    um.addListener('focus',function(){
                        $('#focush2').html('')
                    });
        </script>
  <?php
	}
	else
	{
	
	include "select.php";
	$page = $_GET['page'];  // 第几页参数
	$page_size = 6;   // 一页几条
	$num = $page*$page_size;  // 从第几条开始查询
		if($col=="全部文章"){
		$sql = "SELECT * FROM $table limit $num,$page_size ";  // 查找所有数据的第几页数据
		$totsql = "SELECT * FROM $table";	// 查找所有的数据
		}else{
		$sql = "SELECT * FROM article where s_title ='$col' limit $num,$page_size "; // 查找指定栏目下的第几页数据
		$totsql = "SELECT * FROM article where s_title='$col'";	// 查找指定栏目下的所有数据
	}
	$result = $conn->query($sql);
	$totresult=$conn->query($totsql);
	
	$count = $totresult->num_rows;
	
	$max_num = ceil(($totresult->num_rows)/6);   // 最大页数
	if($result->num_rows>0){
?>
    <table class="table" id="table1">
        <tr> 	<th>id</th>   <th>文章标题</th>  <th>发布日期</th>  <th>操作</th>	</tr>  
        <?php
		while($row = $result->fetch_assoc()){	
		?>	
			<tr>
			<td><?php	echo $row["id"]?></td>	<td><?php	echo $row["s_title"]?></td><td><?php	echo $row["s_datetime"]?></td><td><a class="delete" href='http://www.ajax.com/html-php/delete.php?listid=<?php echo $row['id']; ?>'>删除</a><a style="margin-left:20px;" href="http://www.ajax.com/html-php/rms-update.php?listid=<?php echo $row["id"]; ?>">修改</a></td>
			</tr>
            <?php	}
		}	
        ?>
			
    	
    </table>

   <nav aria-label="Page navigation" style="text-align:center;">
 	 <ul class="pagination">
   		 <li>
      <a href="javascript:showHint('<?php echo $col;?>',<?php if($page-1<=0){echo 0;}else{echo $page-1;} ?>)" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    
    </li>
   
    
     <?php
    	for($i=1;$i<=ceil($count/$page_size); $i++){
	?>
    <li><a href="javascript:showHint('<?php echo $col;?>',<?php echo $i-1;?>)" style="<?php if($page+1==$i){echo 'background:#eaeaea;';} ?>"><?php echo $i; ?></a></li>
    <?php
    	}

	?>
        
    <li>
      <a href="javascript:showHint('<?php echo $col;?>',<?php if($page+1>=$max_num){echo $page;}else{echo $page+1;} ?>)" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
<?php           
	}
	?>