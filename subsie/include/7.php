<div class="col_1">
<? require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$viewc=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VII' ORDER BY id ASC"); 
	$dtc=mysql_fetch_array($viewc)
	?>
	<div class="subsielist margi20"> <div class="bg1"></div>
	<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Subsie Seksi <? echo $dtc['kasie']; ?></h2>
	<p class="titlesubsie3">
    <?
	$view=$op->cs_query("SELECT * FROM tb_subsie WHERE kasie='VII' ORDER BY id ASC");
	$i=1;
	while($dt=mysql_fetch_array($view)){
	   echo "&bull; <a href='index.php?kasie=7&&id=".$dt['id']."'>".$dt['title']."</a> <br/>";
	   $i++;
	} ?>
    </p>
   </div>
   </div>