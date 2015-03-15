<div style="height:180px;">
<h2>Lounge Comments</h2>
<form method="POST" style="margin=0" action="<? $_SERVER['PHP_SELF'];?>">
	<table width="100%">
		<tr>
			<td>
				<input type="hidden" name="name" value="Admin OSIS"  style="width:475px">
				<textarea name="message" rows="4" style="width:100%" style="resize:none;"></textarea>
			</td>
		</tr>
		<tr>
			<td align="center">
				<input type='submit' name='submit' value='Leave comment' class="button">  &nbsp;&nbsp; 
				<input type='reset' value='Reset Form' class="button">
			</td>
		</tr>
		<tr>
			<td>
				Komentar-komentar terakhir Lounge :
			</td>
		</tr>
	</table>
</form>
</div>
<div style="overflow:auto; height:400px;">
<table cellpadding="10" width="100%">
<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_komen ORDER BY id DESC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
		if($i % 2){
			$bg="#EAEAEA";
		}else{
			$bg="#FFFFFF";
		}
?>
<tr bgcolor="<? echo $bg; ?>" class="cursor_move">
<td>
<font face='arial' size='2'><i style='color:red'><? echo $dt['user']; ?> :</i></font><br>
<div style="margin-top:5px;">
<font face='arial' size='3'><span style='color:black'><? echo $dt['coment']; ?></span></font><br>
<font face='arial' size='1'><span style='color:green'><? echo $dt['date']; ?>&nbsp<a href="hapus_comment.php?id=<? echo $dt['id']; ?>"  onclick="javascript:if(confirm('Menghapus secara permanen komentar ini ???')){ return true; } else{ return false;}">Hapus</a></span></font>
</div>
</td></tr><? $i++; } ?></table>
</div>
<?
if(isset($_POST['submit'])){
	$name=$_POST['name'];
	$message=$_POST['message'];
	$msg="";
	$i=0;
	while ( $i < strlen($message) ){
		$msg=$msg.substr($message,$i,1);
		if (substr($message,$i,1)=="'"){
			$msg=$msg."'";
		}
	$i++;
	}
	$timezone = "Asia/Bangkok";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$date = date('F j, Y, H:i')." WIB";
	$q=$op->save("tb_komen","user,coment,date","'$name','$msg','$date'");
	if($q){
		echo "<meta http-equiv='refresh' content='1' />";
	}else{
		echo "<script>alert('Komentar gagal dilakukan !!!');</script>".mysql_error();
	}
}
?>