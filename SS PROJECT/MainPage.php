<html>
<title>Your Daily Dose of Humor!</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h4,h5 {font-family: "Poppins", sans-serif;background-image:url("16.png");}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style>
<frame>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-red w3-collapse w3-top w3-large w3-padding" style="z-index:3;width:300px;font-weight:bold;" id="mySidebar"><br>
  <a href="javascript:void(0)" onclick="w3_close()" class="w3-padding-xlarge w3-hide-large w3-display-topleft w3-hover-white" style="width:100%;font-size:22px">Close Menu</a>
  <div class="w3-container">
    <h3 class="w3-padding-64" style="font-family: 'Poppins', sans-serif;"><b>Daily<br>Humour</b></h3>
  </div>
  <div class="w3-bar-block">
    <a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Home</a> 
    <a href="trending.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white"> Now Tending</a> 
    <a href="classics.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Classics</a> 
    <a href="#qv" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quick View</a> 
    <a href="#su" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sign in</a> 
	 <a href="logoutss.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>
    <!--<a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Contact</a>-->
  </div>
</nav>

<!-- Top menu on small screens -->
<header class="w3-container w3-top w3-hide-large w3-red w3-xlarge w3-padding">
  <a href="javascript:void(0)" class="w3-button w3-red w3-margin-right" onclick="w3_open()">☰</a>
  <span></span>
</header>

<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:340px;margin-right:40px">

  <!-- Header -->
  <div class="w3-container" style="margin-top:80px" id="showcase">
  <?php 
  include("configss.php");
    session_start();
	$sql = "SELECT count(*) FROM user";
	$result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $no = $row['count(*)'];
    echo " We currently have"." ".$no." users on our website";
	?>
      
     
      
   
    <h1 class="w3-jumbo"><b>Laugh it off!</b></h1>
    <!--<h1 class="w3-xxxlarge w3-text-red"><b>Quick Links</b></h1>-->
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="giphy.gif" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      
    </div>

  <div class='w3-container' id='services' style='margin-top:75px'>
    <h1 class='w3-xxxlarge w3-text-red' id='qv'><b>Quick View</b></h1>
    <hr style='width:50px;border:5px solid red' class='w3-round'>
	<p><a href='ContentAnalyzer1.php?myjoke=joke1.html' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-text-red'>Three guys go to a ski lodge...</a></li>
  <p><a href='ContentAnalyzer1.php?myjoke=joke2.html' onclick='w3_close()' class='w3-bar-item w3-button w3-hover-text-red'>A teacher was...</a></li>

<p><a href="ContentAnalyzer1.php?myjoke=joke3.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">A police officer was policing...</a></li>
<p><a href="ContentAnalyzer1.php?myjoke=joke4.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">A husband comes home to find...</a> </li>
<p><a href="ContentAnalyzer1.php?myjoke=joke5.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">If a boy touches...</a></li>

<p><a href="ContentAnalyzer1.php?myjoke=joke38.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">One day a nursery school teacher...</a></li>
<p><a href="ContentAnalyzer1.php?myjoke=joke39.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">A guy is sitting at home...</a> </li>
<p><a href="ContentAnalyzer1.php?myjoke=joke40.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-text-red">Three guys stranded on a desert...</a></li>



  
  <!-- Contact -->
  <div class="w3-container" id="contact" style="margin-top:75px">
    <h1 class="w3-xxxlarge w3-text-red" id="su"><b>Sign in</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <!--<p>Become a member now to access all content!</p>-->
    <form action="chk.php" method="post">
      <div class="w3-group">
        <label>Username</label>
        <input class="w3-input w3-border" type="text" name="username" required>
      </div>
     <!-- <div class="w3-group">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>-->
      <div class="w3-group">
        <label>Password</label>
        <input class="w3-input w3-border" type="password" name="pass" required>
      </div>
      <input type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom"/>
	 
	  <p>New to this page? <a href="signup.php">Create an account</a> to access all content!</p>
    </form>  
  </div>

<!-- End page content -->
</div>

<!-- W3.CSS Container
<div class="w3-light-grey w3-container w3-padding-32" style="margin-top:75px;padding-right:58px"><p class="w3-right">Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-opacity">w3.css</a></p></div>-->

<script>
// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}

// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}
</script>

</body>
</html>
