<?php
$pid=$_POST['person_id'];
$pname=$_POST['person_name'];
$page=$_POST['person_age'];

$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql = "UPDATE person SET name='$pname', age='$page' WHERE id='$pid'";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo"Record Updated Successfully...";
echo"<br>";
echo'<a href="update.php">Result</a>';
mysqli_close($con);
?>