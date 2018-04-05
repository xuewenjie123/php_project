<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
.bgbox{width:400px;height:220px;border:1px #F00 solid;position:absolute;left:50%;top:50%;margin-left:-200px;margin-top:-100px;padding-left:25px;padding-top:10px;}
.box{position:absolute;width:360px;height:170px;border:1px solid #009;left:30px;top:35px;}
.info{position:absolute;left:0;top:0;background:url(images/info.jpg);width:125px;height:25px;}
.login{position:absolute;top:50%;left:77px;margin-top:-15px;width:200px;height:31px;background:url(../html-php/images/tishi.jpg) no-repeat;padding-left:45px;font:30px/31px "Microsoft Yahei"}
.smaller{margin:0;position:absolute;width:360px;height:30px;background:#e4ecf7;text-align:center;color:#0068a6;font:14px/30px "Microsoft Yahei";bottom:0;left:0; text-decoration:none;}
#href,.clicked{font:14px/30px "Microsoft Yahei";}
</style>
</head>

<body>

<div class="bgbox">
<div class="box">
<span class="info"></span>
<p class="login"><?php echo $msg;?></p>

<h4 class="smaller">页面自动 <a id="href" href="<?php echo $jupurl; ?>">跳转</a> 等待时间： <b id="wait">3</b> <a href="<?php echo $jupurl; ?>" class="clicked"> 若没有跳转请点击这里</a></h4></div>
</div>
</body>
<script>
window.onload = function(){
	var href = document.getElementById("href").href;
	var wait = document.getElementById("wait");
	var timer = null;
	timer=setInterval(function(){
		wait.innerHTML--;
		if(wait.innerHTML<=0){
			wait.innerHTML='0';
			window.location = href;  // 跳转
			console.log(href);
			clearInterval(timer);
		}
	},1000);	
}
</script>
</html>
