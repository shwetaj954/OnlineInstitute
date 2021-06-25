
<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
$page_title = "Login";
$login_status ="";
//if(!isset( $_SESSION['login'])){
  
   //session_start();

?>
<script type="text/javascript">
	alert "You are already Login";
</script>
<div class="container">
		<div class="card border-primary mb-3">
			<div class="row g-o">
				<div class="col-md-6">
					<div class="card-body text-center">
						<h2 class="card-title text-primary">LOGIN</h2>
					
						<?php
            
         
            if( isset( $_GET['ls'] ) ) {
                $login_status = $_GET['ls'];

                $user_id = $_SESSION['id'];
                $role_id= $_SESSION['role'];
                if ($login_status == 1) {
                	if($role_id==2)
                	{
                    echo "<p class='lead'>You are logged in as <span class='text-success text-uppercase'>",$_SESSION['name'], "</span></p>";
                    echo "<p><a class='btn btn-danger' href='logout.php'>LOG OUT</a></p><br>";
                    ?>  <script type="text/javascript">
    				alert("Your Profile is Ready")
  						</script>
                    		<?php
                   			 echo "<p>Your Profile is Ready So,<a class='btn btn-link' href='userprofile.php?id=$user_id'>Go To Your Profile</a></p><br>";
                    }
                    else
                    {
                    	 echo "<p class='lead'>You are logged in as <span class='text-success text-uppercase'>",$_SESSION['name'], "</span></p>";
                    echo "<p><a class='btn btn-danger' href='logout.php'>LOG OUT</a></p><br>";
                    ?>  <script type="text/javascript">
   					 alert("Your Profile is Ready")
  						</script>
                    		<?php
                    echo "<p>Your Profile is Ready So,<a class='btn btn-link' href='employ.php?id=$user_id'>Go To Your Profile</a></p><br>";
                    }

                } elseif ($login_status == 2) {
                    
                    echo "<p class='lead text-danger'>Incorrect user name/password combination.</p>";
                } elseif ($login_status == 3) {
                    echo "<h1>Login</h1>";
                    echo "<p class='lead text-success'>Thank you. Your account has been created.</p>";
                    echo "<a class='btn btn-danger' href='logout.php'>LOG OUT</a><br>";
                    header( "Refresh:3; url=userprofile.php", true, 303);
                }
            }else {
                echo "<p class='lead'>You are not logged in. Please login or <a href='register1.php'>create</a> a new account</p>";
            }

            if ( $login_status != 1 && $login_status != 3 ) { ?>
            
			<form class="row align-items-center" role="form" action="login1.php" method="post">
				
				
				<div class=" col-sm-12 mt-4">
					<label class="" for="">Email </label>
					<div class="input-group">
						<div class="input-group-text"><i class="material-icons">email</i></div>
						<input type="Email" name="useremail" class="form-control" placeholder="Email" required>
					</div>
				</div>
				<div class=" col-sm-12 mt-4">
					<label class="" for="">Password</label>
					<div class="input-group">
						<div class="input-group-text"><i class="material-icons">password</i></div>
						<input type="Password" name="userpassword" class="form-control" placeholder="Password" required>
					</div>
				</div>
				<div class=" col-sm-12 mt-4">
				
					
						<br>
						<div class="d-grid">
						<button type="submit" class="btn btn-primary" name="login">LOGIN</button>
						</div>
						
				</div>
			</form>
				  <?php } 
			  ?>
				
					</div></div>
					<div class="col-md-6 border-primary border-2">
						<a href="#"><img src="assets/img/1gf.gif" style="width: 100%;height: 100%;" class="float-end img-fluid"></a>
					</div>
				</div>
			</div>
		
	</div>
<?php
require_once ('includes/footer.php');

?>


