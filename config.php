<?php
    $dbhost = "148.66.138.145";
    $dbuser = "portfolioSh";
    $dbpass = "portShUsr21!";
    $dbname = "portfolioSh";
    $charset = 'utf8mb4'; // your charset

    $dsn = "mysql:host=$dbhost;dbname=$dbname;charset=$charset";
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    try {
         $pdo = new PDO($dsn, $dbuser, $dbpass, $options);
    } catch (\PDOException $e) {
         throw new \PDOException($e->getMessage(), (int)$e->getCode());
    }
?>