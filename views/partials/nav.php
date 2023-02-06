<!-- Navbar -->
<div class="container">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top">
  <!-- Container wrapper -->
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
      <!-- Navbar brand -->
      <a class="navbar-brand mt-lg-0" href="#">
        <img
          src="../../assets/images/logo-remove-preview.png"
          height="50"
          width = "60"
          alt="MT Logo"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-lg-0" style="width:50%">
        <li class="nav-item">
          <a class="nav-link" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../../controllers/admin/seller.php">Movies</a>
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
    <form action="search.php" method="post" class="d-flex flex-row m-3" style="width:50%">
      <input type="text" name="search" class="searchbar rounded-start"
      placeholder="Type here to search....">
      <button type="submit" name="submit" class="btn-search rounded-end text-white">search</button>
    </form>
    <?php
    session_start();
    if(!isset($_SESSION["email"]))
      {
      echo
      '<div class="d-flex align-items-center">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link" href="/login">Login</a>
              </li>
        </ul>
      </div>
      ';
    } 
  else
  {
    echo
    '
    <div class="d-flex align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li><a class="nav-link" href="/logout">Logout</a></li>
      </ul>
      
    </div>
    ';
  }
    ?>
  </div>
  </nav>
</div>

<!-- Navbar -->
