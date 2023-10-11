<?php
 $sid= $_GET['id'];
 $conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");

    $sql ="DELETE FROM student WHERE Id={$sid}";
    
    $result=mysqli_query($conn,$sql)or die("Error in Query");
   header("Location:http://localhost/VmaxInfo/index.php");
?>