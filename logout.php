<?php
session_unset();
$_SESSION = [];
header('Location: login.php');