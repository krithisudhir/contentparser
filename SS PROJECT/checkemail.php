<?php
$my_email = $_POST['email'];
if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/", $my_email)) {
<!--header("Location: new.php");-->
}
else
{
  echo "$my_email is NOT a valid email address";
}
?>