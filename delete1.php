<?php
$pid=$_POST['person_id'];
$con=mysqli_connect("localhost","root","","my_db") or die(mysqli_connect_error());
$sql="delete from person where id=$pid";
$cmd=mysqli_query($con,$sql);

if($cmd == TRUE)
{
    echo "Deleted Successfully...";
    echo'<a href="delete.php">back</a>';
}

?>