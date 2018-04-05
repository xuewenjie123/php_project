// JavaScript Document
var re = /\w+\@\w+\.\w+/;//邮箱
var re1=/^[a-zA-Z]\w{5,11}$///用户名
var re3 = /^1[34578]\d{9}$/;
$(function(){
		var oForm = document.getElementById('form1')
	//console.log(1111)
		$('.btn-success').click(function(){
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
					return false;
				})				
			}else if($('#inputPassword').val()=='')
			{
				alert('请输入密码');
				return false;
				
			}else if($('#inputPassword2').val()=='')
			{
				alert('请确认密码')
				return false;
			}else if($('#inputPassword').val()!=$('#inputPassword2').val())
			{
				alert('两次密码不一致');
				return false;
				
			}			
			else if($('#inputEmail').val()=='')
			{
				$('#inputEmail').css('color','red')
				$('#inputEmail').val('请输入邮箱')
				$('#inputEmail').click(function(){
				$('#inputEmail').css('color','#000')	
				$('#inputEmail').val('');
				return false;
				})
			}
			else if(!re.test($('#inputEmail').val()))
			{
				$('#inputEmail').css('color','red')
				$('#inputEmail').val('邮箱格式不正确')
				$('#inputEmail').click(function(){
				$('#inputEmail').css('color','#000')	
				$('#inputEmail').val('');
				return false;
				})
			}
			else if($('#inputphone').val()=='')
			{
				$('#inputphone').css('color','red')
				$('#inputphone').val('请输入手机号')
				$('#inputphone').click(function(){
				$('#inputphone').css('color','#000')		
				$('#inputphone').val('');
				return false;
				})
			}else if(!re3.test($('#inputphone').val())){
				$('#inputphone').css('color','red')
				$('#inputphone').val('请输入正确的手机号')
				$('#inputphone').click(function(){
				$('#inputphone').css('color','#000')		
				$('#inputphone').val('');
				return false;
			})				
			}else if(oForm.inlineRadioOptions.value=='')
			{
				alert('请选择性别')
				return false;
			}else if(oForm.inlineRadio2.value=='')
			{
				alert('请确认选择阅读协议')
				return false;
				
			}else if(oForm.selected.value==''){
				
				alert('请确认选择城市')
				return false;
				
			}else{
				$("form").submit()
			}		

		})
		
	
		

})


