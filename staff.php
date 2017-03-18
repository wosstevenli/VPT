<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="js/checker.js" ></script>
<title>职员资料录入——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
	<div id="tlogo"> <a href="index.php"><img border="0" src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">伟富创光电科技有限公司职员资料录入</div>
    </div>
<div id="input">
<!--<form action="staffinsert.php" onsubmit="return myCheck()" method="post" name="staffinput">-->
<form action="staffinsert.php" method="post" name="staffinput">
  <p>职员姓名:<input name="name" type="text" /></p>
  <p>英文姓名:<input name="engname" type="text" />（销售人员必填，其他没有可选填！）</p>
  <p>公司职位:<select name="job">
<option value="采购">采购</option>
<option value="生产主管">生产主管</option>
<option value="生产技术员">生产技术员</option>
<option value="品质">品质</option>
<option value="销售">销售</option>
<option value="经理">经理</option>
<option value="副总经理">副总经理</option>
<option value="财务">财务</option>
<option value="设计">设计</option>
<option value="工程">工程</option>
<option value="文员">文员</option>
</select></p>
  <p>公司分机:<input name="ext" type="text" /></p>
  <p>手机号码:<input name="mobile" type="text" /></p>
  <p>电子邮箱:<input name="email" type="text" /></p>
  <p>Q&nbsp;Q号码&nbsp;:<input name="qq"type="text" /></p>
  <p>
<!--  <input type="submit" value="提交">-->
  <input name="Submit" type="submit" class="button" onclick="return check()" value="提交">
  </p>
</form>
</div>
<?php
include "footer.php"
?>
</body>
</html>