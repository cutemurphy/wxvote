<?php
session_start();
$conn=mysql_connect("localhost","root","!1wangjunnetease23");
mysql_select_db("wxvote",$conn);
mysql_query("set names 'utf8'");
?>
