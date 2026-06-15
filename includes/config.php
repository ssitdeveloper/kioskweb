<?php
// ============================================================
// config.php — Global Site Configuration
// ============================================================

define('SITE_NAME',        'KioskPro Hyderabad');
define('SITE_TAGLINE',     'Restaurant Self-Ordering Kiosk & POS Solutions in Hyderabad');
define('SITE_URL',         'https://ssitworks.com/kioskweb');
define('SITE_EMAIL',       'hello@kioskprohyd.com');
define('SITE_PHONE',       '+91 98765 43210');
define('SITE_PHONE_2',     '+91 91234 56789');
define('SITE_ADDRESS',     'Road No. 12, Banjara Hills, Hyderabad, Telangana – 500034');
define('SITE_HOURS',       'Mon–Sat: 9:00 AM – 7:00 PM');
define('SITE_WHATSAPP',    '919876543210');

define('GOOGLE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3806.448!2d78.44602!3d17.41548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTfCsDI0JzU2LjMiTiA3OMKwMjYnNDUuNyJF!5e0!3m2!1sen!2sin!4v1699900000000');

define('FB_URL',           'https://facebook.com/kioskprohyd');
define('IG_URL',           'https://instagram.com/kioskprohyd');
define('LI_URL',           'https://linkedin.com/company/kioskprohyd');
define('YT_URL',           'https://youtube.com/@kioskprohyd');

define('CURRENT_YEAR',     date('Y'));

// ── Active page helper
function isActive(string $page): string {
    $current = basename($_SERVER['PHP_SELF'], '.php');
    return ($current === $page) ? 'active' : '';
}