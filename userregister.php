<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		body{
			background-color: skyblue;
			text-align: center;
			color:blue;
		}
	</style>
</head>
<body>

<?php
session_start();
$page_title = "Register New Account";
require_once('includes/forconn.php');



if (isset($_GET['usersubmit'])) {
    $username=$_REQUEST['username'];
    $useremail=$_REQUEST['useremail'];
    $userphone=$_REQUEST['userphone'];
    $useraddress=$_REQUEST['useraddress'];
    $userdob=$_REQUEST['userdob'];
    $userpassword=$_REQUEST['userpassword'];
    $userimg=$_REQUEST['userimg'];
    $role=2;
    $query_str = "SELECT * FROM user WHERE useremail='$useremail' && userpassword='$userpassword'";

    //execute the query
    $result = @$conn->query($query_str);

    //handle error
    if (!$result) {
        $errno = $conn->errno;
        $errmsg = $conn->error;
        echo "Insertion failed with: ($errno) $errmsg<br/>\n";
        $conn->close();
        exit;
    }

  
		
	if ($result -> num_rows === 0) 
	{
		$sql="INSERT INTO user VALUES (NULL, '$username', '$useremail', '$userphone', '$useraddress', '$userdob', '$userpassword', '$role', '$userimg')";
		 $insert_result = @$conn->query($sql);

		$new_result = @$conn->query($query_str);
		//It is a valid user. Need to store the user in Session Variables
		$_SESSION['login'] = $useremail;
		$result_row = $new_result->fetch_assoc();
		$_SESSION['role'] = $role;
		$_SESSION['name'] = $username;
		$_SESSION['id'] = $result_row['user_id'];
		//update the login status
		$login_status = 3;
			echo "<h3>Signup Successfully.Please Login and Start Your Journey</h3>";
			?>
			<script type="text/javascript">
			alert("Please Login Then Open Your Profile")
		</script>
		
		<?php
		session_unset();
		session_destroy();
	} 
	else {
   echo "<h3>Already you Regisyer.Please Login and Start Your Journey</h3>";
  ?>
    <script type="text/javascript">
    alert("Already you Regisyer.Please Login and Start Your Journey")
  </script>
  <?php
}
}
 header( "Refresh:3; url=register1.php", true, 303)

?>
</body>
</html>
