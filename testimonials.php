<?php
require_once 'includes/config.php';

$seo = [
    'title' => 'Customer Testimonials | KioskPro Hyderabad',
    'description' => 'Read testimonials from Hyderabad restaurants, cafes and food outlets using KioskPro self-ordering kiosk solutions.',
    'keywords' => 'KioskPro testimonials, restaurant kiosk reviews Hyderabad, self ordering kiosk feedback',
    'canonical' => SITE_URL . '/testimonials.php',
];

require_once 'includes/header.php';
?>

<section class="page-hero">
  <div class="container-xl text-center reveal-up">
    <span class="section-badge light">Testimonials</span>
    <h1 class="section-title text-white mt-2">Restaurant owners choose kiosks for faster service and clearer control.</h1>
    <p class="section-subtitle text-white-60">A few representative stories from food businesses using kiosk-led ordering and automation workflows.</p>
  </div>
</section>

<section class="section dark-section">
  <div class="container-xl">
    <div class="testimonials-slider">
      <?php
      $testimonials = [
        ['Rajesh Kumar', 'Owner, Spice Route Restaurant, Hitech City', 'Our weekend queue used to be stressful. The kiosk helped customers order faster and our counter team can now focus on support instead of typing every order.'],
        ['Priya Sharma', 'Founder, Urban Bites Cafe, Gachibowli', 'We started with one kiosk for takeaway orders. Combo suggestions and cleaner billing made a visible difference during lunch rush.'],
        ['Mohammed Ahmed', 'Director, Hyderabad Food Court', 'Managing multiple counters became easier because orders and reports are more structured. The local support team made implementation smooth.'],
        ['Sunitha Rao', 'Owner, Chai & Bites, Jubilee Hills', 'Young customers love ordering on the screen, and staff training was quick. It feels modern without becoming complicated.'],
      ];
      foreach ($testimonials as $i => $t): ?>
      <div class="testimonial-card glass-card reveal-up" data-delay="<?= $i * 80 ?>">
        <div class="stars"><?php for ($s = 0; $s < 5; $s++): ?><i class="bi bi-star-fill"></i><?php endfor; ?></div>
        <p class="testimonial-text">"<?= $t[2] ?>"</p>
        <div class="testimonial-author">
          <i class="bi bi-person-circle testimonial-avatar"></i>
          <div><strong><?= $t[0] ?></strong><small><?= $t[1] ?></small></div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Common Results</span>
      <h2 class="section-title">What owners usually notice first.</h2>
    </div>
    <div class="row g-4 mt-3">
      <?php foreach ([['bi-clock-history','Shorter queues'],['bi-receipt','Cleaner order details'],['bi-graph-up-arrow','Better combo sales'],['bi-people','Less counter pressure']] as $item): ?>
      <div class="col-lg-3 col-md-6">
        <div class="inner-card text-center reveal-up">
          <div class="inner-icon"><i class="bi <?= $item[0] ?>"></i></div>
          <h3><?= $item[1] ?></h3>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="section cta-section">
  <div class="container-xl">
    <div class="cta-inner reveal-up text-center">
      <h2>Ready to create your own success story?</h2>
      <p>Book a free demo and see how KioskPro can fit into your outlet flow.</p>
      <a href="contact.php" class="btn btn-cta-main mt-3">Book Free Demo <i class="bi bi-arrow-right"></i></a>
    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
