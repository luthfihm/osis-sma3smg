<?
		require_once("plugin/qFrame/qFrame.php");
		$op=new q_sql();
		$view=$op->cs_query("SELECT * FROM comesoon");
		$dt=mysql_fetch_array($view)
?>
<h2>Coming Soon</h2>
	<center>
	  <? echo $dt['text']; ?> <br />
	<b>FOLLOW US ON TWITTER! @whatsupsmaga</b></center>