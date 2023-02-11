<?php
require "connection.php";
$a=$_POST['cne'];
$b=$_POST['module'];
$c=$_POST['valeur'];
$req="insert into note values('$a',$b,$c)";
if(($cnx->query($req))==true)
echo"insertion ok";
?>