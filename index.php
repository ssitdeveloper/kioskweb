<?php
require_once 'includes/config.php';

$seo = [
    'title'       => 'Restaurant Kiosk Hyderabad | #1 Self-Ordering POS Kiosk Software – KioskPro',
    'description' => 'KioskPro — Hyderabad\'s leading restaurant self-ordering kiosk & POS software. Reduce staff costs by 40%, increase average order value by 30%, and automate your restaurant today. Free demo available.',
    'keywords'    => 'Restaurant Kiosk Hyderabad, Self Ordering Kiosk Hyderabad, POS Kiosk Software Hyderabad, Restaurant Automation Hyderabad, Digital Ordering Kiosk Hyderabad, Restaurant Technology Solutions Hyderabad, Food Ordering Kiosk Hyderabad, Restaurant POS System Hyderabad',
    'canonical'   => SITE_URL . '/',
    'og_image'    => SITE_URL . '/assets/images/og-home.jpg',
    'og_type'     => 'website',
];

require_once 'includes/header.php';
?>

<!-- ════════════════════════════════════════════
     1. HERO SLIDER
════════════════════════════════════════════ -->
<section class="hero-section" id="hero" aria-label="Hero Banner">
  <div class="hero-slider" id="heroSlider">

    <!-- Slide 1 -->
    <div class="hero-slide active" style="--slide-bg: url('<?= SITE_URL ?>/assets/images/slide_1.webp');">
      <div class="hero-overlay"></div>
      <div class="container-xl h-100">
        <div class="hero-content">
          <div class="hero-badge reveal-up">
            <i class="bi bi-lightning-charge-fill"></i> Hyderabad's #1 Kiosk Solution
          </div>
          <h1 class="hero-title reveal-up delay-1">
            Transform Ordering.<br>
            <span class="gradient-text">Boost Sales.</span>
          </h1>
          <p class="hero-subtitle reveal-up delay-2">
            Smart kiosk ordering for faster checkout, accurate orders, and repeat customer growth.
          </p>
          <div class="hero-ctas reveal-up delay-3">
            <a href="/contact.php" class="btn btn-hero-primary">
              <i class="bi bi-play-circle-fill"></i> Get Free Demo
            </a>
            <a href="/features.php" class="btn btn-hero-outline">
              Explore Features <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 2 -->
    <div class="hero-slide" style="--slide-bg: url('<?= SITE_URL ?>/assets/images/slide_2.webp');">
      <div class="hero-overlay"></div>
      <div class="container-xl h-100">
        <div class="hero-content">
          <div class="hero-badge reveal-up">
            <i class="bi bi-award-fill"></i> Trusted by 500+ Hyderabad Restaurants
          </div>
          <h1 class="hero-title reveal-up delay-1">
            Reduce Wait.<br>
            <span class="gradient-text">Increase Revenue.</span>
          </h1>
          <p class="hero-subtitle reveal-up delay-2">
            A powerful POS kiosk that cuts queues, speeds service, and boosts profit margins.
          </p>
          <div class="hero-ctas reveal-up delay-3">
            <a href="/pricing.php" class="btn btn-hero-primary">
              <i class="bi bi-tag-fill"></i> View Pricing
            </a>
            <a href="tel:<?= SITE_PHONE ?>" class="btn btn-hero-outline">
              <i class="bi bi-telephone"></i> Call Now
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slide 3 -->
    <div class="hero-slide" style="--slide-bg: url('<?= SITE_URL ?>/assets/images/slide_3.webp');">
      <div class="hero-overlay"></div>
      <div class="container-xl h-100">
        <div class="hero-content">
          <div class="hero-badge reveal-up">
            <i class="bi bi-geo-alt-fill"></i> Built for Indian Restaurants
          </div>
          <h1 class="hero-title reveal-up delay-1">
            Simplify Service.<br>
            <span class="gradient-text">Grow Quickly.</span>
          </h1>
          <p class="hero-subtitle reveal-up delay-2">
            A reliable kiosk system for Hyderabad dining with fast payments and powerful analytics.
          </p>
          <div class="hero-ctas reveal-up delay-3">
            <a href="/contact.php" class="btn btn-hero-primary">
              <i class="bi bi-chat-dots-fill"></i> Talk to Expert
            </a>
            <a href="/about.php" class="btn btn-hero-outline">
              Our Story <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!-- Slider Controls -->
    <div class="hero-controls">
      <button class="hero-prev" id="heroPrev" aria-label="Previous slide"><i class="bi bi-chevron-left"></i></button>
      <div class="hero-dots" id="heroDots">
        <button class="hero-dot active" data-slide="0" aria-label="Slide 1"></button>
        <button class="hero-dot" data-slide="1" aria-label="Slide 2"></button>
        <button class="hero-dot" data-slide="2" aria-label="Slide 3"></button>
      </div>
      <button class="hero-next" id="heroNext" aria-label="Next slide"><i class="bi bi-chevron-right"></i></button>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     2. TRUSTED BY SECTION
════════════════════════════════════════════ -->
<!-- <section class="trusted-section" id="trusted">
  <div class="container-xl">
    <p class="trusted-label reveal-up">Trusted by 500+ restaurants across Hyderabad &amp; Telangana</p>
    <div class="trusted-logos reveal-up delay-1">
      <?php
      $brands = ['Paradise Biryani','Ohri\'s Group','AB\'s – Absolute Barbecues','Pista House','Vivanta Hyderabad','Kanti Sweets','Chutneys','Flechazo'];
      foreach($brands as $b): ?>
      <div class="trusted-logo-item">
        <span><?= htmlspecialchars($b) ?></span>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section> -->


<!-- ════════════════════════════════════════════
     3. BENEFITS SECTION
════════════════════════════════════════════ -->
<section class="section benefits-section" id="benefits">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Why KioskPro?</span>
      <h2 class="section-title">Every Restaurant Deserves to Thrive</h2>
      <p class="section-subtitle">Our restaurant kiosk solution in Hyderabad is engineered to solve real operational problems — not just add technology for its own sake.</p>
    </div>
    <div class="row g-4 mt-2">
      <?php
      $benefits = [
        ['bi-lightning-charge','#FF6B35','Faster Ordering','Customers order 3x faster at kiosks vs traditional counters. Zero errors. Zero miscommunication.'],
        ['bi-people','#6C63FF','Reduced Staff Costs','Handle peak-hour rush with fewer cashiers. Reallocate staff to food quality and service.'],
        ['bi-graph-up-arrow','#00B894','Increased Revenue','Intelligent upselling prompts increase average order value by 25–35% automatically.'],
        ['bi-emoji-smile','#0984E3','Better Experience','Modern, intuitive interface customers love. Multiple languages. Dietary filters.'],
        ['bi-bar-chart-line','#FDCB6E','Real-Time Analytics','Live dashboard for sales, inventory, and customer trends from any device.'],
        ['bi-shield-check','#E17055','Secure Payments','UPI, card, cash — all payment modes integrated with bank-level encryption.'],
      ];
      foreach($benefits as $b): ?>
      <div class="col-lg-4 col-md-6">
        <div class="benefit-card reveal-up" data-delay="100">
          <div class="benefit-icon" style="--icon-color:<?= $b[1] ?>">
            <i class="bi <?= $b[0] ?>"></i>
          </div>
          <h3 class="benefit-title"><?= $b[2] ?></h3>
          <p class="benefit-desc"><?= $b[3] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     4. PRODUCT FEATURES SECTION
════════════════════════════════════════════ -->
<section class="section features-section dark-section" id="features">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">Hardware Features</span>
      <h2 class="section-title text-white">Built for Indian Restaurant Environments</h2>
      <p class="section-subtitle text-white-60">Commercial-grade kiosk hardware designed to survive Hyderabad's heat, humidity, and high-traffic usage — while looking stunning.</p>
    </div>
    <div class="row g-4 mt-2 align-items-center">
      <div class="col-lg-6">
        <div class="features-visual reveal-left">
          <div class="kiosk-mockup">
            <div class="kiosk-screen">
              <div class="kiosk-ui">
                <div class="kiosk-header-bar">
                  <span>🍽️ Welcome to KioskPro</span>
                </div>
                <div class="kiosk-menu-grid">
                  <?php for($i=0;$i<6;$i++): ?>
                  <div class="kiosk-item">
                    <div class="kiosk-item-img"></div>
                    <span>Menu Item</span>
                    <strong>₹<?= rand(80,450) ?></strong>
                  </div>
                  <?php endfor; ?>
                </div>
                <div class="kiosk-footer-bar">
                  <span>Cart: 3 items</span>
                  <button>Order Now →</button>
                </div>
              </div>
            </div>
            <div class="kiosk-stand"></div>
            <div class="kiosk-base"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="features-list reveal-right">
          <?php
          $hwFeatures = [
            ['bi-display','21.5" to 32" Full HD Touchscreen','Crystal-clear IPS display with 10-point multi-touch, anti-glare coating, and 500-nit brightness for any lighting condition.'],
            ['bi-thermometer-half','Industrial-Grade Cooling','Fanless design with passive cooling ensures 24/7 operation in high-temperature Hyderabad kitchens and food courts.'],
            ['bi-printer','Integrated Receipt Printer','High-speed 80mm thermal printer built-in. Prints in 2 seconds. Holds 500+ receipts per roll.'],
            ['bi-credit-card','All-in-One Payment Terminal','UPI QR, tap-to-pay, swipe, and cash — every payment mode supported out of the box.'],
            ['bi-wifi','Dual-Band Wi-Fi + LAN','Gigabit Ethernet + Wi-Fi 6 ensures zero downtime. Offline mode keeps orders flowing even when internet is out.'],
          ];
          foreach($hwFeatures as $f): ?>
          <div class="feature-item reveal-up">
            <div class="feature-item-icon"><i class="bi <?= $f[0] ?>"></i></div>
            <div class="feature-item-text">
              <h4><?= $f[1] ?></h4>
              <p><?= $f[2] ?></p>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     5. SOFTWARE FEATURES SECTION
════════════════════════════════════════════ -->
<section class="section software-section" id="software">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Software Platform</span>
      <h2 class="section-title">Powerful POS Software. Beautifully Simple.</h2>
      <p class="section-subtitle">A complete restaurant management platform — from the kiosk to the kitchen to the cloud.</p>
    </div>
    <div class="software-tabs mt-5" id="softwareTabs">
      <div class="tab-nav reveal-up">
        <button class="tab-btn active" data-tab="ordering">Self-Ordering</button>
        <button class="tab-btn" data-tab="kitchen">Kitchen Display</button>
        <button class="tab-btn" data-tab="analytics">Analytics</button>
        <button class="tab-btn" data-tab="crm">CRM & Loyalty</button>
      </div>
      <div class="tab-content-area">
        <div class="tab-pane active" data-pane="ordering">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 reveal-left">
              <h3>Intuitive Self-Ordering Interface</h3>
              <p>Designed for every customer — from tech-savvy millennials to first-time digital users. Multi-language support including Telugu, Hindi, and English.</p>
              <ul class="feature-check-list">
                <li><i class="bi bi-check-circle-fill"></i> Visual-rich menu with HD food photos</li>
                <li><i class="bi bi-check-circle-fill"></i> Customizations, add-ons & combos</li>
                <li><i class="bi bi-check-circle-fill"></i> Dietary & allergen filters</li>
                <li><i class="bi bi-check-circle-fill"></i> Smart upsell suggestions</li>
                <li><i class="bi bi-check-circle-fill"></i> Table / takeaway / dine-in modes</li>
              </ul>
            </div>
            <div class="col-md-6 reveal-right">
              <div class="software-screenshot-card glass-card">
                   <img src="assets/images/ordering-ui.webp" alt="Self-Ordering UI Preview" class="software-screenshot-image">
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" data-pane="kitchen">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 reveal-left">
              <h3>Kitchen Display System (KDS)</h3>
              <p>Real-time order routing to kitchen stations. Reduce ticket time, eliminate paper tickets, and coordinate your kitchen with precision.</p>
              <ul class="feature-check-list">
                <li><i class="bi bi-check-circle-fill"></i> Order routing to multiple stations</li>
                <li><i class="bi bi-check-circle-fill"></i> Color-coded priority alerts</li>
                <li><i class="bi bi-check-circle-fill"></i> Preparation time tracking</li>
                <li><i class="bi bi-check-circle-fill"></i> Customer notification system</li>
              </ul>
            </div>
            <div class="col-md-6 reveal-right">
              <div class="software-screenshot-card glass-card">
                   <img src="assets/images/kds.webp" alt="Kitchen Display Preview" class="software-screenshot-image">
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" data-pane="analytics">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 reveal-left">
              <h3>Sales Analytics & Reports</h3>
              <p>Make data-driven decisions with real-time dashboards accessible from anywhere. Know your best sellers, peak hours, and profit margins at a glance.</p>
              <ul class="feature-check-list">
                <li><i class="bi bi-check-circle-fill"></i> Live sales dashboard</li>
                <li><i class="bi bi-check-circle-fill"></i> Item-wise profitability reports</li>
                <li><i class="bi bi-check-circle-fill"></i> Peak-hour heat maps</li>
                <li><i class="bi bi-check-circle-fill"></i> GST-ready billing & exports</li>
              </ul>
            </div>
            <div class="col-md-6 reveal-right">
              <div class="software-screenshot-card glass-card">
                   <img src="assets/images/salesreports.webp" alt="Analytics Dashboard Preview" class="software-screenshot-image">
              </div>
            </div>
          </div>
        </div>
        <div class="tab-pane" data-pane="crm">
          <div class="row g-5 align-items-center">
            <div class="col-md-6 reveal-left">
              <h3>Customer Loyalty & CRM</h3>
              <p>Build a loyal customer base with automated rewards, personalized offers, and targeted promotions that bring diners back again and again.</p>
              <ul class="feature-check-list">
                <li><i class="bi bi-check-circle-fill"></i> Points-based loyalty program</li>
                <li><i class="bi bi-check-circle-fill"></i> Birthday & anniversary rewards</li>
                <li><i class="bi bi-check-circle-fill"></i> WhatsApp & SMS campaigns</li>
                <li><i class="bi bi-check-circle-fill"></i> Customer spend analysis</li>
              </ul>
            </div>
            <div class="col-md-6 reveal-right">
              <div class="software-screenshot-card glass-card">
                   <img src="assets/images/crm.webp" alt="CRM Dashboard Preview" class="software-screenshot-image">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     6. HOW IT WORKS
════════════════════════════════════════════ -->
<section class="section how-section dark-section" id="how-it-works">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">Simple Setup</span>
      <h2 class="section-title text-white">Up and Running in 48 Hours</h2>
      <p class="section-subtitle text-white-60">No technical expertise needed. Our dedicated Hyderabad team handles everything from installation to staff training.</p>
    </div>
    <div class="how-steps mt-5">
      <?php
      $steps = [
        ['01','bi-telephone-fill','Free Consultation','Call us or fill out the form. Our Hyderabad-based expert will assess your restaurant\'s needs and recommend the right package.'],
        ['02','bi-tools','Installation','Our certified technicians install and configure your kiosk hardware and software at your premises — zero disruption to operations.'],
        ['03','bi-mortarboard-fill','Staff Training','We train your team with a live, hands-on session. Most staff are fully proficient within 2 hours.'],
        ['04','bi-rocket-takeoff-fill','Go Live!','Your restaurant automation is live! Our support team monitors your system 24/7 and is just a call away.'],
      ];
      foreach($steps as $i => $s): ?>
      <div class="how-step reveal-up" style="--delay:<?= $i*150 ?>ms">
        <div class="step-number"><?= $s[0] ?></div>
        <div class="step-icon"><i class="bi <?= $s[1] ?>"></i></div>
        <h3 class="step-title"><?= $s[2] ?></h3>
        <p class="step-desc"><?= $s[3] ?></p>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     7. PROBLEMS vs SOLUTIONS
════════════════════════════════════════════ -->
<section class="section problems-section" id="problems">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Problems + Solutions</span>
      <h2 class="section-title">Restaurant Challenges and Clear Kiosk Fixes</h2>
      <p class="section-subtitle">These are the real pain points restaurants face every day — and how KioskPro solves them, step by step.</p>
    </div>
    <div class="row g-4 mt-3">
      <?php
      $ps = [
        ['Long queues frustrating customers','Digital kiosk ordering — zero wait, instant service'],
        ['Order errors by staff cost money','Kiosk eliminates miscommunication & order mistakes'],
        ['Rising labour costs eating profits','Automate ordering; one kiosk replaces 2–3 cashiers'],
        ['Peak hours overwhelm your team','Handle 3x more orders simultaneously without extra staff'],
        ['No data on what\'s selling','Real-time analytics reveal bestsellers & dead weight'],
        ['Missed upselling opportunities','AI-powered suggestions increase bill value automatically'],
      ];
      foreach($ps as $p): ?>
      <div class="col-lg-4 col-md-6">
        <div class="problem-card reveal-up">
          <div class="problem-content">
            <div class="problem-block">
              <div class="problem-label">Problem</div>
              <p class="problem-text"><?= $p[0] ?></p>
            </div>
            <div class="divider-line"></div>
            <div class="solution-block">
              <div class="solution-label">How we fix it</div>
              <p class="solution-text"><?= $p[1] ?></p>
            </div>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     8. STATISTICS SECTION
════════════════════════════════════════════ -->
<section class="section stats-section parallax-section" id="stats"
         style="background-image: url('assets/images/stats-bg.jpg')">
  <div class="parallax-overlay"></div>

  <div class="container-xl position-relative">
    <div class="row g-4 text-center">
      <?php
      $stats = [
        ['500','+','Restaurants Installed','bi-building'],
        ['40','%','Average Cost Reduction','bi-arrow-down-circle'],
        ['30','%','Average Revenue Increase','bi-graph-up'],
        ['48','hrs','Average Setup Time','bi-clock'],
        ['99.9','%','Uptime Guaranteed','bi-shield-check'],
        ['24','/7','Support Available','bi-headset'],
      ];
      foreach($stats as $s): ?>
      <div class="col-lg-2 col-md-4 col-6">
        <div class="stat-card reveal-up">
          <i class="bi <?= $s[3] ?>"></i>
          <div class="stat-number">
            <span class="counter" data-target="<?= $s[0] ?>"><?= $s[0] ?></span><?= $s[1] ?>
          </div>
          <p><?= $s[2] ?></p>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     9. WHY CHOOSE US
════════════════════════════════════════════ -->
<section class="section why-section" id="why-us">
  <div class="container-xl">
    <div class="row g-5 align-items-center">
      <div class="col-lg-5 reveal-left">
        <span class="section-badge">Why KioskPro?</span>
        <h2 class="section-title mt-2">Hyderabad's Most Trusted Restaurant Tech Company</h2>
        <p class="mt-3">We're not a generic software vendor. We're a Hyderabad-born team with deep roots in the local F&amp;B industry. We understand the unique challenges of restaurants in Telangana — from the peak demand during biryani rush hours to multi-location franchise management.</p>
        <a href="/about.php" class="btn btn-primary-custom mt-4">
          Our Story <i class="bi bi-arrow-right"></i>
        </a>
      </div>
      <div class="col-lg-7 reveal-right">
        <div class="row g-3">
          <?php
          $whys = [
            ['bi-geo-alt-fill','Local Hyderabad Team','On-ground support in Hyderabad. Our technicians reach you within 4 hours for any hardware issue.'],
            ['bi-translate','Telugu & Hindi Support','Full software support in Telugu, Hindi, and English — for your staff and customers alike.'],
            ['bi-headset','24/7 Support','Round-the-clock phone, WhatsApp, and remote support. Because restaurants don\'t close at 5 PM.'],
            ['bi-shield-lock-fill','5-Year Hardware Warranty','Industry-leading 5-year warranty on all kiosk hardware. Zero maintenance worry.'],
            ['bi-plug-fill','Offline-First Design','Internet goes down? No problem. Orders continue processing and sync automatically when reconnected.'],
            ['bi-currency-rupee','Best Price in Hyderabad','Competitive pricing with flexible EMI options. No hidden charges. No surprise fees.'],
          ];
          foreach($whys as $w): ?>
          <div class="col-md-6">
            <div class="why-card glass-card reveal-up">
              <i class="bi <?= $w[0] ?>"></i>
              <div>
                <h4><?= $w[1] ?></h4>
                <p><?= $w[2] ?></p>
              </div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     10. TESTIMONIALS
════════════════════════════════════════════ -->
<section class="section testimonials-section dark-section" id="testimonials">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge light">Customer Stories</span>
      <h2 class="section-title text-white">What Hyderabad Restaurateurs Say</h2>
    </div>
    <div class="testimonials-slider mt-5" id="testimonialsSlider">
      <?php
      $testimonials = [
        ['Rahul Sharma','Owner, Spice Garden Restaurant, Banjara Hills','Since installing KioskPro kiosks, our weekend queue time dropped from 25 minutes to under 5. Revenue is up ₹1.8 lakhs per month. Absolutely game-changing for our business.','5','bi-person-circle'],
        ['Priya Reddy','Manager, FoodBox Cloud Kitchen, Hitech City','We were skeptical about kiosk technology, but KioskPro made it seamless. Setup was done in a day. Our order accuracy is now 100% and staff morale has improved because they\'re not juggling the counter anymore.','5','bi-person-circle'],
        ['Mohammed Khalid','Franchise Owner, 3 QSR Outlets, Hyderabad','Managing 3 outlets from one dashboard is exactly what I needed. The analytics are incredible — I can see which location is underperforming in real time. KioskPro paid for itself in 3 months.','5','bi-person-circle'],
        ['Sunitha Rao','Owner, Chai & Bites Cafe, Jubilee Hills','My customers, especially the younger crowd, absolutely love the kiosk. Average bill went up by ₹80 thanks to the combo suggestions. The WhatsApp support is always instant — really impressed.','5','bi-person-circle'],
      ];
      foreach($testimonials as $i => $t): ?>
      <div class="testimonial-card glass-card reveal-up" style="--delay:<?= $i*100 ?>ms">
        <div class="stars">
          <?php for($s=0;$s<5;$s++): ?><i class="bi bi-star-fill"></i><?php endfor; ?>
        </div>
        <p class="testimonial-text">"<?= $t[0]==$t[0]?$t[2]:'' ?>"</p>
        <div class="testimonial-author">
          <i class="bi <?= $t[4] ?> testimonial-avatar"></i>
          <div>
            <strong><?= $t[0] ?></strong>
            <small><?= $t[1] ?></small>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     11. RESTAURANT TYPES WE SERVE
════════════════════════════════════════════ -->
<section class="section types-section" id="restaurant-types">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Who We Serve</span>
      <h2 class="section-title">Built for Every Kind of Food Business</h2>
    </div>
    <div class="row g-4 mt-3">
      <?php
      $types = [
        ['bi-cup-hot','Restaurants & Cafes','Full-service dining to casual cafes. Manage dine-in, takeaway, and delivery from one system.','Restaurant Kiosk Hyderabad'],
        ['bi-building','Food Courts','Multi-vendor food courts with individual billing and unified management dashboard.','Food Court POS Hyderabad'],
        ['bi-box','Cloud Kitchens','Delivery-first operations with Swiggy/Zomato integration and streamlined order management.','Cloud Kitchen POS Hyderabad'],
        ['bi-shop','QSR & Fast Food','Speed is everything. Handle hundreds of orders per hour with zero bottlenecks.','Fast Food Kiosk Hyderabad'],
        ['bi-cake','Bakeries & Sweet Shops','Manage multiple SKUs, daily production, and point-of-sale with ease.','Bakery POS Hyderabad'],
        ['bi-star','Franchise Chains','Multi-outlet management with centralized menu control and consolidated reporting.','Franchise POS Hyderabad'],
      ];
      foreach($types as $t): ?>
      <div class="col-lg-4 col-md-6">
        <div class="type-card reveal-up">
          <div class="type-icon"><i class="bi <?= $t[0] ?>"></i></div>
          <h3><?= $t[1] ?></h3>
          <p><?= $t[2] ?></p>
          <span class="type-keyword"><?= $t[3] ?></span>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     12. PRICING
════════════════════════════════════════════ -->
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


<!-- ════════════════════════════════════════════
     13. FAQ SECTION
════════════════════════════════════════════ -->
<section class="section faq-section" id="faq">
  <div class="container-xl">
    <div class="row g-5">
      <div class="col-lg-4 reveal-left">
        <span class="section-badge">FAQ</span>
        <h2 class="section-title mt-2">Questions? We Have Answers.</h2>
        <p class="mt-3">Can't find what you're looking for? Our team is always ready to help.</p>
        <a href="tel:<?= SITE_PHONE ?>" class="btn btn-primary-custom mt-3">
          <i class="bi bi-telephone-fill"></i> Call Us Now
        </a>
      </div>
      <div class="col-lg-8 reveal-right">
        <div class="accordion faq-accordion" id="faqAccordion">
          <?php
          $faqs = [
            ['How long does installation take in Hyderabad?','Our certified technicians typically complete installation and configuration within 4–8 hours for a single kiosk. We can also do installations outside business hours to avoid any disruption to your restaurant operations.'],
            ['What payment modes does the kiosk support?','All major Indian payment modes — UPI (PhonePe, GPay, Paytm), credit/debit card (tap, chip & PIN, swipe), net banking, and cash. We are also integrated with Swiggy Pay and Zomato Pay.'],
            ['Does it work if the internet goes down?','Yes! Our offline-first architecture keeps all ordering and billing functions active without the internet. Orders are queued and synced automatically when connectivity is restored.'],
            ['Can I manage multiple outlets from one place?','Absolutely. Our cloud dashboard gives you a unified view of all your outlets — menus, sales, inventory, and staff — from any browser or mobile device.'],
            ['Is training provided for my staff?','Yes, we provide a comprehensive on-site training session for your staff. Most teams are fully proficient within 2 hours. We also provide video tutorials and a dedicated WhatsApp support group.'],
            ['What languages does the kiosk support?','The kiosk interface supports Telugu, Hindi, and English. You can enable or disable languages based on your customer profile.'],
            ['Do you provide after-sales support in Hyderabad?','Our Hyderabad support team provides on-site response within 4 hours for hardware issues and immediate remote support for software queries — available Monday to Sunday.'],
          ];
          foreach($faqs as $i => $faq): ?>
          <div class="accordion-item faq-item">
            <h4 class="accordion-header">
              <button class="accordion-button <?= $i>0?'collapsed':'' ?>" type="button"
                      data-bs-toggle="collapse" data-bs-target="#faq<?= $i ?>"
                      aria-expanded="<?= $i===0?'true':'false' ?>">
                <?= $faq[0] ?>
              </button>
            </h4>
            <div id="faq<?= $i ?>" class="accordion-collapse collapse <?= $i===0?'show':'' ?>"
                 data-bs-parent="#faqAccordion">
              <div class="accordion-body"><?= $faq[1] ?></div>
            </div>
          </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     14. LEAD GEN CTA
════════════════════════════════════════════ -->
<section class="section cta-section" id="cta">
  <div class="container-xl">
    <div class="cta-inner reveal-up">
      <div class="cta-glow"></div>
      <div class="row align-items-center g-4">
        <div class="col-lg-8">
          <h2>Ready to Transform Your Restaurant?</h2>
          <p>Join 500+ Hyderabad restaurants already growing with KioskPro. Get a free, no-obligation demo at your premises — we come to you.</p>
          <div class="cta-trust mt-3">
            <span><i class="bi bi-check-circle-fill"></i> Free on-site demo</span>
            <span><i class="bi bi-check-circle-fill"></i> No commitment required</span>
            <span><i class="bi bi-check-circle-fill"></i> Setup in 48 hours</span>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end">
          <a href="/contact.php" class="btn btn-cta-main">
            Book Free Demo Today <i class="bi bi-arrow-right"></i>
          </a>
          <div class="mt-2">
            <a href="tel:<?= SITE_PHONE ?>" class="cta-phone">
              <i class="bi bi-telephone-fill"></i> <?= SITE_PHONE ?>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- ════════════════════════════════════════════
     15. CONTACT + MAP
════════════════════════════════════════════ -->
<section class="section contact-section" id="contact">
  <div class="container-xl">
    <div class="section-header text-center reveal-up">
      <span class="section-badge">Contact Us</span>
      <h2 class="section-title">Get Your Free Restaurant Kiosk Demo</h2>
      <p class="section-subtitle">Fill out the form below and our Hyderabad team will contact you within 2 business hours.</p>
    </div>
    <div class="row g-5 mt-2">

      <!-- Contact Form -->
      <div class="col-lg-7 reveal-left">
        <div class="contact-form-wrap glass-card" id="demo">
          <?php
          $formSuccess = false;
          $formError   = '';
          if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['contact_submit'])) {
              $name    = htmlspecialchars(trim($_POST['name']    ?? ''));
              $email   = filter_var(trim($_POST['email']   ?? ''), FILTER_SANITIZE_EMAIL);
              $phone   = htmlspecialchars(trim($_POST['phone']   ?? ''));
              $type    = htmlspecialchars(trim($_POST['biz_type']?? ''));
              $message = htmlspecialchars(trim($_POST['message'] ?? ''));
              if ($name && filter_var($email, FILTER_VALIDATE_EMAIL) && $phone) {
                  $to      = SITE_EMAIL;
                  $subject = "New Demo Request from $name – KioskPro Hyderabad";
                  $body    = "Name: $name\nEmail: $email\nPhone: $phone\nBusiness Type: $type\n\nMessage:\n$message";
                  $headers = "From: noreply@kioskprohyd.com\r\nReply-To: $email";
                  if (mail($to, $subject, $body, $headers)) {
                      $formSuccess = true;
                  } else {
                      $formError = 'Message could not be sent. Please call us directly.';
                  }
              } else {
                  $formError = 'Please fill in all required fields with valid information.';
              }
          }
          ?>
          <?php if ($formSuccess): ?>
            <div class="form-success">
              <i class="bi bi-check-circle-fill"></i>
              <h3>Thank You!</h3>
              <p>We've received your request. Our team will contact you within 2 hours during business hours.</p>
            </div>
          <?php else: ?>
            <?php if ($formError): ?>
              <div class="alert alert-danger"><i class="bi bi-exclamation-circle"></i> <?= $formError ?></div>
            <?php endif; ?>
            <form method="POST" action="#demo" class="contact-form" novalidate>
              <div class="row g-3">
                <div class="col-md-6">
                  <label for="name" class="form-label">Full Name <span class="required">*</span></label>
                  <input type="text" id="name" name="name" class="form-control custom-input"
                         placeholder="Your Full Name" required>
                </div>
                <div class="col-md-6">
                  <label for="phone" class="form-label">Phone Number <span class="required">*</span></label>
                  <input type="tel" id="phone" name="phone" class="form-control custom-input"
                         placeholder="+91 98765 43210" required>
                </div>
                <div class="col-md-6">
                  <label for="email" class="form-label">Email Address <span class="required">*</span></label>
                  <input type="email" id="email" name="email" class="form-control custom-input"
                         placeholder="you@restaurant.com" required>
                </div>
                <div class="col-md-6">
                  <label for="biz_type" class="form-label">Business Type</label>
                  <select id="biz_type" name="biz_type" class="form-select custom-input">
                    <option value="">Select Business Type</option>
                    <option>Restaurant</option>
                    <option>Cafe</option>
                    <option>Food Court</option>
                    <option>Cloud Kitchen</option>
                    <option>QSR / Fast Food</option>
                    <option>Bakery</option>
                    <option>Franchise</option>
                    <option>Other</option>
                  </select>
                </div>
                <div class="col-12">
                  <label for="message" class="form-label">Message / Requirements</label>
                  <textarea id="message" name="message" rows="4" class="form-control custom-input"
                            placeholder="Tell us about your restaurant and what you're looking for..."></textarea>
                </div>
                <div class="col-12">
                  <button type="submit" name="contact_submit" class="btn btn-submit w-100">
                    <i class="bi bi-send-fill"></i> Send My Free Demo Request
                  </button>
                </div>
              </div>
            </form>
          <?php endif; ?>
        </div>
      </div>

      <!-- Contact Info -->
      <div class="col-lg-5 reveal-right">
        <div class="contact-info">
          <h3>Contact Information</h3>
          <div class="contact-info-list">
            <div class="contact-info-item">
              <div class="ci-icon"><i class="bi bi-geo-alt-fill"></i></div>
              <div><strong>Our Office</strong><p><?= SITE_ADDRESS ?></p></div>
            </div>
            <div class="contact-info-item">
              <div class="ci-icon"><i class="bi bi-telephone-fill"></i></div>
              <div><strong>Phone</strong>
                <p><a href="tel:<?= SITE_PHONE ?>"><?= SITE_PHONE ?></a><br>
                   <a href="tel:<?= SITE_PHONE_2 ?>"><?= SITE_PHONE_2 ?></a></p></div>
            </div>
            <div class="contact-info-item">
              <div class="ci-icon"><i class="bi bi-envelope-fill"></i></div>
              <div><strong>Email</strong><p><a href="mailto:<?= SITE_EMAIL ?>"><?= SITE_EMAIL ?></a></p></div>
            </div>
            <div class="contact-info-item">
              <div class="ci-icon"><i class="bi bi-clock-fill"></i></div>
              <div><strong>Business Hours</strong><p><?= SITE_HOURS ?></p></div>
            </div>
          </div>
          <!-- Google Map -->
          <div class="map-embed mt-4">
            <iframe src="<?= GOOGLE_MAPS_EMBED ?>"
                    width="100%" height="250" style="border:0; border-radius:12px;"
                    allowfullscreen loading="lazy"
                    title="KioskPro Hyderabad Location"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php require_once 'includes/footer.php'; ?>
