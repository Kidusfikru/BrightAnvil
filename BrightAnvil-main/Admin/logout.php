<?php
include('../config/connect.php');
session_destroy();
header("Location:../login.php")
?>