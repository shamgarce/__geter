<?php
include("../vendor/autoload.php");

$wise = Sham\wise\wise::getInstance();
$wise->load('mysql','../App/Config/mysql.php');     //�������õĲ���
$wise->load('geter','../App/Config/geter.php');     //�������õĲ���

$wise->loadobj('db','Sham\db\db',$wise('mysql'));            //ע����� getInstance
$wise->loadobj('geter','Sham\geter\geter',$wise('geter'));            //geter ����

$md = $wise->geter->get('v.show.va');
print_r($md);


exit;
