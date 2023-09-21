<?php

$pid=$_POST['person_id'];
$pname=$_POST['person_name'];
$page=$_POST['person_age'];
$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql="insert into person values($pid,'$pname',$page)";
$cmd=mysqli_query($con,$sql) or die(mysqli_error($con));
echo "RECORD SUCCESSFULLY INSERTED";
echo '<a href="program1.php">back</a>';
mysqli_close($con);
?>