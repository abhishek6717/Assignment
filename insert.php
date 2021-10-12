<?php
session_start(); 
$captcha=$_POST['captcha'];
if($_SESSION['CODE']==$captcha){
	
	echo "Thank you form is submited successfully";
}else{
	echo "Please enter valid captcha code";
}
?>