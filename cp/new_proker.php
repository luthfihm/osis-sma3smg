<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	
?>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Pilih Kasie</div><br />
<form action="main_menu.php?view=n_proker" method="post">
<table valign="center" cellpadding="1" cellspacing="1" border="0">
	<tr><td width="100px">Subsie</td><td>:</td><td>
    <select name="kasie" id="kasie">
	<option value='null'>--Pilih Kasie--</option>
		<option value='OSIS'>OSIS</option>
			<option value='I'>Kasie I</option>
            <option value='II'>Kasie II</option>
		<option value='III'>Kasie III</option>
            <option value='IV'>Kasie IV</option>
            <option value='V'>Kasie V</option>
            <option value='VI'>Kasie VI</option>
            <option value='VII'>Kasie VII</option>
            <option value='VIII'>Kasie VIII</option>
            <option value='IX'>Kasie IX</option>
            <option value='X'>Kasie X</option>
    </select>
    <input type="submit" name="go" id="go" value="GO"/>
	</td></tr>
</table>