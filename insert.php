<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户资料录入——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">伟富创光电科技有限公司客户资料录入</div>
    </div>
<div id="feedback">
<?php echo $_POST["sales"]; ?>你好！你录入的客户<br /><?php echo $_POST["client"]; ?>的资料信息已经成功录入，请勿重复录入<?php echo $_POST["client"]; ?>信息！
<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO clientinfo (time, sales, client,country,cphone,cemail,cfrom,cndtype,cndinfo,success,status)
VALUES
(NOW(),'$_POST[sales]','$_POST[client]','$_POST[country]','$_POST[cphone]','$_POST[cemail]','$_POST[cfrom]','$_POST[cndtype]','$_POST[cndinfo]','$_POST[success]','$_POST[status]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<br><a href='input.php'>继续插入记录</a>";

mysql_close($con)
?>
</div>
<div id="foot">Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</div>
</body>
</html>