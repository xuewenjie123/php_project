<?php
	session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<title>无标题文档</title>
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<link type="text/css" rel="stylesheet" href="public.css"/>
</head>
<body>
	<nav class="navbar navbar-inverse navbar-fixed-top">
             <div class="container-fluid">
        	<div class="container">
             <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button> 
      <a class="navbar-brand" href="#">首页</a>
    </div>
    	 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      		 <ul class="nav navbar-nav navbar-left">
                   
                    <li role="presentation"><a href="list.php" target="_blank">前端咨讯</a></li>
                    <li role="presentation"><a href="sevice.php" target="_blank">课程选择</a></li>
                    <li role="presentation"><a href="plan.php" target="_blank">技术易学度</a></li>
     <?php    	if(isset($_SESSION['user']) && $_SESSION['user']!=""){?>
				
                <li><a>欢迎您！<?php	echo $_SESSION['user']?></a></li>
                <li><a href="logout.php">注销</a></li>
                <?php	}else{?>
			
				<li><a href='register.php'>注册</a></li> <li><a href='login.php'>登录</a></li>";	
                <?php	}?>
			
		
                </ul>
                <ul class="nav navbar-nav navbar-right">
  			   		<li role="presentation"> <a href="#" target="_blank">关于我们</a></li>
          		</ul>
                </div>
    		</div>
           </div>
        </div>
      </nav>
   
    <div class="container">
    <div style="height:51px"></div>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="images/UIbanner.jpg">
    </div>
    <div class="item">
      <img src="images/UIbanner.jpg">
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
    </div>
