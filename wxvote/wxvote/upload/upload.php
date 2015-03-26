<?php
$back_url=$_REQUEST["callback"];
if (($_FILES["uploadipt"]["size"] < 200000)){
    if ($_FILES["uploadipt"]["error"] > 0){
        echo "Return Code: " . $_FILES["uploadipt"]["error"] . "<br />";
    }else{
        $rand_file_name=md5(time().$_FILES["uploadipt"]["name"].rand(1,10)).$_FILES["uploadipt"]["name"];
        echo "Upload: " . $_FILES["uploadipt"]["name"] . "<br />";
        echo "Type: " . $_FILES["uploadipt"]["type"] . "<br />";
        echo "Size: " . ($_FILES["uploadipt"]["size"] / 1024) . " Kb<br />";
        echo "Temp file: " . $_FILES["uploadipt"]["tmp_name"] . "<br />";
        if (file_exists("upload/".$rand_file_name)){
            echo $_FILES["uploadipt"]["name"] . " already exists. ";
        }else{
            move_uploaded_file($_FILES["uploadipt"]["tmp_name"],
                "./upload/" .$rand_file_name);
            $go_url=$back_url."?filespace=upload/".$rand_file_name;
            echo "<script type='text/javascript'>window.location.href='$go_url';</script>";
        };
    }
}
else
{
    echo "Invalid file";
}
?>