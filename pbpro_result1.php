<? 
   exit(); 
} 
set_magic_quotes_runtime(0); 
$host = 'localhost'; 
$db = 'vptdatebase'; 
$user = 'root'; 
$pass = 'root'; 
// [ php/inc/str2url.php ] cvs 1.2 
function str2url($path){ 
   return eregi_replace("%2f","/",urlencode($path)); 
} 
?>
 
<html> 
<head><title>MySQLͨ�ò�ѯ����</title></head> 
<body> 
<form action="<?echo str2url($PHP_SELF);?>" method="post"> 
������SQL���:<br> 
<textarea name="sql" cols="100" rows="5"><?echo $sql;?></textarea><br> 
<input type="submit" name="cmd" value="��ѯ"> 
<input type="submit" name="cmd" value="ִ��"> 
</form>
 
<? 
if($cmd){ 
   $con = mysql_pconnect($host,$user,$pass) or die('�޷�����'.$host.'������'); 
   mysql_select_db($db,$con) or die('�޷�����'.$db.'���ݿ�'); 
   $rst = mysql_query($sql,$con) or die($sql.'����'); 
   if($cmd=='��ѯ'){ 
      $num_fields = mysql_num_fields($rst); 
      echo '<hr>'; 
      echo '<table border="1" cellpadding="0" cellspacing="0">'; 
      echo '<caption align="center">'.$sql.'</option>'; 
      echo '<tr>'; 
      for($i=0;$i<$num_fields;$i++) echo '<th> '.mysql_field_name($rst,$i).'</th>'; 
      echo '</tr>'; 
      while($row=mysql_fetch_row($rst)){ 
         echo '<tr>'; 
         for($i=0;$i<$num_fields;$i++) echo '<td> '.$row[$i].'</td>'; 
         echo '</tr>'; 
      } 
      echo '</table>'; 
      mysql_free_result($rst); 
   } 
   else echo '�� '.mysql_affected_rows($con).' ����Ӱ��'; 
} 
?> 
</body> 
</html>