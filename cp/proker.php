<? 
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$tbl=new q_grid();
?>
<script type="text/javascript">
function validOk(){
		if(document.getElementById("subsie").value!='null'){
			document.getElementById("go").disabled=false;
		}
	}
var xmlHttp;
		xmlHttp=createXmlHttpRequest();
		function createXmlHttpRequest() 
		{
			var xmlHttp = false;
			if (window.ActiveXObject) {
				xmlHttp = new ActiveXObject("Microsoft.XMLHTTP");
			} else {
				xmlHttp = new XMLHttpRequest();
			}
			if (!xmlHttp) {
				alert("Ops sorry We found some error!!");
			}
			return xmlHttp;
		}
		
		function setSub(frm){
			var kasie=encodeURIComponent(document.getElementById("kasie").value);
			if(xmlHttp.readyState==4 || xmlHttp.readyState==0){
				xmlHttp.open("GET","getProk2.php?kasie="+kasie);
				xmlHttp.onreadystatechange=server;
				xmlHttp.send(null);
			}else{
				setTimeout('setSub()',5000);
			}	
		}
		
		function server(){
			if(xmlHttp.readyState==1){
				document.getElementById("respon").innerHTML='<img src="../image/loading2.gif">';
			}else if(xmlHttp.readyState==4 || xmlHttp.readyState==0){		
				document.getElementById("respon").innerHTML=xmlHttp.responseText;
				document.getElementById("respon2").value=xmlHttp.responseText;
			}
		}
</script>
<div id="judul_page"> <img src="../image/point.png" border="0" align="absmiddle" /> Pilih Proker</div><br />
<form>
<table valign="center" cellpadding="1" cellspacing="1" border="0">
 <tr><td width="100px">Kasie</td><td>:</td><td>
	<select name="kasie" id="kasie" onchange="setSub();">
		<option value='null'>--Pilih Kasie--</option>
			<option value='OSIS'>OSIS</option>
			<option value='I'>Kasie I</option>
            <option value='II'>Kasie II</option>
			<option value='III'>Kasie III</option>
            <option value='IV'>Kasie IV</option>
            <option value='V'>Kasie V</option>
            <option value='VI'>Kasie VI</option>
            <option value='VII'>Kasie VII</option>
            <option value='VIII'>Kasie VIII</option>
            <option value='IX'>Kasie IX</option>
            <option value='X'>Kasie X</option>
	</select>
    </td></tr>
 </table>
</form>
<div id="respon"></div>