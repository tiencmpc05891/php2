<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\Controller\BaseControl;
use App\Core\Route;
use App\Model\BaseModel;

$control = new BaseControl();
$route = new Route();
$model = new BaseModel();

$control->show1();
$route->show2();
$model->show3();
?>

