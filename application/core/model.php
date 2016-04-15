<?php

class Model
{
	private static $db;
	
	protected static function dbConnect(){
		require_once "orm/config.php";
		self::$db=$db;
	}
	protected static function dbClose(){
		mysql_close(self::$db);
    }	
	
	public function get_data()
	{
		// todo
	}
}
