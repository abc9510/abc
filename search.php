<?php
$name=$_POST['name'];

$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql="select*from person where name='$name'";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));

echo "<table border=1 solid>
<tr>
<td>PERSON ID</td>
<td>PERSON NAME</td>
<td>PERSON AGE</td>
</tr>";

while($rset=mysqli_fetch_array($cmd))
{
    echo"<tr>";
    echo "<td>" .$rset['id']."</td>";
    echo "<td>" .$rset['name']."</td>";
    echo "<td>" .$rset['age']."</td>";
    echo"</tr>";
}
echo "</table>";
mysqli_close($con);
?>