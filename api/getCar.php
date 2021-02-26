<?php
    $username = $_GET['username'];
    $con = mysqli_connect('localhost','root','123456','jiaxian');
    $sql = "SELECT * FROM `shopcar` WHERE `username` = '$username'";
    $res = mysqli_query($con,$sql);
    if(!$res){
        die('数据库连接错误' . mysqli_error($con));
    }
    $arr = array();
    $row = mysqli_fetch_assoc($res);
    while($row){
        array_push($arr,$row);
        $row = mysqli_fetch_assoc($res);
    };
    print_r(json_encode($arr,JSON_UNESCAPED_UNICODE));
?>