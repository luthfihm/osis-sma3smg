<?php
// credit to scripts.tropicalpcsolutions.com. by admin ligasha 2010
if(isset($_POST['submit'])){
$name = $_POST['name'];
$message = $_POST['message'];
	$name=trim($name); 
	$message=trim($message);
	$urlt=$_SERVER['PHP_SELF'];
	if(stristr($name, 'admin') != FALSE){ echo "<script>alert('ERROR: That username is banned from gerneral use. Please try again.'); location.href='".$urlt."';</script>";
                  exit;}
	if(stristr($name, $adminName) != FALSE){ echo "<script>alert('ERROR: That username is banned from gerneral use. Please try again.'); location.href='".$urlt."';</script>";
                  exit;}
        if($name == $namePass) {$name = $adminName; $showIP = 0;}
	if (!$name || $name == "your name"){$name = "Anonymous:";} 
        else{$name .= "";}
        
        if (!$message || $message == "your message") {
                  echo "<script>alert('ERROR: You must enter a valid message in order to post. Please try again.'); location.href='".$urlt."';</script>";
                  exit;
        }
		
		// word filter
		if(stristr($message, 'asu') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'bajingan') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'tai') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'kontol') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'jembut') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'jembud') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'silit') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'manuk') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'lonte') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'kopet') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'fuck') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'ass') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'asshole') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'bitch') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'suck') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'porn') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'babes') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
if(stristr($message, 'blowjob') != FALSE){ echo "<script>alert('ERROR: No DIRTY word, please! -OSIS SMAN 3'); location.href='".$urlt."';</script>";
                  exit;}
	
	$name = preg_replace("/>/","&gt;",$name); 
	$name = preg_replace("/</","&lt;",$name);
		if(stristr($message, 'http') != FALSE){ no_url(); }
		if(stristr($message, '[url]') != FALSE){no_url(); }
		if(stristr($message, '.com') != FALSE){ no_url(); }
		if(stristr($message, '.net') != FALSE){ no_url(); }
		if(stristr($message, '://') != FALSE){ no_url(); }
		if(stristr($message, 'ftp://') != FALSE){ no_url(); }
		if(stristr($message, 'www') != FALSE){ no_url(); }
		if(stristr($message, '[dot]') != FALSE){ no_url(); }
		if(stristr($message, '\'dot\'') != FALSE){ no_url(); }
		if(stristr($message, '"dot"') != FALSE){ no_url(); }
		if(stristr($message, '.org') != FALSE){ no_url(); }
		if(stristr($message, '[url') != FALSE){ no_url(); }
		if(stristr($message, '&#119&#119&#119') != FALSE){ no_url(); }
		if(stristr($message, '&#99&#111&#109') != FALSE){ no_url(); }
		
        if($curse == "1"){ 
		//$message = preg_replace("/ass/i","****",$message);
		$message = preg_replace("/bastard/i","****",$message);
		$message = preg_replace("/bitch/i","****",$message);
		$message = preg_replace("/bitches/i","****",$message);
		$message = preg_replace("/blowjob/i","****",$message);
		$message = preg_replace("/blowme/i","****",$message);
		$message = preg_replace("/blow me/i","****",$message);
        	$message = preg_replace("/clit/i","****",$message);
		$message = preg_replace("/cock/i","****",$message);
		$message = preg_replace("/coochie/i","****",$message);
        	$message = preg_replace("/cum/i","****",$message);
		$message = preg_replace("/cunt/i","****",$message);
		$message = preg_replace("/damn/i","****",$message);
		$message = preg_replace("/damnit/i","****",$message);
		$message = preg_replace("/dick/i","****",$message);
		$message = preg_replace("/dickhead/i","****",$message);
        	$message = preg_replace("/dildo/i","****",$message);
        	$message = preg_replace("/faggot/i","****",$message);
        	$message = preg_replace("/fagot/i","****",$message);
        	$message = preg_replace("/fags/i","****",$message);
        	$message = preg_replace("/felatio /i","****",$message);
		$message = preg_replace("/fuck/i","****",$message);
        	$message = preg_replace("/fuk/i","****",$message);
        	$message = preg_replace("/gangbang/i","****",$message);
        	$message = preg_replace("/goddamn/i","****",$message);
        	$message = preg_replace("/jack-off/i","****",$message);
        	$message = preg_replace("/jerk-off/i","****",$message);
        	$message = preg_replace("/jism/i","****",$message);
        	$message = preg_replace("/jiz/i","****",$message);
        	$message = preg_replace("/jackoff/i","****",$message);
        	$message = preg_replace("/jerkoff/i","****",$message);
        	$message = preg_replace("/kum/i","****",$message);
        	$message = preg_replace("/nigger/i","****",$message);
        	$message = preg_replace("/niggar/i","****",$message);
        	$message = preg_replace("/niger/i","****",$message);
        	$message = preg_replace("/nigar/i","****",$message);
        	$message = preg_replace("/phuk/i","****",$message);
        	$message = preg_replace("/phuked/i","****",$message);
        	$message = preg_replace("/phuck/i","****",$message);
        	$message = preg_replace("/phucked/i","****",$message);
        	$message = preg_replace("/phuq/i","****",$message);
        	$message = preg_replace("/piss/i","****",$message);
		$message = preg_replace("/prick/i","****",$message);
        	$message = preg_replace("/pussies/i","****",$message);
		$message = preg_replace("/pussy/i","****",$message);
		$message = preg_replace("/schlong/i","****",$message);
		$message = preg_replace("/shit/i","****",$message);
		$message = preg_replace("/shmuck/i","****",$message);
		$message = preg_replace("/tits/i","****",$message);
		$message = preg_replace("/twat/i","****",$message);
	}
	$message = str_replace("[1]","<img src='images/smile.gif'>",$message);
	$message = str_replace("[2]","<img src='images/smile-2.gif'>",$message);
	$message = str_replace("[3]","<img src='images/wacko.gif'>",$message);
	$message = str_replace("[4]","<img src='images/unsure.gif'>",$message);
	$message = str_replace("[5]","<img src='images/toung.gif'>",$message);
	$message = str_replace("[6]","<img src='images/suspicious.gif'>",$message);
	$message = str_replace("[7]","<img src='images/wink.gif'>",$message);
	$message = str_replace("[8]","<img src='images/worried.gif'>",$message);
	$message = str_replace("[9]","<img src='images/weird.gif'>",$message);
	$message = str_replace("[10]","<img src='images/sad.gif'>",$message);
	$message = str_replace("[11]","<img src='images/sick.gif'>",$message);
	$message = str_replace("[12]","<img src='images/sad.gif'>",$message);
	$message = str_replace("[13]","<img src='images/sad-2.gif'>",$message);
	$message = str_replace("[14]","<img src='images/rolleyes.gif'>",$message);
	$message = str_replace("[15]","<img src='images/wink.gif'>",$message);
	$message = str_replace("[16]","<img src='images/push.gif'>",$message);
	$message = str_replace("[17]","<img src='images/oh.gif'>",$message);
	$message = str_replace("[18]","<img src='images/amazed.gif'>",$message);
	$message = str_replace("[19]","<img src='images/nuts.gif'>",$message);
	$message = str_replace("[20]","<img src='images/noworry.gif'>",$message);
	$message = str_replace("[21]","<img src='images/notrust.gif'>",$message);
	$message = str_replace("[22]","<img src='images/mad.gif'>",$message);
	$message = str_replace("[23]","<img src='images/laugh.gif'>",$message);
	$message = str_replace("[24]","<img src='images/huh.gif'>",$message);
	$message = str_replace("[25]","<img src='images/embarrest.gif'>",$message);
	$message = str_replace("[26]","<img src='images/crying.gif'>",$message);
	$message = str_replace("[27]","<img src='images/cool.gif'>",$message);
	$message = str_replace("[28]","<img src='images/confused.gif'>",$message);
	$message = str_replace("[29]","<img src='images/cheesy.gif'>",$message);
	$message = str_replace("[30]","<img src='images/blink.gif'>",$message);
	$message = str_replace("[31]","<img src='images/amazed.gif'>",$message);
	$message = str_replace("[32]","<img src='images/bigsmile.gif'>",$message);
	$message = str_replace("[33]","<img src='images/amuse.gif'>",$message);
	$message = str_replace("<","&lt;",$message);
	$message = str_replace(">","&gt;",$message);
	$message = stripslashes($message);
	$msg="";
	$i=0;
	while ( $i < strlen($message) ){
		$msg=$msg.substr($message,$i,1);
		if (substr($message,$i,1)=="'"){
			$msg=$msg."'";
		}
	$i++;
	}
	$timezone = "Asia/Bangkok";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);
	$date = date('F j, Y, H:i')." WIB";
	require_once("../plugin/qFrame/qFrame.php");
	$op=new q_sql();
	$q=$op->save("tb_komen","user,coment,date","'$name','$msg','$date'");
	if($q){
		//echo "</script><meta http-equiv='refresh' content='1' />";
	}else{
		echo "<script>alert('Komentar gagal dilakukan !!!');</script>".mysql_error();
	}
}
?>
<?php if ($nr_mouse=="1"){echo "<script src='jscript/nrc.js'></script>";} ?>
<script src='jscript/<?php echo $ip ?>.js'></script>
<form method="POST" style="margin=0" action="<? $_SERVER['PHP_SELF'];?>">

 <div class="col_2">
    <div class="boxwelcome margi20 ">
        <h2><p class="p1">The Lounge</p></h2>
	<table><tr> 
        <td>
	<tr><td><font size="1" face= <?php echo $fontFace ?> ><b>Enter your name:</b></font> <input type="text" name="name" value=""  style="width:475px">
        </td></tr>
	<tr>
        <td>
        <font size="1" face=arial><b>Post:</b></font><textarea name="message" rows="4" style="width:100%"></textarea>        </td></tr>
	<tr>
        <td align="center">
	<br>
		
		<input type='submit' name='submit' value='Leave comment'>  &nbsp;&nbsp; 
		<input type='reset' value='Reset Form'><br /><br />
    </td></tr></table>
</td></tr>
		</form>
        <a href="../" class="next"><img src="images/arrow_right.png" alt="HOME" class="png" /></a>    </div>
    <div class="box_main">
    	<div class="bg2"></div>
        <h1><strong class="n1">THE</strong> <strong class="n2">LOUNGE</strong></h1>
        <div class="wrapper">
        	<tr><td>
	<table width="100%" bgcolor="" cellspacing="0" cellpadding="2">
	
	<tr height="100%">
        <td height="378">
        <iframe src="read_data.php" width="100%" height="100%" frameborder="0" scrolling="auto"></iframe>        </td></tr></table>
      </div>
    </div>
    </div>



