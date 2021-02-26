<?php
    $username = $_GET['username'];
    $password = $_GET['password'];
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `login` WHERE `username` = '$username' AND `password` = '$password'";
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
        print_r('登录成功');
    }else{
        print_r('用户名或密码错误');
    }
?>