<?php
    $username = $_GET['username'];   
    $shopId = $_GET['shopId'];    
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `shopcar` WHERE `username` = '$username' AND `shopid` = '$shopId'";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die('数据库连接失败' . mysqli_error($con));
    }
    $row = mysqli_fetch_assoc($res);
    if($row){
        $shopNum = ++$row['shopNum'];
        $sql1 = "UPDATE `shopcar` SET `shopNum` = '$shopNum' WHERE `username` = '$username' AND `shopid` = '$shopId'";
        $res1 = mysqli_query($con,$sql1);
    }
    else{
        $sql2 = "INSERT INTO `shopcar` VALUES(null,'$username','$shopId','1')";
        $res2 = mysqli_query($con,$sql2);
    }
?>