<?php 
// Quick rcon PHP script for SMF.
// By http://neophytephp.com/

// Require wibbly wobbly timey wimey stuff
require("rcon.class.php");

// Change this to the root directory of your SMF forum to where SSI.php is located. 
// require("/SSI.php");

// Fill this out accordingly
$setup = array( 
    "", 				// Server IP
	"27024", 			// Server PORT
    "", 				// RCON Password
	"ulx", 				// Admin Mod
	"", 				// Group ID (Not in use yet)
);

// Add whatever commands here
$commands = array(
	"adduser",
	"ban", 
	"kick",
	"god",
	"banid"
 );