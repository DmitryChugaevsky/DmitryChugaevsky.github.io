<?php
include ("connect.php");

if($_GET[ABC]==1)
{
	
	
$q=mysql_query("SELECT * FROM admin WHERE login='$_GET[login]' AND  pass='$_GET[pass]' ");
$n=mysql_num_rows($q);
 
if($n>0){
 setcookie("login", $_GET[login]);
 $_COOKIE["login"]=$_GET["login"];
 setcookie("pass", $_GET[pass]);
 $_COOKIE["pass"]=$_GET["pass"];
 
}
}
if($_COOKIE["login"]<>"" and $_COOKIE["pass"]<>"")
	{
		$l=$_COOKIE["login"];
		$p=$_COOKIE["pass"];
		
        $q=mysql_query("SELECT * FROM admin WHERE login='$l' AND  pass='$p'");
         $n=mysql_num_rows($q);  
         if($n==1)
{
	$login=1;
}

	}
	

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Документ без названия</title>
<style type="text/css">
* { font-family:Calibri; font-size: 24px}
        p5 {font-size: 50px; color: rgba(181,71,73,1.00)}
        p2 {font-size: 26px; color: rgba(130,161,111,1.00)}
        fieldset { margin-bottom: 15px; padding: 10px }
        legend { padding: 0px 3px; font-weight: bold; font-variant: small-caps; font-size:24px }
	* { font-family: GABRIOLA ; font-size: 24px}
	a { font-family: GABRIOLA ; font-size: 80px}




body { background:  }


 
</style>
<style>





.center {
	width: 300px;
	padding:10px;
	border:1px;
	margin:auto;
	background:rgba(228,42,45,1.00);
	display:table;
	text-align:center;
}
td {
	padding:5px;
	text-align:center;
}

.col1{background:#2D3639;}
.col2{background:#2D3639;}
.col3{background:#2D3639;}
</style>

</head>

<body>


<div class='center'>
	<a href="admin.php?x=1">Операции с товаром</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="admin.php?x=2">Выход</a>
 
</div>
 
<div class="auth">
<?php
if($login==1)
{
	echo "Успешно";
}
else
{
include "auth.php";//connect to outside file with authorization fields
}
if ($_GET[x]==1 && $login==1)
{
	 
	echo"<center><h3><p5>Регистрация товара:</p5></h3></center>";

echo "<form enctype='multipart/form-data' action='admin.php' method='post'>";
echo "<center><input type='text' name='name' size='28' placeholder='Название'>";
echo"<input type='text' name='opis' size='28' placeholder='Описание'> 
<input type='text' name='cena' size='28' placeholder='цена'><input name='userfile' type='file'></center>";


echo "<input type='hidden' name='Entered' value='1'>";
echo"<input type='submit' value='отправить'>";
echo "</div>";
}
if ($_POST[Entered]!="" && $login==1)
{
	echo"!!!!!!";
	$q=mysql_query("INSERT INTO tovar (name, opis, cena) VALUES ( '$_POST[name]', '$_POST[opis]', '$_POST[cena]')");
    $id=mysql_insert_id();
	$new_name="tov/".$id.'.JPG';
	$source=$_FILES["userfile"]["tmp_name"];
	$id=mysql_insert_id();
 
	 
	move_uploaded_file($source,$new_name);
} 

i 
?>
 


</body>
</html>
