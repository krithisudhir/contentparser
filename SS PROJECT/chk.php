<?php
   include("configss.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['pass']);

      $sql = "SELECT * FROM login where uname = BINARY '$myusername' and password = BINARY '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
	
      if($count == 1) {
         //session_register("myusername");

         $_SESSION['login_user'] = $myusername;
         header("location: welcomess.php");
      }else {
         //$error = "Your Login Name or Password is invalid";
      echo "Invalid username/passowrd <br /><a href='MainPage.php#su'>Go back and try again</a>";
	  }
   }
?>