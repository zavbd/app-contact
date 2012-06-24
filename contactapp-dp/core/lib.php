<?php
class lib
{
	const SETTING_AN_ARRAY = TRUE;
	const NO_PERSISTENT_STORAGE = FALSE;
	public static function getitem($name, $persist = TRUE)
	{
		$return = NULL;
		if (isset($_SESSION[$name])) {
			$return = $_SESSION[$name];
			if (!$persist) unset($_SESSION[$name]);
		}
		return $return;
	}
	public static function setitem($name, $value, $array = false)
	{
		if ($array) {
			if (!isset($_SESSION[$name])) {
				$_SESSION[$name] = array();
				$_SESSION[$name][] = $value;
			}
		}
		else {
			$_SESSION[$name] = $value;
		}
	}
	public static function sendto($url = '')
	{
		if (empty($url)) {
			$url = '/index';
		}
		die(header('Location: ' . PROJECT_URL . $url));
		//die(header('Location: ' . $url));
	}
	public static function seterror($error)
	{
		self::setitem('error', $error, self::SETTING_AN_ARRAY);
	}
	public static function makehashedpassword(user $user, $password)
	{
		return sha1($user -> username . $password);
	}
}
//example
/*
lib::setitem('test', 123, TRUE);
$test_once = lib::getitem('test', FALSE);

lib::setitem('test', 123, lib::SETTING_AN_ARRAY);
$test_once = lib::getitem('test', lib::NO_PERSISTENT_STORAGE);

lib::setitem('controller', new controller($_GET['u']));

I use the setitem() method of the lib class to store an instance of a new controller object.
The controller object is constructed with access to the $_GET[ Åe u Åf ] string that the .htaccess file
provided. I Åf m expecting my includesautoloader() method of the autoloader class to find the
file named /includes/controller.php , which will contain the following contents:
*/