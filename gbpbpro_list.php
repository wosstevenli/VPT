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
            <!--��ҳ���ݿ�ʼ-->
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
<img border="0" style=" width:180px; height:180px;" alt="��ϸ����" src="PowerBank/VPT-PB<?php echo $row["tl_bm"]?>/VPT-PB<?php echo $row['tl_bm'] ?>.jpg" /></a>
<a href="PowerBank/VPT-PB<?php echo $row["tl_bm"]?>/VPT-PB<?php echo $row['tl_bm'] ?>.jpg"><span class="Blue"><?php echo $row['tl_name'] ?></span></a>
</div>
</td>

<?php 
} 
$page_len = ($page_len%2)?$page_len:$pagelen+1;//ҳ����� 
$pageoffset = ($page_len-1)/2;//ҳ���������ƫ���� 

$key='<div class="page">'; 
$key.="<span>$page/$pages</span> "; //�ڼ�ҳ,����ҳ 
if($page!=1){ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=1\">��һҳ</a> "; //��һҳ 
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page=".($page-1)."\">��һҳ</a>"; //��һҳ 
}else { 
$key.="��һҳ ";//��һҳ 
$key.="��һҳ"; //��һҳ 
} 
if($pages>$page_len){ 
//�����ǰҳС�ڵ�����ƫ�� 
if($page<=$pageoffset){ 
$init=1; 
$max_p = $page_len; 
}else{//�����ǰҳ������ƫ�� 
//�����ǰҳ����ƫ�Ƴ�������ҳ�� 
if($page+$pageoffset>=$pages+1){ 
$init = $pages-$page_len+1; 
}else{ 
//����ƫ�ƶ�����ʱ�ļ��� 
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
$key.=" <a href=\"".$_SERVER['PHP_SELF']."?page=".($page+1)."\">��һҳ</a> ";
$key.="<a href=\"".$_SERVER['PHP_SELF']."?page={$pages}\">���һҳ</a>"; 
}else { 
$key.="��һҳ ";
$key.="���һҳ"; 
} 
$key.='</div>'; 
?>

<table width="750" border="0" align="center" cellpadding="1" cellspacing="0" bgcolor="#ffffff"> 
<tr><td colspan="3" bgcolor="#E0EEE0"><div align="center"><?php echo $key?></div></td></tr>
</table>
<!--��ҳ���ݽ���-->
	</div>
</body>
</html>

