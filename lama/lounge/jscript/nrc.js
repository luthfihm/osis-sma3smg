var closeWin="0"; // Do you want to close window (1 for yes 0 for no)
var alertVis="0"; // Do you want to alert the visitor (1 for yes 0 for no)
var message="You can NOT right click here"; // Your no right click message here

//  scripts.tropicalpcsolutions.com

function detail(){
	  if(alertVis == "1") alert(message); 
          if(closeWin == "1") self.close();
          return false;
}
function IE() {
     if (event.button == "2" || event.button == "3"){ detail();}
}
function NS(e) {
     if (document.layers || (document.getElementById && !document.all))
     {
          if (e.which == "2" || e.which == "3"){ detail();}
     }
}
document.onmousedown=IE;document.onmouseup=NS;document.oncontextmenu=new Function("return false");
