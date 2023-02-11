<?php
require "connection.php";
$a=$_POST['cne'];
$b=$_POST['nom'];
$c=$_POST['prenom'];
$d=$_POST['dtn'];
$req="insert into etudiant values('$a','$b','$c','$d' ) ";
if(($cnx->query($req))==false)
echo"error insertion";
else{
echo"
<fieldset style='border-color:pink; width:150px;'>
<form action='valider.php' method='post'>
<table>
    <tr>
    <td> <label for='cne'> cne </label></td>
    <td> <input style='border-color:pink;' type='text' name='cne' value='$a'></td>
    </tr>

    <tr>
    <td> <label for='module'> module </label></td>
    <td> <input style='border-color:pink;' type='text' name='module' ></td>
    </tr>

    <tr>
    <td> <label for='valeur'> note </label></td>
    <td> <input style='border-color:pink;' type='text' name='valeur' ></td>
    </tr>
    <tr>
<td> <input  style='border-color:pink;' type='submit' name='insert' value='insert'></td>
</tr>
</table>
</form>
</fieldset>
    ";

}
?>