<?php
require_once("../common/common.php");
if($_POST["action"]=="startup" && $_POST["type"]==2){
    $id=$_POST["id"];
    $sql="select * from wxvoteDiy where id='$id'";
    $sql_re=mysql_query($sql);
    $sql_fetch=mysql_fetch_assoc($sql_re);
    echo json_encode(array(
        "result"=>"200",
        "info"=>$sql_fetch
    ));
}else if($_POST["action"]=="startup"){
    $id=$_POST["id"];
    $sql="select * from wxvote where id='$id'";
    $sql_re=mysql_query($sql);
    $sql_fetch=mysql_fetch_assoc($sql_re);
    echo json_encode(array(
        "result"=>"200",
        "info"=>$sql_fetch
    ));
}
?>