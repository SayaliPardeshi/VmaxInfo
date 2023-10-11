<?php
include 'header.php';
?>
<div id="main-content">
<?php 


$conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");
$sql ="SELECT * FROM  student";
$result=mysqli_query($conn,$sql)or die("Error in Query");

//print_r($result);exit;
 if(mysqli_num_rows($result)>0)
 {

?>
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Dob</th>
        <th>Doj</th>
       
        </thead>
        <tbody>
        <?php 
        
        while($row = mysqli_fetch_assoc($result))
        {
        ?>
            <tr>
                <td><?php echo  $row['Id']; ?></td>
                <td><?php echo  $row['Name']; ?></td>
                <td><?php echo  $row['Dob']; ?></td>
                <td><?php echo  $row['Doj']; ?></td>
               
                <td>
                    <a href='edit.php?id=<?php echo  $row['Id']; ?>'>Edit</a>
                    <a href='delete-inline.php?id=<?php echo $row['Id'];?>'>Delete</a>
                </td>
            </tr>
<?php }?>
        </tbody>
    </table>
    <?php }
    else{

        echo 'No Data Found';
    }
    
    mysqli_close($conn);
    ?>
</div>

</div>
</body>
</html>
