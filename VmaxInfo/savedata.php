<?php 

$sname = $_POST['sname'];
$dob = $_POST['dob'];
$doj = $_POST['doj'];


$conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");
$sql ="INSERT INTO student(Name,Dob,Doj)VALUES('{$sname}','{$dob}','{$doj}')";
$result=mysqli_query($conn,$sql)or die("Error in Query");


header("Location:http://localhost/VmaxInfo/index.php");




?>