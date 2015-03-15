<!-- 

Web Developer : Luthfi Hamid Mayskuri
Email         : metalic_devil_racer@yahoo.co.id
year          : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<title>OSIS - SMAN 3 SEMARANG</title>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<meta name="google-site-verification" content="PExIuRD9F5g_FRW1VXtMCDuxVuaMITjDbzneEpp2rZQ" />
<meta  name="keyword" content="osis,sma3,sman3,sma n 3,sma negeri 3,smaga,sma negeri 3 semarang,pensaga,web osis,ganesha muda,pemuda 149,sbi,sekolah bertaraf internasional"/>
<meta http-equiv="Content-Style-Type" content="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" />
<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/cufon-yui.js" type="text/javascript"></script>
<script src="js/cufon-replace.js" type="text/javascript"></script>
<script src="js/Hand_Test_500.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_400.font.js" type="text/javascript"></script>
<script src="js/NewsGoth_BT_700.font.js" type="text/javascript"></script>
<script src="js/clock.js" type="text/javascript"></script>
<script src="csspopup.js" type="text/javascript"></script>
<script src="js/jquery.slideshow.lite-0.5.3.js" type="text/javascript" ></script>
<script src="menu.js" type="text/javascript" language="JavaScript1.2"></script>
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
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
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
	@import url("menu.css");
</style>
</head>

<link rel="shortcut icon"
href="images/badgeganeshaicon.png">

</head>
<body id="page1" onload="showclock();MM_preloadImages('staff/images/pengurusover.png')">
<div id="main">
<div class="top_bg">
  <!-- header -->
  <div id="header">
  <div class="date" id="clock"></div>

    <div class="logo"><a href=""><img src="images/logo.png"  alt="" /></a></div>
    <div class="menu">
      <ul>
        <li><a href=""><img name="home" src="images/b1.png" alt="" class="png" onmouseover="roll('home', 'images/homeover.png')" onmouseout="roll('home', 'images/b1.png')"/></a></li>
        <li>
          <div id="FWTableContainer">
<a href="staff" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0s', 'MMMenu_0s',0,25,'pengurus');"><img name="pengurus" src="images/b2.png" width="120" height="28" border="0" id="pengurus" alt="" class="png" onmouseover="roll('pengurus', 'images/pengurusover.png')" onmouseout="roll('pengurus', 'images/b2.png')"/></a>
<div id="MMMenuContainer_0s">
	<div id="MMMenu_0s" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? 
	require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT id_masa FROM tb_pengurus ORDER by id_masa DESC");
	$dt=mysql_fetch_array($view);
	$k=0;
	$l=substr($dt['id_masa'],2,2);
	for($i=$l-9; $i <= $l; $i++){
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
	?>
		<a href="staff/index.php?page=<? echo $a.$b; ?>" id="MMMenu_0_Item_<? echo $k; ?>s" class="MMMIFVStyleMMMenu_0s" onmouseover="MM_menuOverMenuItem('MMMenu_0s','<? echo $k+1; ?>');">
			<span class="MMMenuItemSpanMMMenu_0">OSIS&nbsp;20<? echo $a."/20".$b; ?></span>		</a><? $k++; } ?>	</div>
</div></div>
        </li>
        <li><div id="FWTableContainer">
<a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0', 'MMMenu_0',0,25,'subsie');"><img name="subsie" src="images/b3.png" width="90" height="28" border="0" id="subsie" alt="" class="png"onmouseover="roll('subsie', 'images/subsieover.png')" onmouseout="roll('subsie', 'images/b3.png')"/></a>
<div id="MMMenuContainer_0">
	<div id="MMMenu_0" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<a href="javascript:;" id="MMMenu_0_Item_0" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','1');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Ketaqwaan Terhadap Tuhan YME">Seksi&nbsp;I</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_1" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','2');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kehidupan Berbangsa dan Bernegara">Seksi&nbsp;II</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_2" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','3');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Pendahuluan Bela Negara">Seksi&nbsp;III</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_3" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','4');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kepribadian dan Budi Pekerti Luhur">Seksi&nbsp;IV</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_4" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','5');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Berorganisasi, Pendidikan Politik, dan Kepemimpinan">Seksi&nbsp;V</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_5" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','6');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Keterampilan dan Kewiraswastaan">Seksi&nbsp;VI</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_6" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','7');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kesegaran Jasmani dan Daya Kreasi">Seksi&nbsp;VII</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_7" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','8');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Persepsi, Apreasiasi dan Kreasi Seni">Seksi&nbsp;VIII</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_8" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','9');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Teknologi Informasi">Seksi&nbsp;IX</span>		</a>
		<a href="javascript:;" id="MMMenu_0_Item_9" class="MMMIFVStyleMMMenu_0" onmouseover="MM_menuOverMenuItem('MMMenu_0','10');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Bahasa">Seksi&nbsp;X</span>		</a>	</div>
	<div id="MMMenu_0_1" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
    <? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='I' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=1&&id=<? echo $dt['id']; ?>" id="MMMenu_0_1_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_1" onmouseover="MM_menuOverMenuItem('MMMenu_0_1');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>
			</div>
	<div id="MMMenu_0_2" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='II' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=2&&id=<? echo $dt['id']; ?>" id="MMMenu_0_2_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_2" onmouseover="MM_menuOverMenuItem('MMMenu_0_2');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_3" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='III' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=3&&id=<? echo $dt['id']; ?>" id="MMMenu_0_3_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_3" onmouseover="MM_menuOverMenuItem('MMMenu_0_3');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_4" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='IV' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=4&&id=<? echo $dt['id']; ?>" id="MMMenu_0_4_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_4" onmouseover="MM_menuOverMenuItem('MMMenu_0_4');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_5" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='V' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=5&&id=<? echo $dt['id']; ?>" id="MMMenu_0_5_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_5" onmouseover="MM_menuOverMenuItem('MMMenu_0_5');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_6" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VI' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=6&&id=<? echo $dt['id']; ?>" id="MMMenu_0_6_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_6" onmouseover="MM_menuOverMenuItem('MMMenu_0_6');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_7" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VII' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=7&&id=<? echo $dt['id']; ?>" id="MMMenu_0_7_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_7" onmouseover="MM_menuOverMenuItem('MMMenu_0_7');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_8" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VIII' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=8&&id=<? echo $dt['id']; ?>" id="MMMenu_0_8_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_8" onmouseover="MM_menuOverMenuItem('MMMenu_0_8');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_9" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='IX' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=9&&id=<? echo $dt['id']; ?>" id="MMMenu_0_9_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_9" onmouseover="MM_menuOverMenuItem('MMMenu_0_9');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_10" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='X' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="subsie/index.php?kasie=10&&id=<? echo $dt['id']; ?>" id="MMMenu_0_10_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_10" onmouseover="MM_menuOverMenuItem('MMMenu_0_10');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
</div>
</div>
</li>
		<li class="no_marg"><div id="FWTableContainer">
<a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0p', 'MMMenu_0p',0,25,'pengurus');"><img name="proker" src="images/b4.png" alt="" class="png" onmouseover="roll('proker', 'images/prokerover.png')" onmouseout="roll('proker', 'images/b4.png')"/></a>
<div id="MMMenuContainer_0p">
	<div id="MMMenu_0p" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
    <? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='OSIS' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=0&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_0p" class="MMMIFVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','1');">
			<span class="MMMenuItemSpanMMMenu_0" title="OSIS">OSIS</span>		</a>
    <? require_once("plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='I' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=1&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_1p" class="MMMIFVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','2');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Ketqawaan terhadap Tuhan YME">SEKSI I</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='II' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=2&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_2p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','3');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kehidupan Berbangsa dan Bernegara">SEKSI II</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='III' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=3&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_3p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','4');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Pendahuluan Bela Negara">SEKSI III</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IV' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=4&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_4p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','5');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kepribadian dan Budi Pekerti Luhur">SEKSI IV</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='V' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=5&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_5p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','6');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi berorganisasi, Pendidikan Politik dan Kepemimpinan">SEKSI V</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VI' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=6&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_6p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','7');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Keterampilan dan Kewiraswastaan">SEKSI VI</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VII' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>       
		<a href="proker/index.php?kasie=7&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_7p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','8');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kesegaran Jasmani dan Daya Kreasi">SEKSI VII</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VIII' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=8&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_8p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','9');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Persepsi, Apresiasi, dan Kreasi Seni">SEKSI VIII</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IX' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="proker/index.php?kasie=9&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_9p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','10');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Teknologi Informasi">SEKSI IX</span></a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='X' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
			<a href="proker/index.php?kasie=10&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_10p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','11');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Bahasa">SEKSI X</span></a></div>
</div></div></li>
      </ul>
    </div>

    <div class="icons">
    <span class="cornerheader"><a href="lounge/guestbook.php">the lounge  </a>|<a href=""> facebook  </a>|<a href="">  forum  </a>|<a href="javascript:popup('adatosis')">  adat osis  </a>|<a href="javascript:popup('marssma3')">  mars sma 3  </a>|</span></div>    
  </div>
  <!-- content -->
  <div id="content">
  	<div class="container">
    <div class="col_1">
	<?php include("include/slideshow.php");?>
    <div class="stick_block">
    	 <?php include("include/comesoon.php");?>
    </div>
    <?php include("include/link.php");?>
    </div>
    <div class="col_2">
    <div class="boxwelcome margi20 ">
        <a href="http://www.twitter.com/whatsupsmaga" class="follow"><img src="images/follow.gif" alt="" /></a>
        <img src="images/page1_tite1.gif" alt="" class="p1" />

        <p class="no_marg s1">Selamat datang di Website OSIS SMA Negeri 3 Semarang. Organisasi Siswa Intra Sekolah di SMA 3 Semarang berfungsi sebagai sarana yang memprakarsai segala kegiatan yang berhubungan dengan kesiswaan dan keorganisasian. Suarakan aspirasi anda untuk kemajuan SMA Negeri 3 Semarang!
</p>
        <a href="lounge" class="next"><img src="images/arrow_right.png" alt="THE LOUNGE" class="png" /></a>    </div>
    <div class="box_main">
    <? $v=$op->cs_query("SELECT id FROM tb_proker ORDER by id DESC");
	$d=mysql_fetch_array($v);
	    $id=$d['id'];
		$v1=$op->cs_query("SELECT * FROM tb_proker WHERE id='$id'");
		$d1=mysql_fetch_array($v1);
		$title1=$d1['nama_proker'];
		$img1=$d1['images'];
		if ( $d1['kasie']=="I" ) {
			$kas1="1";
		}else if ( $d1['kasie']=="II" ) {
			$kas1="2";
		}else if ( $d1['kasie']=="III" ) {
			$kas1="3";
		}else if ( $d1['kasie']=="IV" ) {
			$kas1="4";
		}else if ( $d1['kasie']=="V" ) {
			$kas1="5";
		}else if ( $d1['kasie']=="VI" ) {
			$kas1="6";
		}else if ( $d1['kasie']=="VII" ) {
			$kas1="7";
		}else if ( $d1['kasie']=="VIII" ) {
			$kas1="8";
		}else if ( $d1['kasie']=="IX" ) {
			$kas1="9";
		}else if ( $d1['kasie']=="X" ) {
			$kas1="10";
		}else if ( $d1['kasie']=="OSIS" ) {
			$kas1="0";
		}
		$link1="proker/index.php?kasie=".$kas1."&&id=".$id;
		$i=3;
		$p1="";
		while ( substr($d1['proker'],$i-3,4) <> "</p>" ){
			$p1=substr($d1['proker'],3,$i-5);
			$i++;
		}
		if ( strlen($p1) > 270 ) { $p1=substr($p1,0,269); }
		
		$id=$id-1;
		$v2=$op->cs_query("SELECT * FROM tb_proker WHERE id='$id'");
		$d2=mysql_fetch_array($v2);
		$title2=$d2['nama_proker'];
		$img2=$d2['images'];
		$i=3;
		$p2="";
		while ( substr($d2['proker'],$i-3,4) <> "</p>" ){
			$p2=substr($d2['proker'],3,$i-5);
			$i++;
		}
		if ( strlen($p2) > 270 ) { $p2=substr($p2,0,269); }
		if ( $d2['kasie']=="I" ) {
			$kas2="1";
		}else if ( $d2['kasie']=="II" ) {
			$kas2="2";
		}else if ( $d2['kasie']=="III" ) {
			$kas2="3";
		}else if ( $d2['kasie']=="IV" ) {
			$kas2="4";
		}else if ( $d2['kasie']=="V" ) {
			$kas2="5";
		}else if ( $d2['kasie']=="VI" ) {
			$kas2="6";
		}else if ( $d2['kasie']=="VII" ) {
			$kas2="7";
		}else if ( $d2['kasie']=="VIII" ) {
			$kas2="8";
		}else if ( $d2['kasie']=="IX" ) {
			$kas2="9";
		}else if ( $d2['kasie']=="X" ) {
			$kas2="10";
		}else if ( $d2['kasie']=="OSIS" ) {
			$kas2="0";
		}
		$link2="proker/index.php?kasie=".$kas2."&&id=".$id;
		?>
    	<div class="bg2"></div>
        <h1><strong class="n1">RECENT</strong> <strong class="n2">EVENTS</strong></h1>
        <div class="wrapper">
        	<img src="<? echo $img1; ?>" alt="" height="150" width="200" class="img-indent" />
			<div class="link_home"><a href="<? echo $link1; ?>" target="_blank"><? echo $title1; ?></a></div>
<p class="margi20"><? echo $p1; ?>...  <a href="<? echo $link1; ?>" target="_blank">read more</a></p>
      </div>
	  <div class="wrapper">
        	<img src="<? echo $img2; ?>" alt="" height="150" width="200" class="img-indent2" />
			<div class="link_home"><a href="<? echo $link2; ?>" target="_blank"><? echo $title2; ?></a></div>
<p class="margir20"><? echo $p2; ?>... <a href="<? echo $link2; ?>" target="_blank">read more</a></p>
      </div>

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
<br /<br />
<a href="http://www51.indowebster.com/aa7462a2710524e58a4dc7c275f05469.zip">download mars sma 3</a>
</p> 
	</div>
  
  <!-- footer -->
  <div id="footer">
    <?php include("include/footer.php");?>
  </div>
</body>
</html>
<!-- 

Web Developer : Luthfi Hamid Mayskuri
Email         : metalic_devil_racer@yahoo.co.id
year          : 2011

"Dedicated for my Lovely Senior High School SMA Negeri 3 Semarang"

-->