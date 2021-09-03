<?php
$page_title = "Create new user";
require_once 'includes/header.php';
require_once('includes/forconn.php');
?>
<div class="container">
	<ul class="breadcrumb bg-light">
		<li class="breadcrumb-item"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Register</li>
	</ul>

	
<div class="card border-primary mb-3 text-primary">
	<div class="row g-o">
		<div class="col-md-6">
			<div class="card-body text-center">
					
				<h1 class="card-title">REGISTER</h1>
				<p class="card-text">Please Regiser your account</p>
				<form class="row align-items-center" role="form" action="userregister.php" method="GET" enctype="text/plain">
					
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">person_outline</i></div>
							<input type="text" name="username" class="form-control" placeholder="Full Name" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">email</i></div>
							<input type="email" name="useremail" class="form-control" placeholder="Email" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">phone</i></div>
							<input type="text" name="userphone" class="form-control" placeholder="Cell Phone Number" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">home</i></div>
							<input type="text" name="useraddress" class="form-control" placeholder="Address" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
					
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">date_range</i></div>
							<input type="date" name="userdob" class="form-control" placeholder="D.O.B" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
					
						<div class="input-group">
							<div class="input-group-text"><i class="material-icons text-primary">password</i></div>
							<input type="Password" name="userpassword" class="form-control" placeholder="Password" required>
						</div>
					</div>
					<div class=" col-sm-12 mt-4">
						
						<div class="input-group">
								<div class="input-group-text"><i class="material-icons text-primary">photo</i></div>
							<input type="file" name="userimg" class="form-control" placeholder="Insert Your photo" required>
						</div>
					</div>
					<div class="col-sm-12 mt-4">
					
						<div class="d-grid">
							<button type="submit" class="btn btn-primary" name="usersubmit">Register</button>
						</div>
					</div>
			</form>
					</div></div>
					<div class="col-md-6">
						
							<a href="#"><img src="assets\img\1gf.gif" class="img-fluid" style="height: 100%;width: 100%"></a>
					
					</div>
				</div>
			</div>

</div>
<?php

require_once 'includes/footer.php';
?>