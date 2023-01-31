<<<<<<< HEAD
<!-- Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top">
  <!-- Container wrapper -->
=======

<nav class="navbar navbar-expand-lg navbar-dark fixed-top p-0 m-0">
>>>>>>> 13462404892f5d008fd5ef3aa13cc03017d75da7
  <div class="container-fluid">
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

 
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<<<<<<< HEAD
      <!-- Navbar brand -->
      <a class="navbar-brand mt-lg-0" href="#">
=======

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
>>>>>>> 13462404892f5d008fd5ef3aa13cc03017d75da7
        <img
          src="../../assets/images/logo-remove-preview.png"
          height="50"
          width = "60"
          alt="MT Logo"
        />
      </a>
<<<<<<< HEAD
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-lg-0" style="width:50%">
        <li class="nav-item">
          <a class="nav-link" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Movies</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <form action="search.php" method="post" class="d-flex" style="width:50%">
      <input type="text" name="search" class="form-control mt-2 mr-7"
      placeholder="Type here to search....">
      <br>
      <button type="submit" name="submit" class="btn btn-success mt-2 mr-7 bg-warning border-warning">submit</button>
    </form>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center mr-60">
      <!-- Icon -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="#">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Login</a>
=======
      <div class="navbar-nav">
      <a class="<?= urlIs('/') ? 'active bg-dark text-white' : '' ?> nav-link" href="/">Home <span class="sr-only"></span></a>
      <a class="<?= urlIs('/movie') ? 'active bg-dark text-white' : '' ?> nav-link" href="/movie">Movies</a>
      <a class="<?= urlIs('/About') ? 'active bg-dark text-white' : '' ?> nav-link" href="/About">About</a>
      <a class="<?= urlIs('/Contact') ? 'active bg-dark text-white' : '' ?> nav-link" href="/Contact">Contact</a>
    </div>
    </div>
    <div class="d-flex align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="/login">Login</a>
>>>>>>> 13462404892f5d008fd5ef3aa13cc03017d75da7
            </li>
      </ul>
      
    </div>
  </div>
</nav>
<<<<<<< HEAD
</div>

<!-- Navbar -->
=======
>>>>>>> 13462404892f5d008fd5ef3aa13cc03017d75da7
