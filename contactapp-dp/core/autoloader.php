<?php
class autoloader
{
	public static function moduleautoloader($class)
	{
		//$path = $_SERVER['DOCUMENT_ROOT'] . "/modules/{$class}.php";
		$path = "modules/{$class}.php";
		if (is_readable($path)) require $path;
	}
	public static function daoautoloader($class)
	{
		//$path = $_SERVER['DOCUMENT_ROOT'] . "/dataobjects/{$class}.php";
		$path = "dataobjects/{$class}.php";
		if (is_readable($path)) require $path;
	}
	//public static function includesautoloader($class)
	public static function coreautoloader($class)
	{
		//$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/{$class}.php";
		$path = "core/{$class}.php";
		if (is_readable($path)){
			require $path;
		}
	}
	//public static function includesautoloader($class)
	public static function helperautoloader($class)
	{
		//$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/{$class}.php";
		$path = "helpers/{$class}.php";
		if (is_readable($path)){
			require $path;
		}
	}
	//public static function includesautoloader($class)
	public static function validatorautoloader($class)
	{
		//$path = $_SERVER['DOCUMENT_ROOT'] . "/includes/{$class}.php";
		$path = "validators/{$class}.php";
		if (is_readable($path)){
			require $path;
		}
	}
}
spl_autoload_register('autoloader::coreautoloader');
spl_autoload_register('autoloader::daoautoloader');
spl_autoload_register('autoloader::moduleautoloader');
spl_autoload_register('autoloader::helperautoloader');
spl_autoload_register('autoloader::validatorautoloader');