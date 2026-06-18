<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Contact KioskPro Hyderabad | Get Free Restaurant Kiosk Demo',
    'description' => 'Book a free restaurant kiosk demo in Hyderabad for restaurants, cafes, tiffin centers and food courts. Contact KioskPro today.',
    'keywords' => 'Contact Restaurant Kiosk Hyderabad, Free Demo POS Kiosk Hyderabad, KioskPro contact',
    'canonical' => SITE_URL . '/contact.php',
];

$formSuccess = false;
$formError = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
    $name = trim($_POST['name'] ?? '');
    $email = filter_var(trim($_POST['email'] ?? ''), FILTER_SANITIZE_EMAIL);
    $phone = trim($_POST['phone'] ?? '');
    $business = trim($_POST['biz_type'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $phone) {
        $subject = 'New Kiosk Demo Request - ' . $name;
        $body = "Name: $name\nEmail: $email\nPhone: $phone\nBusiness Type: $business\n\nMessage:\n$message";
        $headers = "From: noreply@kioskprohyd.com\r\nReply-To: $email";
        $formSuccess = mail(SITE_EMAIL, $subject, $body, $headers);
        if (!$formSuccess) {
            $formError = 'Message could not be sent right now. Please call or WhatsApp us directly.';
        }
    } else {
        $formError = 'Please enter your name, valid email and phone number.';
    }
}

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Contact Us</span>
    <h1 class="section-title text-white mt-2">Book your free restaurant kiosk demo.</h1>
    <p class="section-subtitle text-white-60">Tell us about your outlet. Our Hyderabad team will help you choose the right kiosk setup.</p>
  </div>
</section>

<section class="section contact-section" id="demo">
  <div class="container-xl">
    <div class="row g-5">
      <div class="col-lg-7 reveal-left">
        <div class="contact-form-wrap glass-card">
          <?php if ($formSuccess): ?>
            <div class="form-success">
              <i class="bi bi-check-circle-fill"></i>
              <h3>Thank you!</h3>
              <p>We received your request. Our team will contact you shortly.</p>
            </div>
          <?php else: ?>
            <?php if ($formError): ?><div class="alert alert-danger"><i class="bi bi-exclamation-circle"></i> <?= htmlspecialchars($formError) ?></div><?php endif; ?>
            <form method="POST" action="#demo" class="contact-form" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                  <input type="text" id="name" name="name" class="form-control custom-input" placeholder="Your name" required>
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                  <input type="tel" id="phone" name="phone" class="form-control custom-input" placeholder="+91 98765 43210" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                  <input type="email" id="email" name="email" class="form-control custom-input" placeholder="you@business.com" required>
                </div>
                <div class="col-md-6">
                  <label for="biz_type" class="form-label">Business Type</label>
                  <select id="biz_type" name="biz_type" class="form-select custom-input">
                    <option value="">Select business type</option>
                    <option>Restaurant</option>
                    <option>Tiffin Center</option>
                    <option>Cafe</option>
                    <option>Food Court</option>
                    <option>QSR / Fast Food</option>
                    <option>Bakery</option>
                    <option>Other Small Business</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Requirement</label>
                  <textarea id="message" name="message" rows="5" class="form-control custom-input" placeholder="Tell us about your outlet, daily orders or kiosk requirement"></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" name="contact_submit" class="btn btn-submit w-100">
                    <i class="bi bi-send-fill"></i> Send Demo Request
                  </button>
                </div>
              </div>
            </form>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-lg-5 reveal-right">
        <div class="contact-detail-card">
          <h3>Contact Information</h3>
          <div class="contact-info-list mt-4">
            <div class="contact-info-item"><div class="ci-icon"><i class="bi bi-telephone-fill"></i></div><div><strong>Phone</strong><p><a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a><br><a href="tel:<?= SITE_PHONE_2 ?>"><?= SITE_PHONE_2 ?></a></p></div></div>
            <div class="contact-info-item"><div class="ci-icon"><i class="bi bi-whatsapp"></i></div><div><strong>WhatsApp</strong><p><a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener">Chat about a demo</a></p></div></div>
            <div class="contact-info-item"><div class="ci-icon"><i class="bi bi-envelope-fill"></i></div><div><strong>Email</strong><p><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p></div></div>
            <div class="contact-info-item"><div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div><div><strong>Office</strong><p><?= SITE_ADDRESS ?></p></div></div>
            <div class="contact-info-item"><div class="ci-icon"><i class="bi bi-clock-fill"></i></div><div><strong>Hours</strong><p><?= SITE_HOURS ?></p></div></div>
          </div>
        </div>
      </div>
    </div>
    <div class="map-embed mt-5 reveal-up">
      <iframe src="<?= GOOGLE_MAPS_EMBED ?>" width="100%" height="360" style="border:0; border-radius:16px;" allowfullscreen loading="lazy" title="KioskPro Hyderabad Location" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
