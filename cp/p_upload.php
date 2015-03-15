<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
<link rel="stylesheet" type="text/css" href="tema.css" />
<link rel="stylesheet" type="text/css" href="../plugin/qFrame/style/style.css" />
<script type="text/javascript" src="../plugin/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="../plugin/jquery.validate.pack.js"></script>
<style type="text/css">
	a{text-decoration:none;
	color:#006699;}
	a:hover{text-decoration:underline; }
</style>
</head>
<body>
<?php
		require_once("../plugin/qFrame/qFrame.php");
			$op=new q_sql();
			if(isset($_POST['upload'])){
		if((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/png"))
&&(($_FILES["file"]["size"]/(1024*1024)) < 20)){
			$dir="images/upload/".date('Y');
			$name=$_FILES["file"]["name"];
			if(mysql_num_rows($view=$op->cs_query("SELECT * FROM tb_upload WHERE nama='$name'"))>=1){
			?>
            <h2 align="center" style="color:#006699;">Nama file sama dengan nama file yang sudah terupload!</h2>
            <a href="upload.php"><h3 align="center" style="color:#006699;">Kembali ke form upload</h3></a>
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
				?>
<h2 align="center" style="color:#006699;">Gambar berhasil diupload!</h2>
<div style="height:400px; overflow:auto;">
<table align="center">
	<tr>
    <td align="center">
		<img src="../<? echo $url; ?>" alt="" height="247" />
    </td>
    </tr>
    <tr>
    <td align="center">
		copy URL dibawah ini<br />
		<a href="<? echo $url; ?>"><? echo $url; ?></a><br />
    </td>
    </tr>
    <tr>
    <td align="center">
    	<div style="width:100%">
        <table align="center" cellpadding="3" style="moz-border-radius:5px;"><tr><td width="100px" align="center" bgcolor="#CCCCCC" class="cursor_move">
		<a href="upload.php" target="upload">Upload lagi</a>
        </td></tr></table>
        </div>
    </td>
    </tr>
</table>       
		<?	}
		}
		}}
		else{ 
		}
	}
	?>
    </div>
	</body>
    </html>