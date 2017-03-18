<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$_POST[pbname]"; ?>-移动电源查询</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
    	<div id="tlogo"> <a href="http://192.168.0.111"><img border="0" src="images/vptlogo.png"  /></a></div>
		<div id="ttitle"><?php echo "$_POST[pbname]"; ?>-移动电源查询</div>
<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?>  

<div id="pbpro-re" style="float:left">
<?php 
$pbname=$_POST["pbname"]; 
if($pbname != null){ 
$b = " and tl_name like '%$pbname%' or tl_bm like '%$pbname%' or LED like '%$pbname%' or kind like '%$pbname%' or tl_price like '%$pbname%' or btype like '%$pbname%' or shell like '%$pbname%' or input like '%$pbname%' or output like '%$pbname%' or colour like '%$pbname%' or weight like '%$pbname%' or size like '%$pbname%' ";}
$q = "SELECT * FROM tl where (1=1)"; 
$q .=$b; 

mysql_query("SET NAMES utf8"); 
$rs = mysql_query($q, $link); 
echo "<table width=1440 border=1 cellspacing=0 cellpadding=0 bordercolor=#000000>"; 
echo "<tr><td>产品料号</td><td>产品名称</td><td>产品价格</td><td>电池类型</td><td>壳料材质</td><td>额定输入</td><td>额定输出</td><td>净重</td><td>尺寸</td><td>供选颜色</td></tr>"; 
while($row = mysql_fetch_object($rs)) 
	echo "<tr><td><a href='PowerBank/VPT-PB$row->tl_bm/VPT-PB$row->tl_bm.jpg' target=_blank>VPT-PB$row->tl_bm</a></td><td>$row->tl_name</td><td>$row->tl_price</td><td>$row->btype</td><td>$row->shell</td><td>$row->input</td><td>$row->output</td><td>$row->weight</td><td>$row->size</td><td>$row->colour</td></tr>"; 
	echo "</table>"; 

mysql_close($link); 

?> 
</div>
</body>
</html>