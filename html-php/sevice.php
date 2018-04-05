<?php
include "header.php";
?>
<script>
function showHint(str,num){
	console.log(111)
	if(window.XMLHttpRequest){
		xmlhttp = new XMLHttpRequest();
	}else{
		xmlhttp = new AcitveXObject("Microsoft.XMLHTTP");	
	}
	xmlhttp.open("GET","select_col.php?col="+str+"&page="+num,true);
	xmlhttp.send();
	xmlhttp.onreadystatechange = function(){
		if(xmlhttp.readyState==4 && xmlhttp.status==200){
			document.getElementById("rows").innerHTML = xmlhttp.responseText;
		}	
	}	
}
</script>

<div class="container">
  	<div class="dropdown projects-header page-header">
      <select class="form-control" style="width:auto;" onChange="showHint(this.value,0)">
          <option>全部课程</option>
          <option>Web前端开发</option>
          <option>UI设计</option>
          <option>网络营销</option>
     </select>
    </div>
</div> 
  <div id="rows">
  </div>
	 <script>
    	showHint("全部课程",0);
    </script>
<?php
include "footer.php";
?>