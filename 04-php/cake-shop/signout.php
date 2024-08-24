<?php
session_start();
// if (isset($_SESSION['privileged'])) {
    unset($_SESSION['privileged']);
// }
session_destroy();

header("Location:products.php");

?>