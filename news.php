<?php 
require 'config.inc.php';
mysql_query("SET NAMES GB2312"); 
$rs_products = $db->select_alldata("SELECT * FROM  `news` ORDER BY  `news`.`id` desc LIMIT 0 , 19");
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>NEWS</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
</head>

<body>
		<div id="top">
    	<div id="tlogo"> <a href="http://192.168.0.111"><img border="0" src="images/vptlogo.png"  /></a></div>
		<div id="ttitle">NEWS List</div>
    	</div>
    <div id="display">
    <div id="newslist">
        <table width="auto" height="auto" border="0">
  		<tr>
   		<td>
				<?php
                  $ipro = 0;
				  while($ipro<=2){
                ?>
       		<div style="float:left; width:100%; text-align:left">
       			<span class="STYLE1">
                    <a href="###"><?php echo $rs_products[$ipro]["type"] ?>|<?php echo $rs_products[$ipro]["title"] ?>|<?php echo $rs_products[$ipro]["postime"] ?></a>
                </span>
       		</div>
   				<?php $ipro++;}	?>
    	</td>
  		</tr>
		</table>
	</div>
    <div id="foot">
    </div>
		<?php
        include "footer.php"
        ?>
	</div>
</body>
</html>

