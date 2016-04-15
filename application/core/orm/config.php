<?
$HOST = 'localhost';
$USER = 'username';
$PASS = 'password';
$DBN = 'dbname';
$db = mysql_connect($HOST, $USER, $PASS);
mysql_select_db($DBN, $db);
mysql_query('SET NAMES utf8;');
?>
