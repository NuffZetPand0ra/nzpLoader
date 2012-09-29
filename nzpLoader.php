<?php
require_once 'nzpLib.php';
class nzpLoader{
	private static $dbo;
	
	private function __construct($settings){
		//To prevent object from initializing.
	}
	
	public function initDB($settings){
		nzpLib::getConfig("nzpLoader");
		require_once 'nzpDB.php';
		self::$dbo = new nzpDB($settings);
	}
	static function getDB(){
		if(is_null(self::$dbo)){
			throw new Exception("You need to initialize the database, using nzpLoader->createDB().");
			return false;
		}
		return self::$dbo;
	}
}
?>