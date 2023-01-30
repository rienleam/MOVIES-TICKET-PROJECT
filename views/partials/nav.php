
<nav class="navbar navbar-expand-lg navbar-dark fixed-top p-0 m-0">
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

      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="../../assets/images/logo-remove-preview.png"
          height="70"
          width = "80"
          alt="MT Logo"
        />
      </a>
      <div class="navbar-nav">
      <a class="<?= urlIs('/') ? 'active bg-dark text-white' : '' ?> nav-link" href="/">Home <span class="sr-only"></span></a>
      <a class="<?= urlIs('/movie') ? 'active bg-dark text-white' : '' ?> nav-link" href="/movie">Movies</a>
      <a class="<?= urlIs('/About') ? 'active bg-dark text-white' : '' ?> nav-link" href="/About">About</a>
      <a class="<?= urlIs('/Contact') ? 'active bg-dark text-white' : '' ?> nav-link" href="/Contact">Contact</a>
    </div>
    </div>
    <div class="d-flex align-items-center">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <?php 
            $link =  "/login";
              if ($link == '/login')
              {
                  $Account = "Logout";
                  if ($Account == "Logout")
                  {
                    $link = "/Logout";
                  }
                  if($link == "/Logout")
                  {
                    $Account = "Login";
                    $link == '/login';
                  }
              }
              
            ?>
            <li class="nav-item">
                <a class="nav-link" href="/login"><?= $Account;?></a>
            </li>
      </ul>
    </div>
  </div>
</nav>
