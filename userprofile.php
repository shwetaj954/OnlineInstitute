<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
?>
<div class="container">
	<?php

  if(isset($_SESSION['id'])){
 //session_start();

	$sql1 = "SELECT * FROM $usertable WHERE user_id=" . $_SESSION['id']; 
	$result = $conn->query($sql1);	
	 if ($result->num_rows > 0) 
   {
    while($row = $result->fetch_assoc())
    {
    ?>	
    <div class="card border-primary border-3">
      <img src="assets/img/slide2.jpg" class="card-img border border-primary border-3" alt="profile pic" width="500" height="300">
      <div class="card-img-overlay">      
       
        <h1 class="card-text text-primary" style="text-shadow: 2px 3px white;">This is Your Profile</h1>      
      </div>
      <div class="card-body bg-info bg-gradient text-light">
        <h2 class="card-title" style="text-shadow: 1px 1px 2px black,0 0 25px blue,0 0 5px darkblue;"><?php echo $row['username'];?></h2>
        <p class="card-text fw-bold">Your Address:-<?php echo $row['useraddress'];?></p>
      </div>
      <ul class="list-group list-group-flush text-center">
        <li class="list-group-item text-primary fw-bold">Your Email Address:-<?php echo $row['useremail'];?></li>
        <li class="list-group-item text-primary fw-bold">Your DOB:-<?php echo $row['userdob'];?></li>
        <li class="list-group-item text-primary fw-bold">Your Phone Number:-<?php echo $row['userphone'];?></li>
      </ul>
    <?php
			}
		}
		else{
		echo "0 results";
	  }
		?>
    </div>

    <div class="container"><a href="logout.php" class="btn btn-danger border-primary border-3 row-col-12 text-start">LogOut</a>
    <a href="classlink.php ?>" class="btn btn-danger border-primary border-3 row-col-12 text-end" target="_blank">Others Tutorial Links</a>
    <a href="certificate.php ?>" class="btn btn-danger border-primary border-3 row-col-12 text-end" target="_blank">Certificate</a>
      
    <form role="form" method="post">
    <button type="submit" class="btn btn-danger border-primary border-3 row-col-12" name="usercourse">Your Course</button></div>
    </form>
    <br></div>
    <div class="container">
      
      <div class="table-responsive">
      <table class="table text-primary bg-info">
        <thead>
          <tr>              
          <th scope="col">Course Date</th>
          <th scope="col">Course Duration</th>
          <th scope="col">Course Charges</th>
          <th scope="col">Trainer Name</th>
        </tr>
        
      <?php
      if(isset($_POST['usercourse']))
       {               
        $sql1 = "SELECT * FROM $tblapplycourse WHERE user_id=" . $_SESSION['id'];
        $result = $conn->query($sql1);  
        if ($result->num_rows > 0)
        {
          while($row = $result->fetch_assoc()) 
          {

          ?>  
          <form class="form-control" role="form" action="admindelete.php" method="GET">
            <tr>                     
            <th scope="col"><input type="text" name="coradate3" class="form-control" readonly value="<?php echo $row['cordate'];?>"></th>
              <th scope="col"><input type="text" name="coraduration3" class="form-control" readonly value="<?php echo $row['corduration'];?>"></th>
              <th scope="col"><input type="text" name="coracharege3" class="form-control" readonly value="<?php echo $row['corcharges'];?>"></th>
              <th scope="col"><input type="text" name="coratrainer3" class="form-control" readonly value="<?php echo $row['trainer'];?>"></th>             
          </tr></form>   

          <?php
          }

        }
        else{
        echo "Empty! Not Avaliable Your Course";
        }
      }
      ?>
      </div>
      </thead>
    </table>
    </div>  
  <?php

}
else
{?>
  <script type="text/javascript">
    alert("Please Login Then Open Your Profile");
  </script>
  <?php
  
   header( "Refresh:3; url=login.php", true, 303);
}
?>
</div>
<hr style="height: 20px;" >
<div container>
<?php
include 'searchcourse.php';
?>
</div></div>
<hr style="height: 20px;" >
<?php

require_once('includes/footer.php');
?>