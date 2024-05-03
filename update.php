<?php
 error_reporting(0); 
    //create connection
    $con= mysqli_connect('127.0.0.1','root','');
    mysqli_select_db($con,'project');
    //UPDATE QUERY
  $sql = " UPDATE form1 SET  name ='$_POST[pname]',Subject1='$_POST[subject1]',Subject2='$_POST[subject2]',Subject3='$_POST[subject3]',Subject4='$_POST[subject4]',Subject5='$_POST[subject5]',
  Subject6='$_POST[subject6]',pass='$_POST[Pass]',Fail='$_POST[fail]',Absent='$_POST[absent]'
   WHERE s.no='$_POST[sno]'";
 //EXECUTE THE QUERY
if(mysqli_query($con,$sql)){
    header("refresh:1; url=intform1.php");
}
    else{
      echo "Not Update";
   

    }
?>