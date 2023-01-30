<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light fixed-top">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
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

    <!-- Collapsible wrapper -->
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
      <button type="submit" name="submit" class="btn btn-success mt-2 mr-7">search</button>
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
                <a class="nav-link" href="views/form/login.php">| Login</a>
            </li>
      </ul>
      
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
<!-- Navbar -->