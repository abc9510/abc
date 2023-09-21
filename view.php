<?php

$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql="select*from person";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "<table border=1 solid>
<tr>
<td>PERSON ID</td>
<td>PERSON NAME</td>
<td>PERSON AGE</td>
</tr>";

while($rset=mysqli_fetch_array($cmd))
{
    echo " <tr> ";
    echo " <td>" .$rset['id']. "</td> ";
    echo " <td>" .$rset['name']. "</td> ";
    echo " <td>" .$rset['age']. "</td> ";
    echo " </tr> ";
}
echo "</table>";
echo '<a href="program1.php">ADD</a>';
echo '<br>';
echo '<a href="update.php">UPDATE</a>';
echo '<br>';
echo '<a href="delete.php">UPDATE</a>';
mysqli_close($con);

?>