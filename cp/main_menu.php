<? 
	session_start();
	if(!isset($_SESSION['userAdmin']) and !isset($_SESSION['passAdmin'])){
		header("location:index.php");
	}else{
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
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>OSIS SMAGA - Administrator</title>
<link rel="shortcut icon" href="../images/badgeganeshaicon.png" >
<link rel="stylesheet" type="text/css" href="tema.css" />
<link rel="stylesheet" type="text/css" href="../plugin/qFrame/style/style.css" />
<script type="text/javascript" src="../plugin/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="../plugin/jquery.validate.pack.js"></script>


<style type="text/css">
	a {text-decoration:none;
		color:#006699;
	}
</style>
</head>
<body style="margin-top:20px;">
<div style="font-size:16px; font-family:Arial; font-weight:bold; color:#666666/;margin-left:70px"><img src="../image/osis.png" height="45px"  border="0" align="left" style="margin:5px; margin-top:0px;" /> <a href="../" target="_blank">OSIS SMA Negeri 3 Semarang</a> - Administrator<br /> <a href="logout.php">[keluar]</a></div>
<table align="center" cellpadding="1" cellspacing="1" border="0" width="90%" style="border:1px solid #CCCCCC; border-radius: 5px; background:#FFFFFF; font-size:13px; font-family:Tahoma; color:#666666">
		<tr>
			<td width="180px" valign="top" style="border-right:3px solid #CCCCCC; padding:0px 3px 0 3px" bgcolor="#EAEAEA">
			<div id="box">
				<div id="box_title">main<font color="#CCCCCC">menu</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=_main">Home</a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=gallery">Gallery </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=pengurus">Profil Pengurus </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=file">File Manager (Images) </a></div>
           <div id="box">
				<div id="box_title">Edit <font color="#CCCCCC">Data</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=comesoon">Coming Soon </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=subsie">Profil Subsie </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=proker">Proker </a></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=link">Links </a></div>
			</div>
            
            <div id="box">
				<div id="box_title">Input <font color="#CCCCCC">Data</font></div>
                <div id="box_child" align="right"><a href="main_menu.php?view=new_subsie">Input Subsie </a></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=new_proker">Proker Baru </a></div>
                
			</div>
            
            
			
			<div id="box">
				<div id="box_title">too<font color="#CCCCCC">ls</font></div>
				<div id="box_child" align="right"><a href="main_menu.php?view=admin">Input Admin</a></div>
			</div>
			</td>
			<td valign="top" height="400px">
			<?
				if(isset($_REQUEST['view'])){
					$main=$_REQUEST['view'];
					if($main=='admin'){
						include("t_admin.php");
					}else if($main=='set_formulir'){
						include("set_formulir.php");
					}else if($main=='edit_sub'){
						include("getSub.php");
					}else if($main=='ok'){
						include("ok.php");
					}else if($main=='comesoon'){
						include("comesoon.php");
					}else if($main=='subsie'){
						include("subsie.php");
					}else if($main=='new_subsie'){
						include("new_subsie.php");
					}else if($main=='new_proker'){
						include("new_proker.php");
					}else if($main=='p_subsie'){
						include("p_subsie.php");
					}else if($main=='p_proker'){
						include("p_proker.php");
					}else if($main=='n_proker'){
						include("n_proker.php");
					}else if($main=='e_subsie'){
						include("e_subsie.php");
					}else if($main=='proker'){
						include("proker.php");
					}else if($main=='edit_proker'){
						include("getProk.php");
					}else if($main=='e_proker'){
						include("e_proker.php");
					}else if($main=='link'){
						include("link.php");
					}else if($main=='edit_link'){
						include("edit_link.php");
					}else if($main=='pengurus'){
						include("pengurus.php");
					}else if($main=='e_pengurus'){
						include("e_pengurus.php");
					}else if($main=='gallery'){
						include("gallery.php");
					}else if($main=='file'){
						include("file.php");
					}else{
						include("_main.php");
					}
				}
			?>	
			</td>
		</tr>
</table>
<div style="text-align:center; bottom:; color:#666666; font-size:12px; padding:10px 0px 0px 0px; font-family:Tahoma">&copy; <? echo date('Y'); ?> - <a href="mailto:metalic_devil_racer@yahoo.co.id">Luthfi Hamid Masykuri</a> | ICT Team SMA NEGERI 3 SEMARANG</div>
</body>
</html>
<!-- 

Author  : Luthfi Hamid Masykuri
Email   : metalic_devil_racer@yahoo.co.id
Year    : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->
<?
}
?>