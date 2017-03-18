<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>内容发布-深圳市伟富创光电科技有限公司</title>
</head>
<style type="text/css"> 
body{ 
     margin:0px; 
     SCROLLBAR-FACE-COLOR: #e0edfd; 
     SCROLLBAR-HIGHLIGHT-COLOR: #dfe8f4; 
     SCROLLBAR-SHADOW-COLOR: #2c7cda; 
     SCROLLBAR-3DLIGHT-COLOR: #2c7cda; 
     SCROLLBAR-ARROW-COLOR: #14549f; 
     SCROLLBAR-TRACK-COLOR: #eaf5fd; 
     SCROLLBAR-DARKSHADOW-COLOR: #ffffff; 
     SCROLLBAR-BASE-COLOR: #e0edfd; 
} 
.menu{ display:none; } 
input.blur{ 
     border:1px solid #99BBE8; 
     background:#FFFFFF; 
     height:18px; 
} 
.tableborder{ 
border:solid 1px #CCCCCC; 
border-collapse:collapse; 
font-size:12px; 
} 
</style>
<body>
<?php
session_start();
error_reporting(E_ALL ^ E_NOTICE);  //屏蔽错误带代码

//注销登录
if($_GET['action'] == "logout"){
    /*unset($_SESSION['userid']);*/
	//修改看看
	unset($_SESSION['uid']);
    unset($_SESSION['username']);
    echo '注销登录成功！点击此处 <a href="adminuserlogin.php">登录</a>';
    exit;
}

//登录
if(!isset($_POST['submit'])){
	//添加跳转
	header("Location:adminuserlogin.php");
    exit('非法访问!');
}
$username = htmlspecialchars($_POST['username']);
$password = $_POST['password'];

//包含数据库连接文件
include('conn.php');

//检测用户名及密码是否正确
$check_query = mysql_query("select uid from user where username='$username' and password='$password' limit 1");
if($result = mysql_fetch_array($check_query)){
    //登录成功
    $_SESSION['username'] = $username;
    /*$_SESSION['userid'] = $result['uid'];*/
	$_SESSION['uid'] = $result['uid'];
	//添加
	$_SESSION['password']= $password;
    /*echo '<a href="adminuserlogin.php?action=logout">注销登录</a><br />';*/  //登陆成功不许显示
	echo '<div id="forminput">
<form action="admindocumentinsert.php" method="post" name="pbupdate">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>内容发布系统</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">发布新内容</td>
  </tr>
  <tr>
    <td width="91" style="text-align:right">文章标题：</td>
    <td width="1303"><input name="title" type="text" size="20" maxlength="22" /></td>
  </tr>
  <tr>
    <td style="text-align:right">文章类型：</td>
    <td><select name="type">
		<option value="科技">科技</option>
		<option value="学术">学术</option>
		</select>
	</td>
  </tr>
  <tr>
    <td height="483" style="text-align:right">文章内容：</td>
    <td><textarea name="contents" cols="183" rows="43"></textarea></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定发布"></td>
   </tr>
</table>
</form>
</div><br />';
    exit;
} else {
    exit('登录失败！点击此处 <a href="javascript:history.back(-1);">返回</a> 重试');
}
?>
<!--表单登陆显示-->
<!--<div id="forminput">
<form action="documentinsert.php" method="post" name="pbupdate">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>内容发布系统</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">发布新内容</td>
  </tr>
  <tr>
    <td width="91" style="text-align:right">文章标题：</td>
    <td width="1303"><input name="title" type="text" size="20" maxlength="22" /></td>
  </tr>
  <tr>
    <td style="text-align:right">文章类型：</td>
    <td><select name="type">
		<option value="科技">科技</option>
		<option value="学术">学术</option>
		</select>
	</td>
  </tr>
  <tr>
    <td height="483" style="text-align:right">文章内容：</td>
    <td><textarea name="contents" cols="183" rows="43"></textarea></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="确定发布"></td>
   </tr>
</table>
</form>
</div>-->

</body>
</html>