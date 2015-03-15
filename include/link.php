<?
	$op=new q_sql();
	$view=$op->cs_query("SELECT * FROM tb_link ORDER by id ASC");
?>
<p><h2 class="linkstitle">Links</h2>
    </p>
    <ul class="list">
    <? while($dt=mysql_fetch_array($view)){ ?>
    		<li><a href="<? echo $dt['link']; ?>" target="_blank"><? echo $dt['title']; ?></a></li>
			<? } ?>
    </ul>