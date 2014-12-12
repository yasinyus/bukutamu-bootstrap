<?php

/* JPEGCam Test Script */
/* Receives JPEG webcam submission and saves to local file. */
/* Make sure your directory has permission to write files as your web server user! */
$direktori="photo/";
$filename = date('YmdHis') . '.jpg';
$result = file_put_contents( $direktori.$filename, file_get_contents('php://input') );
if (!$result) {
	print "ERROR: Failed to write data to $filename, check permissions\n";
	exit();
}

$url = 'http://' . $_SERVER['HTTP_HOST'] .  dirname($_SERVER['REQUEST_URI']) . '/' . $direktori.$filename;
print "$url\n";

?>
