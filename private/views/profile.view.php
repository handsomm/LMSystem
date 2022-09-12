<?php $this->view('includes/header'); ?>

<link rel="stylesheet" href="<?= ROOT ?>/assets/css/profile.css">
<aside>
    <div class="top">
        <div class="logo">
            <img src="<?= ROOT ?>/assets/images/logo.png" alt="" />
            <h2>LM<span class="danger">System</span></h2>
        </div>
        <div class="close" id="close-btn">
            <span class="material-icons-sharp"> close </span>
        </div>
    </div>
    <div class="sidebar">
        <a href="<?= ROOT ?>/dashboard">
            <span class="material-icons-sharp"> grid_view </span>
            <h3>Dashboard</h3>
        </a>
        <a href="<?= ROOT ?>/profile" class="active">
            <span class="material-icons-sharp"> person </span>
            <h3>Profile</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> contacts </span>
            <h3>User Information</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> library_books </span>
            <h3>Manage Books</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> auto_stories </span>
            <h3>Issue Book</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> mail_outline </span>
            <h3>Messages</h3>
            <span class="message-count">6</span>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> people </span>
            <h3>Manage Users</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> bookmark </span>
            <h3>Issued Books</h3>
        </a>
        <a href="#">
            <span class="material-icons-sharp"> request_quote </span>
            <h3>Requested Books</h3>
        </a>
        <a href="<?= ROOT ?>/logout">
            <span class="material-icons-sharp"> logout </span>
            <h3>Logout</h3>
        </a>
    </div>
</aside>

<!-- END OF ASIDE -->
<main>
    <div class="top">
        <h1>Profile</h1>

        <ul class="breadcumbs">
            <li class="breadcumb_item">
                <a href="#" class="breadcumb_link text-muted">Home</a>
            </li>
            <li class="breadcumb_item">
                <a href="#" class="breadcumb_link text-muted breadcumb_link_active">Profile</a>
            </li>
        </ul>
    </div>

    <div class="profile_section">
        <div class="profile_photo">
            <img src="<?= ROOT ?>/assets/images/profile-1.jpg" alt="">
            <h2><?= Auth::getFirstname(); ?> <?= Auth::getLastname(); ?></h2>
            <!-- <p class="text-muted">Admin</p> -->
        </div>
        <div class="details">
            <h1>Details</h1>
            <table>
                <tr>
                    <th>Name</th>
                    <td>:</td>
                    <td><?= Auth::getFirstname(); ?> <?= Auth::getLastname(); ?></th>
                </tr>
                <tr>
                    <th>Roll</th>
                    <td>:</td>
                    <td>ICT/22/21</th>
                </tr>
                <tr>
                    <th>Username</th>
                    <td>:</td>
                    <td><?= Auth::getUsername(); ?></th>
                </tr>
                <tr>
                    <th>Semester</th>
                    <td>:</td>
                    <td>3rd</th>
                </tr>
                <tr>
                    <th>Session</th>
                    <td>:</td>
                    <td>21-23</th>
                </tr>
                <tr>
                    <th>Email</th>
                    <td>:</td>
                    <td><?= Auth::getEmail(); ?></th>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>:</td>
                    <td>8917571207</th>
                </tr>
            </table>
        </div>
    </div>


</main>

<!-- END OF MAIN -->

<div class="right">
    <div class="top">
        <button id="menu-btn">
            <span class="material-icons-sharp"> menu </span>
        </button>
        <div class="theme-toggler">
            <span class="material-icons-sharp active"> light_mode </span>
            <span class="material-icons-sharp"> dark_mode </span>
        </div>
        <div class="profile">
            <div class="info">
                <p>Hey, <b><?= Auth::getFirstname(); ?></b></p>
                <small class="text-muted">Admin</small>
            </div>
            <div class="profile-photo">
                <img src="<?= ROOT ?>/assets/images/profile-1.jpg" alt="">
            </div>
        </div>
    </div>
    <!-- END OF TOP -->
    <div class="recent-updates">
        <h2>Recent Updates</h2>
        <div class="updates">
            <div class="update">
                <div class="profile-photo">
                    <img src="<?= ROOT ?>/assets/images/profile-2.jpg" alt="">
                </div>
                <div class="message">
                    <p><b>Shibu </b> received his order of Night lion tech GPS drone</p>
                    <small class="text-muted">2 minutes ago</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                    <img src="<?= ROOT ?>/assets/images/profile-3.jpg" alt="">
                </div>
                <div class="message">
                    <p><b>Alina </b> Lorem, ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <small class="text-muted">2 minutes ago</small>
                </div>
            </div>
            <div class="update">
                <div class="profile-photo">
                    <img src="<?= ROOT ?>/assets/images/profile-4.jpg" alt="">
                </div>
                <div class="message">
                    <p><b>Priyanka </b> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                        velit.</p>
                    <small class="text-muted">2 minutes ago</small>
                </div>
            </div>
        </div>
    </div>

    <!-- END OF RECENT UPDATES -->

</div>
</div>
</body>
<script src="<?= ROOT ?>/assets/js/dashboard.js"></script>

</html>


<!-- <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs'); ?>
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ASSETS ?>/img/user_male.jpg" alt="" class="border border-primary d-block mx-auto rounded-circle" style="width: 120px;">
            <h3 class="text-center"><?= Auth::getFirstname(); ?></h3>
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td><?= Auth::getFirstname(); ?></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><?= Auth::getLastname(); ?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?= Auth::getGender(); ?></td>
                </tr>
                <tr>
                    <th>Date Created:</th>
                    <td><?= Auth::getDate(); ?></td>
                </tr>
            </table>
        </div>
    </div>
    <hr>
    <div class="container-fluid">
        <ul class="nav nav-tabs">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Basic Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Classes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Tests</a>
            </li>
        </ul>
    </div>

    <nav class="navbar bg-light">
        <form class="ms-2" style="width: 350px;">
            <div class="input-group">
                <span class="input-group-text" style="font-size: 24px; color:red;" id="basic-addon1">
                    <ion-icon name="search"></ion-icon>
                </span>
                <input type="text" class="form-control" placeholder="Find info" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>
    </nav>


    <?php
    echo "<pre>";
    print_r($data['rows']);
    ?>

</div> -->


<?php $this->view('includes/footer'); ?>