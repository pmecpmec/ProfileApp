<?php
session_start();
require_once 'include/user.inc.php';

$username = $_SESSION['username'];

$users = getUser($username);