<?php
include 'includes/header.php';
session_destroy();
header("location:index.php");
echo 'tae';
exit();
