<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$id=$_REQUEST['id'];
	if ($id == ""){  ?>
	<title>PROKER | OSIS SMAN 3 SEMARANG</title>
	<? }else{
			$view=$op->cs_query("SELECT * FROM tb_proker WHERE id=$id");
	$dt=mysql_fetch_array($view);
?>
<title>PROKER - <? echo $dt['title']; ?> | OSIS SMAN 3 SEMARANG</title>
<? } ?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="../style.css" rel="stylesheet" type="text/css" />
<script src="../js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="../js/cufon-yui.js" type="text/javascript"></script>
<script src="../js/cufon-replace.js" type="text/javascript"></script>
<script src="../js/Hand_Test_500.font.js" type="text/javascript"></script>
<script src="../js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="../js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
<script src="../js/clock.js" type="text/javascript"></script>
<script src="../csspopup.js" type="text/javascript"></script>
<script src="../js/jquery.slideshow.lite-0.5.3.js" type="text/javascript" ></script>  
<script type="text/javascript" src="prokerlist.js"></script>
<script language="JavaScript1.2" type="text/javascript" src="../menu.js"></script>
	<script type="text/javascript" charset="utf-8"> 
		$(document).ready(function(){
			$("#slideshow").slideshow();
		});
	</script>
	<script type="text/javascript">
function roll(img_name, img_src)
   {
   document[img_name].src = img_src;
   }
</script>
 
<!--[if lt IE 7]>
	<link href="ie_style.css" rel="stylesheet" type="text/css" />
    <script src="js/ie_png.js" type="text/javascript"></script>   
    <script type="text/javascript">
           DD_belatedPNG.fix('.logo img, #main, .gallery_bg, .box, #footer, .png, .bg1, .stick_block');
   </script>
<![endif]-->
<style type="text/css" media="screen">
	@import url("../menu.css");
</style>

</head>

<link rel="shortcut icon"
href="images/badgeganeshaicon.png">

</head>
<body id="page1" onload="showclock()">
<div id="main">
<div class="top_bg">
  <!-- header -->
  <?php include("../include/header.php");?>
  <!-- content -->
  
  <div id="content">
  	<div class="container">
    <div class="col_1">
	<div class="prokerlist margi20"> <div class="bg1"></div>
	<h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROKER</h2>
	<div id="masterdiv" style="overflow:auto; height:390px;"><p class="listproker">
    <? $sie=$_REQUEST['kasie']; ?>
	&bull; <a href="javascript:SwitchMenu('osis')">OSIS</a> <br />
		<span class="submenu" id="osis" <? if ($sie=="0") { echo "style='display:block'"; } ?> >
        <? $v0=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='OSIS'");
			$i=1;
		   while($d0=mysql_fetch_array($v0)){
			   echo "&infin; <a href='index.php?kasie=0&&id=".$d0['id']."'>".$d0['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi1')">Seksi Ketaqwaan Terhadap Tuhan YME</a> <br />
		<span class="submenu" id="kasi1" <? if ($sie=="1") { echo "style='display:block'"; } ?> >
        <? $v1=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='I'");
			$i=1;
		   while($d1=mysql_fetch_array($v1)){
			   echo "&infin; <a href='index.php?kasie=1&&id=".$d1['id']."'>".$d1['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi2')">Seksi Kehidupan Berbangsa dan Bernegara</a> <br />
    <span class="submenu" id="kasi2" <? if ($sie=="2") { echo "style='display:block'"; } ?> >
        <? $v2=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='II'");
			$i=1;
		   while($d2=mysql_fetch_array($v2)){
			   echo "&infin; <a href='index.php?kasie=2&&id=".$d2['id']."'>".$d2['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi3')">Seksi Pendidikan Pendahuluan Bela negara</a> <br />
		<span class="submenu" id="kasi3" <? if ($sie=="3") { echo "style='display:block'"; } ?> >
		 <? $v3=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='III'");
			$i=1;
		   while($d3=mysql_fetch_array($v3)){
			   echo "&infin; <a href='index.php?kasie=3&&id=".$d3['id']."'>".$d3['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi4')">Seksi Kepribadian dan Budi Perkerti Luhur</a> <br />
		<span class="submenu" id="kasi4" <? if ($sie=="4") { echo "style='display:block'"; } ?> >
		<? $v4=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IV'");
			$i=1;
		   while($d4=mysql_fetch_array($v4)){
			   echo "&infin; <a href='index.php?kasie=4&&id=".$d4['id']."'>".$d4['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi5')">Seksi Berorganisasi, Pendidikan Politik, dan Kepemimpinan</a> <br />
	<span class="submenu" id="kasi5" <? if ($sie=="5") { echo "style='display:block'"; } ?> >
		<? $v5=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='V'");
			$i=1;
		   while($d5=mysql_fetch_array($v5)){
			   echo "&infin; <a href='index.php?kasie=5&&id=".$d5['id']."'>".$d5['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi6')">Seksi Keterampilan dan Kewiraswastaan</a> <br />
		<span class="submenu" id="kasi6" <? if ($sie=="6") { echo "style='display:block'"; } ?> >
		<? $v6=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VI'");
			$i=1;
		   while($d6=mysql_fetch_array($v6)){
			   echo "&infin; <a href='index.php?kasie=6&&id=".$d6['id']."'>".$d6['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi7')">Seksi Kesegaran Jasmani dan Daya Kreasi</a> <br />
    	<span class="submenu" id="kasi7" <? if ($sie=="7") { echo "style='display:block'"; } ?> >
		<? $v7=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VII'");
			$i=1;
		   while($d7=mysql_fetch_array($v7)){
			   echo "&infin; <a href='index.php?kasie=7&&id=".$d7['id']."'>".$d7['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi8')">Seksi Persepsi, Apreasiasi dan Kreasi Seni</a> <br />
		<span class="submenu" id="kasi8" <? if ($sie=="8") { echo "style='display:block'"; } ?> >
		<? $v8=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VIII'");
			$i=1;
		   while($d8=mysql_fetch_array($v8)){
			   echo "&infin; <a href='index.php?kasie=8&&id=".$d8['id']."'>".$d8['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi9')">Seksi Pendidikan Teknologi Informasi</a><br />
		<span class="submenu" id="kasi9" <? if ($sie=="9") { echo "style='display:block'"; } ?> >
		<? $v9=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IX'");
			$i=1;
		   while($d9=mysql_fetch_array($v9)){
			   echo "&infin; <a href='index.php?kasie=9&&id=".$d9['id']."'>".$d9['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
    &bull; <a href="javascript:SwitchMenu('kasi10')">Seksi Bahasa</a><br />
		<span class="submenu" id="kasi10" <? if ($sie=="10") { echo "style='display:block'"; } ?> >
		<? $v10=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='X'");
			$i=1;
		   while($d10=mysql_fetch_array($v10)){
			   echo "&infin; <a href='index.php?kasie=10&&id=".$d10['id']."'>".$d10['title']."</a><br/>";
			   $i++;
		   } ?>
		</span>
	</p></div>
   </div>
   </div>
   <? 
	if ($id == ""){ ?>
	<div class="col_2">
    <div class="boxstaff margi20 ">
        <div align="center"><span class="titlesubsie"></span></div><br />
		<div align="left"><span class="titlesubsie2">Maaf, proker belum ada </span></div><br />
          <br />	
        <div style="overflow:auto; height:500px; width: 505px">
        <div class="no_marg s1" style="width:475px">
	<? }else{
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE id=$id");
	$dt=mysql_fetch_array($view); ?>
    <div class="col_2">
    <div class="boxstaff margi20 ">
        <div align="center"><span class="titlesubsie"><? echo $dt['nama_proker']; ?></span></div><br />
		<div align="left"><span class="titlesubsie2">Proker <? echo $dt['subsie']; ?></span></div><br />
          <br />	
        <div style="overflow:auto; height:500px; width: 505px">
        <div class="no_marg s1" style="width:475px">
        <center><img src="<? echo $dt['images']; ?>"/><br /></center>
		<? echo $dt['proker']; }?>


</div></div>
    </div>    
   </div>

    <div class="clear"></div>
 	</div>
   </div>
  </div>
   <div class="push"></div>
  </div>
  
  <div id="blanket" style="display:none;"></div>
	<div id="adatosis" style="display:none; overflow:auto">
		<a href="#" onclick="popup('adatosis')" class="closepopup">CLOSE</a>
		<p align="justify" class="n3">
<b>BADGE GANESHA</b ><br />
Badge Ganesha merupakan lambang yang dikenakan oleh induk organisasi dan satuan tugas dari sekolah sebagai simbol tertinggi. Artinya siswa yang mengenakannya diakui dan dilindungi oleh pihak sekolah dalam pelaksanaan tugasnya. Penerima Badge Ganesha adalah subsie PASKIBAR dan PKS sebagai satuan tugas dengan wujud sablon. OSIS sebagai induk organisasi dikenakan di Baju Lengan Panjang sebelah kiri dengan wujud bordir untuk membedakan dari satuan tugas SMA N 3 Semarang. Pemakaian Badge Ganesha harus sesuai denga peraturan yang berlaku yaitu baju OSIS lengkap meliputi celana atau rok abu-abu, sepatu hitam polos, kaos kaki putih, sabuk hitam yang terlihat, dengan atau tanpa topi serta dilengkapi dengan singlet putih. Seragam Badge Ganesha atau Baju Lengan Panjang dikenakan saat melaksanakan tugas OSIS maupun satuan tugas lainnya, hari besar nasional, tanggal 17 setiap bulannya, HUT sekolah, dan saat upacara di sekolah. Selama memakai seragam Badge Ganesha harus menjaga sopan santun, mematuhi Dasa Prasetya Ganesha Muda dan menjaga nama baik SMA N 3 Semarang. Jika saat memakai seragam Badge Ganesha melakukan pelanggaran-pelanggaran maka akan dikenakan sanksi-sanksi baik peringatan lisan, tertulis,hukuman fisik, maupun pencabutan Badge Ganesha oleh puhak sekolah.<br/><br />

<b>LENCANA</b><br />
Lencana merupakan simbol tertinggi yang sejajar dengan Badge Ganesha. Simbol kebanggan kami sebagai Pengurus OSIS SMA N 3 Semarang yang juga kami anggap sebagai harga mati kepengurusan OSIS di setiap periodenya. Setiap pengurus memiliki satu buah lencana yang selalu ada di setiap waktu. Hanya Pengurus OSIS SMA N 3 Semarang yang memiliki satu buah lambang kepercayaan ini. Lencana berfungsi sebagai pengganti seragam Badge Ganesha jika sewaktu-waktu ada kegiatan OSIS yang bersifat mendadak. Aturan pemakaian lencana ini sama seperti seragam Badge Ganesha. Hanya saja pemakaian lencana itu di sabuk dekat pinggang sebelah kiri.</p>
	</div>
	<div id="marssma3" style="display:none; overflow:auto">
		<a href="#" onclick="popup('marssma3')" class="closepopup">CLOSE</a>
		<p align="justify" class="n3">
<b>MARS SMA NEGERI 3 SEMARANG</b ><br /><br />
Kami ini satria Ganesha<br />
Siap abdi nusa bangsa negara<br />
Pegang teguh Dasa Prasetya Ganesha muda<br />
Tuk meraih cita-cita <br /><br />

Tempat blajar dan menuntut ilmu<br />
Tuk menjadi seorang satria<br />
Inilah istana kebanggaan kami<br />
SMA Negeri 3 Semarang<br />
Junjung tinggi budaya bangsa<br />
Serta cinta pada sesama<br />
Berdasarkan Pancasila,<br />
dan Undang-Undang Dasar 45<br /><br />


Kami ini satria Ganesha<br />
Siap abdi nusa bangsa negara<br />
Pengabdian tulus, jujur, dan wibawa<br />
bagi jaya Indonesia<br />
</p>
	</div>
  
  <!-- footer -->
  <div id="footer">
    <?php include("../include/footer.php");?>
  </div>


</body>
</html>