<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>报价单查询_深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="lv1">
	<div id="gslogo"><img src="images/vptlogo.png" /></div>
	<div id="gsinfo">
				<li> <h2>V-Photron Technology (Shenzhen) Co., ltd.</h2></li>
				<li>Address: 3/F,No.12 Bldg, Longwangmiao Industry Zone,</li>
				<li>Baishixia,Fuyong Street,Shenzhen, Guangdong, China</li>
				<li><a href="http://www.v-photron.com">www.v-photron.com</a> <a href="mailto:it@v-photron.com?subject=请你给我报份价&body=你好我对你们的产品感兴趣" >Email: sales@v-photron.com</a></li>
				<li>Tel: +86-755-61148611 Fax: 86-755-61148622</li>
				<li>Pricelist of LED Energy Saving Light</li>
 			            
	</div>
</div>

<?php 
$link =mysql_connect("localhost","root","root"); 
mysql_select_db("vptdatebase", $link); 
?>  

<div id="item">
	<li>Item Image</li>
	<li>Item Name & No.</li>
	<li>Description</li>
	<li>Unit</li>
	<li>Price (Excluding Tax)</li>
</div>
<?php 
$ename=$_POST["ename"]; 
if($ename != null){ 
$b = " and pro_name like '%$ename%'";} 
$q = "SELECT * FROM pro where (1=1)"; 
$q .=$b; 

mysql_query("SET NAMES GB2312"); 
$rs = mysql_query($q, $link); 
echo "<table>"; 
while($row = mysql_fetch_object($rs)) echo "<tr><td>$row->pro_name</td><td>$row->pro_kind</td><td>$row->pro_id</td></tr>"; 
echo "</table>"; 
mysql_close($link); 
?> 
<div id="conctent">
	<li><img src="images/VPT-BL001H05W.jpg"/></li>
	<li><p><?php echo "$row->pro_name";?></br>
		  LED Bulb Light</br></p></li>
	<li>
           Work Voltage:AC85-265V</br>
           Power:10W</br>
           LED Qty:96 pcs</br>
           LED Type:3014SMD</br>
           Work Temperature:-20℃~50℃</br>
           Color Temperature:2800K-3200K</br>
           4500K-5500K,6000K-6500K</br>
           Color refers to the(Ra):82-85</br>
           Lumen:900-1200lm</br>
           Dimension:Φ30*590mm</br>
           Length:600mm</br>
    	
    </li>
	<li><p>pcs</p></li>
	<li><p>¥60.00</br>
		   $10.00</br></p>
</div>

</body>
</html>