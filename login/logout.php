<?php

include('config.php');

session_start();

$client->revokeToken($_SESSION['access_token']);
session_destroy();
header('location:index.php');

?>