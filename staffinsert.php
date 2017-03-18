<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>职员资料录入——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司职员资料录入</div>
    </div>
<div id="feedback">
亲，V-PHOTRON热烈欢迎<?php echo $_POST["name"]; ?>同事的加入！<br /><?php echo $_POST["name"]; ?>你好！你的资料信息已经成功录入，请勿重复录入相同个人信息！
<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO staff (name,engname,job,ext,mobile,email,qq,sj)
VALUES
('$_POST[name]','$_POST[engname]','$_POST[job]','$_POST[ext]','$_POST[mobile]','$_POST[email]','$_POST[qq]',CURDATE())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

echo "<br><a href='staff.php'>继续插入记录</a>";

mysql_close($con)
?>
</div>
<div id="foot">Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</div>
</body>
</html>