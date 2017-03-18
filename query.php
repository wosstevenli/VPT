<?php
error_reporting(E_ERROR|E_WARNING|E_PARSE);
$link=mysql_connect("localhost","root","root");
mysql_select_db("vptdatebase",$link) or die("no such database!");
//$GB2312string=iconv( 'UTF-8', 'gb2312//IGNORE' , $RequestAjaxString);    //Ajax中先用encodeURIComponent对要提交的中文进行编码
mysql_query("set names gb2312");
$pid=$_GET[pid];
$res=mysql_query("select pro_kind,pro_zkind from pro where pid='$pid'",$link);
header('Content-type: text/html;charset=GB2312');   //指定发送数据的编码格式为GB2312
while($info=mysql_fetch_array($res)){
   $str.=$info["pro_kind"].",".$info["pro_zkind"];
   $str.=";";
}
echo $str;
?>