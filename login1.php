<?php
include 'includes/header.php';
require_once('includes/forconn.php');
      
//session_start();
$useremail ='';
$userpassword = '';
$login_status = 2;

  if ( isset($_POST['useremail']) )
    $useremail = trim($_POST['useremail']);
if ( isset($_POST['userpassword']) )
    $userpassword = trim($_POST['userpassword']);

if (!empty($username)) {
            
       /*     if (isset($_POST['useremail']) && !empty($_POST['userpassword']) 
               && !empty($_POST['$useremail'])) {
       */
    //The SQL select statement
  $query_stry = "SELECT * FROM $usertable WHERE useremail='$useremail' AND userpassword='$userpassword'";

    //Execute the query
  $result = @$conn->query($query_stry);
    if($result -> num_rows)
    {
        //It is a valid user. Need to store the user in Session Variables
     //   session_start();
        $_SESSION['login'] = $useremail;
        $result_row = $result->fetch_assoc();        
        $_SESSION['role'] = $result_row['role'];
        $_SESSION['name'] = $result_row['username'];
        $_SESSION['id'] = $result_row['user_id'];

        //update the login status
     //   $a=$login_status;
        $login_status=1;
       
      }
    
    
}
header( "Location: login.php?ls=$login_status&email=$useremail");
$conn->close();

?>