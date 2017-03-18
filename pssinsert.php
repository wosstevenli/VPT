<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>进销存录入-深圳市伟富创光电科技有限公司</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top">
    <div id="tlogo"> <img src="images/vptlogo.png"  /></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司进销存</div>
    </div>
<div style="height:20px;"></div>
<div id="pbgx" style="text-align:center">
<?php echo "你好，你录入的信息已经更新，请继续修订该产品或更新其他产品"; ?>

<?php
$con = mysql_connect("localhost","root","root");
mysql_query("set character set 'utf8'");//读库 
mysql_query("set names 'utf8'");//写库 
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }

mysql_select_db("vptdatebase", $con);

$sql ="SELECT `finnumb` FROM `rl` WHERE `bt_kind` = '$_POST[rl]' LIMIT 0 , 30 ";
$result = mysql_query($sql);

$sql ="INSERT INTO pss (time, sales, rl,numb,io,pinumb)
VALUES
(NOW(),'$_POST[sales]','$_POST[rl]','$_POST[numb]','$_POST[io]','$_POST[pinumb]')";
$sql ="UPDATE `vptdatebase`.`rl` SET  `finnumb` = finnumb+$_POST[numb] WHERE `rl`.`bt_kind` = '$_POST[rl]'";
$sql_Qty = "UPDATE `vptdatebase`.`rl` SET `finnumb` = `finnumb` + '".$_POST['numb']."' WHERE `rl`.`bt_kind` = '".$_POST['rl']."'";
$objQueryQty = mysql_query($sql_Qty);

if (!mysql_query($sql,$con))
  {
  die('Error: ' . mysql_error());
  }

while($row = mysql_fetch_array($result)){
	$nnn=$row['finnumb']+"$_POST[numb]";
	echo $nnn;
}

mysql_close($con)
?>

</div>
<?php include"footer.php" ?>
</body>
</html>