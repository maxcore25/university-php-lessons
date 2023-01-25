<?php
if (isset($_GET['name']) && isset($_GET['type'])) {
    $name = $_GET['name'];
    $type = $_GET['type'];
    switch ($type) {
        case 'vacancy':
            $salary = $_GET['salary'];
            $mysqli = new mysqli("db", "mysql", "123456", "app_db");
            $result = $mysqli->query("INSERT INTO $type VALUES (Null, '$name', '$salary')");
            break;
        case 'book':
            $amount = $_GET['amount'];
            $mysqli = new mysqli("db", "mysql", "123456", "app_db");
            $result = $mysqli->query("INSERT INTO $type VALUES (Null, '$name', '$amount')");
            break;
    }
    header("Location: /admin/admin.php");
} else {
    echo "Bad request";
}
