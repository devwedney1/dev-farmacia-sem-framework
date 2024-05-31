<?php

$dbConfig = require '../../core/connection/dataBaseService.php';

$host = $dbConfig['db_host'];
$user = $dbConfig['db_user'];
$pass = $dbConfig['db_password'];
$dbName = $dbConfig['db_name'];

$pdo = DatabaseConnection::getConnection($host, $user, $pass, $dbName);