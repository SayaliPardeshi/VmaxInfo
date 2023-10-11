<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="sname" />
        </div>
        <div class="form-group">
            <label>Dob</label>
            <input type="date" name="dob" />
        </div>
        <div class="form-group">
            <label>Doj</label>
             <input type="date" name="doj" />
            
 <?php 
                
 $conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");
$sql ="SELECT * FROM  student";
$result=mysqli_query($conn,$sql)or die("Error in Query");
while($row =mysqli_fetch_assoc($result))
{
?>
                

 <?php }?>
      
        </div>
       
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
