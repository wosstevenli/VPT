<!DOCTYPE html>
<html>
<head>
    <title>移动电源价格查询</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="js/jsAddress.js"></script>
</head>
<body>
	<div id="top">
	<div id="tlogo"> <a href="index.php"><img border=0 src="images/vptlogo.png"  /></a></div>
	<div id="ttitle">深圳市伟富创光电科技有限公司价格查询</div>
    </div>
    </div>
    <div style="clear:both"></div>
<div id="pbsearch">
	<form action="insert1.php" method="post" name="salesinput">
		选择套料：<select name="sales" id="cmbProvince"></select>
		电池容量：<select name="client" id="cmbCity"></select>
		电池数量：<select name="country" id="cmbArea"></select>
        选择线材：<select name="cable"><option value="单线">单线</option>
									 <option value="一拖三">一拖三</option>
									 <option value="一拖五">一拖五</option>
									 <option value="三合一">三合一</option>
									 <option value="四合一">四合一</option></select>
		选择包装：<select name="packet"><option value="小包装">小包装（单节）</option>
        							 <option value="大包装">大包装</option>
									 <option value="自定义包装">自定义包装</option></select>
		丝印镭雕：<select name="syld"><option value="无丝印镭雕">无</option>
        							 <option value="丝印样品">丝印样品</option>
									 <option value="镭雕样品">镭雕样品</option>
                                     <option value="镭雕">镭雕（数量>170）</option>
									 <option value="单色（数量>200）">丝印单色（数量>200）</option>
									 <option value="2色（数量>100）">丝印2色（数量>100）</option>
									 <option value="3色（数量>70）">丝印3色（数量>70）</option>
                                     <option value="4色（数量>50）">丝印4色（数量>50）</option>
                                     <option value="5色（数量>40）">丝印5色（数量>40）</option></select>
	<script type="text/javascript">
	addressInit('cmbProvince', 'cmbCity', 'cmbArea', '罗马仕', '1800', '2');
	addressInit('Select1', 'Select2', 'Select3');
	</script>
 	<input name="Submit" type="submit" class="button" onClick="return check()" value="查询">
	</form>
</div>
<div style="text-align:center; margin-top:70px; color:#F00">镭雕0.3元/Pcs,丝印0.4元/颜色，不足最低消丝印收取150，镭雕收取50RMB</div>
<div style="text-align:center">三合一:V8/I4/I5;四合一:V8/I4/Mini/Nokia;一拖三:V8/I4/I5;一拖五:V8/I4/PSP/Mini/Nokia</div>
<div style="text-align:center;color:#F00">单节电池为小包装，其他均为大包装，自定义包装数量需3000Pcs以上</div>
<div id="pbsearchfoot">Copyright 2014 V-PHOTRON Technology(Shenzhen) CO.,LTD. All Reserved.</div>
</body>
</html>
