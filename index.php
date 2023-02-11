<?php
require "connection.php";
$req="select * from etudiant";
$res=$cnx->query($req);
if($res->num_rows==0){
    header('location:insert.php');
}
else{

$resultat=$res->fetch_assoc();
$cne=$resultat['cne'];
$nom=$resultat['nom'];
$prenom=$resultat['prenom'];
$dateNaissance=$resultat['dateNaissance'];

echo"
<fieldset style='border-color:black; width:150px; background-color:pink;'>
<form action='notes.php' method='post'>
<table>
<tr>
<td> <label for='cne'> cne :</label></td>
<td> <input style='border-color:red;' type='text' name='cne' value='$cne'></td>
</tr>
<tr>
<td> <label for='nom'> nom :</label></td>
<td> <input style='border-color:purple;' type='text' name='nom' value='$nom'></td>
</tr>
<tr>
<td> <label for='prenom'> prenom:</label></td>
<td> <input style='border-color:brown;' type='text' name='prenom' value='$prenom'></td>
</tr>
<tr>
<td> <label for='dtn'> Naissance </label></td>
<td> <input style='border-color:blue;' type='date' name='dtn' value='$dateNaissance'></td>
</tr>
<tr>
<td> <input  style='border-color:pink;' type='submit' name='valider' value='valider'></td>
</tr>
</table>
</form>
</fieldset>

";

}
?>