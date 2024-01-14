<?php
require_once 'vendor/autoload.php';

use App\Core\Field;
use App\Core\Form;
use App\Controller\AccountController;
use App\Model\BaseModel;
use App\Model\UserModel;
//Bài thêm
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
        <h1 class="text-center">Tạo Tài Khoản</h1>

        <?php
        $AccountController = new AccountController();

        $form = Form::begin('', 'post');
        ?>


        <div class="row">
            <?php if (isset($_SESSION['success_message'])) : ?>
                <div class="alert alert-success bg-success text-white" role="alert">
                    <?php echo $_SESSION['success_message']; ?>
                </div>
                <?php unset($_SESSION['success_message']); ?>
            <?php endif; ?>

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