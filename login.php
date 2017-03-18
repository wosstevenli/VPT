<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>用户登录——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
    <div id="tlogo"> <a href="index.php"><img src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司用户登录</div>
    </div>
    <div id="userload">
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);  //屏蔽错误带代码

//注销登录
if($_GET['action'] == "logout"){
    unset($_SESSION['userid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="userlogin.php">登录</a>';
    exit;
}

//登录
if(!isset($_POST['submit'])){
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
//$password = MD5($_POST['password']); MD5密码验证
$password = $_POST['password'];

//包含数据库连接文件
include('conn.php');
//检测用户名及密码是否正确
//$check_query = mysql_query("select uid from user where username='$username' and password='$password' 
//limit 1"); 换数据表
$check_query = mysql_query("select uid from account where username='$username' and password='$password' 
limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    $_SESSION['userid'] = $result['uid'];
    echo $username,' 欢迎你！</br>进&nbsp;&nbsp;&nbsp;&nbsp;入：<a href="my.php">用户中心</a><br />';
    echo '点击此处：<a href="login.php?action=logout">注销登录</a><br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
</div>