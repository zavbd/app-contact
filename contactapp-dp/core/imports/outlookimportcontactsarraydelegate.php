<?php
class outlookimportcontactarraydelegate implements importcontactarrayinterface
{
	protected $contents;
	public function setcontents($contents)
	{
		$this -> contents = $contents;
	}
	public function getArray()
	{
		$lines = explode("\n", $this -> contents);
		$keys = explode(',', array_shift($lines));
		$array = array();
		foreach ($lines as $line) {
			if (!empty($line)) {
				$keyed = array_combine($keys, explode(',', $line));
				$array[] = $keyed;
			}
		}
		return $array;
	}
}