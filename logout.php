<?php
session_start();

//destroy the session data on disk
session_destroy();

//delete the session cookie
setcookie(session_name(), '', time()-0);

//destroy the $_SESSION array
$_SESSION = array();

$page_title = "Log Out";
include('includes/header.php');

?>
<div class="container wrapper">
    <ul class="breadcrumb">
        <li><a href="home.php">Home</a></li>
        <li class="active">Log Out</li>
    </ul>
   
    
</div>

<script type="text/javascript">
    	alert="Thank you for your visit. You are now logged out.";
    </script>
<?php
header( "Refresh:1; url=home.php", true, 303);
//header( "Refresh:3; url=home.php", true, 303);
include('includes/footer.php'); ?>