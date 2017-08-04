<?php
    include('libs/config.php');
    include('libs/function.php');

//MYSQL
try
{
    $objMySQL = new MySQL();
    //SELECT USER6
    $selectMySQL = $objMySQL->select("`key`")->from(TB_NAME)->where('user6', TB_NAME)->exec();
    //INSERT TO MySQL
    $insertMySQL = $objMySQL->insertInto(TB_NAME)->values('user6', 'test_user6_11')->exec();
    $selectMySQLInsert = $objMySQL->select("`key`")->from(TB_NAME)->where('user6', TB_NAME)->exec();
    //UPDATE
    $updateMySQL =$objMySQL->update(TB_NAME)->set('data', 'Update all user6 data', TB_NAME)
        ->where('user6', TB_NAME)->exec();
    $selectMySQLData = $objMySQL->select("data")->from(TB_NAME)->where('user6', TB_NAME)->exec();
    //DELETE
    $deletMySQL =  $objMySQL->delete()->from(TB_NAME)->where('user6', TB_NAME)->exec();
    $selectMySQLDel = $objMySQL->select("`key`")->from(TB_NAME)->where('user6', TB_NAME)->exec();
} catch (Exception $e)
{
    $msg = $e->getMessage();
}


// PGsql
try
{
    $objPG = new PostgreSQL();
//SELECT to PG
    $selectPG = $objPG->select("key")->from(PG_TB_NAME)->where('user6_PG', PG_TB_NAME)->exec();
//INSERT to PG
    $insertPG = $objPG->insertInto(PG_TB_NAME)->values('user6_PG', 'u6_test')->exec();
    $selectPGInsert = $objPG->select("key")->from(PG_TB_NAME)->where('user6_PG', PG_TB_NAME)->exec();
//UPDATE to PG
    $update = $objPG->update(PG_TB_NAME)->set('data', 'user6_UPDATE', PG_TB_NAME)
        ->where('user6_PG', PG_TB_NAME)->exec();
    $selectPGData = $objPG->select("data")->from(PG_TB_NAME)->where('user6_PG', PG_TB_NAME)->exec();
//DELETE
    $delete = $objPG->delete()->from(PG_TB_NAME)->where('user6_PG', PG_TB_NAME)->exec();
    $selectPGDel = $objPG->select("key")->from(PG_TB_NAME)->where('user6_PG', PG_TB_NAME)->exec();
}
catch (Exception $e)
{
    $msg = $e->getMessage();
}
include('template/tmp.php');
?>
