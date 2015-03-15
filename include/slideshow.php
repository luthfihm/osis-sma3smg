<div class="gallery_bg margi20"> <div class="bg1"></div>

    <div id="slideshow"> 
    		<?
    			$view=$op->cs_query("SELECT * FROM tb_slide ORDER BY id DESC");
				$i=1;
				while($dt=mysql_fetch_array($view)){
    		?>
        <img src="<? echo $dt['url']; ?>" alt="" width="285" height="247" />
        <? } ?>
     </div>

     <a href="#" class="our_gallery">osis gallery</a>
    </div>