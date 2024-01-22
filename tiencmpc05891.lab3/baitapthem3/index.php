<?php

require_once __DIR__ . '/vendor/autoload.php';

use App\Model\ConcreteModel;
$read = new ConcreteModel("Specific Value");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <h1>Bài tập thêm</h1>
        <?php
        $read->create();
        $read->read();
        $read->update();
        $read->delete();
       
        ?>
    </div>
</body>

</html>