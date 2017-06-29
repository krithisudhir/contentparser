
<!DOCTYPE html>
 <!--<head> <title> Your daily dose of humor! </title>
<link rel = "stylesheet" type = "text/css" href = "jokestyle.css" ></head>-->
<html><head>
<title></title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h3,h4,h5 {font-family: "Poppins", sans-serif}
body {font-size:16px;background-image:url("16.png");}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}
</style></head>
 
<?php

$badwords = array("anal","anus","arse","ass","ballsack","balls","bastard","bitch","biatch",
"bloody","blowjob","blow job","bollock","bollok","boner","erection","boob","boobs",
"bugger","bum","butt","fingering","oral sex","condom","condoms","blow jobs",
"butthole","g-spot","asshole","arsehole","buttplug","clitoris","clit",
"cock","coon","rape","raped","molested","sexual","sexy",
"crap","cunt","damn",
"dick","dildo","dyke","fag","murdered",
"feck","fellate",
"fellatio","felching","fuck","f u c k",
"fudgepacker",
"fudge packer","flange","Goddamn",
"fucker",
"mother fucker",
"motherfucker","mofo","God damn",
"Goddammit","hell","homo","jerk","cocaine","weed","smoke up","high",
"jizz","knobend","knob end","labia","threesome","milf","nigger","nigga","penis","piss","poop","pube","pussy","pubes",
"pubic","queer","callgirl",
"scrotum","sex","hook up","prostitute","hooker","one night stand", "slept together","sleep together","sleeping together",
"shit","shiiit","sh1t",
"slut","smegma","spunk","tit","titties","tits","tosser","turd","twat","vagina","ho","hoe","wank","whore","wtf","dickshit","cockshit","cocksucker",
"dipshit","sucker","cum","fucking");
$num=0;
//$filename='expt.txt'; 
//file from which u want to read
$fname = $_GET['myjoke'];
$fp = fopen($fname, "r") or die("Unable to open file!");
//$data=file_get_contents('expt.txt');
$data=file_get_contents($fname);


$sent = preg_replace("/[^a-zA-Z 0-9]+/", " ", $data);
$sent_split = explode(" ", $sent);

// Do the check
foreach ($sent_split as $word) {
		if(in_array($word, $badwords)){
			$num++;
			
				}
			}

//echo "num of bad words= $num";<body><div class='w3-container' style='margin-top:10px'><a href='MainPage.php' class='w3-bar-item w3-button w3-hover-red' style='background-color:white'>Go back</a></div>

if($num>=2){
echo "<div class='w3-container' style='margin-top:75px'>
    <h1 class='w3-xxxlarge w3-text-red'><b>High Adult Content!</b></h1>
	<p><a class='w3-bar-item w3-button w3-hover-red' style='background-color:white' href='MainPage.php#su'> Sign up to view more </a></p>
</div>
</body>";
}
else {

echo $data;
//displays contents
}

?>
</html>
