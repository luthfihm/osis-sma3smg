<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	$id=$_REQUEST['id'];
	$view=$op->cs_query("SELECT * FROM tb_link WHERE id=$id");
	$dt=mysql_fetch_array($view);
	?>

<style type="text/css">
	#anim:hover {background:#FFFFCC}
</style>

<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Edit Link</div><br />
<form name="editLink" action="main_menu.php?view=link" method="post">
<input type="hidden" name="id" value="<? echo $dt['id']; ?>" >
<table style="font-size:13px; font-family:Tahoma" border="0" cellpadding="1" cellspacing="1">
	<tr>
		<td width="200px">Title</td>
		<td>:</td>
		<td><input type="text" name="title" size="50" id="title" class="input" title="Edit Title" value="<? echo $dt['title']; ?>" /></td>
	</tr> 
	<tr>
		<td>URL</td>
		<td>:</td>
		<td><input type="text" name="link" size="75" id="link" class="input" value="<? echo $dt['link']; ?>" /></td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td><input type="submit" name="editLink" onClick="validLogin()" value="Edit Link" class="button"> </td>
	</tr>
	<tr>
		<td colspan="3"><div id="respon"></div></td>
	</tr>
</table>
</form>