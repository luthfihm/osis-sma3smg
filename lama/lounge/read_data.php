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
<table>
<tr>
<td>
<?php
$dataf = $logFileLoc;
$comfile = file($dataf);
for ($i = 0; $i < count($comfile); $i++) {
	echo $comfile[$i]."<br>\n";
}
?>
</td></tr></table>
</body></html>
