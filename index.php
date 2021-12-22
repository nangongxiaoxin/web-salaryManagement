<?php
    header('Connect-type:text/html;charset=utf-8');
    include_once './mysql.php';
    $sql="select n.jobnumber,n.name,n.age,n.class,n.zhicheng,n.sex,money,w.workimpro,t.time from number n, workimp w, worktime t where n.jobnumber = w.jobnumber and n.jobnumber = t.jobnumber";
    $res=my_error($sql);
    $info=array();
    while($row=mysqli_fetch_assoc($res)){
		$info[]=$row;
	}
    include_once './index.html';
?>