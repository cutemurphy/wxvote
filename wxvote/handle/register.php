<?php
    require_once("../common/common.php");
    if($_POST["action"]=="register"){
        $email=$_POST["email"];
        $password=md5($_POST["password"]."cutemurphy");
        $sql_check="select * from kyt_student where email='$email'";
        $sql_check_re=mysql_query($sql_check);
        if(mysql_num_rows($sql_check_re)>0){
            echo json_encode(array("msg"=>"fail","code"=>401));
        }else{
            $sql_new="insert into kyt_student (email,password) values('$email','$password')";
            if(mysql_query($sql_new)){
                $_SESSION["email"]=$email;
                echo json_encode(array("msg"=>"success","code"=>200));
            }else{
                echo json_encode(array("msg"=>"fail","code"=>400));
            }
        }
    }
?>