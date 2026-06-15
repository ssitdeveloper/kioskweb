<?php /* ════════════════════════════════════════════
   pricing.php
════════════════════════════════════════════ */
require_once 'includes/config.php';
$seo = [
    'title'       => 'Restaurant Kiosk Pricing Hyderabad | Affordable POS Kiosk Plans – KioskPro',
    'description' => 'Transparent pricing for restaurant kiosks in Hyderabad. Starter from ₹49,999. All plans include on-site installation, training & warranty. Get your free quote today.',
    'keywords'    => 'Restaurant Kiosk Price Hyderabad, POS Kiosk Cost Hyderabad, Self Ordering Kiosk Price India',
    'canonical'   => SITE_URL . '/pricing.php',
    'og_image'    => SITE_URL . '/assets/images/og-pricing.jpg',
    'og_type'     => 'website',
];
require_once 'includes/header.php'; ?>

<section class="page-hero dark-section" style="padding:140px 0 80px">
  <div class="container-xl text-center">
    <span class="section-badge light">Pricing</span>
    <h1 class="section-title text-white mt-2">Simple, Transparent Plans</h1>
    <p class="section-subtitle text-white-60">No hidden fees. No per-transaction charges. One-time investment, lifetime value.</p>
  </div>
</section>

<!-- Pricing content is reused from index.php pricing section -->
<!-- In production: extract to a shared include -->

<?php require_once 'includes/footer.php'; ?>
