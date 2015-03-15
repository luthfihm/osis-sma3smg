<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
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
<body>
<h2 align="center" style="color:#006699;">Images list</h2>
<div style="height:400px; overflow:auto;">
<?
	require_once("../plugin/qFrame/qFrame.php");
			$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_upload ORDER BY id DESC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
?>
<table cellpadding="10px" cellspacing="3" width="500px" border="0" align="center" bgcolor="#EAEAEA">
	<tr>
		<td id="box_title"><? echo $dt['nama']; ?></td>
	</tr>
	<tr bgcolor="#FFFFFF" cellspacing="0">
		<td class="cursor_move">
			<div>
			<table width="100%">
				<tr>
					<td width="200px"><img src="../<? echo $dt['url'] ?>" alt="" width="200" /></td>	
					<td valign="top">
						<h2 align="center">Detail</h2>
						<div>
							<table width="90%" align="center">
								<tr>
									<td width="70px">Nama file</td>	
									<td>:</td>	
									<td><? echo $dt['nama'] ?></td>						
								</tr>	
								<tr>
									<td width="70px" valign="top">Lokasi</td>	
									<td valign="top">:</td>	
									<td valign="top"><? echo $dt['dir'] ?></td>						
								</tr>	
								<tr>
									<td width="70px" valign="top">URL</td>	
									<td valign="top">:</td>	
									<td valign="top"><a href="<? echo $dt['url'] ?>" target="image"><? echo $dt['url'] ?></a></td>						
								</tr>
								<tr>
									<td colspan="3" align="center" style="padding-top:20px; padding-bottom:20px;">								
									</td>								
								</tr>					
							</table>						
						</div>					
					</td>			
				</tr>			
			</table>			
			</div>
		</td>	
	</tr>
</table>
<? $i++; } ?>
</div>
</body>
</html>