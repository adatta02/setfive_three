<?php 

$form = $_REQUEST["contact"];

if($_SERVER['REQUEST_METHOD'] =='POST' && $form["is_human"] == "0xDEADBEEF"){
	$success = mail('contact@setfive.com', 
					"Setfive.com: Web contact " . date("r"), "FROM: " . $form['email'] . "\n" . stripslashes($form['message']), 
				    'From: site@setfive.com');
	echo json_encode( $success );
}else{
	die("FAIL");
}