<?php $this->view('includes/header'); ?>
<!-- <?php $this->view('includes/nav'); ?> -->




<!-- <div class="bgc"></div>
<div id="slider">
    <figure>
        <img src="<?= ROOT ?>/assets/img/4.jpg" alt="">
        <img src="<?= ROOT ?>/assets/img/2.jpg" alt="">
        <img src="<?= ROOT ?>/assets/img/1.jpg" alt="">
        <img src="<?= ROOT ?>/assets/img/3.jpg" alt="">
        <img src="<?= ROOT ?>/assets/img/5.jpg" alt="">
    </figure>
    <div class="contents">
        <div class="content">
            <h2>Welcome To our <span style="color: red;">library</span></h2>
            <h4>we stand behind your success</h4>
            <h6>© All rights reserved by Computer Science(FMU)</h6>
        </div>
    </div>


</div> -->


<div class="hero" style="background: #000;">
    <nav>
        <h2 class="logo"><a href="#">LM<span>System</span></a></h2>
        <ul>
            <li><a href="<?=ROOT?>/home">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="<?= ROOT ?>/dashboard">Dashboard</a></li>
            <li><a href="<?=ROOT?>/profile">Profile</a></li>
            <li><a href="#">Contact Us</a></li>
        </ul>
        <button type="button" class="" onclick="openPopup()">Login</button>
        <img class="profile" src="<?= ROOT ?>/assets/img/user_male.jpg" width="45px" alt="">
    </nav>

    <div class="bgc"></div>
    <div id="slider">
        <figure>
            <img src="<?= ROOT ?>/assets/img/4.jpg" alt="">
            <img src="<?= ROOT ?>/assets/img/2.jpg" alt="">
            <img src="<?= ROOT ?>/assets/img/1.jpg" alt="">
            <img src="<?= ROOT ?>/assets/img/3.jpg" alt="">
            <img src="<?= ROOT ?>/assets/img/5.jpg" alt="">
        </figure>
        <div class="contents">
            <div class="content">
                <h2>Welcome To our <span style="color: red;">library</span></h2>
                <h4>we stand behind your success</h4>
                <h6>© All rights reserved by Computer Science(FMU)</h6>
            </div>
        </div>
    </div>
</div>




<?php $this->view('includes/footer'); ?>