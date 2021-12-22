<?php
        header('Connect-type:text/html;charset=utf-8');
        include_once './mysql.php';
    
        $jobnumber=isset($_GET['jobnumber'])?(integer)$_GET['jobnumber']:0;

        $name=isset($_POST['name'])?trim($_POST['name']):'佚名';
        $sex=isset($_POST['sex'])?trim($_POST['sex']):'男';
        $age=isset($_POST['age'])?(integer)$_POST['age']:0;
        $class=isset($_POST['class'])?trim($_POST['class']):'无';
        $zhicheng=isset($_POST['zhicheng'])?trim($_POST['zhicheng']):'无';
        $money=isset($_POST['money'])?(integer)$_POST['money']:0;
        $time=isset($_POST['time'])?(integer)$_POST['time']:0;
        $workimpro=isset($_POST['workimpro'])?(integer)$_POST['workimpro']:0;

        $sql="update number set name='{$name}',age=$age,class='{$class}',zhicheng='{$zhicheng}',sex='{$sex}',money=$money where jobnumber=$jobnumber";
        my_error($sql);

        $sql="update worktime set name='{$name}',time=$time where jobnumber=$jobnumber";
        my_error($sql);

        $sql="update workimp set name='{$name}',workimpro=$workimpro where jobnumber=$jobnumber";
        my_error($sql);

        header('Refresh:0;url=./index.php');
?>
