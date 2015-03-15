<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	if(isset($_POST['tambah'])){
		$masa=$_POST['th1']."/".$_POST['th2'];
		$id=substr($_POST['th1'],2,2).substr($_POST['th2'],2,2);
		$jabatan=array("MITRATAMA","MITRAMUDA I","MITRAMUDA II","SEKRETARIS UMUM","SEKRETARIS I","SEKRETARIS II","BENDAHARA","WAKIL BENDAHARA","KASI I","KASI II","KASI III","KASI IV","KASI V","KASI VI","KASI VII","KASI VIII","KASI IX","KASI X");
		for($i=0; $i <= 17; $i++){
			$j=$i+1;
			$q=$op->save("tb_pengurus","id_masa,masa,jabatan,id_jabatan,img","'$id','$masa','$jabatan[$i]','$j','image/user.png'");
		}
		echo "<meta http-equiv='refresh' content='1' />";
	}
?>
<script src="../csspopup.js" type="text/javascript"></script>
<style type="text/css">
	a{text-decoration:none;
	color:#006699;}
	a:hover{text-decoration:underline; }
#blanket {
  	background-color:#111;
   opacity: 0.95;
   position:absolute;
   z-index: 9001; /*ooveeerrrr nine thoussaaaannnd*/
   top:0px;
   left:0px;
   width:100%;
}
#add {
	position:absolute;
	background-color:#FFFFFF;
	width:400px;
	z-index: 9002;
}
</style>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Edit Profil Pengurus OSIS</div>
<div style="padding-left:20px; padding-top:5px;">
<table cellpadding="5" cellspacing="1" width="400px" border="0" bgcolor="#CCCCCC" style="font-size:14px;">
<? $tbl->headtb("Masa Jabatan");
$view=$op->cs_query("SELECT id_masa FROM tb_pengurus ORDER by id_masa DESC");
	$dt=mysql_fetch_array($view);
	$l=substr($dt['id_masa'],2,2);
	for($i=1; $i <= $l; $i++){
		$j=$i-1;
	if($j < 10){
		$a="0".$j;
	}else{
		$a=$j;
	}
	if($i < 10){
		$b="0".$i;
	}else{
		$b=$i;
	}
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
?>
	<tr bgcolor="<? echo $bg; ?>">
		<td align="center">
				<a href="main_menu.php?view=e_pengurus&&id=<? echo $a.$b; ?>"><b>Masa Jabatan 20<? echo $a."/20".$b; ?><b></a>		
		</td>
	</tr>
<? } ?>
</table>
<form><input type="button" name="tambah" value="Tambah Pengurus" onclick="javascript:popup('add')" /></form>
</div>
<div id="blanket" style="display:none;"><div>
<div id="add" style="display:none; padding-left:10px; padding-top:10px;">
	<h2 align="center">Tambah Pengurus OSIS</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>">
		<center>
		<table cellpadding="5">
			<tr>
				<td><b>Masa Jabatan&nbsp&nbsp&nbsp&nbsp:<b></td>
				<td>
					<input type="text" name="th1" id="th1" size="4" maxlength="4">&nbsp/&nbsp<input type="text" name="th2" id="th2" size="4" maxlength="4">
				</td>
			</tr>
			<tr>
				<td>&nbsp</td>
				<td><input type="submit" name="tambah" value="Tambah" id="tambah">&nbsp&nbsp<input type="reset" name="cancel" value="Cancel" onclick="popup('add')"> </td>			
			</tr>
			<tr><td colspan="2">&nbsp</td></tr>		
		</table>
		</center>
	</form>
</div>