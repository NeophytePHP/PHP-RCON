<?php 
// Quick rcon PHP script for SMF.
// By Neo.

// Require wibbly wobbly timey wimey stuff
require("rcon.class.php");

// Change this to the root directory of your SMF forum to where SSI.php is located. 
require("/SSI.php");

// Fill this out accordingly
$setup = array( 
    "74.91.116.135", 	// Server IP
	"2705", 			// Server PORT
    "rconpassmex", 		// RCON Password
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