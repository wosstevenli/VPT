<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>日期选择</title>
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css" />
<style type="text/css">
body{height:100%; font:12px/18px Tahoma, Helvetica, Arial, Verdana, "\5b8b\4f53", sans-serif; color:#51555C;}
</style>
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-datepicker.js"></script>
<script type="text/javascript">
$(function(){
	$("#date_1").datepicker();
	/*$("#postime").datepicker();*/
	$("#date_2").datepicker({
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
<div id="main">
  <div class="demo">
      <form action="uptimeinsert.php" method="post" name="uptime">
      <h4>1、默认格式：<span>yy-mm-dd</span></h4>
      <!--<p>日期：<input type="text" name="postime" id="postime" readonly />-->
      <p>日期：<input type="text" name="postime" id="date_1" readonly />
      <input name="Submit" type="submit" class="button" onClick="return check()" value="确定发布"></p>
  	  </form>
   </div>
</div>
</body>
</html>
