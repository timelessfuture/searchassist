<?php

// Check if requested bookmark exists.

$pageid = $_GET['pageid'];
$userid = $_GET['userid'];

//include 'dbconfig.php';

//$con = mysql_connect($dbhost,$dbuser,$dbpass);
$con = mysql_connect("localhost","root","");
mysql_select_db("searchassist") or die(mysql_error());

$result = mysql_query("SELECT COUNT(pageid) FROM bookmarks WHERE pageid='".$pageid."' AND userid='".$userid."';");

$data = array();

$row = mysql_fetch_row($result);

if(intval($row[0])>0) {
	echo json_encode( "true" );
} else {
	echo json_encode( "false" );
}

?>