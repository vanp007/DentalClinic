<?php
namespace Prote\DBI\DbHelper;
use DIC\Service;
class container {
	private $Storage=array();
	private $Service;

	public function __construct(Service $Service){
		$this->Service=$Service;
	}

	public function available($class){
		if(isset($this->Storage[$class]))
			return true;
		else
			return false;
	}

	public function load($name,$path){
		if($this->available($name))
			return $this->Storage[$name];
		else
			return $this->Storage[$name]=new $path($this->Service);
	}

	public function user()
	{
		return $this->load('user','\Prote\DBI\DbHelper\user');
	}

	public function patient()
	{
		return $this->load('patient','\Prote\DBI\DbHelper\patient');
	}
}