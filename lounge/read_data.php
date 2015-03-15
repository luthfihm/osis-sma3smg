<?php 
//##############################################################
//
//   Published at: scripts.tropicalpcsolutions.com
//
//##############################################################

include("config.php");
 ?>
<html>
<head>
<style>
a {color:<?php echo $linkColor ?> };
</style>
<?php if ($nr_mouse=="1"){echo "<script src='jscript/nrc.js'></script>";} ?>
</head>
<body background="images/bg<?php echo $mesBackGround ?>.gif">
<table cellpadding="10">
<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_komen ORDER BY id DESC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
?>
<tr>
<td>
<font face='arial' size='2'><i style='color:red'><? echo $dt['user']; ?> :</i></font><br>
<div style="margin-top:5px;">
<font face='arial' size='3'><span style='color:black'><? echo $dt['coment']; ?></span></font><br>
<font face='arial' size='1'><span style='color:green'><? echo $dt['date']; ?></span></font>
</div>
</td></tr><? } ?></table>
</body></html>
