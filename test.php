<?php

$link = $mysqli_connect("loalhost","root","kamwalibai","db2","3308");
if(!$link){
    echo "connection failed";
}
$qry = "update user set gender = '"
?>