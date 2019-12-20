<?
namespace demo\test;

require "Done.php";
require "Di.php";
use demo\test\Di;
use demo\test\Done;

class index{
	public function __construct(){
		Di::getInstance()->set("Done",new Done());
	}
    public function ac(){
		$b= Di::getInstance()->get("Done")->setDo();
		$b= Di::getInstance()->get("Done")->get();
		echo $b;
		return $b;
          
	}


}

$a = (new index())->ac();
var_dump($a);