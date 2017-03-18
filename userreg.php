<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>账号创建——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司账号创建</div>
    </div>
<style type="text/css">
    html{font-size:12px;}
    fieldset{width:520px; margin: 0 auto;}
    legend{font-weight:bold; font-size:14px;}
    label{float:left; width:70px; margin-left:10px;}
    .left{margin-left:80px;}
    .input{width:150px;}
    span{color: #666666;}
</style>
<script language=JavaScript>
<!--

function InputCheck(RegForm)
{
  if (RegForm.username.value == "")
  {
    alert("用户名不可为空!");
    RegForm.username.focus();
    return (false);
  }
  if (RegForm.password.value == "")
  {
    alert("必须设定登录密码!");
    RegForm.password.focus();
    return (false);
  }
  if (RegForm.repass.value != RegForm.password.value)
  {
    alert("两次密码不一致!");
    RegForm.repass.focus();
    return (false);
  }
  if (RegForm.email.value == "")
  {
    alert("电子邮箱不可为空!");
    RegForm.email.focus();
    return (false);
  }
}

//-->
</script>
<title>用户注册</title>
</head>

<body>
<fieldset>
<legend>用户注册</legend>
<form name="RegForm" method="post" action="reg.php" onSubmit="return InputCheck(this)">
<p>
<label for="username" class="label">用户名:</label>
<input id="username" name="username" type="text" class="input" />
<span>(必填，3-15字符长度，支持汉字、字母、数字及_)</span>
<p/>
<p>
<label for="password" class="label">密 码:</label>
<input id="password" name="password" type="password" class="input" />
<span>(必填，不得少于6位)</span>
<p/>
<p>
<label for="repass" class="label">重复密码:</label>
<input id="repass" name="repass" type="password" class="input" />
<p/>
<p>
<label for="email" class="label">电子邮箱:</label>
<input id="email" name="email" type="text" class="input" />
<span>(必填)</span>
<p/>
<p>
<input type="submit" name="submit" value="  提交注册  " class="left" />
</p>
</form>
</fieldset>
<?php
include "footer.php"
?>
</body>
</html>