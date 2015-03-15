<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='$_GET[kasie]' ORDER BY id ASC");
 ?>
 <form action="main_menu.php?view=edit_sub" method="post">
<table valign="center" cellpadding="1" cellspacing="1" border="0">
	<tr><td width="100px">Subsie</td><td>:</td><td>
    <select name="subsie" id="subsie">
	<option value='null'>-Pilih Subsie-</option>
    <?  
		$i=1;
		while($dt=mysql_fetch_array($view)){
			echo "<option value=".$dt['id'].">".$dt['nama_subsie']."</option>";
		    $i++;
		}
	?>
    </select>
    <input type="submit" name="go" id="go" value="GO"/>
	</td></tr>
</table>
</form>
    

 