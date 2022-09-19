<?php $this->view('includes/header'); ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">



<div class="cardBox">
    <form action="" method="POST">
        <h3>Log In</h3>

        <div class="inputBox">
            <label>Email</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="mail"></ion-icon>
                </div>
                <input type="text" value="<?= get_var('email') ?>" name="email" id="">
            </div>
        </div>

        <div class="inputBox">
            <label>Password</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="lock"></ion-icon>
                </div>
                <input type="password" name="password" id="">
            </div>
        </div>

        <div class="inputBox">
            <div class="box">
                <input type="submit" value="Login">
            </div>
        </div>

        <a href="#" class="forgot"> Forgot Password</a><br>
        <span>Don't have an account |<a href="<?= ROOT ?>/signup" class="forgot" style="color: #ff2c74;"> Signup </a></span>
        <span style="display: block;">Back to home |<a href="<?= ROOT ?>" class="forgot" style="color: #ff2c74;"> Home </a></span>
    </form>
</div>

<!-- Show the error messages -->
<div class="noty">
    <?php if (count($errors) > 0) : ?>
        <?php foreach ($errors as $error) : ?>
            <div class="alert hide">
                <span class="fas fa-circle-exclamation icon"></span>
                <span class="msg" id="msg"><?= $error ?></span>
                <span class="close_btn">
                    <span class="fas fa-times"></span>
                </span>
            </div>
        <?php endforeach ?>
    <?php endif ?>
</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php $this->view('includes/footer'); ?>