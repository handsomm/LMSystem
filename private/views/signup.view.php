<?php $this->view('includes/header'); ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">


<div class="cardBox">
    <form action="" method="POST">
        <h3>Add User</h3>

        <div class="inputBox">
            <label>First Name</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="person"></ion-icon>
                </div>
                <input type="text" value="<?= get_var('firstname') ?>" name="firstname" id="">
            </div>
        </div>

        <div class="inputBox">
            <label>Last Name</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="person"></ion-icon>
                </div>
                <input type="text" value="<?= get_var('lastname') ?>" name="lastname" id="">
            </div>
        </div>

        <div class="inputBox">
            <label>Email Id</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="mail"></ion-icon>
                </div>
                <input type="email" value="<?= get_var('email') ?>" name="email" id="">
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
            <label>Confirm Password</label>
            <div class="box">
                <div class="icon">
                    <ion-icon name="lock"></ion-icon>
                </div>
                <input type="password" name="password2" id="">
            </div>
        </div>
        <div class="inputBox">
            <div class="box">
                <input type="submit" value="Signup">
            </div>
        </div>
        <span>Already have an account |<a href="<?= ROOT ?>/login" class="forgot" style="color: #ff2c74;"> Login </a></span><br>
        <span>Back to home |<a href="<?= ROOT ?>" class="forgot" style="color: #ff2c74;"> Home </a></span>
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