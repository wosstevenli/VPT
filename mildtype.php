<?php 
require 'config.inc.php';
$rs_products = $db->select_alldata("select * from pro order by pro_id desc");
$rs_prolist = $db->select_alldata("select * from pro order by pro_id asc limit 0,20");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><HEAD>
<meta name="baidu-site-verification" content="apVbPLqYdD9b8AHi" />
<TITLE>V-Photron Technology (Shenzhen) CO.,LTD</TITLE>
<META http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<META content="MSHTML 6.00.5730.13" name=GENERATOR>
<LINK media=all href="css/default.css" type=text/css rel=stylesheet>
<LINK media=all href="css/stylesheet_bbd0ff5061.css" type=text/css rel=stylesheet>
<meta name="description" content="V-Photron Technology ----Ideas for Light">
<meta name="keywords" content="V-Photron,LED spot light,LED panel light, LED tubes,T5,T8,T10,LED wall lamp,LED bulb light,LED grille,LED track light,LED energy saving light, LED flood light,LED down light,flexible LED strip,LED module,LED ceiling light,LED counters light" />
<LINK media=screen,projection href="css/slightbox.css" type=text/css rel=stylesheet>
<link href="css/SpryMenuBarVertical.css" type="text/css" rel="stylesheet">
<link rel="Shortcut Icon" href="img/v-photron.ico" /> 
<SCRIPT src="js/jquery.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/jquery-ui.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/jquery.cycle.all-2.9999.min.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/jquery.form.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/general.js" type=text/javascript></SCRIPT>
<SCRIPT src="js/slimbox.2.0.4.yui.js" type=text/javascript></SCRIPT>
<LINK href="mildtype.php" rel=canonical>

<style type="text/css">
.STYLE1 {color: #000000}
</style>
<style type="text/css">
.STYLE3 {font-size: 16px}
.STYLE4 {font-size: 18px}
</style>
</HEAD>
<BODY>

<DIV class=info_page id=page>
<div id="header">
<?php 
include "header.php"
?>
<DIV id=main>
<table width="982" height="530" border="0">
  <tr>
    <td width="190" height="30" align="left" valign="top"><img src="img/nav.png" width="198" height="30"></td>
   <td width="780" height="30" background="img/home.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <a href="products.php">Products</a> >> <a href="#">All Of The LED Bulb </a>>> E12 Bulb </td>
  </tr>
<?php 
include "menu.php"
?>
   <td>
   <div align="center" style="margin-top:5px"><span class="STYLE1 STYLE2"><strong>All Of The E12 Bulb</strong></span></div>
   <DIV style="height:10px"></DIV>
   <?php
      $ipro = 0;
	  $ipronobe =0;
      while($ipro<=19){
    ?>
       <div style="float:left; width:25%; text-align:center">
       		<a href="Products_page/Tube/LED TUBE.html">
       			<img src="<?php echo $rs_products[$ipro]["pro_img"] ?>" alt="<?php echo $rs_products[$ipro]["pro_title"] ?>" width="180" height="180"></a>
       			<span class="STYLE1"><strong><a href="Products_page/Tube/LED TUBE.html"><?php echo $rs_products[$ipro]["pro_kind"] ?></a></strong></span>
       </div>
   <?php $ipro++;}?>
    </td>
  </tr>
</table>
<DIV class=clear></DIV>
<DIV id=main_footer></DIV>
</DIV>
<?php 
include "footer.php"
?>
</div>
</DIV>
</BODY>
</HTML>
