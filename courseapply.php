
<?php
require_once 'includes/header.php';

	
	require_once('includes/forconn.php');

	$id = $_GET['id'];

	//select course list
	$sql1 = "SELECT * FROM $tblcourse WHERE corid = '" . $id . "'";

	$result = $conn->query($sql1);

	
	 if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

?>
<div class="container text-center">
	<ul class="breadcrumb bg-light">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">About Us</li>
	</ul>

	<h1>Our Courses</h1>
		
		<div class="card border-primary mb-3">
			<div class="row g-o d-flex p-2 justify-content-center ">
				<div class="col-md-4 ">
						<a><img src="assets/img/<?php echo $row['corimg'];?>" class="card-img-top" alt="Course List" style="height: 100%;width: 100%">


						</a>
					</div>
				<div class="col-md-8">
					<div class="card-body text-center">
						<h5 class="card-title text-primary"><?php echo $row['corname'];?></h5>
						<p class="card-text"><?php echo $row['cordetail'];?>t</p>

						<p class="card-text"><small class="text-muted">Its Free</small></p>
						<div class="d-flex justify-content-center">
							<form action="corinsert.php" method="GET" enctype="text/plain">

								<a type="button" class="btn btn-primary" href="corinsert.php?corid=<?php echo $row['corid'];?>&cordate=<?php echo $row['cordate'];?>&corduration=<?php echo $row['corduration'];?>&corcharges=<?php echo $row['corcharge'];?>" name="corinsert">Apply</a>
			
								
							</form>
						</div>
						<ul class="list-groupx">
							<li class="list-group-item text-primary"><?php echo $row['corcategorie'];?></li>
							<li class="list-group-item text-primary"><?php echo $row['cordate'];?></li>
							<li class="list-group-item text-primary"><?php echo $row['corcharge'];?></li>
							<li class="list-group-item text-primary"><?php echo $row['corduration'];?></li>
						</ul>
					</div>
						
				</div>
					
				</div>
			</div>
			<?php
			}
		}
		else{
		echo "0 results";
	}
		?>
		</div>
	
