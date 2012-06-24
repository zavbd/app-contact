<?php
abstract class daocollection implements Iterator
{
	protected $position = 0;
	protected $storage = array();
	abstract public function getwithdata();
	protected function populate($array, $dataobject)
	{
		foreach ($array as $item) {
			$object = new $dataobject;
			foreach ($item as $key => $val) {
				$object -> $key = $val;
			}
			$this -> storage[] = $object;
		}
	}
	public function saveall()
	{
		foreach ($this as $item) {
			$item -> save();
		}
	}
	public function current()
	{
		return $this -> storage[$this -> position];
	}
	public function key()
	{
		return $this -> position;
	}
	public function next()
	{
		$this -> position++;
	}
	public function rewind()
	{
		$this -> position = 0;
	}
	public function valid()
	{
		return isset($this -> storage[$this -> position]);
	}
}
//explanation
/*
According to the Template Design Pattern, in addition to declaring the whole class abstract, the public
getwithdata() method is defined as abstract.
*/