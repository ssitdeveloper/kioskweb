<?php /* ════════════════════════════════════════════
   contact.php  (abbreviated — full form logic same as index.php)
════════════════════════════════════════════ */

require_once 'includes/config.php';
$seo = [
    'title'       => 'Contact KioskPro Hyderabad | Get Free Restaurant Kiosk Demo',
    'description' => 'Book a free restaurant kiosk demo in Hyderabad. Call +91 98765 43210 or fill out the form. On-site visit within 24 hours.',
    'keywords'    => 'Contact Restaurant Kiosk Hyderabad, Free Demo POS Kiosk Hyderabad',
    'canonical'   => SITE_URL . '/contact.php',
    'og_image'    => SITE_URL . '/assets/images/og-contact.jpg',
    'og_type'     => 'website',
];
require_once 'includes/header.php';
// ... same contact form logic as used in index.php contact section
?>

<!-- Generate a Contact Form with fields: Name, Email, Phone, Message, and a Submit button.
   On submission, validate inputs and send an email to the sales team.
   Display success or error messages accordingly. -->

   <section class="page-hero dark-section" style="padding:140px 0 80px">
     <div class="container-xl text-center">
       <span class="section-badge light">Contact Us</span>
       <h1 class="section-title text-white mt-2">Get in Touch with KioskPro</h1>
       <p class="section-subtitle text-white-60">Have questions? Need a demo? We're here to help. Reach out to us today.</p>
     </div>

    </section>

    <section class="contact-section py-5">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-8">
            <!-- design this form more elegant -->
            <form id="contactForm" method="post" action="">
              <div class="mb-3 form-group ">
                <div class="row">
                  <div class="col-md-6">
                    <label for="name" class="form-label">First Name<span style="color: red;">*</span></label>
                    <input type="text" class="form-control" id="name" name="name" required>

                   </div>
                   <div class="col-md-6">
                   <label for="last_name" class="form-label">Last Name<span style="color: red;">*</span></label>
                      <input type="text" class="form-control" id="last_name" name="last_name" required>
                   </div>
              </div>
              <div class="mb-3 form-group">
                <label for="email" class="form-label">Email<span style="color: red;">*</span></label>
                <input type="email" class="form-control" id="email" name="email" required>
              </div>
              <div class="mb-3 form-group">
                <label for="phone" class="form-label">Phone<span style="color: red;">*</span></label>
                <input type="tel" class="form-control" id="phone" name="phone" required>
              </div>
              <div class="mb-3 form-group">
                <label for="message" class="form-label">Message<span style="color: red;">*</span></label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-submit ">Submit</button>
            </form>

            <!-- Display success or error messages here -->
            <?php
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                // Basic validation (can be enhanced)
                $name = trim($_POST['name']);
                $email = trim($_POST['email']);
                $phone = trim($_POST['phone']);
                $message = trim($_POST['message']);

                if (filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($name) && !empty($message)) {
                    // Send email to sales team
                    $to = 'ssitdeveloper@gmail.com';
                    $subject = 'New Contact Form Submission';
                    $body = "Name: $name\nEmail: $email\nPhone: $phone\nMessage: $message";
                    $headers = "From: $email";

                    if (mail($to, $subject, $body, $headers)) {
                        $success = 'Your message has been sent successfully.';
                    } else {
                        $error = 'There was an error sending your message.';
                    }
                } else {
                    $error = 'Please fill in all required fields with valid information.';
                }
            }
            ?>
          </div>
        </div>
      </div>

    </section>

    <section class="contact-info-section py-5 bg-light">
      <div class="container">
        <div class="row text-center">
            <div class="col-md-4">
                <div class="icon-wrapper">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <div class="contact-info-text">
                <h5>Address</h5>
                <p>123 Kiosk Street, Hyderabad, India</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-wrapper">
                    <i class="fas fa-phone"></i>
                </div>
                <div class="contact-info-text">
                <h5>Phone</h5>
                <p>+91 98765 43210</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="icon-wrapper">
                    <i class="fas fa-envelope"></i>
                </div>
                <div class="contact-info-text">
                <h5>Email</h5>
                <p><a href="mailto:sales@kioskpro.com">sales@kioskpro.com</a></p>
                </div>
            </div>
        </div>
      </div>
    </section>

    <section class="map-section py-5">
        <div class="container text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d237.89702433160087!2d78.47085076406803!3d17.442839892436826!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9745c0c9519f%3A0xca80373e26c9b0e4!2sEnvious%20Energy%20Pvt%20Ltd!5e0!3m2!1sen!2sin!4v1781550361289!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

    </section>

<?php

require_once 'includes/footer.php';


?>