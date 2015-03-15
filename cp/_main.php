<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>_menu</title>
<style type="text/css">
	a{text-decoration:none;
	color:#006699;}
	a:hover{text-decoration:underline; }
</style>
    <script type="text/javascript" src="../plugin/jq/jquery-1.3.2.js"></script>
    <script type="text/javascript" src="../plugin/jq/ui/effects.core.js"></script>
    <script type="text/javascript" src="../plugin/jq/ui/effects.bounce.js"></script>
    <script type="text/javascript">
		function runEffect(){
			$("#animasi").effect("bounce", { distance: 20});
		};
		function runEffect1(){
			$("#animasi1").effect("bounce", { distance: 20});
		};
		function runEffect2(){
			$("#animasi2").effect("bounce", { distance: 20});
		};
		function runEffect3(){
			$("#animasi3").effect("bounce", { distance: 20});
		};
    </script>
</head>
<body>
<h3> &nbsp;Selamat datang di halaman administrator. Ini adalah sistem untuk mengelola web Anda.</h3>
<table width="100%" cellpadding="5">
	<tr>
		<td width="*"><?php include('comment.php'); ?><td>
		<td width="350px" valign="top"><?php include('side.php'); ?><td>
	</tr>
</table>
</body>
</html>
