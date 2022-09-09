<nav class="navbar navbar-dark navbar-expand-lg bg-dark p-2">
  <div class="container-fluid">
  
    
    <a class="navbar-brand" href="#"><img src="<?= ROOT ?>/assets/img/logo.png" height="50px" alt=""> LMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?=ROOT?>">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            User
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="<?=ROOT?>/profile">Profile</a></li>
            <li><a class="dropdown-item" href="#">Dashboard</a></li>
            <div class="dropdown-divider"></div>
            <li><a class="dropdown-item" href="<?=ROOT?>/logout">Logout</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
  <form class="d-flex" role="search" style="width: 350px;" >
    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
    <button class="btn btn-outline-success" type="submit">Search</button>
  </form>
</nav>