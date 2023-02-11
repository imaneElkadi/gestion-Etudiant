
<table border=1 style='border-color:purple; border-width:5px'>
<tr style='background-color:pink;'>
<td>cne</td>
<td>code module</td>
<td>libelle</td>
<td>note</td>
<td></td>
</tr>
<tr>

<?php
require "connection.php";


$cne=$_POST['cne'];
$req="select note.cne,note.codeM,libelle,valeur from module,note where module.codeM=note.codeM and note.cne='$cne'";
$res=$cnx->query($req);
while($resultat=$res->fetch_assoc()){
    $cne=$resultat['cne'];
    $codem=$resultat['codeM'];
    $libelle=$resultat['libelle'];
    $note=$resultat['valeur'];
   
echo"

<td>$cne</td>
<td>$codem</td>
<td>$libelle</td>
<td>$note</td>
<td><a href='modifier.php?codem=$codem&cne=$cne'> modifier la note</a></td>
</tr>

";
}
?>

</tr>
</table>