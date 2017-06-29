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
    <a href="ContentAnalyzer.php?myjoke=joke26.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Alcoholic Pick Up Lines</a> 
    <a href="ContentAnalyzer.php?myjoke=joke27.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Eye Left Tit</a> 
	 <a href="ContentAnalyzer.php?myjoke=joke28.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Morning Stars</a> 
	 
	 
	  <a href="ContentAnalyzer.php?myjoke=joke29.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Old Vase</a> 
	   <a href="ContentAnalyzer.php?myjoke=joke30.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Lawyer</a> 
	   
	    <a href="ContentAnalyzer.php?myjoke=joke31.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">The Lawyer And His Man</a> 
		 <a href="ContentAnalyzer.php?myjoke=joke22.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Patrick</a> 
		  <a href="ContentAnalyzer.php?myjoke=joke25.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Homeless Man</a> 
		   <a href="ContentAnalyzer.php?myjoke=joke24.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">800$</a> 
		    <a href="ContentAnalyzer.php?myjoke=joke23.html" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">GF & BF</a> 
    <!--<a href="#" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Classics</a> 
    <a href="#qv" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Quick View</a> 
    <a href="#su" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Sign in</a>-->
	 <!--<a href="logoutss.php" onclick="w3_close()" class="w3-bar-item w3-button w3-hover-white">Logout</a>-->
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
    <h1 class="w3-jumbo"><b>Laugh it off!</b></h1>
    <!--<h1 class="w3-xxxlarge w3-text-red"><b>Quick Links</b></h1>-->
    <hr style="width:50px;border:5px solid red" class="w3-round">
  </div>
  
  <!-- Photo grid (modal) -->
  <div class="w3-row-padding">
    <div class="w3-half">
      <img src="homer.gif" style="width:100%" onclick="onClick(this)" alt="Concrete meets bricks">
      <br /><br /><br /><br />
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