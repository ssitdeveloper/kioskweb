<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'What We Offer | Restaurant Kiosk Packages Hyderabad',
    'description' => 'See what KioskPro offers for restaurants, tiffin centers, cafes and small businesses: kiosk hardware, software, payments, training and support.',
    'keywords' => 'restaurant kiosk package Hyderabad, what kioskpro offers, food business automation Hyderabad',
    'canonical' => SITE_URL . '/what-we-offer.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">What We Offer</span>
    <h1 class="section-title text-white mt-2">Practical kiosk packages for small and growing food businesses.</h1>
    <p class="section-subtitle text-white-60">Choose the level of automation your outlet needs today, with room to grow into analytics, loyalty and multi-outlet control.</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="row g-4">
      <?php
      $offers = [
        ['Starter Kiosk Setup', 'For single counters, cafes and tiffin centers starting with self-ordering.', ['Touch kiosk hardware', 'Digital menu setup', 'Receipt printing', 'Basic sales reports', 'Staff handover training']],
        ['Restaurant Automation Setup', 'For busy restaurants that need ordering, billing and kitchen coordination.', ['Self-ordering kiosk', 'POS workflow setup', 'Kitchen display routing', 'UPI and card payment flow', 'Rush-hour order management']],
        ['Growth Package', 'For outlets that want reporting, repeat customers and better average order value.', ['Upsell and combo prompts', 'Customer loyalty setup', 'Sales analytics dashboard', 'Menu performance review', 'Monthly optimization support']],
      ];
      foreach ($offers as $offer): ?>
      <div class="col-lg-4">
        <div class="inner-card reveal-up">
          <div class="inner-icon"><i class="bi bi-box-seam"></i></div>
          <h3><?= $offer[0] ?></h3>
          <p><?= $offer[1] ?></p>
          <ul class="offer-list">
            <?php foreach ($offer[2] as $point): ?><li><i class="bi bi-check-circle-fill"></i> <?= $point ?></li><?php endforeach; ?>
          </ul>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">Included Support</span>
      <h2 class="section-title text-white">Every package is designed for real-world use.</h2>
      <p class="section-subtitle text-white-60">We help with the pieces that usually slow businesses down after purchase.</p>
    </div>
    <div class="row g-4 mt-3">
      <?php
      $included = [
        ['bi-card-image', 'Menu Structuring', 'Categories, add-ons, taxes, combos and photos arranged for easy self-ordering.'],
        ['bi-wallet2', 'Payment Guidance', 'UPI, card and cash workflows aligned with your counter process.'],
        ['bi-person-video3', 'Team Training', 'Clear training for owners, managers, cashiers and kitchen staff.'],
        ['bi-arrow-repeat', 'Upgrade Path', 'Start small and add CRM, analytics, multi-outlet control or more kiosks later.'],
      ];
      foreach ($included as $item): ?>
      <div class="col-lg-3 col-md-6">
        <div class="why-card glass-card reveal-up">
          <i class="bi <?= $item[0] ?>"></i>
          <div><h4 class="text-white"><?= $item[1] ?></h4><p><?= $item[2] ?></p></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section mini-cta">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge">Get Recommendation</span>
    <h2 class="section-title">Not sure which package fits?</h2>
    <p class="section-subtitle">Share your outlet type, daily order count and current billing process. We will suggest a practical setup.</p>
    <a href="contact.php" class="btn btn-primary-custom mt-4">Request Package Advice <i class="bi bi-arrow-right"></i></a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
