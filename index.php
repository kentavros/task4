<?php
    include('libs/Sql.php');
    include('libs/MySql.php');

//$db = new Sql();
    if ($db = new MySql('localhost', 'user1', 'tuser1', 'user1'))
    {
        echo "connect to MySql! <br />";
    }

    $result = mysql_query('SELECT * FROM MY_TEST');
    while ($row = mysql_fetch_assoc($result))
    {
        echo $row['key']. "<br />";
        echo $row['data']. "<br />";
    }






    $result2 = $db->select('data')->from('MY_TEST')->exec();
    //v exec - return array data!!!!!!
    while($row = mysql_fetch_assoc($result2))
    {
        echo $row['data']. "<br />";

    }


?>