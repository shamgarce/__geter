<?php
include("../vendor/autoload.php");

$wise = Sham\wise\wise::getInstance();
$wise->load('mysql','../App/Config/mysql.php');     //载入配置的参数
$wise->load('geter','../App/Config/geter.php');     //载入配置的参数

$wise->loadobj('db','Sham\db\db',$wise('mysql'));            //注入对象 getInstance
$wise->loadobj('geter','Sham\geter\geter',$wise('geter'));            //geter 对象

$md = $wise->geter->get('v.show.va');
print_r($md);


exit;
