<div class="col_1">
<div class="prokerlist margi20"> <div class="bg1"></div>
	<h2 >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PROKER</h2>
	<div id="masterdiv"><p class="listproker">
	&bull; <a href="javascript:SwitchMenu('osis')">OSIS</a> <br />
 <?   $kas=$_REQUEST['kasie']; 
      $display="style='display:block'";
 ?>
		<span class="submenu" id="osis" <?php if ($kas=="I"){ echo $display; } ?>>
        <?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='I' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=0&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi1')">Seksi Ketaqwaan Terhadap Tuhan YME</a> <br />
 <?   $kas=$_REQUEST['kasie']; 
      $display="style='display:block'";
 ?>
		<span class="submenu" id="kasi1" <?php if ($kas=="I"){ echo $display; } ?>>
        <?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='I' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=1&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi2')">Seksi Kehidupan Berbangsa dan Bernegara</a> <br />
    <span class="submenu" id="kasi2" <?php if ($kas=="II"){ echo $display; } ?>>
    <?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='II' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=2&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi3')">Seksi Pendidikan Pendahuluan Bela negara</a> <br />
		<span class="submenu" id="kasi3" <?php if ($kas=="III"){ echo $display; } ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='III' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=3&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi4')">Seksi Kepribadian dan Budi Perkerti Luhur</a> <br />
		<span class="submenu" id="kasi4" <?php if ($kas=="IV"){ echo $display; } ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IV' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=4&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi5')">Seksi Berorganisasi, Pendidikan Politik, dan Kepemimpinan</a> <br />
	<span class="submenu" id="kasi5" <?php if ($kas=="V"){ echo $display; }  ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='V' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=5&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi6')">Seksi Keterampilan dan Kewiraswastaan</a> <br />
		<span class="submenu" id="kasi6" <?php if ($kas=="VI"){ echo $display; } ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VI' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=6&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi7')">Seksi Kesegaran Jasmani dan Daya Kreasi</a> <br />
    <span class="submenu" id="kasi7" <?php if ($kas=="VII"){ echo $display; } ?>>
    <?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VII' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=7&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi8')">Seksi Persepsi, Apreasiasi dan Kreasi Seni</a> <br />
		<span class="submenu" id="kasi8" <?php if ($kas=="VIII"){ echo $display; } ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='VIII' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=8&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	&bull; <a href="javascript:SwitchMenu('kasi9')">Seksi Pendidikan Teknologi Informasi</a> <br />
		<span class="submenu" id="kasi9" <?php if ($kas=="IX"){ echo $display; } ?>>
        <?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='IX' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=9&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
    &bull; <a href="javascript:SwitchMenu('kasi10')">Seksi Bahasa</a> <br />
		<span class="submenu" id="kasi10" <?php if ($kas=="X"){ echo $display; } ?>>
		<?
		$viewc=$op->cs_query("SELECT * FROM tb_proker WHERE kasie='X' ORDER BY id ASC");
		$i=1;
		while($dtc=mysql_fetch_array($viewc)){
		?>
		&infin; <a href="index.php?kasie=10&&id<? echo $dtc['id']; ?>"><? echo $dtc['nama_proker']; ?></a><br/>
        <? $i++; } ?>
		</span>
	</p></div>
   </div>
   </div>