<?php
class Sql
{

	protected $select;
	protected $from;
	protected $command;


	public function select($columName)
	{	
		if ("*" !== $columName)
		{
			$this->select = 'SELECT '.$columName;

		}
		else
		{
			echo "Do not use * !";
		}
	 	return $this;
	}	
	
	public function from($tableName)
	{
		$this->from = ' FROM '.$tableName;
		return $this; 
	}

	public function exec()
	{
		$comm;
		foreach($this as $value )
		{
			$comm .= $value; 
		}	
		
		$this->command = $comm;
			
	} 






}




?>