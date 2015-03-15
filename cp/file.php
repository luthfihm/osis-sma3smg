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
<script type="text/javascript">
	function loading(id) {
    	document.getElementById(id).style.visibility = "visible";
    	setTimeout("load.src = load.src",100);
    return true;
    } 
</script>
<?php
		require_once("../plugin/qFrame/qFrame.php");
			$op=new q_sql();
		if(isset($_POST['tambah'])){
		if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&&(($_FILES["file"]["size"]/(1024*1024)) < 20)){
			$dir="images/upload/".date('Y');
			$name=$_FILES["file"]["name"];
			if(mysql_num_rows($view=$op->cs_query("SELECT * FROM tb_upload WHERE nama='$name'"))>=1){
			?>
            <script type="text/javascript">
				alert("Nama file sama dengan nama file yang sudah terupload!");
			</script>
            <?
			}else{
			$cek=scandir("../images/upload");
			$i=0;
			$scan="";
			while($i < count($cek)){
				if ($cek[$i]==date('Y')){ $scan="true"; }
				$i++;
			}
			if ($scan!="true"){
				mkdir("../".$dir,0775);
				$cek=scandir("../images/upload/".date('Y'));
				$i=0;
				$scan="";
				while($i < count($cek)){
				if ($cek[$i]==date('m')){ $scan="true"; }
					$i++;
				}
				if ($scan!="true"){
					mkdir("../images/upload/".date('Y')."/".date('m'),0775);
				}
			}
			$dir="images/upload/".date('Y')."/".date('m');
			$url=$dir."/".$name;
			$move=move_uploaded_file($_FILES["file"]["tmp_name"],"../".$dir."/".$name);
			if ($move){
			$q=$op->save("tb_upload","nama,dir,url","'$name','$dir','$url'");
			if($q){
			}
		}
		}}
		else{ 
		}
	}
	if(isset($_POST['hapus'])){
		$q=$op->delete("tb_upload","id='$_POST[id2]'");
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
			<img src="../image/point.png" border="0" align="absmiddle" /> File Manager
		</td>
		<td>
			<form>
				&nbsp&nbsp <input type="button" value="Tambah File" onclick="javascript:popup('tambah')" class="button">
				<font size="1"><i>&nbsp&nbsp(Usahakan nama file yang akan diupload tidak sama dengan yang sudah ada!!)</i></font>
			</form>
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
	$view=$op->cs_query("SELECT * FROM tb_upload ORDER BY id DESC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
?>
<table cellpadding="10px" cellspacing="3" width="600px" border="0" align="center" bgcolor="#EAEAEA">
	<tr>
		<td id="box_title"><? echo $dt['nama']; ?></td>
	</tr>
	<tr bgcolor="#FFFFFF" cellspacing="0">
		<td class="cursor_move">
			<div>
			<table width="100%">
				<tr>
					<td width="290px"><img src="../<? echo $dt['url'] ?>" alt="" width="285" /></td>	
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
									<td width="70px" valign="top">URL</td>	
									<td valign="top">:</td>	
									<td valign="top"><a href="<? echo $dt['url'] ?>" target="_blank"><? echo $dt['url'] ?></a></td>						
								</tr>
								<tr>
									<td colspan="3" align="center" style="padding-top:20px; padding-bottom:20px;">
										<form>
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
	<h2>Tambah File</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
		<input type="file" size="35px" name="file" id="file" /><br><br>
		<input type="submit" name="tambah" value="Upload Foto" id="tambah" class="button">&nbsp&nbsp
		<input type="reset" name="cancel" value="Cancel" class="button" onclick="javascript:popup('tambah')"><br>&nbsp<br>&nbsp
	</form>
	</center>
</div>
<?
	$v=$op->cs_query("SELECT * FROM tb_upload ORDER BY id DESC");
	$i=1;
	while($d=mysql_fetch_array($v)){
	$id= $d['id'];
?>
<div id="hapus<? echo $i; ?>" style="display:none;" class="popup">
	<br>
	<h2 align="center">Yakin <? echo $d['nama'] ?>?</h2>
	<form method="POST" action="<? $_SERVER['PHP_SELF'];?>">
	<input type="hidden" name="id2" id="id2" value="<? echo $id; ?>">
	<input type="hidden" name="url2" value="<? echo $d['dir']."/".$d['nama']; ?>">
		<center>
		<img src="../<? echo $d['url'] ?>" alt="" width="285" height="247" /><br><br>
			<input type="submit" name="hapus" value="         Ya         " id="hapus" class="button">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <input type="reset" name="cancel" value="      Tidak      " onclick="javascript:popup('hapus<? echo $i; ?>')" class="button">	
		</center>
		<br><br>
	</form>
</div>
<? $i++; } ?>