<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>深圳市伟富创光电科技有限公司资料系统</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/checkclient.js" ></script>
</head>

<body>
		<div id="top">
        <div id="tlogo"> <a href="http://www.v-photron.com"><img border=0 src="images/vptlogo.png"  /></a></div>
        <div id="ttitle">深圳市伟富创光电科技有限公司资料系统</div>
        </div>
    <div id="search">
    <form action="search_result.php" method="POST"> 
LED产品料号: <input type="text" size=50 name="ename" value="">
		 <input type="submit" name="查询" value="查询"> 
	</form>
	</div>
<div id="fpart">
<div id="part1"><a href="input.php">客户信息录入</a></div>
<div id="part2"><a href="jgcx.php">电源价格查询</a></div>
<div id="part3"><a href="sampleform.php">表单录入</a></div>
<div id="part4"><a href="gbpbpro_list.php" target="_blank">产品列表</a></div>
</div>
<!--<br />-->
<!--<div id="fpart1">
<div id="part1"><a href="pss/index.php">进销存</a></div>
<div id="part2"><a href="jgcx.php">移动电源查价</a></div>
</div>-->
<div style="clear:both"></div>
<br/>
<div id="fpart" style="margin-top:-10px">
<div id="part1"><a href="staff.php">职员信息录入</a></div>
<div id="part2"><a href="pbpro.php">电源参数查询</a></div>
<div id="part3"><a href="pbinfoupdate.php">电源资料更新</a></div>
<div id="part4"><a href="userlogin.php">账号信息查询</a></div>
</div>

<?php
include "footer.php"
?>
</body>
</html>