<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Restaurant Kiosk Pricing Hyderabad | KioskPro Plans',
    'description' => 'Transparent restaurant kiosk pricing in Hyderabad for starter, professional and enterprise deployments. Book a free quote with KioskPro.',
    'keywords' => 'Restaurant Kiosk Price Hyderabad, POS Kiosk Cost Hyderabad, Self Ordering Kiosk Price India',
    'canonical' => SITE_URL . '/pricing.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Pricing</span>
    <h1 class="section-title text-white mt-2">Simple plans for every stage of restaurant automation.</h1>
    <p class="section-subtitle text-white-60">Pricing depends on kiosk size, payment setup, software modules and support requirements. These packages give you a clear starting point.</p>
  </div>
</section>

<section class="section pricing-section dark-section">
  <div class="container-xl">
    <div class="row g-4 justify-content-center">
      <?php
      $plans = [
        ['Starter', 'From Rs 49,999', 'For cafes, tiffin centers and small QSR outlets', ['21.5 inch kiosk option', 'Self-ordering menu', 'Receipt printer setup', 'Basic reports', 'On-site installation'], false],
        ['Professional', 'From Rs 89,999', 'For restaurants with stronger rush-hour ordering needs', ['Larger kiosk options', 'POS and kitchen workflow', 'Payment configuration', 'Analytics dashboard', 'Staff training and priority support'], true],
        ['Enterprise', 'Custom Quote', 'For food courts, franchises and multi-outlet businesses', ['Multiple kiosk units', 'Central menu control', 'Advanced reporting', 'Custom branding', 'Dedicated rollout support'], false],
      ];
      foreach ($plans as $plan): ?>
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card <?= $plan[5] ? 'featured' : '' ?> reveal-up">
          <?php if ($plan[5]): ?><div class="pricing-badge">Most Popular</div><?php endif; ?>
          <div class="pricing-header">
            <h3><?= $plan[0] ?></h3>
            <div class="pricing-price"><span class="price"><?= $plan[1] ?></span></div>
            <p><?= $plan[2] ?></p>
          </div>
          <ul class="pricing-features">
            <?php foreach ($plan[3] as $feature): ?><li><i class="bi bi-check-circle-fill"></i> <?= $feature ?></li><?php endforeach; ?>
          </ul>
          <a href="contact.php" class="btn <?= $plan[5] ? 'btn-pricing-featured' : 'btn-pricing' ?> w-100">Request Quote <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center text-white-60 mt-4">Final pricing is confirmed after understanding your outlet layout, order volume and required modules.</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Included</span>
      <h2 class="section-title">What affects your quote?</h2>
    </div>
    <div class="row g-4 mt-3">
      <?php foreach ([['bi-display','Kiosk screen size and model'],['bi-credit-card','Payment terminal requirements'],['bi-grid','Kitchen and POS workflow'],['bi-headset','Support and maintenance level']] as $item): ?>
      <div class="col-lg-3 col-md-6"><div class="inner-card text-center reveal-up"><div class="inner-icon"><i class="bi <?= $item[0] ?>"></i></div><h3><?= $item[1] ?></h3></div></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
