<?php
class SQL
{

	protected $select;
	protected $from;
	protected $commandQuery;


	public function select($columName)
    {
        $this->select = "SELECT ".$columName;
        return $this;
    }

    public function from($tableName)
	{
		$this->from = " FROM ".$tableName;
		return $this;
	}

    public function exec()
    {
        if (isset($this))
        {
            foreach ($this as $value)
            {
                if (isset($this->select) &&(isset($this->from)))
                {
                    $commandQuery = $this->select.$this->from;
                    $this->commandQuery = $commandQuery;
                    return $this->commandQuery;
                }
            }
        }
        else
        {
            return NO_PROPERTIES;
        }
    }
//	protected $command;
//
//
//	public function select($columName)
//	{
//		if ("*" !== $columName)
//		{
//			$this->select = "SELECT ".$columName;
//
//		}
//		else
//		{
//			return STAR_USED;
//		}
//	 	return $this;
//	}
//
//	public function from($tableName)
//	{
//		$this->from = " FROM ".$tableName;
//		return $this;
//	}
//
//	public function exec()
//	{
//		$comm = '';
//		foreach($this as $value )
//		{
//			$comm .= $value;
//		}
//
//		$this->command = $comm;
//
//	}






}




?>
