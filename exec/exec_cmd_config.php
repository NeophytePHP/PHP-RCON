<?php 
// Quick rcon PHP script.
// By http://neophytephp.com/

// Require wibbly wobbly timey wimey stuff
require("rcon.class.php");

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