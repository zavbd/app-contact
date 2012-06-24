<?php
class userscollection extends daocollection implements
	daocollectioninterface
{
	public function __construct(dao $currentuser)
	{
		$this -> currentuser = $currentuser;
	}
	public function getwithdata()
	{
		$connection = db::factory('mysql');
		$sql = "select * from user order by username";
		$results = $connection -> getArray($sql);
		$this -> populate($results, 'user');
	}
}