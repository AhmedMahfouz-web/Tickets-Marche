<?php
require_once("all.php");
unset($_SESSION['username']);
session_destroy();
header("Location: ../signin.php");
?>