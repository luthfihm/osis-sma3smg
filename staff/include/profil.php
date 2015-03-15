
   
    <div class="col_2">
    <div class="boxstaff margi20 ">
        <div align="center"><span class="titlestaff">PENGURUS OSIS</span><br />
          <span class="titlestaff2">SMA NEGERI 3 SEMARANG</span><br />
          <?
          	$a=substr($mn,0,2);
          	$b=substr($mn,2,2);
          ?>
          <strong>20<? echo $a."/20".$b; ?></strong><br /><br />	
        </div>
		<div style="overflow:auto; height:500px; width:500px">
			<?
			require_once("../plugin/qFrame/qFrame.php");
			$op=new q_sql();
			$view=$op->cs_query("SELECT * FROM tb_pengurus WHERE id_masa=$mn ORDER BY id_jabatan ASC");
			$i=1;
			while($dt=mysql_fetch_array($view)){
			$java="javascript:toggleMe('".$i."')";
			?>
			<div class="wrapper">
        	<img src="../<? echo $dt['img']; ?>" alt="" width="110" class="img-indent" />
			<h4><? echo $dt['jabatan']; ?></h4>
			<p class="margistaff" style="font-size:15px;">
			Nama	: <? echo $dt['nama']; ?><br />
			Kelas	: <? echo $dt['kelas']; ?>
  			</p>
			<p class="ppengurus">>&nbsp;<a href="<? echo $java; ?>">TUGAS <? echo $dt['jabatan']; ?></a></p>
			<span id="<? echo $i; ?>" style="display:none; float:right; width:340px; margin-top:-20px" class="tugas">
			<? echo $dt['tugas']; ?><br /><br />
			</span>
			
      	</div>
      	<br>
	  		<? $i++; } ?>  		
      </div>
	  </div>
    </div>    
   </div>

    <div class="clear"></div>
 	</div>
  