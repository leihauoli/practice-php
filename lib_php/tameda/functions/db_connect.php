<?php
/******************************************************
/DB接続　create　2013/04/21　update　xxxx/xx/xx
/
/
******************************************************/

//=====================================================
//require
//=====================================================
require_once "dbini.php";

class dbClass {
	
	public function dbConnect() {
		
		$connect = new mysqli(C_DB_HOSTNAME, C_DB_USERNAME, C_DB_USERPASS, C_DB_NAME);
		
		if ($connect->connect_error) {
			$error = "エラー番号：" . $connect->connect_errno . "." . $connect->connect_error;
		} else {
			return $connect;
		}
	}
}

?>
