<?php

class MySQL extends SQL
{
    protected $mySqlConnect;
    protected $DBname;


    public function __construct()
    {
        $this->mySqlConnect = mysql_connect(HOST, USER_NAME, PASS);
        if (!$this->mySqlConnect)
        {
            throw new Exception(ERROR_CONNECT . mysql_error());
        }
        $this->DBname = mysql_select_db(DB_NAME);
        if(!$this->DBname)
        {
            throw new Exception(ERROR_DB . mysql_error());
        }

    }

    public function exec()
    {
        parent::exec();
        $result = mysql_query($this->commandQuery, $this->mySqlConnect);
        if (!$result)
        {
            throw new Exception(ERROR_QUERY . mysql_error());
        }
        else
        {
            $arrResult = array();
            while($row = mysql_fetch_assoc($result))
            {
                $arrResult[]=$row;
            }
            return $arrResult;
        }
    }


}

?>
