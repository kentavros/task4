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
$objSQL->update(TB_NAME)->set('data', 'bla_bla_bla')->where('user2');
echo $objSQL->exec()."<br/>";
// MYSQL
try
{
    $objMySQL = new MySQL();
    $result = $objMySQL->select("data")->from(TB_NAME)->exec();
    //echo '<pre>';
    var_dump($result);
    //echo '</pre>';
    echo "<br />";
//test where::

    $result = $objMySQL->select("data")->from(TB_NAME)->where('user2')->exec();
    var_dump($result);
    echo "<br />";
// test insert
//    $objMySQL->insertInto()->values('user6', 'test_user6')->exec();
//test delete
   //$delet =  $objMySQL->delete()->from(TB_NAME)->where('user10')->exec();
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
//     $result =$objMySQL->update(TB_NAME)->set('data', 'work')->where('user6')->exec();
//     echo "<br />".$result;




} catch (Exception $e)
{
    $msg = $e->getMessage();
}


include('template/tmp.php');
?>
