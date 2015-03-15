<div id="header">
  <div class="date" id="clock"></div>

    <div class="logo"><a href="../"><img src="../images/logo.png"  alt="" /></a></div>
    <div class="menu">
      <ul>
        <li><a href="../"><img name="home" src="../images/b1.png" alt="" class="png" onmouseover="roll('home', '../images/homeover.png')" onmouseout="roll('home', '../images/b1.png')"/></a></li>
        <li>
          <div id="FWTableContainer">
<a href="../staff" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0s', 'MMMenu_0s',0,25,'pengurus');"><img name="pengurus" src="../images/b2.png" width="120" height="28" border="0" id="pengurus" alt="" class="png" onmouseover="roll('pengurus', '../images/pengurusover.png')" onmouseout="roll('pengurus', '../images/b2.png')"/></a>
<div id="MMMenuContainer_0s">
	<div id="MMMenu_0s" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
	<? 
	require_once("../plugin/qFrame/qFrame.php");
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
		<a href="../staff/index.php?page=<? echo $a.$b; ?>" id="MMMenu_0_Item_<? echo $k; ?>s" class="MMMIFVStyleMMMenu_0s" onmouseover="MM_menuOverMenuItem('MMMenu_0s','<? echo $k+1; ?>');">
			<span class="MMMenuItemSpanMMMenu_0">OSIS&nbsp;20<? echo $a."/20".$b; ?></span>		</a><? $k++; } ?>
			</div>
</div></div>
        </li>
        <li><div id="FWTableContainer">
<a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0', 'MMMenu_0',0,25,'subsie');"><img name="subsie" src="../images/b3.png" width="90" height="28" border="0" id="subsie" alt="" class="png"onmouseover="roll('subsie', '../images/subsieover.png')" onmouseout="roll('subsie', '../images/b3.png')"/></a>
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
    <? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='I' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=1&&id=<? echo $dt['id']; ?>" id="MMMenu_0_1_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_1" onmouseover="MM_menuOverMenuItem('MMMenu_0_1');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>
			</div>
	<div id="MMMenu_0_2" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='II' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=2&&id=<? echo $dt['id']; ?>" id="MMMenu_0_2_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_2" onmouseover="MM_menuOverMenuItem('MMMenu_0_2');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_3" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='III' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=3&&id=<? echo $dt['id']; ?>" id="MMMenu_0_3_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_3" onmouseover="MM_menuOverMenuItem('MMMenu_0_3');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_4" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='IV' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=4&&id=<? echo $dt['id']; ?>" id="MMMenu_0_4_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_4" onmouseover="MM_menuOverMenuItem('MMMenu_0_4');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_5" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='V' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=5&&id=<? echo $dt['id']; ?>" id="MMMenu_0_5_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_5" onmouseover="MM_menuOverMenuItem('MMMenu_0_5');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_6" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VI' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=6&&id=<? echo $dt['id']; ?>" id="MMMenu_0_6_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_6" onmouseover="MM_menuOverMenuItem('MMMenu_0_6');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_7" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VII' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=7&&id=<? echo $dt['id']; ?>" id="MMMenu_0_7_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_7" onmouseover="MM_menuOverMenuItem('MMMenu_0_7');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_8" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VIII' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=8&&id=<? echo $dt['id']; ?>" id="MMMenu_0_8_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_8" onmouseover="MM_menuOverMenuItem('MMMenu_0_8');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_9" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='IX' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=9&&id=<? echo $dt['id']; ?>" id="MMMenu_0_9_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_9" onmouseover="MM_menuOverMenuItem('MMMenu_0_9');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
	<div id="MMMenu_0_10" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
		<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='X' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){ ?>
		<a href="../subsie/index.php?kasie=10&&id=<? echo $dt['id']; ?>" id="MMMenu_0_10_Item_<? $a= $i-1; echo $a; ?>" class="MMMIFVStyleMMMenu_0_10" onmouseover="MM_menuOverMenuItem('MMMenu_0_10');"><? echo $dt['title']; ?></a>
        <? $i++; } ?>	</div>
</div>
</div>
</li>
		<li class="no_marg"><div id="FWTableContainer">
<a href="javascript:;" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuShowMenu('MMMenuContainer_0p', 'MMMenu_0p',0,25,'pengurus');"><img name="proker" src="../images/b4.png" alt="" class="png" onmouseover="roll('proker', '../images/prokerover.png')" onmouseout="roll('proker', '../images/b4.png')"/></a>
<div id="MMMenuContainer_0p">
	<div id="MMMenu_0p" onmouseout="MM_menuStartTimeout(1000);" onmouseover="MM_menuResetTimeout();">
    <? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='OSIS' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=0&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_0p" class="MMMIFVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','1');">
			<span class="MMMenuItemSpanMMMenu_0" title="OSIS">OSIS</span>		</a>
    <? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='I' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=1&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_1p" class="MMMIFVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','2');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Ketqawaan terhadap Tuhan YME">SEKSI I</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='II' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=2&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_2p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','3');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kehidupan Berbangsa dan Bernegara">SEKSI II</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='III' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=3&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_3p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','4');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Pendahuluan Bela Negara">SEKSI III</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IV' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=4&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_4p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','5');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kepribadian dan Budi Pekerti Luhur">SEKSI IV</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='V' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=5&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_5p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','6');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi berorganisasi, Pendidikan Politik dan Kepemimpinan">SEKSI V</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VI' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=6&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_6p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','7');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Keterampilan dan Kewiraswastaan">SEKSI VI</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VII' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>       
		<a href="../proker/index.php?kasie=7&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_7p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','8');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Kesegaran Jasmani dan Daya Kreasi">SEKSI VII</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VIII' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=8&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_8p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','9');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Persepsi, Apresiasi, dan Kreasi Seni">SEKSI VIII</span>		</a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IX' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
		<a href="../proker/index.php?kasie=9&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_9p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','10');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Pendidikan Teknologi Informasi">SEKSI IX</span></a>
    <? $view=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='X' ORDER BY id DESC");
	$dt=mysql_fetch_array($view) ?>
			<a href="../proker/index.php?kasie=10&&id=<? echo $dt['id']; ?>" id="MMMenu_0_Item_10p" class="MMMIVStyleMMMenu_0p" onmouseover="MM_menuOverMenuItem('MMMenu_0p','11');">
			<span class="MMMenuItemSpanMMMenu_0" title="Seksi Bahasa">SEKSI X</span></a></div>
</div></div></li>
      </ul>
    </div>

    <div class="icons">
    <span class="cornerheader"><a href="../lounge/guestbook.php">the lounge  </a>|<a href=""> facebook  </a>|<a href="">  forum  </a>|<a href="javascript:popup('adatosis')">  adat osis  </a>|<a href="javascript:popup('marssma3')">  mars sma 3  </a>|</span></div>    
  </div>
