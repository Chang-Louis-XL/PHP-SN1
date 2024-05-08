<?php
session_start();
unset($_SSESION['login'],$SESSION['error']);
header('login.php');