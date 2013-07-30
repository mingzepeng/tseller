<?php
class baseApp
{
	public $_name = 'base';	
	
	public $db = null;

	public function __construct()
	{
		
	}

	public function getInstanceDb($database=OSA_DB_ID)
	{
		if($this->db === null)
		{
			include ROOT.'/admin/include/lib/Medoo.class.php';
			$this->db = new Medoo($database);
		}
		return $this->db;
	}
}