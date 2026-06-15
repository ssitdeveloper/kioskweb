<!-- ═══════════════════════════════════════════════
     FOOTER
═══════════════════════════════════════════════ -->
<footer class="site-footer">
  <div class="footer-top">
    <div class="container-xl">
      <div class="row g-5">

        <!-- Col 1 — Company Info -->
        <div class="col-lg-4 col-md-6">
          <div class="footer-brand">
            <a href="/" class="footer-logo">
              <span class="logo-icon"><i class="bi bi-grid-3x3-gap-fill"></i></span>
              <span class="logo-text">Kiosk<span class="logo-accent">Pro</span></span>
            </a>
          </div>
          <p class="footer-desc mt-3">
            Hyderabad's most trusted restaurant self-ordering kiosk and POS software provider.
            We help restaurants, cafes, and food courts automate ordering, boost revenue,
            and deliver exceptional dining experiences.
          </p>
          <div class="footer-socials mt-4">
            <a href="<?= FB_URL ?>" target="_blank" rel="noopener" aria-label="Facebook">
              <i class="bi bi-facebook"></i></a>
            <a href="<?= IG_URL ?>" target="_blank" rel="noopener" aria-label="Instagram">
              <i class="bi bi-instagram"></i></a>
            <a href="<?= LI_URL ?>" target="_blank" rel="noopener" aria-label="LinkedIn">
              <i class="bi bi-linkedin"></i></a>
            <a href="<?= YT_URL ?>" target="_blank" rel="noopener" aria-label="YouTube">
              <i class="bi bi-youtube"></i></a>
            <a href="https://wa.me/<?= SITE_WHATSAPP ?>" target="_blank" rel="noopener" aria-label="WhatsApp">
              <i class="bi bi-whatsapp"></i></a>
          </div>
        </div>

        <!-- Col 2 — Quick Links -->
        <div class="col-lg-2 col-md-6 col-6">
          <h5 class="footer-heading">Quick Links</h5>
          <ul class="footer-links">
            <li><a href="/">Home</a></li>
            <li><a href="/about.php">About Us</a></li>
            <li><a href="/features.php">Features</a></li>
            <li><a href="/pricing.php">Pricing</a></li>
            <li><a href="/contact.php">Contact</a></li>
            <li><a href="/privacy-policy.php">Privacy Policy</a></li>
            <li><a href="/terms.php">Terms of Service</a></li>
          </ul>
        </div>

        <!-- Col 3 — Services -->
        <div class="col-lg-3 col-md-6 col-6">
          <h5 class="footer-heading">Our Solutions</h5>
          <ul class="footer-links">
            <li><a href="/features.php#kiosk-hardware">Restaurant Kiosk Hardware</a></li>
            <li><a href="/features.php#pos-software">Restaurant POS Software</a></li>
            <li><a href="/features.php#self-ordering">Self-Ordering System</a></li>
            <li><a href="/features.php#kitchen-display">Kitchen Display System</a></li>
            <li><a href="/features.php#analytics">Sales Analytics</a></li>
            <li><a href="/features.php#crm">Customer Loyalty CRM</a></li>
            <li><a href="/features.php#integrations">Online Order Integration</a></li>
          </ul>
        </div>

        <!-- Col 4 — Contact -->
        <div class="col-lg-3 col-md-6">
          <h5 class="footer-heading">Get In Touch</h5>
          <ul class="footer-contact">
            <li>
              <i class="bi bi-geo-alt-fill"></i>
              <span><?= SITE_ADDRESS ?></span>
            </li>
            <li>
              <i class="bi bi-telephone-fill"></i>
              <a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a>
            </li>
            <li>
              <i class="bi bi-telephone-fill"></i>
              <a href="tel:<?= SITE_PHONE_2 ?>"><?= SITE_PHONE_2 ?></a>
            </li>
            <li>
              <i class="bi bi-envelope-fill"></i>
              <a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a>
            </li>
            <li>
              <i class="bi bi-clock-fill"></i>
              <span><?= SITE_HOURS ?></span>
            </li>
          </ul>
          <a href="/contact.php#demo" class="btn btn-footer-cta mt-3">
            <i class="bi bi-calendar-check"></i> Book Free Demo
          </a>
        </div>

      </div>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container-xl">
      <div class="footer-bottom-inner">
        <p>&copy; <?= CURRENT_YEAR ?> <?= SITE_NAME ?>. All Rights Reserved.
           Designed &amp; Developed in Hyderabad, India.</p>
        <div class="footer-bottom-links">
          <a href="/privacy-policy.php">Privacy Policy</a>
          <a href="/terms.php">Terms of Service</a>
          <a href="/sitemap.xml">Sitemap</a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- Back to Top -->
<button class="back-to-top" id="backToTop" aria-label="Back to top">
  <i class="bi bi-arrow-up"></i>
</button>

<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Custom JS -->
<script src="assets/js/main.js"></script>
</body>
</html>