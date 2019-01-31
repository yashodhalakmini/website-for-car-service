<?php
//connect to database

$first_name="";
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

?>
