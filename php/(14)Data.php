<?php
	$f_name=$_GET['fname'];
	$l_name=$_GET['lname'];
	$email=$_GET['mail'];
	$gen=$_GET['radio1'];
	$cno=$_GET['mno'];
	$add=$_GET['address'];
	$coname=$_GET['cname'];
	$eno=$_GET['eno'];
	$c_name=$_GET['course'];
	$s_no=$_GET['csem'];
	$hobby="";
	$hobby1=$_GET['check1'];
	$hobby2=$_GET['check2'];
	$hobby3=$_GET['check3'];
	$hobby = $hobby1." ".$hobby2." ".$hobby3;
	
	echo "First Name:- ".$f_name."<br>";
	echo "Last Name:- ".$l_name."<br>";
	echo "Email ID:- ".$email."<br>";
	echo "Gender:- ".$gen."<br>";
	echo "Contact No:- ".$cno."<br>";
	echo "Address:- ".$add."<br>";
	echo "Collage Name:- ".$coname."<br>";
	echo "Enrollment No:- ".$eno."<br>";
	echo "Course:- ".$c_name."<br>";
	echo "Current Sem:- ".$s_no."<br>";
	echo "Hobbies:- ".$hobby."<br>";
?>