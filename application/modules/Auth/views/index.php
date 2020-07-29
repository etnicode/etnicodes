<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="<?= config_item('css') ?>style.login.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/a81368914c.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <img class="wave" src="<?= config_item('img') ?>wave.png">
    <div class="container">
        <div class="img">
            <img src="<?= config_item('img') ?>/bg.svg">
        </div>
        <div class="login-content">
            <form action="<?= base_url('auth/login'); ?>" method="POST">
                <img src="<?= config_item('img') ?>avatar.svg">
                <h2 class="title">Welcome</h2>
                <?= $this->session->flashdata('message'); ?>
                <div class="input-div one">
                    <div class="i">
                        <i class="fas fa-user"></i>
                    </div>
                    <div class="div">
                        <h5>Email</h5>
                        <input type="text" class="input" name="email">
                    </div>
                </div>
                <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                <div class="input-div pass">
                    <div class="i">
                        <i class="fas fa-lock"></i>
                    </div>
                    <div class="div">
                        <h5>Password</h5>
                        <input type="password" class="input" name="password">
                    </div>
                </div>
                <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                <a href="#">Forgot Password?</a>
                <input type="submit" class="btn" value="Login">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="<?= config_item('js') ?>main.login.js"></script>
</body>

</html>