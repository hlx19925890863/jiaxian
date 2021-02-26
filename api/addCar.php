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
    if($row){
        $shopNumN = $shopNum + $row['shopNum'];
        $sql1 = "UPDATE `shopcar` SET `shopNum` = '$shopNumN' WHERE `username` = '$username' AND `shopid` = '$shopId'";
        $res1 = mysqli_query($con,$sql1);
        print_r('添加成功');
    }
    else{
        $sql2 = "INSERT INTO `shopcar` VALUES(null,'$username','$shopId','$shopNum')";
        $res2 = mysqli_query($con,$sql2);
        print_r('添加成功');
    }
?>