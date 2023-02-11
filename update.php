<?php

require "connection.php";
$note=$_POST['nvnote'];
$cne=$_POST['cne'];
$codem=$_POST['codem'];

$req="update note set valeur=$note where cne='$cne' and codeM=$codem";
if(($cnx->query($req))==true)
echo"update ok";
else
echo"error";

?>
