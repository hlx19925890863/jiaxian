<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `login` WHERE `username` = '$username' ";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die('数据库连接失败' . mysqli_error($con));
    }
    $arr = array();
    $row = mysqli_fetch_assoc($res);
    while($row){
        array_push($arr,$row);
        $row = mysqli_fetch_assoc($res);
    }
    if($arr){
        print_r('用户名已存在');
    }else{
        $sql1 = "INSERT INTO `login` VALUES(null,'$username','$password')";
        $res1 = mysqli_query($con,$sql1);
        print_r('注册成功');
    }
?>