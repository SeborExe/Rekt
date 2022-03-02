<?php

namespace App\Model\Base;

function connect() {
    require APP_DIR . '/app/config/database.php';

    $connection = mysqli_connect($database['host'], $database['user'], $database['pass'], $database['database']);

    if (!$connection) {
        echo 'Wystąpił problem. Ekipa serwisująca została poinformowana o błędzie.';
        die();
    }

    return $connection;
}

function query(string $sql, $connection) {
    return mysqli_query($connection, $sql);
}

function get_view_file_path(string $function) : array {
    return ['file_name' => str_replace('\\', '/', lcfirst(substr($function, 15)))];
}
