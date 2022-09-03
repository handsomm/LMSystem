<?php $this->view('includes/header'); ?>

<div class="blure">
    <div class="cardBox">
        <form action="">
            <h3>Sign Up</h3>
            <div class="inputBox">
                <span>First Name</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="username" id="">
                </div>
            </div>
            <div class="inputBox">
                <span>Last Name</span>
                <div class="box">
                    <div class="icon">
                        <ion-icon name="person"></ion-icon>
                    </div>
                    <input type="text" name="username" id="">
                </div>
            </div>
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