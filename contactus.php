<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
?>
<div class="container">
	<ul class="breadcrumb bg-light">
		<li class="breadcrumb-item"><a href="home.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
	</ul>

	
<div class="card border-primary mb-3">
	<div class="row g-o">
		<div class="col-md-6">
			<div class="card-body text-center">
					
				<h1 class="card-title text-primary">CONTACT US</h1>
				<p class="card-text">Let's Keep in Touch</p>



				<form class="row align-items-center" role="form" action="foruserquery.php" method="get" enctype="text/plain">
					
					<div class=" col-sm-12 mt-4">
						<label class="" for="">Name</label>
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons">person_outline</i></div>
							<input type="text" name="username" class="form-control" placeholder="Name" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
						<label class="" for="">Email </label>
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons">email</i></div>
							<input type="email" name="useremail" class="form-control" placeholder="Email" required>
						</div>
					</div>
					
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
						<textarea class="form-control" placeholder="Your Query" required name="userquery"></textarea>
						</div>
					</div>
					
					<div class=" col-sm-12 mt-4">
					
						<div class="d-grid">
							<button type="submit" class="btn btn-primary" name="forcontact">Submit</button>
						</div>
					</div>
			</form>
					</div></div>
					<div class="col-md-6">
						
							<a href="contactus.php"><img src="assets/img/2gf.gif" class="" style="width: 100%;height: 100%;"></a>
					
					</div>
				</div>
			</div>

		
</div>
<?php

require_once 'includes/footer.php';
?>