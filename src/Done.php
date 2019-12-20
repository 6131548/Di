<?php
namespace demo\test;
class Done{
	private $find;
	public function __construct(){
		$this->find='abcd';
	}
	public function setDo(){
		return $this->find;
	}
	public function get(){
		return 1233;
	}
}
