<?php
class SQL
{

	protected $select;
    protected $from;
    protected $insert;
    protected $values;
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

    public function insertInto()
    {
        $this->insert = "INSERT INTO ".TB_NAME." (`key`, data)";
        return $this;
    }

    public function values($key, $data)
    {
        $this->values = " VALUES ('".$key."', '".$data."')";
        return $this;
    }
     

    public function exec()
    {
        if (!empty($this))
        {
            foreach ($this as $value)
            {
                echo $value;
              //  if (isset($this->select) &&(isset($this->from)))
               // {
               //     $this->commandQuery = $this->select . $this->from;
             //       return $this->commandQuery;
             //   }
             //   if (isset($this->insert) && (isset($this->values)))
             //   {
              //      $this->commandQuery = $this->insertInto . $this->values;
               //     return $this->commandQuery;
               // }
            }
        }
        else
        {
            echo 'foooo';
            //return NO_PROPERTIES;
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
