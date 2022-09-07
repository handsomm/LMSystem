<?php $this->view('includes/header'); ?>

<?php
print_r($errors);

?>

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
    <h2>Thank You</h2>
    <p>Your details has been submitted successfully. Thanks!</p>
    <button type="button" class="popbtn" onclick="closePopup()">OK</button>
</div>


<div class="blure">
    <div class="cardBox">
        <form action="" method="POST">
            <h3>Sign Up</h3>
            <div class="inputBox">
                <span>First Name</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="firstname" id="">
                </div>
            </div>
            <div class="inputBox">
                <span>Last Name</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="lastname" id="">
                </div>
            </div>
        
            <div class="inputBox">
                <span>Email Id</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="mail"></ion-icon>
                    </div>
                    <input type="email" name="email" id="">
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

            <div class="inputBox">
                <span>Confirm Password</span>
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
            <span>Already have an account |<a href="<?=ROOT?>/login" class="forgot" style="color: #ff2c74;"> Login </a></span><br>
            <span>Back to home |<a href="<?=ROOT?>" class="forgot" style="color: #ff2c74;"> Home </a></span>
        </form>
    </div>

</div>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php $this->view('includes/footer'); ?>