<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Upload</title>
<link rel="stylesheet" type="text/css" href="tema.css" />
<link rel="stylesheet" type="text/css" href="../plugin/qFrame/style/style.css" />
<script type="text/javascript" src="../plugin/jquery-1.2.3.pack.js"></script>
<script type="text/javascript" src="../plugin/jquery.validate.pack.js"></script>
<script type="text/javascript">
	function loading() {
    	document.getElementById("respon").style.visibility = "visible";
    	setTimeout("load.src = load.src",100);
    return true;
    } 
</script>
</head>
<body>
<h2 align="center" style="color:#006699;">Form Upload Images</h2>
<form action="p_upload.php" target="upload" method="post" enctype="multipart/form-data" onsubmit="loading()">
<table align="center">
	<tr>
    <td>
	<input type="file" name="file" size="30" />
    <input type="submit" name="upload" value="upload" />
    <td>
    </tr>
    <tr>
    <td align="center">
    <div style="visibility:collapse;" id="respon">
        <table>
        	<tr>
            	<td><img id="load" src="../image/loading2.gif"></td><td>&nbsp&nbsp&nbsp Uploading...</td>
            </tr>
        </table>
        </div>
     </td>
     </tr>
</table>
</form>
</body>
</html>