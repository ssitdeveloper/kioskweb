<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'About KioskPro Hyderabad | Restaurant Kiosk Experts',
    'description' => 'Learn about KioskPro Hyderabad, a local restaurant kiosk and POS automation team helping restaurants, cafes and tiffin centers reduce queues and grow sales.',
    'keywords' => 'About KioskPro Hyderabad, restaurant kiosk company Hyderabad, POS automation Hyderabad',
    'canonical' => SITE_URL . '/about.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">About Us</span>
    <h1 class="section-title text-white mt-2">Local kiosk automation for busy Hyderabad food businesses.</h1>
    <p class="section-subtitle text-white-60">KioskPro helps restaurants, cafes, tiffin centers, QSRs and food courts accept faster self-orders, reduce counter pressure and serve more customers during peak hours.</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6 reveal-left">
        <span class="section-badge">Our Story</span>
        <h2 class="section-title">Built around the real rush at Indian counters.</h2>
      </div>
      <div class="col-lg-6 reveal-right">
        <p class="lead text-muted">Most small food businesses do not need complicated enterprise software. They need a kiosk that is easy for customers, simple for staff, reliable during rush time and supported by people who can actually visit the outlet.</p>
        <p class="text-muted">That is the idea behind KioskPro: practical restaurant automation with commercial-grade hardware, intuitive ordering screens, POS workflows and local support around Hyderabad.</p>
      </div>
    </div>
    <div class="row g-4 mt-4">
      <?php
      $values = [
        ['bi-geo-alt-fill', 'Local First', 'We understand Hyderabad restaurant formats, customer flow, payment habits and support expectations.'],
        ['bi-lightning-charge-fill', 'Speed Matters', 'Our kiosk flows are designed to reduce queue time and keep orders moving during breakfast, lunch and dinner rush.'],
        ['bi-shield-check', 'Reliable Setup', 'From hardware placement to staff training, we focus on dependable daily operation, not just the first demo.'],
      ];
      foreach ($values as $item): ?>
      <div class="col-md-4">
        <div class="inner-card reveal-up">
          <div class="inner-icon"><i class="bi <?= $item[0] ?>"></i></div>
          <h3><?= $item[1] ?></h3>
          <p><?= $item[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">How We Work</span>
      <h2 class="section-title text-white">From first call to live counter.</h2>
    </div>
    <div class="process-list mt-4">
      <?php
      $steps = [
        ['01', 'Outlet Study', 'We understand your menu, rush hours, payment needs and counter layout.'],
        ['02', 'Demo Setup', 'We show the kiosk workflow with ordering, billing, kitchen flow and reports.'],
        ['03', 'Installation', 'Hardware, software, payments, menu setup and staff training are handled on-site.'],
        ['04', 'Ongoing Support', 'We stay available for menu changes, troubleshooting and growth upgrades.'],
      ];
      foreach ($steps as $step): ?>
      <div class="process-step reveal-up">
        <span><?= $step[0] ?></span>
        <h4><?= $step[1] ?></h4>
        <p><?= $step[2] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section mini-cta">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge">Meet Us</span>
    <h2 class="section-title">Want to see if a kiosk fits your outlet?</h2>
    <p class="section-subtitle">Book a free demo and we will walk you through the right setup for your restaurant, tiffin center, cafe or food court.</p>
    <a href="contact.php" class="btn btn-primary-custom mt-4">Book Free Demo <i class="bi bi-arrow-right"></i></a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
