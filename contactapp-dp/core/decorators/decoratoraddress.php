<?php
class decoratoraddress implements decoratorinterface
{
	public function decorate($item)
	{
		$return = '<a href="http://maps.google.com/maps?q=' .
			urlencode($item)
		. '">' . $item . '</a>';
		return $return;
	}
}