<?php 
include_once("sql-settings.php");

function clean_sql($string) {
	$string = str_replace("\\", "", $string);
    $string = str_replace("'", "''", $string);
    return $string;
}
function get_sql_string($string) {
	if ( is_null($string) || $string == "" )
		return "null";
	$string = str_replace("\'", "'", $string);
	$string = str_replace("'", "''", $string);
	return "'". $string . "'";
}
function sql_execute($stmt) {
		
	global $db_hostname, $db_user, $db_password;

	$db = mysql_connect($db_hostname, $db_user, $db_password);
	if ( !$db ) {
		return FALSE;
	}
	mysql_select_db('healthivibe');
	$result = mysql_query($stmt ,$db);		
	return $result;
}
?>
