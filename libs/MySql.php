<?php

class MySql extends Sql
{
	protected $host;
	protected $userName;
	protected $password;
	protected $mySqlConnect;
	protected $DBname;
	protected $result;


	public function __construct($host, $userName, $pass, $DBname) 
	{
		$this->host = $host;
		$this->userName = $userName;
		$this->password = $pass; 
		$this->mySqlConnect = mysql_connect($this->host, $this->userName, $this->password);
		$this->DBname = mysql_select_db($DBname);
	}

		

	public function exec()
	{	
		parent::exec();
		$result = mysql_query($this->command, $this->mySqlConnect);
		$this->result = $result;
	//insert wile	
		return $this->result;		
	}
	
	


	
	
	public function __destruct()
	{
		mysql_close($this->mySqlConnect);
	}







}


















?>
