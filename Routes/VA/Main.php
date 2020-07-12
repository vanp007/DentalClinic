<?php
/**
 * @package Routes 
 **/
$Router->get('/',function() use ($Service) { 
	include('Views/VA/index.html');
});

$Router->get('/admini',function() use ($Service){
	include('Views/VA/admini.php');
});

$Router->post('/admini',function()use ($Service){

	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if($username && $password) {
		if($user = $Service->Prote()->DBI()->DbHelper()->user()->IsUserValid($username, $password)) {
			include('Views/VA/admini.php');
		} else {
			echo "Invalid username or password. Please try again!";
		}
	}

	
});

$Router->get('/pregistration',function()use ($Service){
	include('Views/VA/pregistration.php');
});

$Router->post('/pregistration',function()use ($Service){
	$regDate   = $_POST['regDate'];
	$fname 	   = $_POST['fname'];
	$mname     = $_POST['mname'];
	$lname     = $_POST['lname'];
	$gender    = $_POST['gender'];
	$address   = $_POST['address'];
	$contact   = $_POST['contact'];
	$treatment = $_POST['treatment'];
	$cost      = $_POST['cost'];

	$message = '';

	if ($Service->Prote()->DBI()->DbHelper()->patient()->add($regDate, $fname, $mname, $lname, $gender, $address, $contact, $treatment, $cost)) {
		$message = 'Patient registered successfully...!!!';
		include('Views/VA/pregistration.php');
	}else{

	}
});


$Router->get('/patients',function()use ($Service){
	if($patients=$Service->Prote()->DBI()->DbHelper()->patient()->getAllpatients()){
		include('Views/VA/patients.php');
	}else{
		echo "Nothing Found";
	}
	
});

$Router->get('/pedit',function()use ($Service){
	if($patient=$Service->Prote()->DBI()->DbHelper()->patient()->editPatient()){
		
		include('Views/VA/pedit.php');
	}
});

$Router->post('/pedit',function()use ($Service){
	
	$regDate   = $_POST['regDate'];
	$fname 	   = $_POST['fname'];
	$mname     = $_POST['mname'];
	$lname     = $_POST['lname'];
	$gender    = $_POST['gender'];
	$address   = $_POST['address'];
	$contact   = $_POST['contact'];
	$treatment = $_POST['treatment'];
	$cost      = $_POST['cost'];

	echo var_dump($fname);

	if($Service->Prote()->DBI()->DbHelper()->patient()->editPatientSubmit($regDate, $fname, $mname, $lname, $gender, $address, $contact, $treatment, $cost, $id)){
		include('Views/VA/patients.php');
	}
	
});

$Router->get('/pdelete',function()use ($Service){
	if($patientd=$Service->Prote()->DBI()->DbHelper()->patient()->deletePatient()){
		include('Views/VA/patients.php');
	}
});

$Router->get('/uses',function()use ($Service){
	include('Views/VA/uses.php');
});

$Router->get('/summary',function()use ($Service){
	include('Views/VA/summary.php');
});

$Router->get('/testing',function()use ($Service){
	include('Views/VA/testing.php');
});

