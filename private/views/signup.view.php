<?php $this->view('includes/header'); ?>
<link rel="stylesheet" href="<?= ROOT ?>/assets/css/login.css">

<style>
    .popup input {
        position: relative;
        width: 50%;
        border: none;
        outline: none;
        padding: 10px 20px;
        border-radius: 30px;
        letter-spacing: 1px;
        font-size: 0.85em;
        text-align: center;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 5px rgba(0, 0, 0, 0.35),
            inset -3px -3px 5px rgba(0, 0, 0, 0.5);
    }

    .popup .popbtn {
        width: 60%;
        box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
            inset 2px 2px 5px rgba(0, 0, 0, 0.35);
        border-radius: 30px;
    }

    .popup .popbtn:hover {
        filter: brightness(1.1);
    }
</style>

<!-- <div class="popup" id="popup">
    <img src="<?= ROOT ?>/assets/img/success.png" width="80px">
    <h2>Thank You</h2>
    <p>Your details has been submitted successfully. Thanks!</p>
    <button type="button" class="popbtn" onclick="closePopup()">OK</button>
</div> -->

<div class="cardBox">
    <form action="" method="POST">
        <h3>Sign Up</h3>

        <!-- Show the error messages -->
        <?php if (count($errors) > 0) : ?>
            <div style="font-size: 12px;" id="alert" class="alert  alert-warning alert-dismissible fade show" data-auto-dismis="2000" role="alert">
                <strong><small>Errors:</small></strong>
                <?php foreach ($errors as $error) : ?>
                    <br><small><?= $error ?></small>
                <?php endforeach; ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        <?php endif; ?>


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


<script type="text/javascript">
    setTimeout(function() {

        // Closing the alert
        $('#alert').alert('close');
    }, 3000);
</script>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php $this->view('includes/footer'); ?>