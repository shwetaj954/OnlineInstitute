<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
 
?>
<div class="container">
	<ul class="breadcrumb bg-light">
		<li class="breadcrumb-item"><a href="userprofile.php">Your Profile</a></li>
		<li class="breadcrumb-item active" aria-current="page">Your Class Link</li>
	</ul>
<div class="container text-center">
	<h1 class="text-center text-primary">Your Class Link Here..</h1><br>
<div class="table-responsive">
  <table class="table">  <thead>
  	     <tr>
      <th scope="col">SR.No</th>
      <th scope="col">Course Name</th>
      <th scope="col">Course Link</th>
      <th scope="col">Social Shide</th>
    
    </tr>
      
		<?php

	$sql1 = "SELECT * FROM $tblclasslink";
  

	$result = $conn->query($sql1);

	
	 if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

?>	

  


    <tr>
      <th scope="col"><?php echo $row['clsid'];?></th>
      <th scope="col"><?php echo $row['clsname'];?></th>
      <th scope="col"><a href="<?php echo $row['clslink'];?>" target="_blank">Click Here</a></th>
      <th scope="col"><?php echo $row['place'];?></th>
    </tr>

<?php
			}

		}
		else{
		echo "0 results";
	}
		?>

	</div>
  </thead>
  

  </table>
</div>
</div>

</div><br><?php
require_once 'includes/footer.php';

?>
  <script type="text/javascript">
    alert("Your Live Classes Link Here");
  </script>
  