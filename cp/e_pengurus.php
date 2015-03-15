<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	//$cnfg=new q_tools();
	$tbl=new q_grid();
	$id_masa=$_REQUEST['id'];
	$mn=(int)substr($id_masa,2,2);
	if ($mn >= 10){
	$a=substr($id_masa,0,2);
	$b=substr($id_masa,2,2);
	if(isset($_POST['edit'])){
		$class=$_POST['kelas']." ".$_POST['jurusan']." ".$_POST['no'];
		$q=$op->cs_query("UPDATE tb_pengurus SET nama='$_POST[nama]',jabatan='$_POST[jabatan]',kelas='$class',tugas='$_POST[tugas]' WHERE id='$_POST[id1]'");
		if($q){
     	//echo"<meta http-equiv='refresh' content='1' />";
		}
	}
	if(isset($_POST['hapus'])){
		$q=$op->delete("tb_pengurus","id='$_POST[id2]'");
		if($q){
     	//echo"<meta http-equiv='refresh' content='1' />";
		}
	}
	if(isset($_POST['upload'])){
		if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&&(($_FILES["file"]["size"]/(1024*1024)) < 20)){
			if ($_FILES["file"]["type"] == "image/gif"){
				$ext=".gif";
			}else if ($_FILES["file"]["type"] == "image/jpeg"){
				$ext=".jpg";
			}else if ($_FILES["file"]["type"] == "image/png"){
				$ext=".png";
			}
			$dir="images/pengurus/".$_POST['masa']."_".$_POST['no'].$ext;
			move_uploaded_file($_FILES["file"]["tmp_name"],"../".$dir);
			$q=$op->cs_query("UPDATE tb_pengurus SET img='$dir' WHERE id='$_POST[id3]'");
			//if($q){
     			//echo"<meta http-equiv='refresh' content='1' />";
			//}
		}
		else{
		}
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
.popup {
	position:absolute;
	background-color:#FFFFFF;
	width:600px;
	z-index: 9002;
}
</style>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Pengurus OSIS 20<? echo $a."/20".$b; ?></div>
<div style="height:600px; overflow:auto;">
<table cellpadding="10px" cellspacing="1" width="600px" border="0" align="center">
<?
	$view=$op->cs_query("SELECT * FROM tb_pengurus WHERE id_masa=$id_masa ORDER BY id_jabatan ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	if($i % 2){
		$bg="#EAEAEA";
	}else{
		$bg="#FFFFFF";
	}
	$id=$dt['id'];
?>
	<tr bgcolor="<? echo $bg; ?>" class="cursor_move">
		<td width="150px" align="center" valign="top" style="padding-top:20px;"><a href="#" onclick="javascript:popup('foto<? echo $id ?>')"><img src="../<? echo $dt['img']; ?>" alt="" width="110" height="120" /></a><h2><? echo $dt['jabatan'] ?></h2></td>
		<td valign="top" align="right" style="padding-left:10px; padding-top:20px;">
			<div>	
				<a href="#" onclick="javascript:popup('edit<? echo $id ?>')">Edit</a>&nbsp&nbsp<a href="#" onclick="javascript:popup('hapus<? echo $id ?>')">Hapus</a>&nbsp&nbsp
				<table width="99%">
					<tr style="font-size:14px;">
						<td width="60px">Nama</td><td>:&nbsp<? echo $dt['nama'] ?></td>
					</tr>		
					<tr style="font-size:14px;">
						<td width="60px">Kelas</td><td>:&nbsp<? echo $dt['kelas'] ?></td>
					</tr>
					<tr style="font-size:14px;">
						<td colspan="2">
						<h4>Tugas <? echo $dt['jabatan'] ?> :</h4>
						<p ><? echo $dt['tugas'] ?></p>
						</td>
					</tr>		
				</table>	
			</div>
		</td>
	</tr>
<? $i++; } ?>
</table>
</div>

<!-- TinyMCE -->
<script type="text/javascript" src="../plugin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
		
	});
</script>
<!-- /TinyMCE -->
<div id="blanket" style="display:none;"><div>
<?
	$view=$op->cs_query("SELECT * FROM tb_pengurus WHERE id_masa=$id_masa ORDER BY id_jabatan ASC");
	while($dt=mysql_fetch_array($view)){
	$id=$dt['id'];
	$v=$op->cs_query("SELECT * FROM tb_pengurus WHERE id=$id");
	$d=mysql_fetch_array($v);
?>
<div id="edit<? echo $id ?>" style="display:none;" class="popup">
	<h2 align="center">Edit Profil <? echo $d['jabatan']; ?></h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>">
		<input type="hidden" name="id1" id="id1" value="<? echo $id; ?>">
		<center>
		<table cellpadding="5" style="font-size:16px;">
			<tr>
				<td width="70px">Jabatan</td>
				<td>:&nbsp</td>
				<td><input type="text" name="jabatan" id="jabatan" value="<? echo $d['jabatan']; ?>" style="width:150px;" ></td>
			</tr>
			<tr>
				<td width="70px">Nama</td>
				<td>:&nbsp</td>
				<td><input type="text" name="nama" id="nama" value="<? echo $d['nama']; ?>" style="width:250px;" ></td>
			</tr>
			<tr>
				<td width="70px">Kelas</td>
				<td>:&nbsp</td>
				<td>
					<select name="kelas" id="kelas">
						<option value='XI' <? if(substr($d['kelas'],0,3)=="XI "){echo "selected";} ?> >XI</option>
						<option value='XII' <? if(substr($d['kelas'],0,4)=="XII "){echo "selected";} ?> >XII</option>
					</select>&nbsp-&nbsp
					<select name="jurusan" id="jurusan">
					<?
							$pos=1;
							while(($pos<=strlen($d['kelas']))&&(substr($d['kelas'],$pos,1)!=" ")){ $pos++ ;}
					?>
						<option value='IPA' <? if(substr($d['kelas'],$pos+1,3)=="IPA"){echo "selected"; $pos=$pos+5;} ?> >IPA</option>
						<option value='IPS' <? if(substr($d['kelas'],$pos+1,3)=="IPS"){echo "selected"; $pos=$pos+5;} ?> >IPS</option>
						<option value='Olimpiade' <? if(substr($d['kelas'],$pos+1,9)=="Olimpiade"){echo "selected"; $pos=$pos+13;} ?> >Olimpiade</option>
					</select>&nbsp-&nbsp
					<input type="text" name="no" id="no" size="2px" value="<? echo substr($d['kelas'],$pos,2); ?>" maxlength="2">
				</td>
			</tr>	
			<tr>
				<td width="70px" valign="top">Tugas</td>
				<td valign="top">:&nbsp</td>
				<td>
					<textarea name="tugas" cols="15" rows="10" style="width:400px; height:200px; resize:none;"><? echo $d['tugas']; ?></textarea>
				</td>
			</tr>		
			<tr>
				<td colspan="2">&nbsp</td>
				<td>&nbsp&nbsp <input type="submit" name="edit" value="Edit Profil" id="tambah" class="button">&nbsp&nbsp <input type="reset" name="cancel" value="Cancel" onclick="popup('edit<? echo $id ?>')" class="button"> </td>			
			</tr>
			<tr><td colspan="2">&nbsp</td></tr>		
		</table>
		</center>
	</form>
</div>
<div id="hapus<? echo $id ?>" style="display:none;" class="popup">
	<br>
	<h2 align="center">Yakin Hapus Profil <? echo $d['jabatan']; ?>?</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>">
	<input type="hidden" name="id2" id="id2" value="<? echo $id; ?>">
		<center>
			<input type="submit" name="hapus" value="         Ya         " id="hapus" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="reset" name="cancel" value="      Tidak      " onclick="popup('hapus<? echo $id ?>')" class="button">	
		</center>
		<br><br>
	</form>
</div>
<div id="foto<? echo $id ?>" style="display:none;" class="popup" align="center">
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
	<input type="hidden" name="id3" id="id3" value="<? echo $id; ?>">
	<input type="hidden" name="masa" id="masa" value="<? echo $d['id_masa']; ?>">
	<input type="hidden" name="no" id="no" value="<? echo $d['id_jabatan']; ?>">
	<table cellpadding="5" style="font-size:16px;">
		<tr>
			<td rowspan="2" width="150px" align="center" valign="top" style="padding-top:20px;"><img src="../<? echo $dt['img']; ?>" alt="" width="110" height="120" /></td>	
			<td width="320px" valign="top">
				<h4>Ganti Foto Profil <? echo $d['jabatan']; ?></h4>
				<input type="file" size="35" name="file" id="file" />			
			</td>	
		</tr>
		<tr>
			<td valign="top">
					<input type="submit" name="upload" value="Upload Foto" id="upload"  class="button">&nbsp&nbsp <input type="reset" name="cancel" value="Cancel" onclick="popup('foto<? echo $id ?>')" class="button">		
			</td>	
		</tr>
	</table>
	<br>
	</form>
</div>
<? } }else{ ?>
<table width="500px" align="center">
	<tr><td><? include("../staff/include/".$id_masa.".php"); ?></td></tr>
</table>
<?
 }
?>