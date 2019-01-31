<?php
/*
//connect to database

/*$first_name="";
$email="";
$erros=array();

$db=mysql_connect('localhost','root','','regi1');

//submit btn clicked

if(isset($_POST['reg_btn'])){
	$first_name=mysql_escape_string($_POST['first_name']);
	$last_name=mysql_escape_string($_POST['last_name']);
	$address=mysql_escape_string($_POST['address']);
	$city=mysql_escape_string($_POST['city']);
	$_nic=mysql_escape_string($_POST['nic']);
	$contact_no=mysql_escape_string($_POST['contact_no']);
	$gender=mysql_escape_string($_POST['gender']);
	$email=mysql_escape_string($_POST['email']);
	
	//ensure that fileds are fill properly
		if(empty($first_name)){
			array_push($erros,"first_name is required");
		}
		if(empty($last_name)){
			array_push($erros,"last_name is required");
		}
		if(empty($address)){
			array_push($erros,"address is required");
		}
		if(empty($city)){
			array_push($erros,"city is required");
		}
		if(empty($nic)){
			array_push($erros,"NIC is required");
		}
		if(empty($contact_no)){
			array_push($erros,"Contact number is required");
		}
		if(empty($gender)){
			array_push($erros,"Gender number  is required");
		}
		if(empty($email)){
			array_push($erros,"Email is required");
		}
		//if there are no errors save to database
		if(count($erros)==0){
			$sql="INSERT INTO employees('first_name','last_name','address','city','nic','contact_no','gender','email') VALUES('$first_name','$last_name','$address','$city','$nic','$contact_no','$gender','$email')";
		
		
		mysql_query($db,$sql);
		
		}
}
//another
$host="localhost";
$uname="root";
$pwd="";
$dbname="regi1";

$conn=mysqli_connect($host,$uname,$pwd);
if($conn){
	echo "successfully connected";

}

else
{
	echo "Error";
}
if(!empty($_POST['submit'])){
	echo $_POST['uname'];
$s="INSERT INTO customer(name) VALUES('abccc')";
mysqli_query($conn,$s);
}



*/
?>
<html>
<head>
<title>
register
</title>
<style>
body{
	background:#CBBB9B;
	margin:0;
	padding:0;
	font-family:"Helvetica","Arival";
}
#wrapper{
	width:auto;
	height:auto;
	background:#DAD5C1;
	border-left:5px solid #A09885;
	border-right:5px solid #A09885;
	overflow:auto;
	margin:0 auto;
	padding: 10px;
}



.outer{
     background-color:black;
	 margin bottom:20px;
	 padding: 0px;
	 }
.outer ul{
    overflow: hidden;
    list-style-type: none;
    margin: 0;
    padding: 10;
    background-color: #333;
    height: 50px;
	}

.outer li {
    float: left;
    border-right:1px solid #bbb;
}
.outer li:last-child {
    border-right: none;
}
.outer li a {
     color: white;
    padding: 14px 16px;
	text-decoration: none;
	display: block;
	text-align: center;
    
}
.active {
    background-color: #4CAF50;
}
.outer li a:hover:not(.active) {
    background-color: #111;
}
a:hover{
	font-size: 20px;
}
a{
text-decoration: none;
color: #09f;
}

.back_mid{
background-image: url("Images/leather2.jpg");
}
h1{
color:white;
text-align:center;
}
/*2px solid green*/
form{
	width: 40%;
	padding: 30px;
	border: none;
	margin: 5px auto;
}
.textInput{
	margin-top: 2px;
	height: 28px;
	border: 1px solid #5E6E66;
	font-size: 16px;
	padding: 1px;
	width: 100px;
}
#error_msg{
	width: 50%;
	margin: 5px auto;
	height: 30px;
	border: 1px solid #FF0000;
	background: #FF8988;
	color: #FF0000;
	text-align: center;
	padding-top: 10px;
}
td{
	text-align: left;
	color: white;
}
.bottom{

	/*padding: 30px;
	margin: 50px;*/
	background-color: black;	
	margin-bottom: 20px;
	padding: 0px;
	text-align: center;
	color: white;

}
.error{
	width:92%;
	margin:0px auto;
	padding: 10px;
	border: 1px solid #a94442;
	color:white;
	background: #f2dede;
	border-radius: 5px;
	text-align: left;
}

</style>
</head>
<body>
<div id ="wrapper">
	<div id="header">
		<div class="outer">
		<ul>
		<li><a href="newHome.html">HOME</a></li>
		<li><a href="aboutus.html">ABOUT US</a></li>
		<li><a href="services.html">SERVICES</a></li>
		<li><a  class="active" href="#registration.html">REGISTRATION</a></li>
		<li style="float:right"><a href="contact.html">CONTACT US</a></li>
		</ul>
		
	<div class="back_mid">
	<a href="newHome.html"><img src="Images/karcleen.jpg" width="250px" height="170px"/></a>
	<h1>REGISTRATION FORM</h1>
<form method="POST" action="registration.html">
<table>

<tr><td>First name:</td><td><input type="text" name="first_name" class="textInput"></td></tr>
<tr><td>Last name:</td><td><input type="text" name="last_name" class="textInput"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" class="textInput"></td></tr>
<tr><td>City:</td><td><input type="text" name="city" class="textInput"></td></tr>
<tr><td>NIC:</td><td><input type="text" name="nic" class="textInput"></td></tr>
<tr><td>Contact No:</td><td><input type="text" name="contact_no" class="textInput"></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="gender" class="textInput">Male<td><input type="radio" name="gender" class="textInput">Female</td></tr>
<tr><td>Email:</td><td><input type="Email" name="Email" class="textInput"></td></tr>
<tr><td>Feedback:</td><td><textarea></textarea></td></tr>
<tr><td><input type="reset" value="reset"></td><td><input type="submit" name="reg_btn" value="submit"></td></tr>
</table>

</form>
</div><!---End of a outer--->
<div class="bottom">
Follow Us On<br><br>
	<a href="https://www.twitter.com/" style="position:absolute;"><img src="Images/a3.png" width="50px" height="50px"/></a>
	<a href="https://www.facebook.com"><img src="Images/a8.png" width="50px" height="50px" /></a> 
    <a href="https://www.linkedin.com"><img src="Images/a6.png" width="50px" height="50px"/></a> 
    <a href="https://www.instagram.com/"><img src="Images/a7.png" width="50px" height="50px"/></a> 
	<a href="https://www.youtube.com"><img src="Images/a2.png" width="50px" height="50px"/></a> 
	<a href="https://www.skype.com"><img src="Images/a5.png" width="50px" height="50px"/></a> 
		<img src="Images/enviorement.png" width="180px" height="50px"><br>
		<a href="#">www.karcleen.com</a>  

	</div><!---End of a bottom--->
	</div><!--End of a header--->

</div><!---End of a wrapper--->
	
</body>
</html>
