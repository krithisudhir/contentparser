<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<!--<?php
   include("configss.php");
   session_start();
   $error='';
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']);

      $sql = "SELECT * FROM login where uname = '$myusername' and pwd = '$mypassword'";
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
         $error = "Your Login Name or Password is invalid";
		 echo $error;
      }
   }
?>-->
<!--<html>
   <head>
      <title>Login</title>
      
      <style type = "text/css">
	  body{
	  background-color:#ffe6e6;}
         .h {
            font-family:Comic Sans MS;
            font-size:45px;
			color:#800000;
         }
		 .h1 {
            font-family:Comic Sans MS;
            font-size:25px;
			color:#800000;
			font-weight:bold;
			text-align:left;
         }
         
         .box {
                        border:#666666 solid 1px;
			width: 210px; 
			  padding: 5px;
         }
		 .button {
    background-color: #800000; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
}
		 .button {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
	border-radius: 8px;
	font-family:Comic Sans MS;
}
      </style>
      
   </head>
   
   <body >
	
      <div align = "center">
	  </div>
	  <br /><br /><br /><br /><br /><br />
            <div style = "padding:5px;"align = "center" class="h"><b>Login</b></div>	<br />
            <div align = "center">
               
               <form action = "" method = "post" align="center">
                  <label class="h1">UserName  :&nbsp</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label class="h1">Password  :&nbsp&nbsp</label><input type = "password" name = "password" class = "box" /><br/><br /><br />
                  <input type = "submit" value = " Submit " class="button"/><br />
               </form>
               
               <div style = "font-size:25px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>
					
           </div>
   </body>
</html>-->