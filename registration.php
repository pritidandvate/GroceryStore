<?php
session_start();
error_reporting(0);
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "not";
}
if(!mysqli_select_db($con,'freshbyte'))
{
	echo "connect";
}
if(isset($_POST['signup']))
$user=$_POST['name'];
$mail=$_POST['emailid'];
$pass=$_POST['password'];
$repass=$_POST['re_pass'];
     $sql="INSERT INTO register(name,email,pass,re_pass) VALUES ('$user','$mail','$pass','$repass')";
	 if(!mysqli_query($con,$sql))
	 {
		 echo"not reg";
	 }
	 else
	 {
		 echo'reg';
	 }
	 
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="styles/styler.css">
</head>
<body>

    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Register</h2>
                        <form method="POST" name="myform" action="" class="register-form" id="register-form" onsubmit="return myFun()">
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name" autocomplete="off" onkeyup="lettersonly(this)"/>
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="emailid" value="" myid="email" placeholder="Your Email" autocomplete="off"/>
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div>
                            <div class="form-group">
                                <input type="checkbox" name="agree-term" id="agree-term" class="agree-term" />
                                <label for="agree-term" class="label-agree-term"><span><span></span></span>I agree all statements in  <a href="#" class="term-service">Terms of service</a></label>
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="#" class="signup-image-link">I am already member</a>
                    </div>
                </div>
            </div>
        </section>

       

    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/mainr.js"></script>
	
	<script type="text/javascript">
	    function lettersonly(input){
			var name = /[^a-z]/gi;
			input.value = input.value.replace(name, "");
			
		}
		function myFun(){
			var a = document.myform.emailid.value;
            var reg = /^([a-zA-Z0-9\.-/+)@([a-zA-Z0-9-])$/;
			if(reg.test.(a))
			{
				document.getElementById("Message").innerHTML="valid";
			}
			else{
				document.getElementById("Message").innerHTML="Invalid";
			}
			/*if(a.indexOf('@')<=0{ 
				document.getElementById("Message").innerHTML="Invalid";
				return false;
				
			}
			if((a.charAt(a.length-4)!='.') && (a.charAt(a.length-3)!='.')){
				document.getElementById("Message").innerHTML="Invalid";
				return false;
			}*/
			
				
		}
		
		/*function numbersonly(input){
			var number = /[^0-9]/gi;
			input.value = input.value.replace(number, "");
			
		}*/
	
	</script>
	
</body>
</html>