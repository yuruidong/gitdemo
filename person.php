<?php 
class person{
	private $name;
	private $sex;
	function set($var,$val){
		$this->$var=$val;
	}
	function say(){
		echo $this->name.' is '.$this->sex;
	}
}
$student=new person;
$student->set('name','Tom');
$student->set('sex','male');
$student->say();
?>
