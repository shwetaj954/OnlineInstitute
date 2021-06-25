<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
$page_title = "For User Contact & Help";

if(isset($_GET['forcontact']))
{
	
	$useremail=$_REQUEST['useremail'];
	$userquery=$_REQUEST['userquery'];
	$role=2;
	$username=$_REQUEST['username'];
	//execute the query
		$sql="INSERT INTO $tblcontactuser VALUES (NULL, '$useremail', '$userquery', '$role', '$username')";
		
 		 if ($conn->query($sql) === TRUE) 
 		 {
 		 	echo '<h2 class="text-center text-primary">Your Query Succesfully Sended</h2>' . '<br>' . '<p class="text-danger">Contact you soon.....</p>';
			} 
			else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}
}


$conn->close();
 
  header( "Refresh:3; url=contactus.php", true, 303)
 ?>
