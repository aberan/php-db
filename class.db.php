<?php
namespace nxnw;
use PDO;
/* DB CONNECTION CONSTANTS */

class dbConn {
	private static $dbHost = 'localhost';
	private static $dbUser = 'U-WWW-sbsd';
	private static $dbPW = '49yellow!5JosE';
	private static $db = 'W-www_sbsd_com';
	
	public static function conn(){
		try {
			return new PDO('mysql:host='.static::$dbHost.';dbname='.static::$db.';charset=utf8', static::$dbUser, static::$dbPW);
		} 
		catch (PDOException $e) {
			return false;
		}
	} /* \db_conn */
} /* \dbConn */
?>