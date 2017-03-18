<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>日期选择</title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<style type="text/css">
a{color:#007bc4/*#424242*/; text-decoration:none;}
a:hover{text-decoration:underline}
ol,ul{list-style:none}
table{border-collapse:collapse;border-spacing:0}
body{height:100%; font:12px/18px Tahoma, Helvetica, Arial, Verdana, "\5b8b\4f53", sans-serif; color:#51555C;}
img{border:none}
.demo{width:500px; margin:20px auto}
.demo h4{height:32px; line-height:32px; font-size:14px}
.demo h4 span{font-weight:500; font-size:12px}
.demo p{line-height:28px;}
input{width:108px; height:20px; line-height:20px; padding:2px; border:1px solid #d3d3d3}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">
$(function(){
	$("#date_1").datepicker();
	$("#date_2").datepicker({
		//navigationAsDateFormat: true,
		dateFormat: 'yy年mm月dd日'
	});
	$("#date_3").datepicker({
		minDate: -30,
		maxDate: 0
	});
	$("#date_4").datepicker({
		altField: "#alternate",
		altFormat: "yy年MMd日,DD"
	});
	$("#datepicker").datepicker({
		showOtherMonths: true,
		selectOtherMonths: false
	});
	$("#date_6").datepicker({
		showWeek: true
	});
	$("#date_7").datepicker({
		numberOfMonths: 3,
		showButtonPanel: true
	});
	$("#date_8").datepicker({
		showOn: "button",
		buttonImage: "images/calendar.gif",
		buttonImageOnly: true
	});
	$("#date_9").datepicker({
		onSelect: function(dateText,inst){
			alert("您选择的日期是："+dateText)
		}
	});
});
</script>
</head>

<body>
<div id="header">
   <div id="logo"><h1 style="text-align:center"><a href="http://192.168.0.111" title="返回helloweba首页">helloweba</a></h1></div>
</div>
<div id="main">
   <h2 class="top_title" style="text-align:center"><a href="http://192.168.0.111">日期选择器</a></h2>
   <div class="demo">
      <h4>1、默认格式：<span>yy-mm-dd</span></h4>
      <p>日期：<input type="text" id="date_1" readonly /></p>
   </div>
   <div class="demo" id="s2">
      <h4>2、格式化日期：<span>yy年mm月dd日</span></h4>
      <p>日期：<input type="text" id="date_2" readonly /></p>
   </div>
   <div class="demo" id="s3">
      <h4>3、设置日期可选范围：<span>当前日期前30天</span></h4>
      <p>日期：<input type="text" id="date_3" readonly /></p>
   </div>
   <div class="demo" id="s4">
      <h4>4、关联同步不同的日期格式：</h4>
      <p>日期：<input type="text" id="date_4" readonly /> &nbsp; <input type="text" id="alternate"  style="width:150px" /></p>
   </div>
   <div class="demo">
      <h4>5、直接显示日历：</h4>
      <div id="datepicker"></div> 
   </div>
   <div class="demo">
      <h4>6、显示日期所在一年中的周数：</h4>
      <p>日期：<input type="text" id="date_6" readonly /></p>
   </div>
   <div class="demo" id="s7">
      <h4>7、显示连续的3个月的日历：</h4>
      <p>日期：<input type="text" id="date_7" readonly /></p>
   </div>
   <div class="demo" id="s8">
      <h4>8、通过点击图标触发显示日历：</h4>
      <p>日期：<input type="text" id="date_8" readonly style="height:16px" /></p>
   </div>
   <div class="demo" id="s9">
      <h4>9、选中日期后触发事件：</h4>
      <p>日期：<input type="text" id="date_9" readonly /></p>
   </div>
</div>
<div id="footer">
    <p style="text-align:center">Powered by VPT：<a href="http://192.168.0.111">www.v-photron.com</a></p>
</div>
</body>
</html>
