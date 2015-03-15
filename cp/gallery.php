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
<?php
		require_once("../plugin/qFrame/qFrame.php");
			$op=new q_sql();
			if(isset($_POST['tambah'])){
		if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&&(($_FILES["file"]["size"]/(1024*1024)) < 20)){
			$dir="images/slide/";
			$name=$_FILES["file"]["name"];
			$url=$dir.$name;
			move_uploaded_file($_FILES["file"]["tmp_name"],"../".$url);
			$q=$op->save("tb_slide","nama,dir,url","'$name','$dir','$url'");
			//if($q){
     			//echo"<meta http-equiv='refresh' content='1' />";
			//}
		}
		else{
		}
	}
	if(isset($_POST['edit'])){
		if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&&(($_FILES["file"]["size"]/(1024*1024)) < 20)){
			$dir="images/slide/";
			$name=$_FILES["file"]["name"];
			$url=$dir.$name;
			$id=$_POST['id'];
			$del="../".$_POST['url'];
			$q=$op->cs_query("UPDATE tb_slide SET nama='$name',dir='$dir',url='$url' WHERE id='$id'");
			if($q){
				//chmod("$del", 0777);
				$fh = fopen($del, 'a');
				fclose($fh);
				unlink($del);
				move_uploaded_file($_FILES["file"]["tmp_name"],"../".$url);
     			//echo"<meta http-equiv='refresh' content='1' />";
			}
		}
		else{
		}
	}
	if(isset($_POST['hapus'])){
		$q=$op->delete("tb_slide","id='$_POST[id2]'");
		if($q){
			$url2="../".$_POST['url2'];
			$fh = fopen($url2, 'a');
			fclose($fh);
			unlink($url2);
     	//echo"<meta http-equiv='refresh' content='1' />";
		}
	}
?>
<div id="judul_page"> 
<table>
	<tr>
		<td>
			<img src="../image/point.png" border="0" align="absmiddle" /> Gallery Slideshow Foto OSIS
		</td>
		<td>
		<?php
			$data=$op->cs_query("SELECT * FROM tb_slide ORDER BY id DESC");
			$jml=mysql_num_rows($data);
			if ($jml<12){
		?>
			<form>
				&nbsp&nbsp <input type="button" value="Tambah Foto" onclick="javascript:popup('tambah')" class="button">
				<font size="1"><i>&nbsp&nbsp(Usahakan nama file yang akan diupload tidak sama dengan yang sudah ada!!)</i></font>
			</form>
			<?php }else{  ?>
					<font size="1"><i>&nbsp&nbsp(Jumlah foto mencapai jumlah maksimal. Hapus satu atau beberapa foto jika ingin foto lagi!)</i></font>
			<?php } ?>
		</td>
	</tr>
</table>
</div>
<?php
	//$cnfg=new q_tools();
	$tbl=new q_grid();
?>
<div style="height:600px; overflow:auto;">
<?
	$view=$op->cs_query("SELECT * FROM tb_slide ORDER BY id DESC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
?>
<table cellpadding="10px" cellspacing="3" width="600px" border="0" align="center" bgcolor="#EAEAEA">
	<tr>
		<td id="box_title">Photo Slideshow #<? echo $i; ?></td>
	</tr>
	<tr bgcolor="#FFFFFF" cellspacing="0">
		<td class="cursor_move">
			<div>
			<table width="100%">
				<tr>
					<td width="290px"><img src="../<? echo $dt['url'] ?>" alt="" width="285" height="247" /></td>	
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
									<td width="70px">Lokasi</td>	
									<td>:</td>	
									<td><? echo $dt['dir'] ?></td>						
								</tr>	
								<tr>
									<td width="70px">URL</td>	
									<td>:</td>	
									<td><? echo $dt['url'] ?></td>						
								</tr>
								<tr>
									<td colspan="3" align="center" style="padding-top:20px; padding-bottom:20px;">
										<form>
											<input type="button" value="Ganti" onclick="javascript:popup('edit<? echo $i; ?>')" class="button">&nbsp&nbsp
											<input type="button" value="Hapus" onclick="javascript:popup('hapus<? echo $i; ?>')" class="button">
										</form>									
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
<div id="blanket" style="display:none;"><div>
<div id="tambah" class="popup" style="display:none;">
	<center>
	<br>
	<h2>Tambah Foto Gallery</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
		<input type="file" size="35px" name="file" id="file" /><br><br>
		<input type="submit" name="tambah" value="Upload Foto" id="tambah" class="button">&nbsp&nbsp
		<input type="reset" name="cancel" value="Cancel" onclick="javascript:popup('tambah')" class="button"><br>&nbsp<br>&nbsp
	</form>
	</center>
</div>
<?
	$v=$op->cs_query("SELECT * FROM tb_slide ORDER BY id DESC");
	$i=1;
	while($d=mysql_fetch_array($v)){
	$id= $d['id'];
?>
<div id="edit<? echo $i; ?>" class="popup" style="display:none;">
	<center>
	<br>
	<h2>Ganti Foto Gallery #<? echo $i; ?></h2>
	<img src="../<? echo $d['url'] ?>" alt="" width="285" height="247" /><br><br>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
		<input type="hidden" name="id" value="<? echo $id; ?>">
		<input type="hidden" name="url" value="<? echo $d['url']; ?>">
		<input type="file" size="35px" name="file" id="file" /><br><br>
		<input type="submit" name="edit" value="Upload Foto" id="tambah" class="button">&nbsp&nbsp
		<input type="reset" name="cancel" value="Cancel" onclick="javascript:popup('edit<? echo $i; ?>')" class="button"><br>&nbsp<br>&nbsp
	</form>
	</center>
</div>
<div id="hapus<? echo $i; ?>" style="display:none;" class="popup">
	<br>
	<h2 align="center">Yakin Hapus Foto Gallery #<? echo $i ?>?</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>">
	<input type="hidden" name="id2" id="id2" value="<? echo $id; ?>">
	<input type="hidden" name="url2" value="<? echo $d['url']; ?>">
		<center>
		<img src="../<? echo $d['url'] ?>" alt="" width="285" height="247" /><br><br>
			<input type="submit" name="hapus" value="         Ya         " id="hapus" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="reset" name="cancel" value="      Tidak      " onclick="javascript:popup('hapus<? echo $i; ?>')" class="button">	
		</center>
		<br><br>
	</form>
</div>
<? $i++; } ?>