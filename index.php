<?php
    include('libs/config.php');
    include('libs/Sql.php');
    include('libs/MySql.php');
    
//$db = new Sql();
//    if ($db = new MySql(HOST, USER_NAME, PASS, DB_NAME))
  //  {
    //    echo "connect to MySql! <br />";
   // }

//    $result = mysql_query('SELECT data  FROM MY_TEST');
//    while ($row = mysql_fetch_assoc($result))
//    {
//        echo $row['key']. "<br />";
//        echo $row['data']. "<br />";
//    }

echo "<hr>";




    //echo $db->select('data')->from('MY_TEST')->exec();
    //v exec - return array data!!!!!!
   // echo $db->select('data')->from('MY_TEST')->exec();
    

$conn = mysql_connect(HOST, USER_NAME, PASS);
if($conn){
    echo "connect!";
}
$db = mysql_select_db(DB_NAME);
if($db){
    echo "baza gotova";
}

$query = mysql_query('SELECT data FROM MY_TEST');
while($row=mysql_fetch_assoc($query))
{
    echo $row['data'];

}






?>
