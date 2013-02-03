<?php 

$form = $_REQUEST["contact"];

if($_SERVER['REQUEST_METHOD'] =='POST' && $form["is_human"] == "0xDEADBEEF"){
	$success = mail('contact@setfive.com', 
					"Setfive.com: Web contact " . date("r"), stripslashes($form['message']), 
				    'From: ' . $form['email']);
	echo json_encode( $success );
}else{
	die("FAIL");
}