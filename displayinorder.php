<?php

$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql="select*from person order by age";
$cmd=mysqli_query($con,$sql) or die(mysqli_error);

echo "<table border=1>
<tr><td colspan=3><center>Details Order by Age</center> </td>
</tr>
<tr>
<td>PERSON ID</td>
<td>PERSON NAME</td>
<td>PERSON AGE</td>
</tr>";

if(mysqli_fetch_row($cmd)>0)
{
    while($rset=mysqli_fetch_assoc($cmd))
    {
        echo "<tr>";
        echo "<td>".$rset['id']. "</td>";
        echo "<td>".$rset['name']. "</td>";
        echo "<td>".$rset['age']. "</td>";
        echo "</tr>";
    }
}
else{
    echo "NO DATA FOUND";
}
echo "</table>";
mysqli_close($con);

?>