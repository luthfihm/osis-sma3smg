<?
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$id=$_REQUEST['id'];
	$q=$op->delete("tb_komen","id='$id'");
	if($q){
		echo "<script>alert('Komentar berhasil dihapus');</script>";
	}else{
		echo "<script>alert('Komentar gagal dihapus!!!');</script>".mysql_error();
	}
	header("location:main_menu.php?view=_main");
?>