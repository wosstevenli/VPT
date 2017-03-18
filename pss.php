<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>进销存更新-深圳市伟富创光电科技有限公司</title>
<script type="text/javascript" src="js/pbinfoinputchecker.js" ></script>
</head>
<body>
<div id="forminput">
<form action="pssinsert.php" method="post" name="pbupdate">
<table align="center" width="1400"  bordercolor="#000000" border="1" cellspacing=0 cellpadding=0>
  <tr>
    <th height="40" colspan="5" valign="middle" scope="col"><h2>深圳市伟富创光电科技有限公司</h2></th>
  </tr>
  <tr>
    <td colspan="5" align="center">进销存</td>
  </tr>
  <tr>
    <td style="text-align:right">电池容量：</td>
    <td><select name="rl">
<option value="1200">18650-1200</option>
<option value="1500">18650-1500</option>
<option value="1800">18650-1800</option>
<option value="2000">18650-2000</option>
<option value="2200">18650-2200</option>
<option value="2450">18650-2450</option>
<option value="2600">18650-2600</option>
</select></td>
  </tr>
  <tr>
    <td style="text-align:right">电池数量：</td>
    <td><input name="numb" type="text" /></td>
  </tr>
  <tr>
    <td style="text-align:right">入库出库：</td>
    <td><select name="io">
<option value="add">入库</option>
<option value="sub">出库</option>
</select></td>
  </tr>
  <tr>
    <td style="text-align:right">订单编号：</td>
    <td><input name="pinumb" type="text" /></td>
  </tr>
  <tr>
    <td style="text-align:right">销售姓名：</td>
    <td><select name="sales">
<option value="黄学敏">黄学敏</option>
<option value="卢便金">卢便金</option>
<option value="阙亮松">阙亮松</option>
<option value="李兵">李兵</option>
<option value="刘娜">刘娜</option>
<option value="全芳">全芳</option>
<option value="杨鑫">杨鑫</option>
</select></td>
  </tr>
   <tr>
   <td colspan="5" align="center"><input name="Submit" type="submit" class="button" onclick="return check()" value="提交"></td>
   </tr>
</table>
</form>
</div>
</body>
</html>