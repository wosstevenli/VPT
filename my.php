<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我的信息——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="top">
	<div id="tlogo"> <a href="index.php"><img src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">伟富创光电科技有限公司账号--我的信息</div>
    </div>
    <div id="myinfo">
<?php
session_start();

//检测是否登录，若没登录则转向登录界面
if(!isset($_SESSION['userid'])){
    header("Location:userlogin.php");
    exit();
}

//包含数据库连接文件
include('conn.php');
$userid = $_SESSION['userid'];
$username = $_SESSION['username'];
//$user_query = mysql_query("select * from user where uid=$userid limit 1"); 换数据表
$user_query = mysql_query("select * from account where uid=$userid limit 1");
$row = mysql_fetch_array($user_query);
echo '用户信息：<br />';
//echo '用户名：',$username,'<br />';
echo '姓名：',$row['engname'],'<br />';
echo '邮箱：',$row['email'],'<br />';
echo '邮箱/登陆密码：',$row['password'],'<br />';
echo '阿里（国际）：',$row['ali'],'<br />';
echo '阿里（国际）密码：',$row['alipw'],'<br />';
echo '阿里（中国）：',$row['alicn'],'<br />';
echo '阿里（中国）密码：',$row['alicnpw'],'<br />';
echo 'GMC1密码：',$row['gmc_ledpw'],'<br />';
echo 'GMC2密码：',$row['gmc_pbpw'],'<br />';
echo 'Skype：',$row['email'],'<br />';
echo 'Skype密码：',$row['empw'],'<br />';
echo 'QQ密码：',$row['qq_pw'],'<br />';
echo '域账户密码：',$row['win_pw'],'<br />';
//echo '注册日期：',date("Y-m-d", $row['regdate']),'<br />';
echo '注册日期：',$row['regdate'],'<br />';
echo '<a href="login.php?action=logout">注销</a> 登录<br />';
?>
</div>
</body>
</html>