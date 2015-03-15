<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='$_GET[kasie]' ORDER BY id ASC");
 ?>
 <form action="main_menu.php?view=edit_proker" method="post">
<table valign="center" cellpadding="1" cellspacing="1" border="0">
	<tr><td width="100px">Proker</td><td>:</td><td>
    <input type="hidden" name="kasie" value="<? echo $_GET['kasie']; ?>" />
    <select name="id" id="id">
	<option value='null'>-Pilih Proker-</option>
    <?  
		$i=1;
		while($dt=mysql_fetch_array($view)){
			echo "<option value=".$dt['id'].">".$dt['title']."</option>";
		    $i++;
		}
	?>
    </select>
    <input type="submit" name="go" id="go" value="GO"/>
	</td></tr>
</table>
</form>
    

 