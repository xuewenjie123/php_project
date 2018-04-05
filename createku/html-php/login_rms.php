<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>无标题文档</title>
<style>
.div1{width:300px;height:200px;position:absolute;left:50%;margin-left:-150px;margin-top:100px;}
.header{width:100%;height:40px;}
.div1 h3{font:40px/60px "simsun";}
.div1 span{font:20px/60px "Microsoft Yahei";}
.btn{width:50px;height:30px;margin-left:240px;}
</style>
</head>
<body style="background:#416b75">

   <div class="div1">
   		<h3>后台管理系统</h3>
        <form class="form-horizontal" role="form" method="post" action="../createall/rmstip.php" id="form1" onSubmit="return submitform()">
            <span>管理员账号：</span><input type="text" value="" name="username"/><br/>
           <span>管理员密码：</span><input type="password" value="" name="password"/><br/>
           <input type="submit" value="登录" class="btn">
        </form>
    </div>
</body>
</html>
<script>
function submitform(){
	
	var oForm = document.getElementById('form1');
	if(oForm.username.value==''){
		oForm.username.style.color='red';
		oForm.username.value='请输入用户名';
		oForm.username.onclick=function(){
			this.style.color='#000';
			this.value='';
		}
		return false;
	}else if(oForm.password.value=='')
	{
		alert('请输入密码');
		return false;
	};			
}

</script>