<?php $this->view('includes/header'); ?>

<section class="section">
<div class="blure">
    <div class="cardBox">
        <form action="">
            <h3>Log In</h3>
            <div class="inputBox">
                <span>Username</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="" id="">
                </div>
            </div>

            <div class="inputBox">
                <span>Password</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="lock"></ion-icon>
                    </div>
                    <input type="password" name="" id="">
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

            <a href="#" class="forgot"> Forgot Password</a><br>
            <span>Don't have an account |<a href="<?=ROOT?>/signup" class="forgot" style="color: #ff2c74;"> Signup </a></span>
            <span>Back to home |<a href="<?=ROOT?>" class="forgot" style="color: #ff2c74;"> Home </a></span>
        </form>
    </div>

</div>

</section>

<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

<?php $this->view('includes/footer'); ?>