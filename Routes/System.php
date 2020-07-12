<?php
/**
 * @package Routes
 * @Caution Heavy use of closures Ahead
 **/
 
/**
 * @route www.vtuacademy.com/Status/
 **/

$Router->get('/Status/', function() use ($Service) {
	if($Service->Config()->debug_mode_is_on()){

		echo "Monkey Do.";
	}
	else
	{
		echo "All Systems Are Go!";
	}
});


$Router->post('/info/secure',function() use ($Service) {
	phpinfo();
});

$Router->get('/app/system.install', function() use ($Service) { 
		   //////////////////////////////////////////////////////
		   /////INSTALLATION STARTS HERE//////////////////////////  
		  $Service->Prote()->DBI()->jargons()->app()->install();
});

$Router->get('/update/0.0.1/', function() use ($Service) {
		// $auth=$Service->Auth();
		// $auth->install();
	
});

