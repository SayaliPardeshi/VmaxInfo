<?php
//print_r($_POST);exit;
$sid= $_POST['sid'];
$sname = $_POST['sname'];
$Dob = $_POST['Dob'];
$Doj = $_POST['Doj'];

$conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");
 $sql ="UPDATE student SET Name ='{$sname}',Dob ='{$Dob}',Doj ='{$Doj}' WHERE Id = {$sid}";
$result=mysqli_query($conn,$sql)or die("Error in Query");


header("Location:http://localhost/VmaxInfo/index.php");

?>