<?php
header("Content-type:text/html;charset=utf-8");
	include "../createall/config.php";
	$mydb = "bootstrap";
	$conn = new mysqli($server_name,$server_user,$server_pass,$mydb);
	if($conn->connect_error){
		$msg = "服务器异常，后台人员正在检修之中";
		$jupurl = "../html.php/register.php";
		include "../createall/fail.php";
	}	
	

	if(isset($_GET['listid'])){
		$id = $_GET['listid'];
	}else{
		exit("当前文章不存在");	
	};
	
	$sql = "SELECT * FROM article where id = '$id'";
	$result = $conn->query($sql);	
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/site.css">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="../umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../umeditor/lang/zh-cn/zh-cn.js"></script>
</head>
<?php	
session_start();
?>
<script>
function showHint(str,num){

	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new AcitveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.open("GET","backstage.php?col="+str+"&page="+num,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("rows").innerHTML = xmlhttp.responseText;
					
			/*var oTable = document.getElementById('table1')
			var oBody = oTable.tBodies[0];
			var oRows = oBody.rows;
			var Delete = oTable.getElementsByTagName('a');
			for(var i=0;i<Delete.length;i++)
			{
				Delete[i].onclick = function(){-
					oBody.removeChild( oRows[i] );
					i--;
				};
				
			};*/
			
			$('table delete').click(function(){
				
				$(this).parent().parent().remove()
			})
			
		}	
	}	
}
	

</script>
<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：zhou</small></h2>
   		</div>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group" id="clm">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
		 <?php
            $web = "SELECT * FROM article limit 0,5";
            $wresult = $conn->query($web);
			if($wresult->num_rows>0){
			while($wrow = $wresult->fetch_assoc()){
			  ?>
			<li class="list-group-item"><a href="javascript:;"><?php echo $wrow['s_title'];
					}
				}
			   ?></a></li>
           
         		<li class="list-group-item"><a href="javascript:;">全部文章</a></li>
              	<li class="list-group-item"><a href="javascript:;">发布文章</a></li>
             
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;" id="rows">
	
<div class="hid">
       <?php
            	if($result->num_rows>0){
		while($row = $result->fetch_assoc()){
			?>
            <form method="post" action="updaterems.php?id=<?php echo $row['id']; ?>" enctype="multipart/form-data">
            	<div class="form-group">
                    <label for="exampleInputEmail1">文章标题</label>
                    <input type="text" class="form-control" value="<?php echo $row['s_title']; ?>" id="exampleInputEmail1" name="title" placeholder="文章标题">
                  </div>
                <div class="form-group">
                	<div id="lanmu" style="display:none;"><?php echo $row['s_clm']; ?></div>
                    <label for="column">栏目名称</label>
                    <select class="form-control" name="column" id="control">
                      <option>UI设计</option>
                      <option value="Web前端开发">Web前端开发</option>
                      <option>PHP开发</option>
                      <option>JAVA开发</option>
                      <option>网络营销</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="describe">文章描述</label>
                    <textarea class="form-control" rows="3" id="describe" name="describe"><?php echo $row['s_descri']; ?></textarea>
                  </div>
                <div class="form-group">
                    <label for="keyworld">关键词</label>
                    <input type="text" class="form-control" value="<?php echo $row['s_keyword']; ?>" id="keyworld" name="keyworld" placeholder="关键词">
                  </div>
                  <h5>文章内容</h5>
                 <!--style给定宽度可以影响编辑器的最终宽度-->
				<script type="text/plain" id="myEditor" style="width:100%;height:300px;">
                    <?php echo $row['s_content']; ?>
                </script>
                <hr>
                <div class="form-group">
                    <label for="exampleInputFile">上传缩略图</label>
                    <input type="file" id="exampleInputFile" name="upfile">
                 </div>
                <input type="submit" class="btn btn-success" value="确认修改"> <input type="reset" class="btn btn-danger" value="重置内容">
                </form>
                <?php
                			}
						}else{
							echo "未查找到数据";	
						}
				?>
                </div>
                <script type="text/javascript">
                    //实例化编辑器
                    var um = UM.getEditor('myEditor');
                    um.addListener('blur',function(){
                        $('#focush2').html('编辑器失去焦点了')
                    });
                    um.addListener('focus',function(){
                        $('#focush2').html('')
                    });
                    
					
					window.onload = function(){
						var lanmu = document.getElementById("lanmu").innerHTML;
						var control = document.getElementById("control");
						var option = control.getElementsByTagName("option");
						for(i=0; i<option.length; i++){
							if(lanmu==option[i].value){
								option[i].selected="selected";
							}
						}	
					}
				$('#clm a').click(function(){
				$('.hid').hide(1000);
				showHint($(this).html(),0)	
				$('#clm a').parent().removeClass('list-group-item-success')
				$(this).parent().addClass('list-group-item-success')
			})
                </script>
            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>