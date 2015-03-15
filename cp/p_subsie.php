<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$cnfg=new q_tools();
	
	
	$view=$op->cs_query("SELECT id FROM tb_subsie ORDER BY id DESC");
	if(mysql_num_rows($view) > 0){
		$dt=mysql_fetch_array($view);
		$no=$dt['id'];
		$noSkr=$no+1;
	}else{
		$noSkr=1;
	};
	
	$con=$_POST['content'];
	$i=0;
	$cont="";
	while ( $i < strlen($con) ){
		$cont=$cont.substr($con,$i,1);
		if (substr($con,$i,1)=="'"){
			$cont=$cont."'";
		}
	$i++;
	}

	
	$save=$op->save("tb_subsie","id,kasie,nama_subsie,title,kasubsie,images,profil","'$noSkr','$_POST[kasie]','".strtoupper($_POST['nama'])."','".strtoupper($_POST['title'])."','$_POST[kasubsie]','$_POST[images]','$cont'");
	if($save){
if ( $_POST['kasie']=="I" ) {
	$kas="1";
}else if ( $_POST['kasie']=="II" ) {
	$kas="2";
}else if ( $_POST['kasie']=="III" ) {
	$kas="3";
}else if ( $_POST['kasie']=="IV" ) {
	$kas="4";
}else if ( $_POST['kasie']=="V" ) {
	$kas="5";
}else if ( $_POST['kasie']=="VI" ) {
	$kas="6";
}else if ( $_POST['kasie']=="VII" ) {
	$kas="7";
}else if ( $_POST['kasie']=="VIII" ) {
	$kas="8";
}else if ( $_POST['kasie']=="IX" ) {
	$kas="9";
}else if ( $_POST['kasie']=="X" ) {
	$kas="10";
}
?>
			 	<div><img src="../image/sign_ok_big.png" border="0" align="absmiddle" /> <b>Proses Input Data Subsie Baru Berhasil Dilakukan.</b><br><br>
						<div>Klik <a href="../subsie/index.php?kasie=<? echo $kas; ?>&&id=<? echo $noSkr; ?>" target="_blank">disini</a> untuk melihat halaman Subsie yang baru dimasukan. 
				</div>		
				</div>
			 <?
	}else{
			echo"<div id='err'>Proses Input gagal dilakukan, mungkin data yang anda inputkan belum sesuai !!!</div> <br>
			<input type='button' value='Ulangi' onclick='history.back(1);'>";
	}
?>