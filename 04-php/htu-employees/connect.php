<?php

$con = new mysqli('localhost','root','','employees5');

if($con) {
    echo 'sucess connection';
} else {
    echo 'failed connection';
    mysqli_error($con);
}

?>