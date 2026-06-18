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


<section class="section pricing-section dark-section" id="pricing">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">Transparent Pricing</span>
      <h2 class="section-title text-white">Simple, Honest Plans for Every Restaurant</h2>
      <p class="section-subtitle text-white-60">No hidden fees. No surprise bills. All prices inclusive of installation and 1-year support.</p>
    </div>
    <div class="row g-4 mt-3 justify-content-center">
      <?php
      $plans = [
        ['Starter','₹49,999','one-time','Perfect for single-outlet cafes & QSRs',['1 Kiosk Unit (21.5")','Basic POS Software','Receipt Printer','All Payment Modes','Email Support','1-Year Warranty'],'',false],
        ['Professional','₹89,999','one-time','Best for restaurants with moderate traffic',['1 Kiosk Unit (27")','Full POS + Analytics','Kitchen Display System','CRM & Loyalty Module','Priority WhatsApp Support','3-Year Warranty','Free Staff Training'],'Most Popular',true],
        ['Enterprise','Custom','pricing','For food courts, franchises & multi-outlets',['Multiple Kiosk Units','Full Platform License','API Integrations','Dedicated Account Manager','24/7 Phone Support','5-Year Warranty','Custom Branding'],'',false],
      ];
      foreach($plans as $p): ?>
      <div class="col-lg-4 col-md-6">
        <div class="pricing-card <?= $p[7]?'featured':'' ?> reveal-up">
          <?php if($p[6]): ?><div class="pricing-badge"><?= $p[6] ?></div><?php endif; ?>
          <div class="pricing-header">
            <h3><?= $p[0] ?></h3>
            <div class="pricing-price">
              <span class="price"><?= $p[1] ?></span>
              <span class="period"><?= $p[2] ?></span>
            </div>
            <p><?= $p[3] ?></p>
          </div>
          <ul class="pricing-features">
            <?php foreach($p[4] as $f): ?>
            <li><i class="bi bi-check-circle-fill"></i> <?= $f ?></li>
            <?php endforeach; ?>
          </ul>
          <a href="/contact.php" class="btn <?= $p[7]?'btn-pricing-featured':'btn-pricing' ?> w-100">
            <?= $p[0]==='Enterprise'?'Request Quote':'Get Started' ?> <i class="bi bi-arrow-right"></i>
          </a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
    <p class="text-center text-white-60 mt-4 reveal-up">
      <i class="bi bi-info-circle"></i> All plans include free on-site installation in Hyderabad.
      <a href="/contact.php" class="text-accent">Contact us for EMI options.</a>
    </p>
  </div>
</section>


<section class="section mini-cta">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge">Get Recommendation</span>
    <h2 class="section-title">Not sure which plan fits?</h2>
    <p class="section-subtitle">Share your outlet type, daily order count and current billing process. We will suggest a practical setup.</p>
    <a href="contact.php" class="btn btn-primary-custom mt-4">Request plan Advice <i class="bi bi-arrow-right"></i></a>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
