<div>
<?
		require_once("../plugin/qFrame/qFrame.php");
		$op=new q_sql();
		$view=$op->cs_query("SELECT * FROM comesoon");
		$dt=mysql_fetch_array($view)
?>
<div id="comesoon" style="height:125px; padding-left:10px; padding-right:10px;"  class="cursor_move">
		<h2 align="center">Coming Soon</h2>
	  	<p><? echo $dt['text']; ?></p>
</div>
<?
	$v=$op->cs_query("SELECT id FROM tb_proker ORDER by id DESC");
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
		$link1="../proker/index.php?kasie=".$kas1."&&id=".$id;
		$i=3;
		$p1="";
		while ( substr($d1['proker'],$i-3,4) <> "</p>" ){
			$p1=substr($d1['proker'],3,$i-5);
			$i++;
		}
		$event1=$d1['proker'];
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
		$event2=$d2['proker'];
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
		$link2="../proker/index.php?kasie=".$kas2."&&id=".$id;
		$subsie1=$d1['subsie'];
		$subsie2=$d2['subsie'];
?>
<script src="../csspopup.js" type="text/javascript"></script>
<style type="text/css">
#blanket {
  	background-color:#111;
   opacity: 0.95;
   position:absolute;
   z-index: 9001; /*ooveeerrrr nine thoussaaaannnd*/
   top:0px;
   left:0px;
   width:100%;
}
#event1 {
	position:absolute;
	background-color:#FFFFFF;
	width:600px;
	height:500px;
	z-index: 9002;
}
#event2 {
	position:absolute;
	background-color:#FFFFFF;
	width:600px;
	height:500px;
	z-index: 9002;
}
</style>
<div ="news">
<h2 align="center">Recent Events</h2>
	<table width="100%" cellpadding="10" bgcolor="#EAEAEA">
		<tr bgcolor="#FFFFFF" class="cursor_move">
			<td>
				<h3><? echo $title1; ?></h3>
				<p style="text-align:justify;"><? echo $p1; ?>... <a href="#" onclick="popup('event1');return false;">read more</a></p>			
			</td>		
		</tr>	
		<tr bgcolor="#EAEAEA" class="cursor_move">
			<td>
				<h3><? echo $title2; ?></h3>
				<p style="text-align:justify;"><? echo $p2; ?>... <a href="#" onclick="popup('event2');return false;">read more</a></p>			
			</td>		
		</tr>
	</table>
</div>
</div>
<div id="blanket" style="display:none;"><div>
<div id="event1" style="display:none; padding-left:10px; padding-top:10px;">
	<a href="#" onclick="popup('event1');return false;">Close</a>
	<div style="height:460px; width=580px; overflow:auto; padding-left:10px; padding-right:10px;">
		<h2 align="center"><? echo $title1; ?></h2>
		<h4 align="center">Proker <? echo $subsie1; ?></h4>
		<center><img src="<? echo $img1; ?>" width="400px"></center>
		<? echo $event1; ?>
	</div>
</div>
<div id="event2" style="display:none; padding-left:10px; padding-top:10px;">
	<a href="#" onclick="popup('event2');return false;">Close</a>
	<div style="height:460px; width=580px; overflow:auto; padding-left:10px; padding-right:10px;">
		<h2 align="center"><? echo $title2; ?></h2>
		<h4 align="center">Proker <? echo $subsie2; ?></h4>
		<center><img src="<? echo $img2; ?>" width="400px"></center>
		<? echo $event2; ?>
	</div>
</div>