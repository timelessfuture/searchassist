<?php
//read (select) bookmark categories
$userid = $_GET['userid'];

//include 'dbconfig.php';
//$con = mysql_connect($dbhost,$dbuser,$dbpass);

$con = mysql_connect("localhost","root","");
mysql_select_db("searchassist") or die(mysql_error());

//only read contents
$result = mysql_query("SELECT DISTINCT category FROM categories WHERE userid = '".$userid."' ORDER BY id ASC;");
$data = array();
while ( $row = mysql_fetch_row($result) ) {
	$data[] = $row;
}
echo json_encode( $data );

?>