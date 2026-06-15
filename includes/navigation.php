<!-- ═══════════════════════════════════════════════
     MAIN NAVIGATION
═══════════════════════════════════════════════ -->
<nav class="navbar navbar-expand-lg main-navbar" id="mainNav">
  <div class="container-xl">

    <!-- Logo -->
    <a class="navbar-brand" href="/" aria-label="KioskPro Hyderabad Home">
      <div class="logo-wrap">
        <span class="logo-icon"><i class="bi bi-grid-3x3-gap-fill"></i></span>
        <span class="logo-text">Kiosk<span class="logo-accent">Pro</span></span>
      </div>
    </a>

    <!-- Mobile Toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navMenu" aria-controls="navMenu"
            aria-expanded="false" aria-label="Toggle navigation">
      <span class="toggler-bar"></span>
      <span class="toggler-bar"></span>
      <span class="toggler-bar"></span>
    </button>

    <!-- Nav Links -->
    <div class="collapse navbar-collapse" id="navMenu">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-lg-1">
        <li class="nav-item">
          <a class="nav-link <?= isActive('index') ?>" href="">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('about') ?>" href="about.php">About</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle <?= isActive('features') ?>"
             href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Solutions
          </a>
          <ul class="dropdown-menu mega-menu">
            <li><a class="dropdown-item" href="features.php#kiosk-hardware">
              <i class="bi bi-display"></i> Kiosk Hardware</a></li>
            <li><a class="dropdown-item" href="features.php#pos-software">
              <i class="bi bi-cpu"></i> POS Software</a></li>
            <li><a class="dropdown-item" href="features.php#self-ordering">
              <i class="bi bi-phone"></i> Self-Ordering System</a></li>
            <li><a class="dropdown-item" href="features.php#kitchen-display">
              <i class="bi bi-grid"></i> Kitchen Display System</a></li>
            <li><a class="dropdown-item" href="features.php#analytics">
              <i class="bi bi-bar-chart-line"></i> Analytics & Reports</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('pricing') ?>" href="pricing.php">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?= isActive('contact') ?>" href="contact.php">Contact</a>
        </li>
      </ul>

      <div class="nav-ctas ms-lg-4 mt-3 mt-lg-0 d-flex gap-2 align-items-center">
        <a href="tel:<?= SITE_PHONE ?>" class="btn btn-outline-nav d-none d-lg-inline-flex">
          <i class="bi bi-telephone"></i> Call Us
        </a>
        <a href="contact.php#demo" class="btn btn-primary-nav">
          Get Free Demo <i class="bi bi-arrow-right"></i>
        </a>
      </div>
    </div>

  </div>
</nav>