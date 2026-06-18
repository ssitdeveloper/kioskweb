<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Terms and Conditions | KioskPro Hyderabad',
    'description' => 'Read KioskPro Hyderabad website terms and conditions for demo enquiries, information use and service communication.',
    'canonical' => SITE_URL . '/terms.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Terms and Conditions</span>
    <h1 class="section-title text-white mt-2">Website and service enquiry terms.</h1>
    <p class="section-subtitle text-white-60">Last updated: June 18, 2026</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="legal-content reveal-up">
      <h2>Use of Website</h2>
      <p>This website is intended to provide information about KioskPro Hyderabad products and services. By using it, you agree to use the content for lawful business enquiry purposes.</p>
      <h2>Marketing Information</h2>
      <p>Product descriptions, pricing examples, timelines and benefits are provided for general marketing guidance. Final scope, pricing and delivery terms may vary based on outlet requirements.</p>
      <h2>Demo Requests</h2>
      <p>Submitting a demo request does not create a purchase obligation. Our team may contact you by phone, email or WhatsApp to understand your requirements and schedule a consultation.</p>
      <h2>Intellectual Property</h2>
      <p>Website text, branding, layouts and visual materials belong to KioskPro Hyderabad or their respective owners and may not be copied for commercial use without permission.</p>
      <h2>Limitation of Liability</h2>
      <p>We aim to keep information accurate and available, but we do not guarantee uninterrupted access or that all content is free from errors. Use of this website is at your discretion.</p>
      <h2>Contact</h2>
      <p>Questions about these terms can be sent to <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a> or discussed by calling <a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a>.</p>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
