<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
// session_start();

//$_GET['corinsert'];
 if(isset($_SESSION['id'])){

        $user_id=$_SESSION['id'];
          $corid =  $_REQUEST['corid'];
        
        $cordate =  $_REQUEST['cordate'];
        $corduration = $_REQUEST['corduration'];
        $corcharges = $_REQUEST['corcharges'];
          $trainer="";

          $sql = "INSERT INTO $tblapplycourse (corid, user_id, cordate, corduration, corcharges, trainer)
VALUES ('$corid','$user_id','$cordate','$corduration','$corcharges','$trainer')";
          
if ($conn->query($sql) === TRUE) {
  echo "Applied Successfully";

   ?>
     <script type="text/javascript">
  alert "Your Course Sussefully Applied! So We Contact you Soon";

</script>
<?php

} 

else {
  echo "Error: " . $sql . "<br>" . $conn->error;

      // Performing insert query execution
  ?>
 
  <script type="text/javascript">
  alert "Not Applied";
</script>
     <?php

    }
    header( "Refresh:3; url=userprofile.php", true, 303);
    $conn->close();       
         }
            ?>               

