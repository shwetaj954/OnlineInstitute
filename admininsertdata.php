<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');



if(isset($_GET['empainsert']))
{

  $empanm=$_REQUEST['empanm'];
  $empaemail=$_REQUEST['empaemail'];
  $empajoindate=$_REQUEST['empajoindate'];
  $emppassword=$_REQUEST['emppassword'];
  $empaaddress=$_REQUEST['empaaddress'];
  $empaphone=$_REQUEST['empaphone'];
  $empadob=$_REQUEST['empadob'];
  $empafield=$_REQUEST['empafield'];
  $empasubject=$_REQUEST['empasubject'];
  $empaalot=$_REQUEST['empaalot'];

 

   $sql="INSERT INTO $tblemploye VALUES (NULL, '$empanm', '$empaemail', '$empajoindate', '$emppassword', '$empaaddress', '$empaphone', '$empadob', '$empafield', '$empasubject', '$empaalot')";

    if($conn->query($sql)===TRUE){

    echo "New Record Created Succesfully";
    header( "Refresh:3; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql . "<br>" . $conn->error;
   }

 }
 else if(isset($_GET['corainsert']))
 {

   $coracategorie=$_REQUEST['coracategorie'];
  $coranm=$_REQUEST['coranm'];
  $coradetail=$_REQUEST['coradetail'];
  $coraphoto=$_REQUEST['coraphoto'];
  $corayear=$_REQUEST['corayear'];
  $coracharge=$_REQUEST['coracharge'];
  $coraduration=$_REQUEST['coraduration'];
 

   $sql1="INSERT INTO $tblcourse VALUES (NULL, '$coracategorie', '$coranm', '$coradetail', '$coraphoto', '$corayear', '$coracharge', '$coraduration')";

   if($conn->query($sql1)===TRUE){

    echo "New Record Created Succesfully";
    header( "Refresh:3; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql1 . "<br>" . $conn->error;
   }

 }
 else if(isset($_GET['opencor1']))
 {

   $clasanm=$_REQUEST['clasanm'];
  $classalink=$_REQUEST['classalink'];
  $classshide=$_REQUEST['classshide'];
 
 
    
   $sql2="INSERT INTO $tblclasslink VALUES (NULL, '$clasanm', '$classalink', '$classshide')";

   if($conn->query($sql2)===TRUE){

    echo "New Record Created Succesfully";
    header( "Refresh:3; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql2 . "<br>" . $conn->error;
   }

 }
  else if(isset($_GET['userinsert1']))
 {

  $usanm2 = $_REQUEST['usanm2'];
  $usaemail2 = $_REQUEST['usaemail2'];
  $usaphone2 = $_REQUEST['usaphone2'];
  $usaaddress2 = $_REQUEST['usaaddress2'];
  $usadob2 = $_REQUEST['usadob2'];
  $usapassword2 = $_REQUEST['usapassword2'];
  $usarole2 = $_REQUEST['usarole2'];
  $usaimg2 = $_REQUEST['usaimg2'];
 
     
      
   $sql22="INSERT INTO $usertable VALUES (NULL, '$usanm2', '$usaemail2', '$usaphone2', '$usaaddress2', 'usadob2', 'usapassword2', 'usarole2','usaimg2')";

   if($conn->query($sql22)===TRUE){

    echo "New Record Created Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql22 . "<br>" . $conn->error;
   }

 }
 else
{
  echo "Something Wrong";
}
?>