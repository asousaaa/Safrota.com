<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<link type="text/css" rel="stylesheet" href="Customer/CSS/welcome.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Goods.com | Welcome </title>
		<meta name="author" content="hosam azzam" />
		<!-- Date: 2014-11-16 -->
	</head>
	
	<body bgcolor="#ffffff" id="dody">
    <?php

require_once('Admin/Controler.php');

class user{
    
    var $FirstName = null;
    var $Phone = null;
    var $Email = null;
    var $Password = null;
	var $LastName = null;
	var $username = null;

} 

if(isset($_POST['loginsubmit'] ) ){
	$obj = new user;
	$obj->Email=$_POST['Email'];
	$obj->Password=$_POST['Password'];
	$obj2 = new Controler;
	$obj2->Login($obj);
}

if(isset($_POST['signupsubmit'] ) ){
	$obj = new user;
	$obj->Email =$_POST['Email'];
	$obj->Password=$_POST['Password'];
	$obj->FirstName=$_POST['firstname'];
	$obj->LastName=$_POST['lastname'];
	$obj->Phone=$_POST['mobilenumber'];
	$obj2 = new Controler;
	$obj2->Sign_up($obj);
}

if(isset($_POST['logasadmin'] ) ){
	$obj = new user;
	$obj->username=$_POST['username'];
	$obj->Password=$_POST['Password'];
	
	$obj2 = new Controler;
	
	$obj2->Loginadmin($obj);
}

?>
		<center>
			<br />
			<br />
			<br />
			<br />
			<br />
			<center>
			<div id="loginScreen">
				<a href="" class="cancel">&times;</a>
               <br/>
               <form id="loginfunction"  action="" method="post"  >
               E-mail <br/>
             <input type="email" name="Email"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;" /> <br/><br/>
               Password <br/>
               <input type="password" name="Password"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px; "/>
               <br/><br/>
               <input type="submit" name="loginsubmit" value="Log in" style="font-size:24px; background-color:#ED1B7D; font-style:normal; border:hidden; "  >
			</form>
            
             <form name="admin" method="post" action="welcome.php#loginAdmin" >
               <input type="submit" name="log"  value="log in as admin ?" style="color:#264FBC; border:hidden; background:none;"  >
               </form> 
            </div>
            
            <div id="loginAdmin">
				<a href="" class="cancel">&times;</a>
               <br/>
               <form id="loginfunction"  action="" method="post"  >
               Username <br/>
             <input type="text" name="username"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;" /> <br/><br/>
               Password <br/>
               <input type="password" name="Password"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px; "/>
               <br/><br/>
               <input type="submit" name="logasadmin" value="Log in" style="font-size:24px; background-color:#ED1B7D; font-style:normal; border:hidden; "  > 
			</form>
            </div>
            
			<div id="signupScreen">
				<a href="" class="cancel">&times;</a>
                 <br/>
               <form id="signupfunction" action="" method="post"  >
               First name <br/>
             <input type="text" name="firstname" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/> <br/>
              last name <br/>
             <input type="text" name="lastname" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/> <br/>
               E-mail <br/>
             <input type="email" name="Email"  style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;" /> <br/>
               Password <br/>
               <input type="password" name="Password" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/><br/>
                Phone <br/>
               <input type="number" name="mobilenumber" style="border:hidden; height:30px; width:250px; font-style:inherit; font-size:18px;"/>
               <br/><br/>
               <input type="submit" name="signupsubmit" value="sign up" style="font-size:24px; background-color:#ED1B7D; font-style:normal; border:hidden; " /> 
			</form>
                
			</div>
			</center>
			<div id="Goods.com" align="center" style="margin-right: -60px; margin-top: -25px; height: 100px; width: 750px;">
				<div align="center" class="header_word" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #BCC820; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							S
						</center> </font>
				</div>
				<div align="center" class="header_word" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #DC042B; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							A
						</center> </font>
				</div>
				<div class="header_word" align="center"  style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #E9510E; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							F
						</center> </font>
				</div>
				<div class="header_word" align="center" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #F49600 ;  " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							R
						</center> </font>
				</div>
				<div class="header_word" align="center"  style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left; background-color: #FCC513; " >
					<font face="fantasy"  color="#012D38" size="7">
						<center>
							O
						</center> </font>
				</div>
				
			
				<div align="center" class="header_word" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #CCCE00; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							T
						</center> </font>
				</div>
				<div align="center" class="h" style="border-radius: 100%; height: 54px; width: 54px; background-color: #11cdf5;
				padding: 12px; margin-left: 15px; float: left;  background-color: #00A5A9; " >
					<font face="fantasy" color="#012D38" size="7">
						<center>
							A
						</center> </font>
				</div>
                
			</div>
			<br />
			<br />
            <br />
			<br />
			<br />
			<br />
			<br />
			<div id="login_signup" align="center" style="height: 250px; width: 700px; ">
			<a href="#loginScreen">
				<div class="login" align="center" style="height: 100px; width: 175px; margin: 25px; margin-left:100px; background-color: #33817f;
				float: left; border-radius: 75Px; padding-top: 30px;" >
				<font face="fantasy" color="#BCC820" size="7">
						<center>
							Log in
						</center> </font>
			</div></a>
				
			<a href="#signupScreen">
				<div id="log"  align="center" style="height: 100px; width: 175px; margin: 25px; margin-left:150px; background-color: #33817f;
				float: left; border-radius: 75px; padding-top: 30px; "  >
					<font face="fantasy" color="#BCC820" size="7">
						<center>
							Sign up
						</center> </font>
				</div></a>

			</div>
			
			
			
			
			
		</center>
		
	</body>
</html>

