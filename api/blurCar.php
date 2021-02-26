<?php
    $username = $_GET['username'];
    
    $shopId = $_GET['shopId'];
    
    $shopNum = $_GET['shopNum'];
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `shopcar` WHERE `username` = '$username' AND `shopid` = '$shopId'";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die('数据库连接失败' . mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($res);
    $sql1 = "UPDATE `shopcar` SET `shopNum` = '$shopNum' WHERE `username` = '$username' AND `shopid` = '$shopId'";
    $res1 = mysqli_query($con,$sql1);
?>