<?php
$login = "mysql";
$password = "mysql";
try {
    $connection = new PDO("mysql:host=luxshot.local;dbname=luxshot_db;charset=utf8", $login, $password);
} catch (PDOException $e) {
    echo "Ошибка подключения к БД: " . $e->getMessage();
    die();
}
