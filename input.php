<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>客户资料录入——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/checkclient.js" ></script>
<script type="text/javascript" >
String.prototype.trim = function() {
return this.replace(/(^\s*)|(\s*$)/g, "");
}
function checkWord(len,evt){
  evt = evt || window.event;
  var src = evt.srcElement? evt.srcElement : evt.target;
  src.value = src.value.trim();
  var str=src.value;
  myLen=0;
  i=0;
  for(;(i<str.length)&&(myLen<=len);i++){
  if(str.charCodeAt(i)>0&&str.charCodeAt(i)<128)
  myLen++;
  else
  myLen+=2;
  }
  if(myLen>len){
  document.getElementById("one").innerHTML="汉字5个，英文10个";
  src.value=str.substring(0,i-1);
  return false;
  }
}
function ss()
{
var st=document.gg.giftDescribe.value;
if(st.length==0)
{document.getElementById("one").innerHTML="不能为空";
return false;
}
}
</script>

</head>

<body>
	<div id="top">
	<div id="tlogo"> <a href="index.php"><img border="0" src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">伟富创光电科技有限公司客户资料录入</div>
	</div>
<div id="input">

<form action="insert.php" method="post" name="salesinput">
  <p>
    销售姓名:&nbsp;<select name="sales">
<option value="黄学敏">黄学敏</option>
<option value="卢便金">卢便金</option>
<option value="李兵">李兵</option>
<option value="阙亮松">阙亮松</option>
<option value="刘娜">刘娜</option>
<option value="全芳">全芳</option>
<option value="杨鑫">杨鑫</option>
</select>
  </p>
  <p>
    客户姓名: 
    <input type="text" name="client" onKeyUp="checkWord(10,event)" placeholder="多词输入后再打空格" />
  </p>
  <p>
    客户国籍: 
    <input type="text" name="country" onKeyUp="checkWord(10,event)" />
  </p>
  <p>
    客户电话: 
    <input type="text" name="cphone" onKeyUp="checkWord(10,event)" placeholder="电话未知，请填NA" />
  </p>
  <p>
    客户邮箱: 
    <input name="cemail" type="text" onKeyUp="checkWord(10,event)"  />
  </p>
  <p>
    客户来源: 
    <select name="cfrom">
<option value="阿里巴巴">阿里巴巴</option>
<option value="环球市场">环球市场</option>
</select>
  </p>
  <p>
    产品类型: 
    <select name="cndtype">
<option value="LED">LED</option>
<option value="POWERBANK">POWERBANK</option>
<option value="蓝牙音箱">蓝牙音箱</option>
<option value="磁悬浮蓝牙音箱">磁悬浮蓝牙音箱</option>
</select>
  </p>
  <p>
    需求详情: 
      <textarea name="cndinfo" onkeyup="checkWord(10,event)"></textarea>
  </p>
  <p>
    成交机率: 
    <select name="success">
<option value="0">0</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option> 
</select>（成交机率介于0-10之间）
  </p>
  <p>
    客户状态: 
    <select name="status">
<option value="初步联系">初步联系</option>
<option value="报价">报价</option>
<option value="供样">供样</option>
<option value="处理订单">处理订单</option>
<option value="订单完成">订单完成</option>
</select>
  </p>
  <p>
    <input name="Submit" type="submit" class="button" onclick="return check()" value="提交">

  </p>
</form>

</div>
<?php
include "footer.php"
?>
</body>
</html>