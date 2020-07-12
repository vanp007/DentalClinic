<?php
namespace Prote\DBI\jargons;
use DIC\Service;

class crawler {
    private $Service=NULL;
    public $Db=NULL; 

    public function __construct(Service $Service){
        $this->Service=$Service;
        $this->Db=$this->Service->Database();
        $this->crawlPage("https://upmsp.edu.in/","Images/blinking_new.gif");
    }

    public function crawlPage($url,$needle)
    {
    	$html = file_get_contents($url);
		$lastPos = 0;
		$positions = array();

		while (($lastPos = strpos($html, $needle, $lastPos))!== false) {
		    $positions[] = $lastPos;
		    $lastPos = $lastPos + strlen($needle);
		}
		$content = "";
		foreach ($positions as $value) {
			for($i=($value+28);$i<strlen($html) && ($html[$i].$html[$i+1].$html[$i+2].$html[$i+3].$html[$i+4])!="</tr>";$i++)
			{
				$content = $content . $html[$i];
			}
			$content = preg_replace('/\s+\n*/',' ',$content);
			$content = preg_replace('/<\/td> <td .*> <a/','<a',$content);
			$content = preg_replace('/<\/span><\/b><\/a>&nbsp; <\/td>/','</a>',$content);
			//echo var_dump($connection_timeout()ent);
			$this->Db->set_parameters(array($url,$content));
			$this->Db->query('INSERT INTO `web_crawler_log` (`page_url`,`log`) VALUES (?,?)');
		}
    }

    public function getLog()
    {
    	return $this->Db->find_many("SELECT log,created_dt from web_crawler_log");
    }
}