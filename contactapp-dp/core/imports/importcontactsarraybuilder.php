<?php
class importcontactsarraybuilder
{
	protected $importedstring;
	public function __construct($importedstring)
	{
		$this -> importedstring = $importedstring;
	}
	public function buildarray()
	{
		$lines = explode("\n", $this -> importedstring);
		
		//print_r(array_shift($lines));
		//print_r($lines);
		//exit;
		$keys = explode(',', trim(array_shift($lines)));
		//print_r($keys);exit;
		$array = array();
		foreach ($lines as $line) {
			if (!empty($line)) {
				//echo $line.'<hr>';
				$keyed = array_combine($keys, explode(',', $line));
				$array[] = $keyed;
			}
		}
		return $array;
	}
	public function buildcollection($type)
	{
		$classname = "{$type}importcontactsarraydelegate";
		$delegate = new $classname;
		$delegate -> setcontents($this -> importedstring);
		$array = $delegate -> getArray();
		return $array;
	}
}