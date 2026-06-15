<?php require_once __DIR__ . '/config.php'; ?>
<!DOCTYPE html>
<html lang="en-IN">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <?php require_once __DIR__ . '/seo.php'; ?>

  <!-- Favicon -->
  <link rel="icon" type="image/svg+xml" href="assets/images/favicon.svg">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Bootstrap Icons -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- ═══════════════════════════════════════════════
     TOP BAR
═══════════════════════════════════════════════ -->
<div class="topbar" id="topbar">
  <div class="container-xl">
    <div class="topbar-inner">
      <div class="topbar-left">
        <a href="tel:<?= SITE_PHONE ?>" class="topbar-link">
          <i class="bi bi-telephone-fill"></i> <?= SITE_PHONE ?>
        </a>
        <a href="mailto:<?= SITE_EMAIL ?>" class="topbar-link">
          <i class="bi bi-envelope-fill"></i> <?= SITE_EMAIL ?>
        </a>
        <span class="topbar-link d-none d-lg-inline">
          <i class="bi bi-clock-fill"></i> <?= SITE_HOURS ?>
        </span>
      </div>
      <div class="topbar-right">
        <a href="https://wa.me/<?= SITE_WHATSAPP ?>?text=Hi%2C+I%27m+interested+in+Restaurant+Kiosk+solutions"
           class="topbar-cta" target="_blank" rel="noopener">
          <i class="bi bi-whatsapp"></i> WhatsApp Demo
        </a>
      </div>
    </div>
  </div>
</div>

<?php require_once __DIR__ . '/navigation.php'; ?>