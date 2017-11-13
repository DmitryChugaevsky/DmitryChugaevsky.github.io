<?php
 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>АВТОРИЗАЦИЯ</title>
<style>
       * { font-family:Calibri; font-size: 14px}
       p5 {font-size: 80px; color:rgba(181,71,73,1.00)}
       fieldset { margin-bottom:50px pdding: 10px}
       legend { padding: 0px 3px; font-weight: bold; font-variant: small-caps; font-size:18px }
</style>
</head>
<body>


<?php

if($_COOKIE[USERNAME]=="")
{
	
echo "<center><p>Регистрация 1</p><Br>";
echo "Профиль <Br>Name: $_COOKIE[USERNAME] ";
echo "<Br>Password: $_COOKIE[PIN] ";
 echo"<form action='admin.php' method='get' >";
echo "<input type='text'name='login' >";
echo "<input type='text'name='pass' >";
echo "<input type='submit' value='Вход' ><Br>";
echo "<input type='hidden'name='ABC'value='1' >";

echo "</form></center>";
}
else
{
echo " <legend>Вы уже залогинились</legend><br> ";
}





?>
    </body>
    </html>