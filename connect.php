<?php
$dblocation = "localhost"; 
  $dbname = "shop"; 
  $dbuser = "root"; 
  $dbpasswd = ""; 

  $dbcnx = @mysql_connect($dblocation, $dbuser, $dbpasswd); 
  if (!$dbcnx) 
  { 
    echo "<p>Error 1 mySQL</p>"; 
    exit(); 
  } 
  if (!@mysql_select_db($dbname,$dbcnx) ) 
  { 
    echo "<p>Error 2</p>"; 
    exit(); 
  } 
$q = mysql_query("SET NAMES utf8 ");
?>