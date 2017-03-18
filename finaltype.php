<?php 
require 'config.inc.php';
$id = $_GET['id'];
$sql_products = "select * from pro where pro_id=".$id."";
$rs_products = $db->select_onedata($sql_products);
$rs_prolist = $db->select_alldata("select * from pro order by pro_id asc limit 0,20");
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3c.org/TR/1999/REC-html401-19991224/loose.dtd">
<HTML lang=en xmlns="http://www.w3.org/1999/xhtml" xml:lang="en"><HEAD>
<meta name="baidu-site-verification" content="apVbPLqYdD9b8AHi" />
<TITLE><?php echo $rs_products["pro_name"];?>_V-Photron Technology (Shenzhen) CO.,LTD</TITLE>
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
<LINK href="finaltype.php" rel=canonical>

<style type="text/css">
.STYLE1 {color: #000000;list-style-type:none;}
.STYLE2 {color: #000000;list-style-type:none;}
.STYLE3 {font-size: 14px;text-transform:uppercase}
.STYLE4 {font-size: 18px;font-weight: bold;}
</style>
<style type="text/css">
.STYLE6 {font-size: 1em;color: #000000;list-style-type:none;}
.STYLE7 {font-size: 1em}
#apDiv1 {
	position:absolute;
	left:332px;
	top:276px;
	width:325px;
	height:18px;
	z-index:10000;
}
</style>
</HEAD>
<BODY>
<DIV class=info_page id=page>
<div id="header">
<?php
include "header.php"
?>
<DIV id=main>
<table width="970" height="530" border="0">
  <tr>
    <td width="190" height="30" align="left" valign="top"><img src="img/nav.png" width="198" height="30"></td>
   <td width="780" height="30" background="img/home.png">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href=" products.php">Products</a> >><a href="products.php"><a href="#"><?php echo $rs_products["pro_kind"];?></a>  >><?php echo $rs_products["pro_name"];?></td>
  </tr>
<!--menu-->  
<?php 
include "menu.php"
?>
<!--MENU END-->
   <td><table width="780" height="496" border="1">  
     <tr>
       <td width="288" height="207"><div align="center"><img src="<?php echo $rs_products["pro_img"];?>" alt="<?php echo $rs_products["pro_title"];?>" width="180" height="180"></div></td>
       <td width="476" align="center" valign="top"><br>
         <div align="left"><span class="STYLE1">
         <span class="STYLE4">&nbsp; Model:</span> <span class="STYLE3"><?php echo $rs_products["pro_name"];?></span><br>
         <span class="STYLE4">&nbsp; Lampshades Size:</span> <span class="STYLE3">15 × 600mm </span><br>
         <span class="STYLE4">&nbsp; Housing material: </span><span class="STYLE3">6063 aluminum</span> <br>
         <span class="STYLE4">&nbsp; Basic Material:</span> <span class="STYLE3">PC </span><br>
         <span class="STYLE4">&nbsp; Protection class: </span><span class="STYLE3">IP40 </span><br>
         <br>
         <span class="STYLE4">&nbsp; Note:</span> <span class="STYLE3">3-year warranty period; if the goods have a bad product, free of charge returned.
         OEM and ODM services, can receive small orders</span>.</span></div></td>
     </tr>
     <tr class="list2-subdiv">
       <td height="281" colspan="2">       
       <div id="TabbedPanels1" class="TabbedPanels">
    <ul class="TabbedPanelsTabGroup">
      <h3 class="STYLE1" style="text-align:center; color:#00C"> Specification</h3>
      <h3 class="STYLE1" style="text-align:center; color:#00C"> Terms of the transaction</h3>
    </ul>
    <br>
    <div class="TabbedPanelsContentGroup">
      <div class="TabbedPanelsContent">
        <table width="100%" border="0">
          <tbody>
            <tr>
              <td valign="top" width="50%"><h3 class="STYLE1">物理参数：</h3>
                  <ul>
                    <li class="STYLE1">单端供电输入:<?php echo $rs_products["pro_vw"];?> </li>
                    <li class="STYLE1">灯罩尺寸： 26 x 600mm </li>
                    <li class="STYLE1">外罩材料： 6063 铝 </li>
                    <li class="STYLE1">基本材质： PC </li>
                    <li class="STYLE1">防护等级：IP40 </li>
                    <li class="STYLE1">使用寿命：50，000小时 </li>
                    <li class="STYLE1">净重： 0.192kg </li>
                    <li class="STYLE1">表面温度：≤45℃ </li>
                    <li class="STYLE1">灯球焊接点温度：≤48℃ </li>
                    <li class="STYLE1">工作温度： -20℃ - 45 ℃ </li>
                    <li class="STYLE1">储存温度： -20℃ - 80 ℃ </li>
                    <li class="STYLE1">储存湿度： 20%~ 80% </li>
                    <li class="STYLE1">工作湿度： 10%~90% </li>
                    <li class="STYLE1">用于室内 </li>
                    <li class="STYLE1">不会变形 </li>
                  </ul></td>
              <td valign="top" width="50%"><h3 class="STYLE1">电气参数：</h3>
                  <ul class="STYLE1">
                    <li>工作电压:<?php echo $rs_products["pro_vw"];?></li>
                    <li>工作频率： 50-60HZ </li>
                    <li>额定功率： 10W </li>
                    <li>保护： 输入输出过流保护，短路保护， 输出电流保护 </li>
                    <li>通过电磁干扰 &amp; 低电压测试 </li>
                    <li>功率因数： 0.9 </li>
                    <li>恒流电源 </li>
                  </ul>
                <h3 class="STYLE1">包装：</h3>
                <ul class="STYLE1">
                    <li>体积： 20pcs/箱 </li>
                  <li>毛重： 8.26kg </li>
                  <li>箱子尺寸： L:616 x W:245 x H:213mm </li>
                  <li>包装方式： 标准包装 或 据客户要求 </li>
                </ul></td>
            </tr>
            <tr>
              <td height="189" valign="top"><h3 class="STYLE1">光电参数：</h3>
                  <ul>
                    <li class="STYLE1">输出光通量：600lm(暖白)， 700lm( 正白 &amp; 冷白) </li>
                    <li class="STYLE1">色温： 暖白(3000-3500K)， 正白(4000-4500K)， 冷白(5500-6500K) 可选 </li>
                    <li class="STYLE1">发角角度： 15/18/30/45/60 角度可选 </li>
                    <li class="STYLE1">光源( LED 主芯片) 品牌： CREE， Bridgelux， Edison </li>
                    <li class="STYLE1">LED 数量：144 pcs </li>
                    <li class="STYLE1">透镜类型： PMMA 透镜 </li>
                    <li class="STYLE1">显色指数： 80+(暖白)， 70+(正白 &amp; 冷白) </li>
                    <li class="STYLE1">照度： 240 LX @ 1.0M，70LX @2.0M， 30LX @3.0M </li>
                    <li class="STYLE1">光效： 70lm/w </li>
                  </ul></td>
              <td valign="top"><h3 class="STYLE1">我们的竞争优势：</h3>
                <span class="STYLE1">原产地： 中国深圳<br />
                品牌： <strong>伟富创</strong>； 可提供OEM 和 ODM   服务<br />
                主要竞争优势：<br />
                </span>
                <ul class="STYLE1">
                  <li>及时发货 </li>
                  <li>可接收小订单 </li>
                  <li>3年保修期； 若货物中有不良品，我司将寄重新寄良品给客户并付来回运费 </li>
                  <li>符合基本标准 </li>
                </ul>
                <span class="STYLE1">主要出口市场： 北美，西欧，亚洲，南美，东欧</span></td>
            </tr>
          </tbody>
        </table>
        <p>&nbsp;</p>
      </div>
      <div class="TabbedPanelsContent">
        <h3 class="STYLE1"><br><strong>装箱尺寸：</strong></h3>
        <table bordercolor="#999999" cellspacing="0" cellpadding="0" width="100%" border="1">
          <tbody>
            <tr>
              <td><div align="center" class="STYLE1">产品型号</div></td>
              <td><div align="center" class="STYLE1">Pcs/箱</div></td>
              <td><div align="center" class="STYLE1">尺寸（mm）长 x 宽 x 高</div></td>
              <td><div align="center" class="STYLE1">毛重</div></td>
              <td><div align="center" class="STYLE1">20’</div></td>
              <td><div align="center" class="STYLE1">40GP</div></td>
              <td><div align="center" class="STYLE1">40HQ</div></td>
            </tr>
            <tr>
              <td><div align="center" class="STYLE1">AH-T0806-14410A</div></td>
              <td><div align="center" class="STYLE1">144</div></td>
              <td><div align="center" class="STYLE1">L： 616 x W：228 x H：208</div></td>
              <td><div align="center" class="STYLE1">8.26<br />
              </div></td>
              <td><div align="center" class="STYLE1">12300<br />
              </div></td>
              <td><div align="center" class="STYLE1">27000</div></td>
              <td><div align="center" class="STYLE1">31500</div></td>
            </tr>
            <tr>
              <td><div align="center" class="STYLE1">AH-F0806-14410A</div></td>
              <td><div align="center" class="STYLE1">144</div></td>
              <td><div align="center" class="STYLE1">L： 616 x W：245 x H：213</div></td>
              <td><div align="center" class="STYLE1">8.26<br />
              </div></td>
              <td><div align="center" class="STYLE1">6500<br />
              </div></td>
              <td><div align="center" class="STYLE1">13500</div></td>
              <td><div align="center" class="STYLE1">15750</div></td>
            </tr>
          </tbody>
        </table>
        <br><h3 class="STYLE1">付款方式：</h3>
        <ol class="STYLE1">
          <li>支付方式： T/T， L/C </li>
          <li>最小起订量：100 pcs </li>
          <li>价格： FOB 深圳 170-180元 每pcs </li>
        </ol>
        <br><h3 class="STYLE1">发货细节：</h3>
        <ol class="STYLE1">
          <li>交货方式：快递，空运，海运 </li>
          <li>运输时间：快递和空运7-15天，海运25-30天 <br>
          </li>
        </ol>
      </div>
    </div>
  </div>       </td>
       </tr>
   </table>   </td>
  </tr>
</table>


<DIV class=clear></DIV>
<DIV id=main_footer></DIV></DIV>
<?php
include "footer.php"
?>
</div>
</DIV>
</BODY>
</HTML>
