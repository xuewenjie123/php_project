<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<title>后台管理系统</title>
	<link rel="stylesheet" type="text/css" href="../../createku/css/bootstrap.min.css">
    <!--<link rel="stylesheet" type="text/css" href="css/site.css">-->
   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link href="../../createku/umeditor/themes/default/css/umeditor.css" type="text/css" rel="stylesheet">
    <script type="text/javascript" src="../../createku/umeditor/third-party/jquery.min.js"></script>
    <script type="text/javascript" src="../../createku/umeditor/third-party/template.min.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../createku/umeditor/umeditor.config.js"></script>
    <script type="text/javascript" charset="utf-8" src="../../createku/umeditor/umeditor.min.js"></script>
    <script type="text/javascript" src="../../createku/umeditor/lang/zh-cn/zh-cn.js"></script>
</head>

<body>
	<div class="container">
    	<div class="projects-header page-header">
        	<h2>后台信息系统 <small>欢迎您：zhou</small></h2>
   		</div>
        <div class="row">
        	<div class="col-md-3">
            	<ul class="list-group">
                  <li class="list-group-item list-group-item-success">文章栏目</li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=Web前端开发">Web前端开发</a></li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=UI设计">UI设计</a></li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=PHP开发">PHP开发</a></li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=JAVA开发课程">JAVA开发</a></li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=网络营销">网络营销</a></li>
                  <li class="list-group-item"><a href="../html-php/RMS.php?col=全部文章">全部文章</a></li>
                  <li class="list-group-item list-group-item-success"><a href="javascript:;">发布文章</a></li>
                </ul>
            </div>
            <div class="col-md-9" style="border-left:1px solid #eaeaea;">
            
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
            </div>
        </div>
        <div class="panel-footer" style="margin-top:50px;">
    		Copyright1999-2016 北京中公教育科技股份有限公司 .All Rights Reserved 京ICP证161188号
    	</div>
    </div>
</body>
</html>