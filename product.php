<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Our Product | Self-Ordering Restaurant Kiosk Hyderabad',
    'description' => 'Explore KioskPro self-ordering kiosk hardware and POS software for restaurants, cafes, tiffin centers and food courts in Hyderabad.',
    'keywords' => 'self ordering kiosk Hyderabad, restaurant kiosk product, POS kiosk hardware Hyderabad',
    'canonical' => SITE_URL . '/product.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Our Product</span>
    <h1 class="section-title text-white mt-2">A complete self-ordering kiosk for modern food outlets.</h1>
    <p class="section-subtitle text-white-60">Hardware, ordering screen, payments, kitchen routing, billing and cloud reports in one practical system.</p>
  </div>
</section>

<section class="section mini-cta">
  <div class="container-xl">
    <div class="row align-items-center g-5">
      <div class="col-lg-5 reveal-left">
        <span class="section-badge">Product Preview</span>
        <h2 class="section-title">Designed for simple customer ordering.</h2>
        <p class="mt-3 text-muted">A clean kiosk flow helps customers browse, customize, pay and send orders to your kitchen without slowing the counter.</p>
        <div class="hero-ctas mt-4 mb-0">
          <a href="contact.php" class="btn btn-primary-custom"><i class="bi bi-play-circle-fill"></i> Get Product Demo</a>
          <a href="features.php" class="btn btn-pricing">View Features <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <div class="col-lg-7 reveal-right">
        <div class="product-visual">
          <div class="kiosk-mockup">
            <div class="kiosk-screen">
              <div class="kiosk-ui">
                <div class="kiosk-header-bar">KioskPro Menu</div>
                <div class="kiosk-menu-grid">
                  <?php for ($i = 0; $i < 6; $i++): ?>
                  <div class="kiosk-item"><div class="kiosk-item-img"></div><span>Menu Item</span><strong>Rs <?= [99,129,149,179,199,249][$i] ?></strong></div>
                  <?php endfor; ?>
                </div>
                <div class="kiosk-footer-bar"><span>Cart: 3 items</span><button>Pay Now</button></div>
              </div>
            </div>
            <div class="kiosk-stand"></div>
            <div class="kiosk-base"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Product Modules</span>
      <h2 class="section-title">Everything needed to take orders faster.</h2>
    </div>
    <div class="row g-4 mt-3">
      <?php
      $modules = [
        ['bi-display', 'Touch Kiosk Hardware', 'Commercial touchscreen kiosk with receipt printer, payment support, sturdy stand and clean counter presence.'],
        ['bi-menu-button-wide', 'Digital Menu Ordering', 'Photo-rich menu, add-ons, variants, combos, taxes and takeaway or dine-in order modes.'],
        ['bi-credit-card', 'Payment Ready', 'UPI, card, wallet and cash workflows designed for Indian restaurant billing habits.'],
        ['bi-grid-1x2', 'Kitchen Display', 'Orders reach kitchen teams instantly with clear preparation status and queue visibility.'],
        ['bi-bar-chart-line', 'Reports Dashboard', 'Track sales, best items, rush hours and outlet performance from a browser dashboard.'],
        ['bi-megaphone', 'Upsell Engine', 'Suggest combos, add-ons and repeat favorites to increase average order value.'],
      ];
      foreach ($modules as $module): ?>
      <div class="col-lg-4 col-md-6">
        <div class="inner-card reveal-up">
          <div class="inner-icon"><i class="bi <?= $module[0] ?>"></i></div>
          <h3><?= $module[1] ?></h3>
          <p><?= $module[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container-xl">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5 reveal-left">
        <span class="section-badge light">Best Fit</span>
        <h2 class="section-title text-white">Made for high-volume local food businesses.</h2>
        <p class="text-white-60 mt-3">KioskPro works especially well where menus are repeatable, order queues are common and staff time is better used in preparation and service.</p>
      </div>
      <div class="col-lg-7 reveal-right">
        <div class="row g-3">
          <?php foreach (['Restaurants', 'Tiffin Centers', 'Cafes', 'Food Courts', 'QSR Outlets', 'Bakeries'] as $type): ?>
          <div class="col-sm-6"><div class="metric-box"><strong><i class="bi bi-check-circle"></i></strong><span><?= $type ?></span></div></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
