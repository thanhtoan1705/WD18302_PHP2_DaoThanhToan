<?php
require_once 'vendor/autoload.php';

use App\Core\Field;
use App\Core\Form;
use App\Model\BaseModel;
use App\Model\UserModel;
//Bài thêm
$userModel = new UserModel('users');
$userModel->create(['name' => 'Tòn', 'email' => 'ton123@gmail.com']);
$userModel->read(1);
$userModel->update(1, ['name' => 'Cập nhật rồi nè', 'email' => 'emaildacapnhat@gmail.com']);
$userModel->delete(1);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Create Account</title>
</head>
<body>

<div class="container">
    <h1>Create an account</h1>

    <?php
    $form = Form::begin('', 'post');
    ?>

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

    <button type="submit" class="btn btn-primary">Submit</button>

    <?php echo Form::end(); ?>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
