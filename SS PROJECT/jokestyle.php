<?php
    header("Content-type: text/css; charset: UTF-8");
	
	
    
	$color="white";
	$fontsize="10pt";
	$fontfamily="Comic sans MS";
	$textalign="center";
	$backgroundimage="yellowbg.png";
	
	
	#header {
   background: url("<?php echo $backgroundimage; ?>") repeat;
}
body {
  color: <?php echo $color; ?>;
  font-size:<?php echo $fontsize; ?>;
}
?>
