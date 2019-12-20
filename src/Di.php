<?php
namespace demo\test;
require 'Singleton.php';
use EasySwoole\Component\Singleton;
use demo\test\Done;
class Di{
	use Singleton;
	private $container;
	public function set( $key, $obj,...$arg){
		$this->container[$key] = array(
            "obj"=>$obj,
            "params"=>$arg,
        );
	}
	public function get($key){
		 $obj = $this->container[$key]['obj'];
         $params = $this->container[$key]['params'];
         if(is_object($obj) || is_callable($obj)){

                return $obj;
         }else if(is_string($obj) && class_exists($obj)){
                try{

                    $this->container[$key]['obj'] = new $obj(...$params);
                    return $this->container[$key]['obj'];
                }catch (\Throwable $throwable){
                    throw $throwable;
                }

        }else{
                
                return $obj;
        }
	}
} 