<?php
    $jobnumber=isset($_GET['jobnumber'])?(integer)$_GET['jobnumber']:0;
    
    include_once './mysql.php';

    my_error('delete from number where jobnumber = ' . $jobnumber);
    my_error('delete from worktime where jobnumber = ' . $jobnumber);
    my_error('delete from workimp where jobnumber = ' . $jobnumber);
    
    header('Refresh:0;url=./index.php');
?>