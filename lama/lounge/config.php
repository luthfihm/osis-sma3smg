<?php 
//##############################################################
//
//   Published at: scripts.tropicalpcsolutions.com
//
//##############################################################



//##########################################
// Basic security/admin settings:
//##########################################


// Do you want to run curse filter? (0 for no 1 for yes)
$curse = "1";

 
// Do you want to display users IP addresses? (0 for no 1 for yes)
// NOTE: Admins IP never shows regardless of this setting
$showIP = "1";


// do you want to block right mouse clicks (0 for no 1 for yes)
$nr_mouse="1";


// The Guestbook admins userName 
$adminName = "OSIS";    


// Admins "username" Password. Admin enters this in order to display his name on the guestbook.
// Example: If your password is "qw23er" you would enter that as your username and "Admin" would
// be displayed. Also see $domainPass below...
$namePass = "password";   


// The below two options are so others don't post YOUR domain as theirs and for referer checking:
// Enter your domain name
$adminDomain = "osis-sman3smg.com";   

   
// Enter your domain name + the host name, ususally "www"
$domainAlias = "osis-sman3smg.com"; 
 

// Admins domain Password. Admin enters this in order to display his domain on the guestbook.
// This password is generally the same as $adminPass
$domainPass = "password"; 
         

// Do you want to ban people from posting web url's (spammers mostly) 0 for no, 1 for yes
$ban_url = "1";



//##################################################
// These settings control how the guestbook looks
//##################################################

// title of guestbook
$title = "OSIS SMAN 3 SEMARANG LOUNGE";



// display my credit/link
$display_credit = "1";


// main page background color
$main_page_bg_color = "";


// Do you want to date the entries (0 for no 1 for yes)
$dateEntries = "1";      
     
      
// Do you want the date to be, example: 03 12 04 (0 for no 1 for yes)
$shortDate = "0";     


// Do you want to display full date instead (0 for no 1 for yes)           
$longDate = "1"; 
                   

// What font do you want to use as the guestbox default
$fontFace = "arial";               


// What size should message font be
$displaySize = "2";                 
          

// Color of the top banner
$topColor = ""; 


// Color of guestbox border
$border = "";    


// If you choose to display the date then choose the color of the font here
$dateColor = "green";    


// Color of username in message entries
$nameColor = "red";  

     
// Color of homepage link if visitor enters one 
$linkColor = "orange";       


// Color of message body in entries
$messageColor = "black";           


// What background do you want for the message (0 for none or 1,2)
// Note: The 2 option may be offensive to some...sorry :)
$mesBackGround = "1";


// How wide should the guestbook be
$bookWidth = "95%";



// Path to log file (DO NOT CHANGE THIS!)
$logFileLoc = "logs/guestbook.log"; 

?>
