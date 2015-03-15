<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	$view=$op->cs_query("SELECT * FROM comesoon");
	$dt=mysql_fetch_array($view)
?>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Edit Coming Soon</div><br />
<form action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table align="center" cellpadding="1" cellspacing="1" border="0">
		<tr><td valign="top">Content</td><td valign="top">:</td><td><textarea name="content" cols="70" rows="5" ><? echo $dt['text']; ?> </textarea><br>
	<font color="#666666">*)anda bisa menggunakan tag HTML seperti : &lt;br&gt; untuk berpindah kebaris baru,dan tag HTML lainnya.</font>
	</td></tr>
	<tr><Td colspan="2">&nbsp;</Td><td><input type="submit" name="simpan" value="Publish Content" class="button"/></td></tr>
</table>
</form><br>
<?
if(isset($_POST['simpan'])){
	$q=$op->cs_query("UPDATE comesoon SET text = '$_POST[content]' WHERE id =1 ");
	if($q){
		echo"<div id='ok'>Info Baru Berhasil Ditambahkan</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses tambah info gagal dilakukan !!</div>";
	}
}
?>