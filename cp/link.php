<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	if(isset($_POST['editLink'])){
		$link=$_POST['link'];
	$q=$op->cs_query("UPDATE tb_link SET title='$_POST[title]', link='$link' WHERE id ='$_POST[id]'");
	if($q){
	?>
<script language="JavaScript" type="text/javascript">alert("Link <? echo $_POST['title']; ?> Berhasil di-update")</script>
<? }else{ ?>
<script language="JavaScript" type="text/javascript">
if(confirm('Gagal Meng-update link. Ulangi??')){ history.back(1); }
</script>
<? } } ?>
<style type="text/css">
	#anim:hover {background:#FFFFCC}
</style>

<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Tambah Link</div><br />
<form name="tambahLink" action="<? $_SERVER['PHP_SELF'];?>" method="post">
<table style="font-size:13px; font-family:Tahoma" border="0" cellpadding="1" cellspacing="1">
	<tr>
		<td width="200px">Title</td>
		<td>:</td>
		<td><input type="text" name="title" size="50" id="title" class="input" title="Inputkan Username"/></td>
	</tr> 
	<tr>
		<td>URL</td>
		<td>:</td>
		<td><input type="text" name="link" size="75" id="link" class="input" value="http://" /></td>
	</tr>
	<tr><td colspan="3">&nbsp;</td></tr>
	<tr>
		<td colspan="2">&nbsp;</td>
		<td><input type="submit" name="tambahLink" onClick="validLogin()" value="Tambah Link" class="button"> </td>
	</tr>
	<tr>
		<td colspan="3"><div id="respon"></div></td>
	</tr>
</table><br />
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Data Links</div><br />
<table align="center" cellpadding="1" cellspacing="1" border="0" width="50%" bgcolor="#CCCCCC" style="font-size:12px">
<? $tbl->headtb("Title,URL,Edit,Hapus"); 

	$view=$op->cs_query("SELECT * FROM tb_link");
	$i=1;
	while($res=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
	
?>
<tr bgcolor="<? echo $bg; ?>" id="anim">
	<td align="left" style="padding-left:15px; padding-right:15px;"><? echo $res['title'];?></td>
	<td align="left" style="padding-left:15px; padding-right:15px;"><a href="<? echo $res['link'];?>" target="_blank"><? echo $res['link'];?></a></td> 	
	<td align="center"><a href="main_menu.php?view=edit_link&&id=<? echo $res['id'];?>">edit</a></td>
    <td align="center"><form name="frm2" action="<? $_SERVER['PHP_SELF'];?>" method="post"><input type="checkbox" name="cek[]" id="cek[]" value="<? echo $res['id'];?>" /></td>
    </tr>
<?
$i++;
}
?>
<tr bgcolor="#FFFFFF">
	<td align="right" colspan="3">Jumlah Link: <? echo mysql_num_rows($view);?>&nbsp;</td>
	<td align="center"><input type="submit" name="hapus" value=" " style="background:url(../image/trash.png) no-repeat center; border:none; cursor:pointer" onclick="javascript:if(confirm('Menghapus secara permanen link ini ???')){ return true; } else{ return false;}" /></td> 
</tr>
</table>  
</form>
<?
if(isset($_POST['hapus'])){
	$id=$_POST['cek'];
	$jum=count($id);
	for ($i=0; $i<$jum; $i++){
		$q=$op->delete("tb_link","id='$id[$i]'");
	}
	if($q){
		echo"<div id='ok'>User admin berhasil dihapus</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Proses hapus Admin gagal dilakukan !!!</div>".mysql_error();
	}
	
}else if(isset($_POST['tambahLink'])){
	$title=$_POST['title'];
	$link=$_POST['link'];
	$q=$op->save("tb_link","title,link","'$title','$link'");
	if($q){
		echo"<div id='ok'>Link baru berhasil ditambahkan</div><meta http-equiv='refresh' content='1' />";
	}else{
		echo"<div id='err'>Gagal menambahkan link baru</div>";
	}
}
?>

