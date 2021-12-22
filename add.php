<?php
    header('Connect-type:text/html;charset=utf-8');
    include_once './mysql.php';

    $jobnumber=isset($_POST['jobnumber'])?(integer)$_POST['jobnumber']:0;
	$name=isset($_POST['name'])?trim($_POST['name']):'佚名';
	$sex=isset($_POST['sex'])?trim($_POST['sex']):'男';
	$age=isset($_POST['age'])?(integer)$_POST['age']:0;
	$class=isset($_POST['class'])?trim($_POST['class']):'无';
	$zhicheng=isset($_POST['zhicheng'])?trim($_POST['zhicheng']):'无';
	$money=isset($_POST['money'])?(integer)$_POST['money']:0;
	$time=isset($_POST['time'])?(integer)$_POST['time']:0;
	$workimpro=isset($_POST['workimpro'])?(integer)$_POST['workimpro']:0;


    $sql="insert into number values($jobnumber,'{$name}',$age,'{$class}','{$zhicheng}','{$sex}',$money);";
    my_error($sql);
    
    $sql="insert into worktime values($jobnumber,'{$name}',$time)";
    my_error($sql);

    $sql="insert into workimp values($jobnumber,'{$name}',$workimpro)";
    my_error($sql);

    //成功操作
    //同时去到列表页
    header('Refresh:0;url=./add.html');
?>