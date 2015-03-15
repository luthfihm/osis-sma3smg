<?
require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql(); 
if(isset($_POST['simpan'])){
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
	$q=$op->cs_query("UPDATE tb_proker SET nama_proker='$_POST[nama]',title='$_POST[title]',images='$_POST[images]',proker='$cont' WHERE id ='$_POST[id]'");
	if($q){
     echo"<div id='ok'>Edit Successfully</div>";
	}else{
		echo"<div id='err'>Proses tambah info gagal dilakukan !!</div>";
	}
}
?>