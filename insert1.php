<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>移动电源价格查询——深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司价格查询</div>
    </div>
<div id="feedback">
<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("vptdatebase", $con);
$sql="INSERT INTO cxjgjl (time, sales, client,country,cable,packet,syld)
VALUES
(NOW(),'$_POST[sales]','$_POST[client]','$_POST[country]','$_POST[cable]','$_POST[packet]','$_POST[syld]')";

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }
echo "<br><a href='jgcx.php'>查询其他</a>";
?>
<br />
<?php
$sql ="SELECT `tl_price` FROM  `tl` WHERE  `tl_name` LIKE  '$_POST[sales]' LIMIT 0 , 100";
$searchresult=mysql_query($sql);

$sql2 ="SELECT `bt_pri` FROM `rl` WHERE `bt_kind` LIKE '$_POST[client]' LIMIT 0 , 30";
$result2 = mysql_query($sql2);

$result3 = "$_POST[country]";

$sql4 ="SELECT `xc_pri` FROM  `xc` WHERE  `xc_name` LIKE  '$_POST[cable]' LIMIT 0 , 16";
$result4=mysql_query($sql4);

$sql5 ="SELECT `bz_pri` FROM  `bz` WHERE  `bz_name` LIKE  '$_POST[packet]' LIMIT 0 , 16";
$result5=mysql_query($sql5);

$sql6 ="SELECT `ld_pri` FROM  `ld` WHERE  `ld_name` LIKE  '$_POST[syld]' LIMIT 0 , 16";
$result6=mysql_query($sql6);

$sql7 ="SELECT `syw` FROM  `ld` WHERE  `ld_name` LIKE  '$_POST[syld]' LIMIT 0 , 16";
$result7=mysql_query($sql7);

echo "总价为:";

while($row2 = mysql_fetch_array($result2) and $row1 = mysql_fetch_array($searchresult) and $row4 = mysql_fetch_array($result4) and $row5 = mysql_fetch_array($result5) and $row6 = mysql_fetch_array($result6)){
echo ($row1['tl_price']*($row2['bt_pri']*$result3+$row1['tl_price']+$row4['xc_pri']+$row5['bz_pri']+$row6['ld_pri']))/$row1['tl_price'];
}

echo "(RMB)";
mysql_close($con)
?>

</div>
<div id="foot">Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</div>
</body>
</html>