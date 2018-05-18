<?php
/**
 * Created by PhpStorm.
 * User: school41
 * Date: 16.05.18
 * Time: 14:32
 */

$dsn = "mysql:host=localhost;port=3306;dbname=drctrue;charset=utf8;";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
];

$pdo = new PDO($dsn, 'root', 'root', $options);

$stmt = $pdo->query("SELECT * FROM drctrue");
$result = $stmt->fetch(PDO::FETCH_BOTH);

print_r($result);