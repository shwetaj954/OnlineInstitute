<?php
require_once 'includes/header.php';
require_once('includes/forconn.php');
if(isset($_GET['empadelete']))
{

   
  $empaemail1=$_REQUEST['empaemail1'];
 

  $sql = "DELETE FROM $tblemploye WHERE empemail= '" .$empaemail1. "'";

  
   if($conn->query($sql)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql . "<br>" . $conn->error;
   }

 }
 else if(isset($_GET['empaupdate1']))
{
  
   $empaid1 = $_REQUEST['empaid1'];
  $empanm1 = $_REQUEST['empanm1'];
  $empaemail1 = $_REQUEST['empaemail1'];
  $empajoindate1 = $_REQUEST['empajoindate1'];
  $emppassword1 = $_REQUEST['emppassword1'];
  $empaaddress1 = $_REQUEST['empaaddress1'];
  $empaphone1 = $_REQUEST['empaphone1'];
  $empadob1 = $_REQUEST['empadob1'];
  $empafield1 = $_REQUEST['empafield1'];
  $empasubject1 = $_REQUEST['empasubject1'];
  $empaalot1 = $_REQUEST['empaalot1'];
  
//update statement
  $sql13 = "UPDATE $tblemploye SET empname='$empanm1', empemail='$empaemail1', empjoiningdate='$empajoindate1', emppassword='$emppassword1', empaddress='$empaaddress1', empcellphone='$empaphone1', empdob='$empadob1', empfield='$empafield1', empsubject='$empasubject1', empalot='$empaalot1' WHERE empid= '" .$empaid1. "'";
  if($conn->query($sql13)===TRUE)
    {
     echo"Your  Update Successfully";
     header( "Refresh:1; url=employ.php", true, 303);

    }
  else
    {

      echo"Not Updateded... " . $conn->error;
    }
}
 else if(isset($_GET['useraupdate1']))
{

  $useraid1 = $_REQUEST['useraid1'];
  $usanm = $_REQUEST['usanm'];
  $usaemail = $_REQUEST['usaemail'];
  $usaphone = $_REQUEST['usaphone'];
  $usaaddress = $_REQUEST['usaaddress'];
  $usadob = $_REQUEST['usadob'];
  $usapassword = $_REQUEST['usapassword'];
  $usarole = $_REQUEST['usarole'];
  $usaimg = $_REQUEST['usaimg'];

  
//update statement
	$sql12 = "UPDATE $usertable SET username='$usanm', useremail='$usaemail', userphone='$usaphone', useraddress='$usaaddress', userdob='$usadob', userpassword='$usapassword', role='$usarole', userimg='$usaimg' WHERE user_id= '" .$useraid1. "'";
	if($conn->query($sql12)===TRUE)
		{
	 	 echo"Your  Update Successfully";
     header( "Refresh:1; url=employ.php", true, 303);

		}
	else
		{

      
  		echo"Not Updateded... " . $conn->error;
		}
}
 else if(isset($_GET['coraupdate2']))
{
  
   $coraid = $_REQUEST['coraid'];
  $coracategorie = $_REQUEST['coracategorie'];
  $coranm = $_REQUEST['coranm'];
  $coradetail = $_REQUEST['coradetail'];
  $coraphoto = $_REQUEST['coraphoto'];
  $corayear = $_REQUEST['corayear'];
  $coracharge = $_REQUEST['coracharge'];
  $coraduration = $_REQUEST['coraduration'];
 
  
//update statement
  $sql13 = "UPDATE $tblcourse SET corid='$coraid', corcategorie='$coracategorie', corname='$coranm', cordetail='$coradetail', corimg='$coraphoto', cordate='$corayear', corcharge='$coracharge', corduration='$coraduration' WHERE corid= '" .$coraid. "'";
  if($conn->query($sql13)===TRUE)
    {
     echo"Your  Update Successfully";
     header( "Refresh:1; url=employ.php", true, 303);

    }
  else
    {
       echo"Not Updateded... " . $conn->error;
    }
}
else if(isset($_GET['applyaupdate']))
{
  
   $coraid3 = $_REQUEST['coraid3'];
  $useraid3 = $_REQUEST['useraid3'];
  $coradate3 = $_REQUEST['coradate3'];
  $coraduration3 = $_REQUEST['coraduration3'];
  $coracharege3 = $_REQUEST['coracharege3'];
  $coratrainer3 = $_REQUEST['coratrainer3'];
  
 
  
//update statement
  $sql14 = "UPDATE $tblapplycourse SET corid='$coraid3', user_id='$useraid3', cordate='$coradate3', corduration='$coraduration3', corcharges='$coracharege3', trainer='$coratrainer3' WHERE corid= '" .$coraid3. "'";
  if($conn->query($sql14)===TRUE)
    {
     echo"Your  Update Successfully";
     header( "Refresh:1; url=employ.php", true, 303);

    }
  else
    {
         
       echo"Not Updateded... " . $conn->error;
    }
}
else if(isset($_GET['openupdate2']))
{
  
   $clasaid = $_REQUEST['clasaid'];
  $clasanm2 = $_REQUEST['clasanm2'];
  $classalink2 = $_REQUEST['classalink2'];
  $classshide2 = $_REQUEST['classshide2'];
 
  
 
  
//update statement
  $sql15 = "UPDATE $tblclasslink SET clsid='$clasaid', clsname='clasanm2', clslink='$classalink2', place='$classshide2' WHERE clsid= '" .$clasaid. "'";
  if($conn->query($sql15)===TRUE)
    {
     echo"Your  Update Successfully";
     header( "Refresh:1; url=employ.php", true, 303);

    }
  else
    {
            
       echo"Not Updateded... " . $conn->error;
    }
}
 else if(isset($_GET['coradelete']))
{

   
  $coraid=$_REQUEST['coraid'];
 

  $sql1 = "DELETE FROM $tblcourse WHERE corid= '" .$coraid. "'";

  
   if($conn->query($sql1)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql1 . "<br>" . $conn->error;
   }

 }

else if(isset($_GET['opendelete2']))
{

   
  $clasaid=$_REQUEST['clasaid'];
 

  $sql2 = "DELETE FROM $tblclasslink WHERE clsid= '" .$clasaid. "'";

  
   if($conn->query($sql2)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql2 . "<br>" . $conn->error;
   }

 }
else if(isset($_GET['useradelete1']))
{

   
  $useraid1=$_REQUEST['useraid1'];
 

  $sql3 = "DELETE FROM $usertable WHERE user_id= '" .$useraid1. "'";

  
   if($conn->query($sql3)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql3 . "<br>" . $conn->error;
   }

 }
 else if(isset($_GET['conadelete1']))
{

   $conaid1=$_REQUEST['conaid1'];
 

  $sql4 = "DELETE FROM $tblcontactuser WHERE id= '" .$conaid1. "'";

  
   if($conn->query($sql4)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql4 . "<br>" . $conn->error;
   }

 }
 else if(isset($_GET['userinsert1']))
{

   $coraid3=$_REQUEST['coraid3'];
 

  $sql5 = "DELETE FROM $tblapplycourse WHERE id= '" .$coraid3. "'";

  
   if($conn->query($sql5)===TRUE){

    echo "Record Deleted Succesfully";
    header( "Refresh:1; url=employ.php", true, 303);

   }
   else
   {
    echo "Error:" .$sql5 . "<br>" . $conn->error;
   }

 }
 else
{
  echo "Something Wrong";
}
?>