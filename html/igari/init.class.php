<?php
/******************************************************
/init　create　2013/04/21　update　xxxx/xx/xx
/
/
******************************************************/

//=====================================================
//require
//=====================================================
class initClass {
	
	function __construct(){
		echo "fugafuga";
		self::setIncludePath("tameda");
		
	}
	
	public function setIncludePath($path) {
		
		set_include_path(get_include_path() . PATH_SEPARATOR . $path);
		echo "fugafuga";
		
	}

?>
