<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kjins";
$tblcourse = "courselist";
$tblemploye = "employe";
$usertable = "user";
$userlibrary="elibrary";
$tblapplycourse="applycourse";
$tblclasslink="classlink";
$tblcontactuser="usercontact";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
else{
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<script type="text/javascript">
	alert ("Welcome My Institute");
</script>
</body>
</html>
<?php
}
?>