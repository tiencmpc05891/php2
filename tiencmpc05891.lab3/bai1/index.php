<?php
require_once __DIR__ . '/vendor/autoload.php';


use App\Core\Form;

$form = new Form();

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
        <h1>Create an account</h1>
        <?php $form->begin('', 'post'); ?>
        <div class="row">
            <div class="col">
                <?php echo $form->field('firstname'); ?>
            </div>
            <div class="col">
                <?php echo $form->field('lastname'); ?>
            </div>
        </div>
        <?php echo $form->field('email'); ?>
        <?php echo $form->field('password')->passwordField(); ?>
        <?php echo $form->field('confirmPassword')->passwordField(); ?>
        <button type="submit" class="btn btn-primary">Gửi</button>
        <?php echo $form->end(); ?>
    </div>
</body>

</html>