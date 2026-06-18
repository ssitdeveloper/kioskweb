<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Privacy Policy | KioskPro Hyderabad',
    'description' => 'Read the KioskPro Hyderabad privacy policy for website visitors, demo enquiries and customer communication.',
    'canonical' => SITE_URL . '/privacy-policy.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Privacy Policy</span>
    <h1 class="section-title text-white mt-2">How we handle your information.</h1>
    <p class="section-subtitle text-white-60">Last updated: June 18, 2026</p>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="legal-content reveal-up">
      <h2>Information We Collect</h2>
      <p>When you contact KioskPro Hyderabad, request a demo or call us, we may collect your name, phone number, email address, business name, outlet type and message details.</p>
      <h2>How We Use Information</h2>
      <p>We use this information to respond to enquiries, schedule demos, recommend kiosk solutions, provide support and improve our website and services.</p>
      <h2>Sharing Information</h2>
      <p>We do not sell personal information. We may share limited information with service providers only when needed for communication, installation, support or legal compliance.</p>
      <h2>Data Security</h2>
      <p>We use reasonable administrative and technical measures to protect enquiry and customer information. No online transmission method is completely risk-free.</p>
      <h2>Your Choices</h2>
      <p>You can ask us to update, correct or remove your enquiry details by contacting us at <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>.</p>
      <h2>Contact</h2>
      <p>For privacy questions, contact <?= SITE_NAME ?> at <?= SITE_ADDRESS ?> or call <a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a>.</p>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
