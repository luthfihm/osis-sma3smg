<?	$id=$_REQUEST['id'];
			$view=$op->cs_query("SELECT * FROM tb_subsie WHERE id=$id");
			$dt=mysql_fetch_array($view);
?>
 <div class="col_2">
    <div class="boxstaff margi20 ">
<div align="center"><span class="titlesubsie"><? echo $dt['nama_subsie']; ?></span></div><br />
          <div align="left"><span class="titlesubsie2">Kasubsie: <? echo $dt['kasubsie']; ?></span></div><br />
          <br />	
        <div style="overflow:auto; height:500px; width: 505px"><div class="no_marg s1" style="width:475px">
		<img src="<? echo $dt['images']; ?>" class="img-subsie"/><br /><br />
		<? echo $dt['profil']; ?>


</div></div>
    </div>    
   </div>
   <div class="clear"></div>
 	</div>