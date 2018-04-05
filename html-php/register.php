<?php
include "header.php";
?>

    <div class="container">
    	<h3>用户注册</h3>
               <form class="form-horizontal" action="../createall/addtable.php" method="post" id="form1">
          <div class="form-group">
            <label for="inputuser" class="col-sm-2 control-label">用户名</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputuser" name="username" placeholder="用户名">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword" class="col-sm-2 control-label">输入密码</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword" name="passwd1" placeholder="输入密码">
            </div>
          </div>
          <div class="form-group">
            <label for="inputPassword2" class="col-sm-2 control-label">确认密码</label>
            <div class="col-sm-10">
              <input type="password" class="form-control" id="inputPassword2" name="passwd2" placeholder="确认密码">
            </div>
          </div>
          <div class="form-group">
           <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="Email" class="form-control" id="inputEmail" name="email" placeholder="Email">
            </div>
          </div>
          <div class="form-group">
           <label for="inputphone" class="col-sm-2 control-label">手机号</label>
            <div class="col-sm-10">
              <input type="tel" class="form-control" id="inputphone" name="telphone" placeholder="手机号">
            </div>
          </div>
          <div class="form-group">
           <label class="col-sm-2 control-label">省份</label>
            <div class="col-sm-10">
            
             <select class="form-control" name="selected">
                  <option value="黑龙江">黑龙江</option>
                  <option value="甘肃">甘肃</option>
                  <option value="陕西">陕西</option>
                  <option value="河北">河北</option>
                  <option value="贵州">贵州</option>
            </select>
            </div>
          </div>
         
           <div class="form-group">
           <label class="col-sm-2 control-label">性别</label>
            <div class="col-sm-10">
                 <div class="col-sm-10">
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio1" value="男"> 男
                </label> 
                <label class="radio-inline">
                  <input type="radio" name="inlineRadioOptions" id="inlineRadio2" value="女"> 女
                </label>
              <!--<span>请选择性别</span>-->
                </div>
            </div>
          </div>
          
          <div class="form-group">
           <label class="col-sm-2 control-label">爱好</label>
           <div class="col-sm-10">
           <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox1" value="音乐" name="hob[]"> 音乐
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox2" value="旅游" name="hob[]"> 旅游
            </label>
            <label class="checkbox-inline">
              <input type="checkbox" id="inlineCheckbox3" value="登山" name="hob[]"> 登山
            </label>
           	</div>
            
           </div>
           <div class="form-group">
           		<label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                	<label class="radio-inline">
                  <input type="radio" name="inlineRadio2" value="接受"> 阅读并接受
                  <a data-toggle="modal" data-target="#myModal">《用户协议》</a>
  
            <!-- Modal -->
            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                  </div>
                  <div class="modal-body">
                   以下是用户协议请认真阅读
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                  </div>
                </div>
              </div>
            </div>
     </label>
                
                
                <!-- Button trigger modal -->

                </div>
           </div>
           
           <div class="form-group">
           		<label class="col-sm-2 control-label"></label>
                <div class="col-sm-10">
                	<button type="button" class="btn btn-success">注册</button>
                    <button type="button" class="btn btn-default">重置</button>
                    <a href="login.php" target="_blank"><button type="button" class="btn btn-danger">已有账号，去登录</button></a>
                </div>
           </div>
        </form>
    
    </div>


<?php
include "footer.php";
?>
<script type="text/javascript" src="js/confirm.js"></script>
</body>
</html>
