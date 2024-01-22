<?php
require_once __DIR__ . '/vendor/autoload.php';



use App\Core\Route as Router;

$router = new Router();
//index bài 3
$router->register(
    '/',
    function () {
        echo "Home";
    }
);


//index bài 4
// $router
//     ->register('/', [App\Home::class, 'index'])
//     ->register('/', [App\Invoices::class, 'index'])
//     ->register('/invoices/create', [App\Invoices::class, 'create']);


$router->resolve($_SERVER['REQUEST_URI']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>