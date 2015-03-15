<?php
	session_start();
	require_once("../plugin/qFrame/qFrame.php");
	header("Cache-Control:no-cache, must-revalidate");
	if((isset($_SESSION['userAdmin']))&&(isset($_SESSION['passAdmin']))){
	$uname=$_SESSION['userAdmin'];
	$pass=$_SESSION['passAdmin'];	
	$cek = new q_sql();
	
	$r=$cek->validUser("tb_admin","user","pass",$uname,$pass);
	$c=mysql_num_rows($r);
	if($c > 0){
		header("location:main_menu.php?view=_main");
	}
	}else{
		session_destroy();
?>
<!-- 

Author  : Luthfi Hamid Masykuri
Email   : metalic_devil_racer@yahoo.co.id
Year    : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="content-type" content="text/html; charset=ISO-8859-1" />
<link rel="stylesheet" type="text/css" href="tema.css" />
<link rel="shortcut icon" href="../images/badgeganeshaicon.png" >
<title>OSIS SMAGA - cPanel</title>
<script type="text/javascript">
	function loading() {
    	document.getElementById("respon").style.visibility = "visible";
		document.getElementById("space").style.display = "none";
    	setTimeout("load.src = load.src",100);
    return true;
    }
	function hide() {
	    document.getElementById("warning").style.display = "none";
    return true;
    } 
</script>
</head>
<style type="text/css">
	a {text-decoration:none;
		color:#006699;
	}
</style>
<body style="margin-top:130px; background:url(../images/all_bg.gif);" onLoad="document.forms.loginAdmin.user.focus()">
<form method="post" action="p_login_admin.php" name="loginAdmin" onsubmit="<? if (isset($_REQUEST['gagal'])){ echo "hide();"; }?> loading();">
<table style="border-radius: 10px; font-size:14px; background:#FFF; font-family:Arial; color:#333333;" border="0" align="center" width="450px" cellpadding="1" cellspacing="1">
	<tr>
		<td colspan=3 align="center">&nbsp;</td>
	</tr>
	<tr>
		<td colspan=3 align="center"><img src="../image/osis.png" border="0" align="center" /></td>
	</tr>
	<tr>
		<td colspan=3 align="center">&nbsp;</td>
	</tr>
	<tr>
		<td align="right" width="30%"><b>Username</b></td>
		<td>:</td>
		<td> <input type="text" name="user" style="width:220px;" id="user" class="input" title="Inputkan Username"/> </td>
	</tr> 
	<tr>
		<td align="right"><b>Password</b></td>
		<td>:</td>
		<td><input type="password" name="pass" style="width:220px;" id="pass" class="input" onkeypress=""/></td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="login" value="Login Admin" id="button" class="button"> &nbsp <input type="button" class="button" value="Kembali" onclick="javascript:window.location='../'" /></td>
	</tr>
	<tr>
		<td colspan="3" align="center" valign="absmidle">
        <? if (isset($_REQUEST['gagal'])){ ?>
        <div style="display:yes;" id="warning">
        <table>
        	<tr>
            	<td><img src="../image/sign_warning.png" border=0></td><td>Proses Login gagal !!! Anda bukan user yang terdaftar.</td>
            </tr>
        </table>
        </div>
        <? } ?>
        <div style="visibility:collapse;" id="respon">
        <table>
        	<tr>
            	<td><img id="load" src="../image/loading2.gif"></td><td>&nbsp&nbsp&nbsp Logging in ...</td>
            </tr>
        </table>
        </div>
        <? if (!isset($_REQUEST['gagal'])){ ?><div id="space" style="display:yes;"><br /></div><? } ?>
        </td>
	</tr>
</table>
</form>
<div style="text-align:center; color:#FFF; font-size:12px; padding:10px 0px 0px 0px; font-family:Tahoma">&copy; <? echo date('Y') ?> - <a href="mailto:metalic_devil_racer@yahoo.co.id">Luthfi Hamid Masykuri</a> | ICT Team SMA NEGERI 3 SEMARANG</div>
</body>
</html>
<!-- 

Author  : Luthfi Hamid Masykuri
Email   : metalic_devil_racer@yahoo.co.id
Year    : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->
<?php } ?>