<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo "$_POST[ename]"; ?>-LED查询结果</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
		<div id="formtitle"><?php echo "$_POST[ename]"; ?>-LED参数查询</div>
<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?>  

<?php 
$ename=$_POST["ename"]; 
if($ename != null){ 
/*$b = " and pro_name like '%$ename%'";} */
$b = " and pro_name like '%$ename%' OR pro_zkind like '%$ename%' OR pro_mate like '%$ename%' OR pro_price like '%$ename%' OR pro_vw like '%$ename%' OR pro_pty like '%$ename%' OR pro_ledtype like '%$ename%' OR pro_lm like '%$ename%'OR pro_wtemp like '%$ename%'OR pro_ctemp like '%$ename%'OR pro_ra like '%$ename%' OR pro_size like '%$ename%' OR pro_power like '%$ename%' OR pro_mate like '%$ename%' OR pro_life like '%$ename%' OR pro_color like '%$ename%' OR pro_kind like '%$ename%' OR pro_weight like '%$ename%' ";} 
$q = "SELECT * FROM pro where (1=1)"; 
$q .=$b; 

mysql_query("SET NAMES GB2312"); 
$rs = mysql_query($q, $link); 
/*echo "<table width=1440 border=1 cellspacing=0 cellpadding=0 bordercolor=#000000><tr><td>深圳市伟富创光电科技有限公司：$_POST[ename]-LED查询结果</td></tr></table>";*/
echo "<table width=1440 border=1 cellspacing=0 cellpadding=0 bordercolor=#000000>"; 
echo "<tr><td>产品料号</td><td>产品类型</td><td>灯座类型</td><td>价格</td><td>电压</td><td>灯珠数目</td><td>LED类型</td><td>流明值</td><td>工作温度</td><td>色温范围</td><td>显色指数</td><td>尺寸</td><td>功率</td><td>材质</td><td>质保期</td><td>颜色</td><td>重量</td></tr>"; 
while($row = mysql_fetch_object($rs)) echo "<tr><td><a href='PowerBank/$row->pro_name/$row->pro_name.jpg' target=_blank>$row->pro_name</a></td><td>$row->pro_kind</td><td>$row->pro_zkind</td><td>$row->pro_price</td><td>$row->pro_vw</td><td>$row->pro_pty</td><td>$row->pro_ledtype</td><td>$row->pro_lm</td><td>$row->pro_wtemp</td><td>$row->pro_ctemp</td><td>$row->pro_ra</td><td>$row->pro_size</td><td>$row->pro_power</td><td>$row->pro_mate</td><td>$row->pro_life</td><td>$row->pro_color</td><td>$row->pro_weight</td></tr>"; 
echo "</table>"; 

mysql_close($link); 

?> 
</html>