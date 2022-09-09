<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>

<div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
    <?php $this->view('includes/crumbs'); ?>
    <div class="row">
        <div class="col-sm-4 col-md-3">
            <img src="<?= ASSETS ?>/img/user_male.jpg" alt="" class="border border-primary d-block mx-auto rounded-circle" style="width: 120px;">
            <h3 class="text-center"><?=Auth::getFirstname();?></h3>
        </div>
        <div class="col-sm-8 col-md-9 bg-light p-2">
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>First Name:</th>
                    <td><?=Auth::getFirstname();?></td>
                </tr>
                <tr>
                    <th>Last Name:</th>
                    <td><?=Auth::getLastname();?></td>
                </tr>
                <tr>
                    <th>Gender:</th>
                    <td><?=Auth::getGender();?></td>
                </tr>
                <tr>
                    <th>Date Created:</th>
                    <td><?=Auth::getDate();?></td>
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
                <span class="input-group-text" style="font-size: 24px; color:red;" id="basic-addon1"><ion-icon name="search"></ion-icon></span>
                <input type="text" class="form-control" placeholder="Find info" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </form>
    </nav>

    
<?php
echo "<pre>";
print_r($data['rows']);
?>

</div>


<?php $this->view('includes/footer'); ?>