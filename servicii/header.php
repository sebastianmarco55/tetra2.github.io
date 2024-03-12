<?php
  $currentPage = basename($_SERVER['PHP_SELF']);
?>
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm py-3 py-lg-0 px-3 px-lg-0">
  <a href="../index.php" class="navbar-brand ms-lg-5">
    <h1 class="display-5 m-0 text-primary2">
      <img src="../img/favicon2.png" alt="" style="width: 60%; border-radius: 10px; background-color: rgb(21, 59, 95); padding-left: 10px; padding-right: 10px;" />
    </h1>
  </a>
  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarCollapse">
    <div class="navbar-nav ms-auto py-0">
      <a href="../index.php" class="nav-item nav-link <?php if($currentPage == 'index.php') echo 'active'; ?>">Acasă</a>
      <a href="../about.php" class="nav-item nav-link <?php if($currentPage == 'about.php') echo 'active'; ?>">Despre noi</a>
      <a href="../service.php" class="nav-item nav-link active <?php if($currentPage == 'service.php') echo 'active'; ?>">Servicii</a>
      <a href="../career.php" class="nav-item nav-link <?php if($currentPage == 'career.php') echo 'active'; ?>">Cariera</a>
      <a href="../contact.php" class="nav-item nav-link <?php if($currentPage == 'contact.php') echo 'active'; ?>">Contact</a>
      <a href="../tel:+123456789" class="nav-item nav-link nav-contact bg-secondary text-white px-5 ms-lg-5"><i class="bi bi-telephone-outbound me-2"></i>+40 731 200 520</a>
    </div>
  </div>
</nav>