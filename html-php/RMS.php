<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
if(isset($_SESSION['user']) && $_SESSION['user']!=""){?>
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
        	<h2>后台信息系统  
				<small>欢迎您：zhou<a href="remlogout.php" style="float:right">退出</a></small>
		</h2>
   		</div>
        
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group" id="clm"> 
              		<li class="list-group-item list-group-item-success">文章栏目</li>
  <?php
	include "select.php";
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
  		
    <script>
	
	showHint("全部文章",0);
		/*var clm = document.getElementById('clm')
		var aA = clm.getElementsByTagName('a');
		for(var i=0;i<aA.length;i++)
		{
			aA[i].onclick = function(){
			
				 showHint(this.innerHTML,0)	
				 
			}		
		}*/
		
			$('#clm a').click(function(){
				
				showHint($(this).html(),0)	
				$('#clm a').parent().removeClass('list-group-item-success')
				$(this).parent().addClass('list-group-item-success')
			})
		
	</script>

          </div>
     </div>
	</div>
    
         

  <?php	include"footer.php";?>
  
    <?php	}else{
			 $msg = "请重新登录";
			 $jupurl = "../html-php/login_rms.php";
			include "../createall/fail.php"; 
		 }?>
	
	
</body>
</html>