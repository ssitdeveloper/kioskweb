<?php
// ============================================================
// seo.php — Per-page SEO, OG tags & Schema Markup
// ============================================================
// Usage: set $seo array in each page BEFORE including header.php

$seo = $seo ?? [
    'title'       => 'Restaurant Kiosk Hyderabad | Self-Ordering POS Kiosk Solutions – KioskPro',
    'description' => 'KioskPro delivers premium self-ordering kiosk & POS software for restaurants, cafes, food courts and cloud kitchens in Hyderabad. Boost sales, cut wait times & automate your restaurant today.',
    'keywords'    => 'Restaurant Kiosk Hyderabad, Self Ordering Kiosk Hyderabad, POS Kiosk Software Hyderabad, Restaurant Automation Hyderabad, Digital Ordering Kiosk Hyderabad, Restaurant Technology Solutions Hyderabad, Restaurant POS System Hyderabad, Food Ordering Kiosk Hyderabad',
    'canonical'   => SITE_URL . '/',
    'og_image'    => SITE_URL . '/assets/images/og-home.jpg',
    'og_type'     => 'website',
];

$schemaOrg = [
    '@context'        => 'https://schema.org',
    '@type'           => 'LocalBusiness',
    'name'            => SITE_NAME,
    'description'     => $seo['description'],
    'url'             => SITE_URL,
    'telephone'       => SITE_PHONE,
    'email'           => SITE_EMAIL,
    'address'         => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'Road No. 12, Banjara Hills',
        'addressLocality' => 'Hyderabad',
        'addressRegion'   => 'Telangana',
        'postalCode'      => '500034',
        'addressCountry'  => 'IN',
    ],
    'geo'             => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => 17.4154,
        'longitude' => 78.4460,
    ],
    'openingHours'    => 'Mo-Sa 09:00-19:00',
    'priceRange'      => '₹₹',
    'sameAs'          => [FB_URL, IG_URL, LI_URL, YT_URL],
    'areaServed'      => [
        ['@type' => 'City', 'name' => 'Hyderabad'],
        ['@type' => 'State','name' => 'Telangana'],
    ],
];
?>
<!-- Primary SEO -->
<title><?= htmlspecialchars($seo['title']) ?></title>
<meta name="description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta name="keywords"    content="<?= htmlspecialchars($seo['keywords']) ?>">
<link rel="canonical"    href="<?= htmlspecialchars($seo['canonical']) ?>">

<!-- Open Graph -->
<meta property="og:type"        content="<?= $seo['og_type'] ?>">
<meta property="og:title"       content="<?= htmlspecialchars($seo['title']) ?>">
<meta property="og:description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta property="og:url"         content="<?= htmlspecialchars($seo['canonical']) ?>">
<meta property="og:image"       content="<?= htmlspecialchars($seo['og_image']) ?>">
<meta property="og:site_name"   content="<?= SITE_NAME ?>">
<meta property="og:locale"      content="en_IN">

<!-- Twitter Card -->
<meta name="twitter:card"        content="summary_large_image">
<meta name="twitter:title"       content="<?= htmlspecialchars($seo['title']) ?>">
<meta name="twitter:description" content="<?= htmlspecialchars($seo['description']) ?>">
<meta name="twitter:image"       content="<?= htmlspecialchars($seo['og_image']) ?>">

<!-- Local SEO -->
<meta name="geo.region"      content="IN-TG">
<meta name="geo.placename"   content="Hyderabad">
<meta name="geo.position"    content="17.4154;78.4460">
<meta name="ICBM"            content="17.4154, 78.4460">

<!-- Schema.org JSON-LD -->
<script type="application/ld+json"><?= json_encode($schemaOrg, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES) ?></script>