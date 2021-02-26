<?php
    $username = $_GET['username'];
    $shopid = $_GET['shopid'];
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `shopcar` WHERE `username` = '$username' AND `shopid` = '$shopid'";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die('数据库连接错误' . mysqli_error($con));
    };
    $delSql = "DELETE FROM `shopcar` WHERE `username` = '$username' AND `shopid` = '$shopid'";
    $delRes = mysqli_query($con,$delSql);
    if(!$delRes){
        die('数据库连接错误' . mysqli_query($con));
    }else{
        print_r('删除成功');
    }
?>