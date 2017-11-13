<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
</head>

<body>
<?php


 ?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<style>
.magaz
{
	text-align:center;
width:auto;
padding:40px;
margin:auto;
background:hsla(359,67%,43%,1.00);
}
</style>
<title>Сайт Димона</title>
</head>

<body>
<div class="magaz">

<?php
include 'connect.php';
$q=mysql_query("SELECT * FROM tovar");
$n=mysql_num_rows($q);

echo "<table>";
	
echo "<caption>Magazin</caption>";
while ($f=mysql_fetch_array($q))
{



echo "<tr>";
echo "<td>$f[name]</td>";
echo "<td>$f[opis]</td>";

echo "<td><img width='100' src='tov/".$f[id].".JPG'></td>";
echo "<td>$f[cena]</td>";
echo "</tr>";

}
?>
</body>
</html>
