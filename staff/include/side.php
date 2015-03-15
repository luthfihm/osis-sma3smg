<div class="col_1">
	<div class="stafflist margi20"> <div class="bg1"></div>
	<h2>PENGURUS OSIS</h2>
	<div style="overflow:auto; height:300px;">
	<p class="listmasajabatan">
	- <a href="index.php?page=0001">Masa jabatan 2000/2001</a> <br />
	- <a href="index.php?page=0102">Masa jabatan 2001/2002</a> <br />
	- <a href="index.php?page=0203">Masa jabatan 2002/2003</a> <br />
	- <a href="index.php?page=0304">Masa jabatan 2003/2004</a> <br />
	- <a href="index.php?page=0405">Masa jabatan 2004/2005</a> <br />
	- <a href="index.php?page=0506">Masa jabatan 2005/2006</a> <br />
	- <a href="index.php?page=0607">Masa jabatan 2006/2007</a> <br />
	- <a href="index.php?page=0708">Masa jabatan 2007/2008</a> <br />
	- <a href="index.php?page=0809">Masa jabatan 2008/2009</a> <br />
	<?
	$view=$op->cs_query("SELECT id_masa FROM tb_pengurus ORDER by id_masa DESC");
	$dt=mysql_fetch_array($view);
	$l=substr($dt['id_masa'],2,2);
	for($i=10; $i <= $l; $i++){
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
	- <a href="index.php?page=<? echo $a.$b; ?>">Masa jabatan 20<? echo $a."/20".$b; ?></a> <br /><? } ?>
	</p>
	</div>
    </div>
   </div>