<?php
$_SESSION = [];
session_destroy();
setcookie('key', '', time() - 3600, '/'); // empty value and old timestamp



header('Location: login.php');