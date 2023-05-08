<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_forum = "localhost";
$database_forum = "forum";
$username_forum = "root";
$password_forum = "";
//$forum = mysqli_connect($hostname_forum, $username_forum, $password_forum, $database_forum) or trigger_error(mysql_error(),E_USER_ERROR); 
$forum = new mysqli($hostname_forum, $username_forum, $password_forum, $database_forum);
/*
if (!function_exists("GetSQLValueString")) {
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  if (PHP_VERSION < 6) {
    $theValue = get_magic_quotes_gpc() ? stripslashes($theValue) : $theValue;
  }

//  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($database_forum, $theValue) : mysql_escape_string($theValue);
  $theValue = function_exists("mysqli_real_escape_string") ? mysqli_real_escape_string($forum, $theValue) : mysql_escape_string($theValue);

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? doubleval($theValue) : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}
}
*/
?>