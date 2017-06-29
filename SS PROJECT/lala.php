<!DOCTYPE html>
<?php
   include("configss.php");
   session_start();
   $error='';
   $f=0;
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
       // $fname = mysqli_real_escape_string($db,$_POST['fname']);
        //$lname = mysqli_real_escape_string($db,$_POST['lname']);
		$pwd= mysqli_real_escape_string($db,$_POST['mypassword']); 
	    $email=mysqli_real_escape_string($db,$_POST['email']) ;
        $dobd=mysqli_real_escape_string($db,$_POST['dob-day']);
		$dobm=mysqli_real_escape_string($db,$_POST['dob-mnt']);
		$doby=mysqli_real_escape_string($db,$_POST['dob-year']);
		$ans=2017-$doby;
		        $uname = $_POST['uname'];
				
		  
		if($ans>=18){
			 $sql = "INSERT INTO user(uname,password,dob,email) values ('$uname','$pwd',concat('$doby','-','$dobm','-','$dobd'),'$email')";
			  if(mysqli_query($db, $sql)) {
    		echo "<h1 style='color:red'>You Have successfully created an account</h1>    ";
     	 }else {
           //echo mysqli_error($db); 
		   echo "<h1 style='color:red'>Username exists</h1>    ";
		   
      }
        
	   /*if (preg_match("/^[a-zA-Z0-9._-]+@[a-zA-Z0-9-]+.[a-zA-Z.]{2,5}$/", $email)) {
	{ 
        $sql = "INSERT INTO user(uname,password,dob,email) values ('$uname','$pwd',concat('$doby','-','$dobm','-','$dobd'),'$email')";

   	 if(mysqli_query($db, $sql)) {
    		echo "<h1 style='color:red'>You Have successfully created an account</h1>    ";
     	 }else {
           echo mysqli_error($db); ;
      }
   }
	   }else
	   { 
   $error ="*email invalid";
   }*/
		}
		else $error="You are not old enough to be on this page!";
}
   

?>
<html>
<head><title>Sign up</title>
      <script type="text/javascript" >
<!--

function CheckPasswordStrength(password) {
        var password_strength = document.getElementById("password_strength");
 
        //TextBox left blank.
        if (password.length == 0) {
            password_strength.innerHTML = "";
            return;
        }
 
        //Regular Expressions.
        var regex = new Array();
        regex.push("[A-Z]"); //Uppercase Alphabet.
        regex.push("[a-z]"); //Lowercase Alphabet.
        regex.push("[0-9]"); //Digit.
        regex.push("[$@$!%*#?&]"); //Special Character.
 
        var passed = 0;
 
        //Validate for each Regular Expression.
        for (var i = 0; i < regex.length; i++) {
            if (new RegExp(regex[i]).test(password)) {
                passed++;
            }
        }
 
        //Validate for length of Password.
        if (passed > 2 && password.length > 8) {
            passed++;
			
			
			
			
			
        }
 
        //Display status.
        var color = "";
        var strength = "";
        switch (passed) {
            case 0:
            case 1:
                strength = "Weak";
                color = "red";
                break;
            case 2:
                strength = "Good";
                color = "darkorange";
                break;
            case 3:
            case 4:
                strength = "Strong";
                color = "green";
                break;
            case 5:
                strength = "Very Strong";
                color = "darkgreen";
                break;
        }
        password_strength.innerHTML = strength;
        password_strength.style.color = color;
    }

 function CheckPasswordlength(password) {
if (password.length < 8) 
        document.getElementById("password_strength").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplength less than 8";
		return false;
            }
			function Checkfname(fname) {
if (fname.length < 5) 
        document.getElementById("fnamee").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplength less than 5";
		return false;
            }

			
//-->
</script>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins">
<style>
body,h1,h2,h4,h5 {font-family: "Poppins", sans-serif;background-image:url("16.png");}
body {font-size:16px;}
.w3-half img{margin-bottom:-6px;margin-top:16px;opacity:0.8;cursor:pointer}
.w3-half img:hover{opacity:1}


#passwordStrength
{
	height:10px;
	display:block;
	float:left;
}

.strength0
{
	width:250px;
	background:#cccccc;
}

.strength1
{
	width:50px;
	background:#ff0000;
}

.strength2
{
	width:100px;	
	background:#ff5f5f;
}

.strength3
{
	width:150px;
	background:#56e500;
}

.strength4
{
	background:#4dcd00;
	width:200px;
}

.strength5
{
	background:#399800;
	width:250px;
}

</style>
<script>
function lengthcheck(password) {
if (password.length < 6)
{	
        document.getElementById("password_strength").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsplength less than 8";
	document.getElementById("txtPassword").focus();
		return false;
            }
			else{
				document.getElementById("password_strength").innerHTML = "";
			}
 }
function checkconf(conf)
{
	var pwd=document.getElementById("txtPassword").value;
	if(pwd!=conf)
	{
		document.getElementById("confrm").innerHTML = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp*password dont match";
		document.getElementById("confpwd").focus();
	}
	else{
		document.getElementById("confrm").innerHTML = "";
	}
} 
function passwordStrength(password)
{
	var desc = new Array();
	desc[0] = "Very Weak";
	desc[1] = "Weak";
	desc[2] = "Better";
	desc[3] = "Medium";
	desc[4] = "Strong";
	desc[5] = "Strongest";

	var score   = 0;

	//if password bigger than 6 give 1 point
	if (password.length > 6) score++;

	//if password has both lower and uppercase characters give 1 point	
	if ( ( password.match(/[a-z]/) ) && ( password.match(/[A-Z]/) ) ) score++;

	//if password has at least one number give 1 point
	if (password.match(/\d+/)) score++;

	//if password has at least one special caracther give 1 point
	if ( password.match(/.[!,@,#,$,%,^,&,*,?,_,~,-,(,)]/) )	score++;

	//if password bigger than 12 give another 1 point
	if (password.length > 12) score++;

	 document.getElementById("passwordDescription").innerHTML = desc[score];
	 document.getElementById("passwordStrength").className = "strength" + score;
}
</script>
</head>
<body>
<div class="w3-container" id="contact" style="margin-top:75px">
<p><a href="MainPage.php">Go back</a></p>
    <h1 class="w3-xxxlarge w3-text-red" id="su"><b>Sign up</b></h1>
    <hr style="width:50px;border:5px solid red" class="w3-round">
    <!--<p>Become a member now to access all content!</p>-->
    <form action="" method="post">
	
	    <p>
           
            <!--<label>First Name :</label><br /><input type = "text" name = "fname" class="w3-input w3-border" onfocusout="Checkfname(this.value)"/><br /><label id="fnamee" ></label><br />
            <label>Last Name :</label><br /><input type = "text" name = "lname" class="w3-input w3-border"/><br /><br />-->
			<label>User Name :</label><br /><input type = "text" name = "uname" pattern="[_]*[a-zA-Z]+[_]*[a-zA-Z0-9]*[_]*" title="Underscore/letters followed by numbers only " class="w3-input w3-border" required="required"/><br />
            <!--<label>Password  :</label><br /><input type = "password" name = "mypassword" class="w3-input w3-border" id="txtPassword" onkeyup="CheckPasswordStrength(this.value)" onfocusout="CheckPasswordlength(this.value)" /><br/>
			<label id="password_strength" ></label><br />-->
			
			<label for="pass">Password</label><input type="password" name="mypassword" placeholder="minimum 6 characters" id="txtPassword"  onfocusout="lengthcheck(this.value)" class="w3-input w3-border" onkeyup="passwordStrength(this.value)" required="required"/><br />
			<label id="password_strength" ></label><br />
			
			
			<label for="pass2">Confirm Password</label><input type="password" name="pass2" id="pass2" class="w3-input w3-border" required="required" onfocusout="checkconf(this.value)"/><br />
		    <label id="confrm" ></label><br />
			
			<label for="passwordStrength">Password strength</label>
			<div id="passwordDescription">Password not entered</div>
			<div id="passwordStrength" class="strength0"></div><br />
		
			
			<!--<label>confirm password:</label><br /><input type = "password" name = "conf" class="w3-input w3-border"/><br /><br />-->
			<label>Email :</label><br /><input type = "text" name = "email" class="w3-input w3-border" id="em" pattern="^[a-zA-Z\._\-]+[0-9]*[@][a-zA-Z]+\.[a-zA-Z\.]{2,5}$" title="abc@example.com" required="required"/><br /><br />
                  	<label>Date of birth </label><br /><br />
					<table>
					<tr><th>Day:</th>
					<td><select name="dob-day" class="w3-input w3-border" id="p0" required="required">
      <option value="">Day&nbsp&nbsp&nbsp&nbsp  </option>
      <option value="">---</option>
      <option value="01">01</option>
      <option value="02">02</option>
      <option value="03">03</option>
      <option value="04">04</option>
      <option value="05">05</option>
      <option value="06">06</option>
      <option value="07">07</option>
      <option value="08">08</option>
      <option value="09">09</option>
      <option value="10">10</option>
      <option value="11">11</option>
      <option value="12">12</option>
      <option value="13">13</option>
      <option value="14">14</option>
      <option value="15">15</option>
      <option value="16">16</option>
      <option value="17">17</option>
      <option value="18">18</option>
      <option value="19">19</option>
      <option value="20">20</option>
      <option value="21">21</option>
      <option value="22">22</option>
      <option value="23">23</option>
      <option value="24">24</option>
      <option value="25">25</option>
      <option value="26">26</option>
      <option value="27">27</option>
      <option value="28">28</option>
      <option value="29">29</option>
      <option value="30">30</option>
      <option value="31">31</option>
    </select></td></tr>
	<tr><th>month:</th>
	<td><select name="dob-mnt" class="w3-input w3-border" id="p1" required="required">
      <option value="">Month&nbsp&nbsp&nbsp&nbsp</option>
      <option value="">-----</option>
      <option value="01">January</option>
      <option value="02">February</option>
      <option value="03">March</option>
      <option value="04">April</option>
      <option value="05">May</option>
      <option value="06">June</option>
      <option value="07">July</option>
      <option value="08">August</option>
      <option value="09">September</option>
      <option value="10">October</option>
      <option value="11">November</option>
      <option value="12">December</option>
    </select></td></tr>
	<tr><th>year:&nbsp </th>
	<td><select name="dob-year" class="w3-input w3-border" id="p2" required="required">
      <option value="">Year</option>
      <option value="">----</option>
      <option value="2012">2012</option>
      <option value="2011">2011</option>
      <option value="2010">2010</option>
      <option value="2009">2009</option>
      <option value="2008">2008</option>
      <option value="2007">2007</option>
      <option value="2006">2006</option>
      <option value="2005">2005</option>
      <option value="2004">2004</option>
      <option value="2003">2003</option>
      <option value="2002">2002</option>
      <option value="2001">2001</option>
      <option value="2000">2000</option>
      <option value="1999">1999</option>
      <option value="1998">1998</option>
      <option value="1997">1997</option>
      <option value="1996">1996</option>
      <option value="1995">1995</option>
      <option value="1994">1994</option>
      <option value="1993">1993</option>
      <option value="1992">1992</option>
      <option value="1991">1991</option>
      <option value="1990">1990</option>
      <option value="1989">1989</option>
      <option value="1988">1988</option>
      <option value="1987">1987</option>
      <option value="1986">1986</option>
      <option value="1985">1985</option>
      <option value="1984">1984</option>
      <option value="1983">1983</option>
      <option value="1982">1982</option>
      <option value="1981">1981</option>
      <option value="1980">1980</option>
      <option value="1979">1979</option>
      <option value="1978">1978</option>
      <option value="1977">1977</option>
      <option value="1976">1976</option>
      <option value="1975">1975</option>
      <option value="1974">1974</option>
      <option value="1973">1973</option>
      <option value="1972">1972</option>
      <option value="1971">1971</option>
      <option value="1970">1970</option>
      <option value="1969">1969</option>
      <option value="1968">1968</option>
      <option value="1967">1967</option>
      <option value="1966">1966</option>
      <option value="1965">1965</option>
      <option value="1964">1964</option>
      <option value="1963">1963</option>
      <option value="1962">1962</option>
      <option value="1961">1961</option>
      <option value="1960">1960</option>
      <option value="1959">1959</option>
      <option value="1958">1958</option>
      <option value="1957">1957</option>
      <option value="1956">1956</option>
      <option value="1955">1955</option>
      <option value="1954">1954</option>
      <option value="1953">1953</option>
      <option value="1952">1952</option>
      <option value="1951">1951</option>
      <option value="1950">1950</option>
      <option value="1949">1949</option>
      <option value="1948">1948</option>
      <option value="1947">1947</option>
      <option value="1946">1946</option>
      <option value="1945">1945</option>
      <option value="1944">1944</option>
      <option value="1943">1943</option>
      <option value="1942">1942</option>
      <option value="1941">1941</option>
      <option value="1940">1940</option>
      <option value="1939">1939</option>
      <option value="1938">1938</option>
      <option value="1937">1937</option>
      <option value="1936">1936</option>
      <option value="1935">1935</option>
      <option value="1934">1934</option>
      <option value="1933">1933</option>
      <option value="1932">1932</option>
      <option value="1931">1931</option>
      <option value="1930">1930</option>
      <option value="1929">1929</option>
      <option value="1928">1928</option>
      <option value="1927">1927</option>
      <option value="1926">1926</option>
      <option value="1925">1925</option>
      <option value="1924">1924</option>
      <option value="1923">1923</option>
      <option value="1922">1922</option>
      <option value="1921">1921</option>
      <option value="1920">1920</option>
      <option value="1919">1919</option>
      <option value="1918">1918</option>
      <option value="1917">1917</option>
      <option value="1916">1916</option>
      <option value="1915">1915</option>
      <option value="1914">1914</option>
      <option value="1913">1913</option>
      <option value="1912">1912</option>
      <option value="1911">1911</option>
      <option value="1910">1910</option>
      <option value="1909">1909</option>
      <option value="1908">1908</option>
      <option value="1907">1907</option>
      <option value="1906">1906</option>
      <option value="1905">1905</option>
      <option value="1904">1904</option>
      <option value="1903">1903</option>
      <option value="1901">1901</option>
      <option value="1900">1900</option>
    </select></td></tr></table><br />
	<pre><input type = "submit" value = " Submit " class="w3-button w3-padding-large w3-red w3-margin-bottom"/>		<input type = "button" class="w3-button w3-padding-large w3-red w3-margin-bottom" value = " cancel " onClick="window.location='MainPage.php'"/></pre>
  </pre> </p> </form>
               
               <div style = "font-size:20px; color:#800000; margin-top:10px"><?php echo $error; ?></div>
      <!--<div class="w3-group">
        <label>Username</label>
        <input class="w3-input w3-border" type="text" name="Username" required>
      </div>
     <!-- <div class="w3-group">
        <label>Email</label>
        <input class="w3-input w3-border" type="text" name="Email" required>
      </div>
      <div class="w3-group">
        <label>Password</label>
        <input class="w3-input w3-border" type="text" name="Password" required>
      </div>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom">OK</button>
	  <p>New to this page? <a href="createss.php">Create an account</a> to access all content!</p>-->
    </form>  
  </div>
  </body>
  