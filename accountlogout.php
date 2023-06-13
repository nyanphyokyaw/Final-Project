<?php
session_start();
unset($_SESSION['acc']);
header('location:user.php');
?>