<?php
    include('libs/config.php');
    include('libs/function.php');

//$conn = mysql_connect(HOST, USER_NAME, PASS);
//if($conn){
//    echo "connect!";
//}
///$db = mysql_select_db(DB_NAME);
//if($db){
//    echo "baza gotova";
//}

//$query = mysql_query('SELECT data FROM MY_TEST');
//while($row=mysql_fetch_assoc($query))
//{
//    echo $row['data'];
//
//}

//$query =mysql_query("INSERT INTO ".TB_NAME." (`key`, data) VALUES ('user6_6', 'test6_6')");
//if(!$query)
//{
//    echo "ERROR INSERT!!!!!";
//}


try {
    $dbMySQl = new MySQL();
    // echo $dbMySQL->insertInto();
 //   echo $dbMySQL->values('sdfs','dwdw');
// $dbMySQL->insertInto()->values('user6_5_', 'test6_5')->exec();
 // echo $dbMySQL->select('dfdf'); 
    
   //var_dump($dbMySQl->select('data')->from(TB_NAME)->exec());
  //test
  
   //var_dump($dbMySQl->exec());
 
}
catch (Exception $e)
{
    $msg = $e->getMessage();
}


$sql = new SQL();
//echo $sql->select('eeee')->from('edfeded')->exec();
echo $sql->exec(); 

include('template/tmp.php');
?>
