<?php
    include('libs/config.php');
    include('libs/function.php');

$objSQL = new SQL();
//$objSQL->select("data");
//$objSQL->from(TB_NAME);
//$objSQL->where('user2');
//echo $objSQL->exec()."<br />";
//$objSQL->insertInto()->values('user_6', 'test3');
//echo $objSQL->exec()."<br />";
//$objSQL->delete()->from(TB_NAME)->where('user');
//$objSQL->update(TB_NAME)->set('data', 'bla_bla_bla')->where('user2');
//echo $objSQL->exec()."<br/>";
//echo $objSQL->select("key")->from(PG_TB_NAME)->exec();
//echo $objSQL->insertInto(PG_TB_NAME)->values('user6', 'u6_test')->exec();
//echo $objSQL->delete()->from(PG_TB_NAME)->where('user6', PG_TB_NAME)->exec();
echo $objSQL->update(PG_TB_NAME)->set('key', 'user6_UPDATE', PG_TB_NAME)->where('user6', PG_TB_NAME)->exec();
echo "<br />";


// PGsql
try
{
$objPG = new PostgreSQL();
//select!!!!
//echo "<pre>";
var_dump($objPG->select("key")->from(PG_TB_NAME)->exec());
//echo "</pre>";
//$objPG->insertInto(PG_TB_NAME)->values('user6', 'u6_test')->exec();
//Insert
//$result = $objPG->delete()->from(PG_TB_NAME)->where('user6', PG_TB_NAME)->exec();
echo "<br />";
//UPDATE
$result=$objPG->update(PG_TB_NAME)->set('key', 'user6_UPDATE', PG_TB_NAME)->where('user6', PG_TB_NAME)->exec();
echo $result;
}
catch (Exception $e)
{
    $msg = $e->getMessage();
}




// MYSQL
try
{
    $objMySQL = new MySQL();
//    $result = $objMySQL->select("data")->from(TB_NAME)->exec();
    //echo '<pre>';
//    var_dump($result);
    //echo '</pre>';
//    echo "<br />";
//test where::

//    $result = $objMySQL->select("`key`")->from(TB_NAME)->where('user10'...TBNAME)->exec(); //ISPRAVIT' TABLE NAME
//    var_dump($result);
//    echo "<br />";
// test insert
//    $objMySQL->insertInto(TB_NAME)->values('user6', 'test_user6')->exec(); //PROVERIT NA RABOTE INSERT S ARGUMENTOM
//test delete
//  $delet =  $objMySQL->delete()->from(TB_NAME)->where('user6', TBNAME)->exec(); //ISPRAVIT' TABLE NAME

//
//if (0 != $delet)
//{
//    echo $delet; //удаление было
//}
//else
//{
//    echo '0000'; //не было
//}
//test update
//     $result =$objMySQL->update(TB_NAME)->set('data', 'worki', ....TBNAME.)->where('user6')->exec(); //TBNAME PROVERIT'
//     echo "<br />".$result;




} catch (Exception $e)
{
    $msg = $e->getMessage();
}


include('template/tmp.php');
?>
