<?php
include $_SERVER['DOCUMENT_ROOT'] . '/vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT']);
$dotenv->load();

function getConnection() {
    static $mysqlConnect;
    if (empty($mysqlConnect)) {
        $mysqlConnect = mysqli_connect(
            $_ENV['MYSQL_HOST'],
            $_ENV['MYSQL_USER'],
            $_ENV['MYSQL_PASSWORD'],
            $_ENV['MYSQL_DATABASE']
        );

        if (!$mysqlConnect) {
            printf("Невозможно подключиться к базе данных. Код ошибки: %s\n", mysqli_connect_error());
            exit;
        }
        mysqli_set_charset($mysqlConnect,"utf8");
    }

    return $mysqlConnect;
}
