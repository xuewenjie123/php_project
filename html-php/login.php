<?php
	include "header.php";
?>

    <div class="projects-header page-header container">
        <h3>用户登录</h3>
    </div>	
	<form class="form-horizontal" role="form" method="post" action="../createall/yes.php" id="form1" onSubmit="return submitform()">
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户名</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputEmail3" name="username" placeholder="用户名">
        </div>
      </div>
      <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">密码</label>
        <div class="col-sm-10">
          <input type="password" class="form-control" id="inputPassword3" name="password" placeholder="输入密码">
        </div>
      </div>
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <input type="submit" class="btn btn-success" value="登录"> <input type="reset" class="btn btn-default" value="重置" /> <a href="3register.php" class="btn btn-danger">还没有账号，去注册</a>
        </div>
      </div>
      
    </form>
<?php
	include "footer.php";
?>
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
	/*$('.btn-success').click(function(){
			if($('#inputuser').val()=='')
			{
				$('#inputuser').css('color','red')
				$('#inputuser').val('请输入用户名')
				$('#inputuser').click(function(){
					$('#inputuser').css('color','#000')
					$('#inputuser').val('');
					return false;
				})
			}else if(!re1.test($('#inputuser').val())){
				$('#inputuser').css('color','red')
				$('#inputuser').val('用户名必须是字母开头、跟数字和下划线（6到12位）')
				$('#inputuser').click(function(){
					$('#inputuser').css('color','#000')
					$('#inputuser').val('');
					return false;*/
			
}

</script>