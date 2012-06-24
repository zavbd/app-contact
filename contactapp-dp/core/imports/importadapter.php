<?php
class importadapter
{
	public static function factory($type)
	{
		$classname = "{$type}contactimportadapter";
		return new $classname;
	}
}