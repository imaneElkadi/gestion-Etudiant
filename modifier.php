<?php 

$a=$_GET['cne'];
$b=$_GET['codem'];

echo"
<fieldset style='border-color:pink; width:150px;'>
<form action='update.php' method='post'>
<table>
<tr>
<td> <label for='cne'> cne</label></td>
<td> <input style='border-color:red;' type='text' name='cne' value='$a' ></td>
</tr>
<tr>
<td> <label for='codem'> code Module</label></td>
<td> <input style='border-color:blue;' type='text' name='codem' value='$b' ></td>
</tr>
<td> <label for='nom'> nouvelle note</label></td>
<td> <input style='border-color:yellow;' type='text' name='nvnote' ></td>
</tr>
<tr>
<td> <input  style='border-color:brown;' type='submit' name='valider' value='valider'></td>
</tr>
</table>
</form>
</fieldset>

";
?>