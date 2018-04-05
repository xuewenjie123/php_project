<?php
	include "header.php";
	include "select.php";
	//SELECT * FROM user_info order by username desc limit 2
	//SELECT * FROM mytable order by age desc
	//SELECT username,password FROM mytable
	//SELECT s_title FROM article
	/*$sql = "SELECT s_title,s_descri FROM article limit 1"; // * 通配符，查找所有的
	$result = $conn->query($sql);  // 返回的是你查找的所有数据
	if($result->num_rows > 0){  // $result->num_rows  数据有多少条
		while($row = $result->fetch_assoc()){   // 每次读取一条，如果指针为空则返回false
			if($row["s_title"]!=''){
				echo "<h2>".$row["s_title"]."</h2>";
				echo "<p>".$row["s_descri"]."</p>";
			}
		}
		
	}*/
	$sql = "SELECT * FROM article order by s_datetime desc limit 8";
	$result = $conn->query($sql);
	
	if($result->num_rows >0){
?>
	<div class="container">
      <div class="projects-header page-header">
   <h2>web前端推荐</h2>
	<p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
</div>

      <div class="row">
		<?php 
			while($row = $result->fetch_assoc()){
		 ?>
        <div class="col-sm-6 col-md-4 col-lg-3 ">
          <div class="thumbnail" style="height:318px;overflow:hidden;">
             <a href="http://www.ajax.com/html-php/content.php?showid=<?php echo $row['id'] ?>" target="_blank" title="Dreamweaver网页制作基础">
            	<img class="lazy" src="<?php echo "../umeditor/".$row['s_thumb']; ?>" width="300" data-src="<?php echo "../umeditor/".$row['s_thumb']; ?>" alt="Dreamweaver网页制作基础"></a>
            <div class="caption">
              <h3>
                <a href="http://www.ajax.com/html-php/content.php?showid=<?php echo $row['id'] ?>" target="_blank" title="Dreamweaver网页制作基础">
			<?php echo mb_substr($row['s_title'],0,10,'utf8') ; ?><br><small><?php echo $row['s_datetime']; ?></small></a>
              </h3>
              
              <p>
              	<?php echo mb_substr($row['s_descri'],0,30,'utf8')."……" ; ?>
              </p>
            </div>
          </div>
        </div>
	<?php
    	}	
	}
	?>
	</div>
    <div class="projects-header page-header">
        <h2>Web前端课程选择</h2>
        <p>这些项目或者是对Bootstrap进行了有益的补充，或者是基于Bootstrap开发的</p>
    </div>
    <table class="table table-bordered">
    	<thead>
          <tr>
            <th>班级名称</th>
            <th>课时</th>
            <th>价格</th>
            <th>免费试听</th>
            <th>购买课程</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>就业精品班（面授/封闭班/包食宿）</td>
            <td>4个月</td>
            <td>优惠价17800.00 <del>原价17800.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
          <tr>
            <td>软件基础网课（网课/远程教学班）</td>
            <td>96</td>
            <td>优惠价580.00 <del>原价980.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
          <tr>
            <td>Dreamweaver网页制作基础</td>
            <td>41</td>
            <td>优惠价399.00 <del>原价499.00</del></td>
            <td><span class="glyphicon glyphicon-headphones"></span> 预约</td>
            <td><a href="#" class="btn btn-danger">立即报名</a></td>
          </tr>
         </tbody>
    </table>
<?php
	include "footer.php";
?>