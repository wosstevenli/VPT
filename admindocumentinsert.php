<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容发布录入-深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">VPT内容发布录入</div>
    </div>
<div style="height:20px;"></div>
<div id="pbgx" style="text-align:center">
<?php
session_start();
if(!isset($_SESSION['userid']))
	{
		header("Location:adminuserlogin.php");
		exit();
	}

$username = $_SESSION['username'];
$password = $_SESSION['password'];

$title = $_POST['title'];

//看看只判断标题
/*$connects = $_POST['connects'];
$type = $_POST['type'];*/

//注册信息判断
/*if(!preg_match('/^[\w\x80-\xff]{3,15}$/', $type)){
	exit('错误：标题不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}*/

//换长度试试
/*if(!preg_match('/^S{1,}$/', $_POST['title'])){
	exit('错误：标题不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}*/

//hai shibaocuo 
/*if(!preg_match('/^S{1,}$/', $title)){
	exit('错误：标题不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}*/

if(strlen($title) < 1){
	header("Location:adminuserlogin.php");
	exit('非法访问！<a href="javascript:history.back(-1);">返回</a>');
}

//只判断标题吧
/*if(!preg_match('/^S{1,}$/', $_POST['connects'])){
	exit('错误：标题不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(!preg_match('/^S{1,}$/', $_POST['type'])){
	exit('错误：标题不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}*/

/*if(strlen($password) < 6){
	exit('错误：文章内容不符合规定。<a href="javascript:history.back(-1);">返回</a>');
}
if(!preg_match('/^\w+([-+.]\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/', $email)){
	exit('错误：文章格式错误。<a href="javascript:history.back(-1);">返回</a>');
}*/

//包含数据库
include('conn.php');
?>
<?php echo "你好，你发表的【"; ?>
<?php echo $_POST['title']; ?>
<?php echo "】已经提交成功！"; ?>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("vptdatebase", $con);

$sql="INSERT INTO news (title,type,contents,postime)
VALUES
('$_POST[title]','$_POST[type]','$_POST[contents]',CURDATE())";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

mysql_close($con)
?>
</div>
<?php include"footer.php" ?>
</body>
</html>