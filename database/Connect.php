<?php
class Connect
{
	/**
	 * The actual singleton's instance almost always resides inside a static
	 * field. In this case, the static field is an array, where each subclass of
	 * the Singleton stores its own instance.
	 */
	private static ?PDO $instance = null;
	
	/**
	 * Singleton's constructor should not be public. However, it can't be
	 * private either if we want to allow subclassing.
	 */
	private function __construct() { }
	
	/**
	 * Cloning and unserialization are not permitted for singletons.
	 */
	private function __clone() { }
	
	public function __wakeup()
	{
		throw new \Exception("Cannot unserialize singleton");
	}
	
	/**
	 * The method you use to get the Singleton's instance.
	 */
	public static function getInstance(): PDO
	{
		if(is_null(self::$instance)) {
			$dsn = DB_DRIVER . ':host=' . DB_DRIVER . ';port=' . DB_PORT . ';dbname=' . DB_NAME;
			self::$instance = new PDO($dsn, DB_USER, DB_PASSWORD);
		}
		
		return self::$instance;
	}
}