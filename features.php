<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Restaurant Kiosk Features | KioskPro Hyderabad',
    'description' => 'Explore KioskPro restaurant kiosk features including self-ordering, payments, POS workflow, kitchen display, analytics and customer loyalty.',
    'keywords' => 'restaurant kiosk features, self ordering kiosk software, restaurant automation Hyderabad',
    'canonical' => SITE_URL . '/features.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Platform Features</span>
    <h1 class="section-title text-white mt-2">Everything your restaurant needs to serve faster.</h1>
    <p class="section-subtitle text-white-60">Self-ordering, payments, kitchen flow and business reports in one practical kiosk platform for Hyderabad food businesses.</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Core Features</span>
      <h2 class="section-title">Designed for modern restaurants and tiffin centers.</h2>
    </div>
    <div class="row g-4 mt-3">
      <?php
      $features = [
        ['bi-display', 'Self-Ordering Kiosk', 'Customers browse the menu, choose variants, add extras and place orders without waiting at the counter.'],
        ['bi-credit-card', 'Integrated Payments', 'Support UPI, cards, wallets and cash billing workflows used by Indian food businesses.'],
        ['bi-receipt', 'POS Billing Flow', 'Generate clean receipts, taxes, order numbers and counter records from a single order journey.'],
        ['bi-grid-1x2', 'Kitchen Display', 'Send new orders to the kitchen instantly with clear preparation queues and status visibility.'],
        ['bi-bar-chart-line', 'Analytics Dashboard', 'Track best sellers, peak hours, daily sales and outlet performance from a simple dashboard.'],
        ['bi-person-hearts', 'CRM & Loyalty', 'Encourage repeat visits with customer records, loyalty ideas and targeted offers.'],
      ];
      foreach ($features as $feature): ?>
      <div class="col-lg-4 col-md-6">
        <div class="inner-card reveal-up">
          <div class="inner-icon"><i class="bi <?= $feature[0] ?>"></i></div>
          <h3><?= $feature[1] ?></h3>
          <p><?= $feature[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section dark-section">
  <div class="container-xl">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal-left">
        <span class="section-badge light">Ordering Experience</span>
        <h2 class="section-title text-white">A smooth screen flow for every customer.</h2>
        <p class="text-white-60 mt-3">The kiosk interface is built for fast decisions: clear categories, readable item cards, simple add-ons and a direct payment path.</p>
        <ul class="feature-check-list text-white mt-3">
          <li><i class="bi bi-check-circle-fill"></i> Menu categories, item photos and combo prompts</li>
          <li><i class="bi bi-check-circle-fill"></i> Dine-in, takeaway and counter pickup modes</li>
          <li><i class="bi bi-check-circle-fill"></i> English, Hindi and Telugu-ready workflows</li>
          <li><i class="bi bi-check-circle-fill"></i> Order summary before payment confirmation</li>
        </ul>
      </div>
      <div class="col-lg-6 reveal-right">
        <div class="software-screenshot-card">
          <img src="assets/images/ordering-ui.webp" alt="Self-ordering kiosk interface" class="software-screenshot-image">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section mini-cta">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Workflow</span>
      <h2 class="section-title">From customer tap to kitchen ticket.</h2>
    </div>
    <div class="process-list mt-4">
      <?php
      $steps = [
        ['01', 'Customer Orders', 'Browse menu, customize items and confirm the order.'],
        ['02', 'Payment Completes', 'UPI, card or counter-supported payment flow is recorded.'],
        ['03', 'Kitchen Receives', 'Order details move to kitchen display or printer workflow.'],
        ['04', 'Reports Update', 'Sales, item movement and order history stay available for review.'],
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

<section class="section">
  <div class="container-xl">
    <div class="row align-items-center g-5">
      <div class="col-lg-6 reveal-left">
        <div class="software-screenshot-card">
          <img src="assets/images/kds.webp" alt="Kitchen display system" class="software-screenshot-image">
        </div>
      </div>
      <div class="col-lg-6 reveal-right">
        <span class="section-badge">Operations</span>
        <h2 class="section-title">Better visibility for owners and staff.</h2>
        <p class="mt-3 text-muted">KioskPro helps your team reduce repeated manual entry, see orders clearly and use reports to improve menu decisions.</p>
        <ul class="offer-list">
          <li><i class="bi bi-check-circle-fill"></i> Kitchen display and receipt printer workflows</li>
          <li><i class="bi bi-check-circle-fill"></i> Sales reports for daily and weekly reviews</li>
          <li><i class="bi bi-check-circle-fill"></i> Menu updates and price changes from dashboard</li>
          <li><i class="bi bi-check-circle-fill"></i> Optional loyalty and customer follow-up modules</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<section class="section cta-section">
  <div class="container-xl">
    <div class="cta-inner reveal-up">
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h2>Want to see these features on your own menu?</h2>
          <p>Book a free demo and we will show how KioskPro can work for your outlet type.</p>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="contact.php" class="btn btn-cta-main">Book Free Demo <i class="bi bi-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
