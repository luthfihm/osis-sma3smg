<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
	include ('editor.php');
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
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Input Data Subsie</div><br />
<form action="main_menu.php?view=p_subsie" method="post">
<table valign="center" cellpadding="1" cellspacing="1" border="0">
<tr><td width="100px">Kasie</td><td>:</td><td>
	<select name="kasie" id="kasie" onchange="setSub();">
		<option value='null'>--Pilih Kasie--</option>
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
    </td></tr>
 <tr><td>Nama Subsie</td><td>:</td><td><input type="text" name="nama" size="62"   /></td></tr>
 <tr><td>Menu Title</td><td>:</td><td><input type="text" name="title" size="62"   /></td></tr>
 <tr><td>Kasubsie</td><td>:</td><td><input type="text" name="kasubsie" size="62"  /></td></tr>
	<tr><td>Images</td><td>:</td><td><input type="text" name="images" size="62"  /> <a href="#" onclick="javascript:popup('upload')">Upload Images </a> | <a href="#" onclick="javascript:popup('list')">Image List</a></td></tr>
	<tr><td valign="top">Content</td><td valign="top">:</td><td><textarea name="content" cols="70" rows="20"></textarea>
	</td></tr>
	<tr><Td colspan="2">&nbsp;</Td><td><input type="submit" name="simpan" value="Publish Content" class="button"/></td></tr>
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