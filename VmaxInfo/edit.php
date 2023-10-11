<?php include 'header.php';?>

    <div id="main-content">
    <h2>Update Record</h2>
    <?php 
    
 $stud_id=$_GET['id'];
 $conn = mysqli_connect("localhost","root","","phptask") or die("Connection Error");
 $sql ="SELECT * FROM student WHERE Id = $stud_id";
 $result=mysqli_query($conn,$sql)or die("Error in Query");

 if(mysqli_num_rows($result)>0)
 {
    while($row = mysqli_fetch_assoc($result))
{
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $stud_id ?>"/>
          <input type="text" name="sname" value="<?php echo $row['Name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Dob</label>
          <input type="date" name="Dob" value="<?php echo $row['Dob']; ?>"/>
      </div>
      <div class="form-group">
          <label>Doj</label>
          <input type="date" name="Doj" value="<?php echo $row['Doj']; ?>"/>
      </div>
     
      <input class="submit" type="submit" value="Update"/>
    </form>
<?php 
}
}
?>
</div>
</div>

</body>
</html>
