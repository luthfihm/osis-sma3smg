<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$kas=$_GET['kasie'];
	if($kas!="null"){
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='$kas' ORDER BY id ASC");
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
 <form action="main_menu.php?view=p_proker" method="post">
 <input type="hidden" name="kasie" value="<? echo $kas; ?>" />
 <table valign="center" cellpadding="1" cellspacing="1" border="0">
 <tr><td width="100px">Subsie</td><td>:</td><td>
	<select name="subsie" id="subsie">
		<option value='null'>--Pilih Subsie--</option>
            <? while ($dt=mysql_fetch_array($view)) {
				echo "<option value='".$dt['title']."'>".$dt['title']."</option>";
			} ?>
	</select>
    </td></tr>
 <tr><td>Nama Proker</td><td>:</td><td><input type="text" name="nama" size="62"  /></td></tr>
 <tr><td>Menu Title</td><td>:</td><td><input type="text" name="title" size="62"   /></td></tr>
	<tr><td>Images</td><td>:</td><td><input type="text" name="images" size="62"  /></td></tr>
    <!-- TinyMCE -->
<script type="text/javascript" src="../plugin/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
<script type="text/javascript">
	tinyMCE.init({
		mode : "textareas",
		theme : "simple"
	});
</script>
<!-- /TinyMCE -->
	<tr><td valign="top">Content</td><td valign="top">:</td><td><textarea name="content" cols="70" rows="15"></textarea>
	</td></tr>
	<tr><Td colspan="2">&nbsp;</Td><td><input type="submit" name="simpan" value="Publish Content" /></td></tr>
</table>
</form><br>
<script>
	function changeSrc(){
		document.getElementById("upload_frame").src="upload.php";
	}
	function reload() {
		var f = document.getElementById("image");
		f.src = f.src;
	}
</script>
<div id="blanket" style="display:none;"><div>
<div id="upload" class="popup" style="display:none; padding:10px; height:500px;">
	<a href="#" onclick="javascript:popup('upload');changeSrc();reload();">close</a>
	<iframe frameborder="0" src="upload.php" style="width:100%; height:100%;" name="upload" id="upload_frame" align="middle" scrolling="no"></iframe>
</div>
<div id="list" class="popup" style="display:none; padding:10px; height:500px;">
	<a href="#" onclick="javascript:popup('list');reload();">close</a>
	<iframe frameborder="0" src="list.php" style="width:100%; height:100%;" name="image" id="image" align="middle" scrolling="no"></iframe>
</div>
 <? } ?>
 