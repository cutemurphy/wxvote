<?php
require_once("../common/common.php");
if($_POST["action"]=="create" && $_POST["voteType"]=="single"){
    $ask=$_POST["ask"];
    $answer=$_POST["answer"];
    $acTitle=$_POST["acTitle"];
    $acIntro=$_POST["acIntro"];
    $scoreText=$_POST["scoreText"];
    $sql="insert into wxvote values(null,'milu','$ask','$answer','$acTitle','$acIntro','$scoreText',null)";
    if(mysql_query($sql)){
        $sql_new="select * from wxvote order by id desc";
        $sql_new_re=mysql_query($sql_new);
        $sql_new_fetch=mysql_fetch_assoc($sql_new_re);
        $tiId=$sql_new_fetch["id"];
        echo json_encode(array("result"=>200,"msg"=>"success","id"=>$tiId));
    }else{
        echo json_encode(array("result"=>400,"msg"=>"fail"));
    }
}else if($_POST["action"]=="create" && $_POST["voteType"]=="diy"){
    $author=$_POST["author"];    //出题者姓名
    $acTitle=$_POST["acTitle"];  //活动标题
    $acIntro=$_POST["acIntro"];  // 活动简介
    $voteType=$_POST["voteType"]; //投票类型
    $ask=$_POST["ask"];           //问题文本
    $optionsText=$_POST["optionsText"];   //选项文本
    $optionsValue=$_POST["optionsValue"];      // 各问题对应选项分值
    $scoreText=$_POST["scoreText"];  // 各分值段对应分享文案
    $randNum=md5(time().rand(1,100).$_SERVER["HTTP_USER_AGENT"]);
    $sql="insert into wxvoteDiy values(null,'$acTitle','$acIntro','$author','$ask','$optionsText','$optionsValue','$voteType','$scoreText','$randNum',null)";
    if(mysql_query($sql)){
        $sqlNew="select * from wxvoteDiy where randNum='$randNum'";
        $sqlNewRe=mysql_query($sqlNew);
        $sqlNewFetch=mysql_fetch_assoc($sqlNewRe);
        $tiId=$sqlNewFetch["id"];
        echo json_encode(array("result"=>200,"msg"=>"success","tiId"=>$tiId));
    }
}
?>
