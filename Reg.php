<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>АВТОРИЗАЦИЯ</title>
</head><body>
<?php

include ("connect.php");
$q=mysql_query("SELECT * FROM Registr");
$n=mysql_num_rows($q);
echo"!$n";
for($i=0;$i<$n;$i++)
{
	$f=mysql_fetch_array($q);
	echo "</br>";
	
	echo "</br>";
	echo"$f[login]<br>";
	echo"$f[pass]<br>";
	$id=$f[ID];
	
	echo "</br>";
	
}
 

if($_GET['user1']=='1')
{
	$p=crypt($_GET[pass],"12");
	$q=mysql_query( "SELECT * FROM Registr WHERE login='$_GET[login]' AND  pass='$p' ");
	echo"SELECT * FROM Registr WHERE login='$_GET[login]' AND  pass='$p'";
$n=mysql_num_rows($q);
echo"!!!$n";
if($n==1)
$login=1;
else
$login=0;
	}
	
 
 

?>
</form>
 </body>
 </html>