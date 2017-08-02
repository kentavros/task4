<?php
    include('libs/config.php');
    include('libs/function.php');

//$conn = mysql_connect(HOST, USER_NAME, PASS);
//if($conn){
//    echo "connect!";
//}
//$db = mysql_select_db(DB_NAME);
//if($db){
//    echo "baza gotova";
//}
//
//$query = mysql_query('SELECT data FROM MY_TEST');
//while($row=mysql_fetch_assoc($query))
//{
//    echo $row['data'];
//
//}


try {
    $dbMySQl = new MySQL();
    $dbMySQl->select('data')->from('MY_TEST');
  //test
    echo "<pre>";
    var_dump($dbMySQl->exec());
    echo "</pre>";
}
catch (Exception $e)
{
    $msg = $e->getMessage();
}






include('template/tmp.php');
?>
