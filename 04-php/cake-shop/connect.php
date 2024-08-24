<?php

$con = new mysqli('localhost','root','','razan-shop2');

if($con) {
    echo 'success';
} else {
    echo 'failed';
    mysqli_error($con);
}

?>