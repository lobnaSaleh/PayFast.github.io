<?php

session_start();
echo 'hi';
session_unset();
session_destroy();
header("location: login.php");
exit();

?>