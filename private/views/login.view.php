<?php $this->view('includes/header'); ?>

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
        width: 60%;box-shadow: 5px 5px 7px rgba(0, 0, 0, 0.25),
    inset 2px 2px 5px rgba(0, 0, 0, 0.35);
    border-radius: 30px;
    }
    .popup .popbtn:hover {
        filter: brightness(1.1);
    }
</style>
<div class="popup" id="popup">
    <img src="<?= ROOT ?>/assets/img/success.png" width="80px">
    <h2>Enter OTP</h2>
    <p>We've sent a varification code to your email: </p>
    <input type="text" name="otp" id=" ">
    <button type="button" class="popbtn" onclick="closePopup()">Submit</button>
</div>

<section class="section">
<div class="blure">
    <div class="cardBox">
        <form action="" method="POST">
            <h3>Log In</h3>
            <div class="inputBox">
                <span>Username</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="username" id="">
                </div>
            </div>

            <div class="inputBox">
                <span>Password</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="lock"></ion-icon>
                    </div>
                    <input type="password" name="password" id="">
                </div>
            </div>

            <label for="">
                <input type="checkbox"> Remember me
            </label>

            <div class="inputBox">
                <div class="box">
                    <input type="submit" value="Login">
                </div>
            </div>

            <a href="#" class="forgot" onclick="openPopup()"> Forgot Password</a><br>
            <span>Don't have an account |<a href="<?=ROOT?>/signup" class="forgot" style="color: #ff2c74;"> Signup </a></span>
            <span>Back to home |<a href="<?=ROOT?>" class="forgot" style="color: #ff2c74;"> Home </a></span>
        </form>
    </div>

</div>

</section>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php $this->view('includes/footer'); ?>