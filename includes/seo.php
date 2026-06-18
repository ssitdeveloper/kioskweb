<?php
// ============================================================
// seo.php — Per-page SEO, OG tags & Schema Markup
// PHP 8.3 Compatible
// ============================================================

$defaultSeo = [
    'title'       => 'Restaurant Kiosk Hyderabad | Self-Ordering POS Kiosk Solutions – KioskPro',
    'description' => 'KioskPro delivers premium self-ordering kiosk & POS software for restaurants, cafes, food courts and cloud kitchens in Hyderabad. Boost sales, cut wait times & automate your restaurant today.',
    'keywords'    => 'Restaurant Kiosk Hyderabad, Self Ordering Kiosk Hyderabad, POS Kiosk Software Hyderabad, Restaurant Automation Hyderabad, Digital Ordering Kiosk Hyderabad',
    'canonical'   => SITE_URL . '/',
    'og_image'    => SITE_URL . '/assets/images/og-home.jpg',
    'og_type'     => 'website',
];

// Merge page SEO with defaults
$seo = array_merge($defaultSeo, $seo ?? []);

// Safe values
$title       = (string)($seo['title'] ?? '');
$description = (string)($seo['description'] ?? '');
$keywords    = (string)($seo['keywords'] ?? '');
$canonical   = (string)($seo['canonical'] ?? '');
$ogImage     = (string)($seo['og_image'] ?? '');
$ogType      = (string)($seo['og_type'] ?? 'website');

$schemaOrg = [
    '@context' => 'https://schema.org',
    '@type'    => 'LocalBusiness',

    'name'        => SITE_NAME,
    'description' => $description,
    'url'         => SITE_URL,

    'telephone' => SITE_PHONE,
    'email'     => SITE_EMAIL,

    'address' => [
        '@type'           => 'PostalAddress',
        'streetAddress'   => 'Road No. 12, Banjara Hills',
        'addressLocality' => 'Hyderabad',
        'addressRegion'   => 'Telangana',
        'postalCode'      => '500034',
        'addressCountry'  => 'IN',
    ],

    'geo' => [
        '@type'     => 'GeoCoordinates',
        'latitude'  => 17.4154,
        'longitude' => 78.4460,
    ],

    'openingHours' => 'Mo-Sa 09:00-19:00',
    'priceRange'   => '₹₹',

    'sameAs' => array_filter([
        defined('FB_URL') ? FB_URL : null,
        defined('IG_URL') ? IG_URL : null,
        defined('LI_URL') ? LI_URL : null,
        defined('YT_URL') ? YT_URL : null,
    ]),

    'areaServed' => [
        [
            '@type' => 'City',
            'name'  => 'Hyderabad'
        ],
        [
            '@type' => 'State',
            'name'  => 'Telangana'
        ]
    ]
];
?>

<!-- Primary SEO -->
<title><?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?></title>

<meta name="description"
      content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

<meta name="keywords"
      content="<?= htmlspecialchars($keywords, ENT_QUOTES, 'UTF-8') ?>">

<link rel="canonical"
      href="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">

<!-- Open Graph -->
<meta property="og:type"
      content="<?= htmlspecialchars($ogType, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:title"
      content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:description"
      content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:url"
      content="<?= htmlspecialchars($canonical, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:image"
      content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:site_name"
      content="<?= htmlspecialchars(SITE_NAME, ENT_QUOTES, 'UTF-8') ?>">

<meta property="og:locale"
      content="en_IN">

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">

<meta name="twitter:title"
      content="<?= htmlspecialchars($title, ENT_QUOTES, 'UTF-8') ?>">

<meta name="twitter:description"
      content="<?= htmlspecialchars($description, ENT_QUOTES, 'UTF-8') ?>">

<meta name="twitter:image"
      content="<?= htmlspecialchars($ogImage, ENT_QUOTES, 'UTF-8') ?>">

<!-- Local SEO -->
<meta name="geo.region" content="IN-TG">
<meta name="geo.placename" content="Hyderabad">
<meta name="geo.position" content="17.4154;78.4460">
<meta name="ICBM" content="17.4154,78.4460">

<!-- Schema -->
<script type="application/ld+json">
<?= json_encode(
    $schemaOrg,
    JSON_UNESCAPED_SLASHES |
    JSON_UNESCAPED_UNICODE
) ?>
</script>