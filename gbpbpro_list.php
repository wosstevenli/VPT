<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>PowerBank List</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/sys.css" rel="stylesheet" type="text/css" />
</head>

<body>
	<div id="top">
    	<div id="tlogo"> <a href="http://192.168.0.111"><img border="0" src="images/vptlogo.png"  /></a></div>
		<div id="ttitle">PowerBank List</div>
    </div>
    <!--<div id="display">-->
    	<div id="pblist">
            <!--分页内容开始-->
<?php 
$link=MySQL_connect('localhost','root','root'); 
mysql_select_db('vptdatebase'); 
mysql_query('set names utf-8'); 

$Page_size=16; 

$result=mysql_query('select * from tl'); 
$count = mysql_num_rows($result); 
$page_count = ceil($count/$Page_size); 

$init=1; 
$page_len=7; 
$max_p=$page_count; 
$pages=$page_count; 

if(empty($_GET['page'])||$_GET['page']<0){ 
$page=1; 
}else { 
$page=$_GET['page']; 
} 

$offset=$Page_size*($page-1); 
$sql="select * from tl ORDER BY  pro_id desc limit $offset,$Page_size"; 
$result=mysql_query($sql,$link); 
while ($row=mysql_fetch_array($result)) { 
?>

<td>
<div style="float:left; width:25%; text-align:center">
<a href="PowerBank/VPT-PB<?php echo $row["tl_bm"]?>/VPT-PB<?php echo $row['tl_bm'] ?>.jpg">
<img border="0" style=" width:180px; height:180px;" alt="详细内容" src="PowerBank/VPT-PB<?php echo $row["tl_bm"]?>/VPT-PB<?php echo $row['tl_bm'] ?>.jpg" /></a>
<a href="PowerBank/VPT-PB<?php echo $row["tl_bm"]?>/VPT-PB<?php echo $row['tl_bm'] ?>.jpg"><span class="Blue"><?php echo $row['tl_name'] ?></span></a>
</div>
</td>

<?php 
} 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//页码个数 
$pageoffset = ($page_len-1)/2;//页码个数左右偏移量 

$key='<div class="page">'; 
$key.="<span>$page/$pages</span> "; //第几页,共几页 
if($page!=1){ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">第一页</a> "; //第一页 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">上一页</a>"; //上一页 
}else { 
$key.="第一页 ";//第一页 
$key.="上一页"; //上一页 
} 
if($pages>$page_len){ 
//如果当前页小于等于左偏移 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//如果当前页大于左偏移 
//如果当前页码右偏移超出最大分页数 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//左右偏移都存在时的计算 
$init = $page-$pageoffset; 
$max_p = $page+$pageoffset; 
} 
} 
} 
for($i=$init;$i<=$max_p;$i++){ 
if($i==$page){ 
$key.=' <span>'.$i.'</span>'; 
} else { 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".$i."\">".$i."</a>"; 
} 
} 
if($page!=$pages&&$pages!=0){ 
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">下一页</a> ";
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">最后一页</a>"; 
}else { 
$key.="下一页 ";
$key.="最后一页"; 
} 
$key.='</div>'; 
?>

<table width="750" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#ffffff"> 
<tr><td colspan="3" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td></tr>
</table>
<!--分页内容介绍-->
	</div>
</body>
</html>

