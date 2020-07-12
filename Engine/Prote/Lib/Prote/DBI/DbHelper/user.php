<?php
namespace Prote\DBI\DbHelper; 
use DIC\Service;
    
class user {
    private $Service=NULL;
    public $Db=NULL; 

    public function __construct(Service $Service){
        $this->Service=$Service;
        $this->Db=$this->Service->Database();
    }

    public function IsUserValid($username, $password)
    {
    	$this->Db->set_parameters(array($username,$password));
    	$userData = $this->Db->find_one('SELECT * FROM admini_tbl where username=? and password = ?');
    	return $userData;
    }

}
?>