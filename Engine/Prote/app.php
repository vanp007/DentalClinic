<?php
/**
 * @author    Devil
 * @version   0.4 
 **/

namespace crowdPulse;
use 
Etc\Config,
Etc\AutoLoaders\AutoLoad,
DIC\Service;
date_default_timezone_set('GMT');
set_include_path(__DIR__);
require_once("Etc/Config.php");
require_once("Etc/AutoLoaders/AutoLoad.php");
$Config=new Config();
$AutoLoad=new AutoLoad($Config);
$Config->set_autoloader($AutoLoad,'standard');

//platform dependence for cloud platforms
//Based on sub domain 
$subdomain=array_shift((explode(".",$_SERVER['HTTP_HOST'])));
$platform='REMOTE';
// session_name("ProteSession");
//Set platform variable
if(getenv('OPENSHIFT_APP_NAME')){
	$platform='OPENSHIFT';
}elseif($subdomain=='dev'){
	$platform="LOCAL";
	$Config->start_debug();
}

switch ($platform) {
	case 'LOCAL':
		//Debug is off. We are on development mode.	
		$Config->set_database_user('root');
		$Config->set_database_pass('');
		$Config->set_database_name('dentalclinic');
		break;
	default:
		$Config->set_database_user('root');
		$Config->set_database_pass('');
		$Config->set_database_name('dentalclinic');
		break;
}
// $Config->stop_debug();
//Initiate Service container.	
$Service=new Service($Config);
?>
