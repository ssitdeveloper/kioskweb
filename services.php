<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Kiosk Services Hyderabad | Installation, Training and Support',
    'description' => 'KioskPro provides kiosk consultation, installation, menu setup, staff training, maintenance and local support for Hyderabad food businesses.',
    'keywords' => 'kiosk installation Hyderabad, restaurant POS support Hyderabad, self ordering kiosk services',
    'canonical' => SITE_URL . '/services.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Services</span>
    <h1 class="section-title text-white mt-2">End-to-end kiosk setup, not just a product handover.</h1>
    <p class="section-subtitle text-white-60">From choosing the right kiosk size to staff training and support, we help your outlet go live with confidence.</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="row g-4">
      <?php
      $services = [
        ['bi-search', 'Kiosk Consultation', 'We review your outlet type, counter flow, order volume and menu structure to suggest the right kiosk setup.'],
        ['bi-tools', 'Installation & Configuration', 'On-site kiosk placement, software setup, menu upload, billing rules, printer setup and payment flow configuration.'],
        ['bi-people', 'Staff Training', 'Hands-on training for order handling, menu updates, daily reports, refunds and customer assistance.'],
        ['bi-headset', 'Local Support', 'Remote help and Hyderabad-area assistance for software questions, menu edits and hardware troubleshooting.'],
        ['bi-shield-check', 'Maintenance', 'Regular health checks, updates and practical guidance to keep your kiosk running smoothly.'],
        ['bi-graph-up-arrow', 'Growth Optimization', 'Upsell setup, combo planning and report review to improve average bill value and repeat visits.'],
      ];
      foreach ($services as $service): ?>
      <div class="col-lg-4 col-md-6">
        <div class="inner-card reveal-up">
          <div class="inner-icon"><i class="bi <?= $service[0] ?>"></i></div>
          <h3><?= $service[1] ?></h3>
          <p><?= $service[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section mini-cta">
  <div class="container-xl">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5 reveal-left">
        <span class="section-badge">Service Flow</span>
        <h2 class="section-title">A simple launch plan for your outlet.</h2>
      </div>
      <div class="col-lg-7">
        <div class="process-list">
          <?php foreach ([['01','Assess'],['02','Configure'],['03','Train'],['04','Support']] as $step): ?>
          <div class="process-step reveal-up"><span><?= $step[0] ?></span><h4><?= $step[1] ?></h4><p>Clear milestones so your kiosk launch stays practical and fast.</p></div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section cta-section">
  <div class="container-xl">
    <div class="cta-inner reveal-up">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h2>Need help choosing the right kiosk service package?</h2>
          <p>Tell us about your business and we will recommend a practical launch plan.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="contact.php" class="btn btn-cta-main">Talk to Our Team <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
