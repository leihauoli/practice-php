<?php
/******************************************************
/init　create　2013/04/21　update　xxxx/xx/xx
/
/
******************************************************/

function setIncludePath ($path) {
	
	set_include_path (get_include_path() . DIRECTORY_SEPARATOR . $path);
	
}

?>
