<?php
class decoratoremail implements decoratorinterface
{
	public function decorate($item)
	{
		$return = '<a href="mailto:' . $item . '">' . $item . '</a>';
		return $return;
	}
}