<?php
/**
 * @package Routes
 * @Caution Heavy use of closures Ahead
 **/

//SET ERROR PAGES AND HEADERS BEFORE RUNNING THE ROUTER
$Router->before('GET', '/.*', function() {
	header('X-Powered-By: TheCrowdPulse');
});

//Custom 404
$Router->set404(function() {
	header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
	echo "OOps something failed";
}); 
?>