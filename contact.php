
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - ABNA TECH</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
  <link rel="icon" href="nobg.ico" type="image/x-icon">
</head>
<body>
  <header>
    <div class="logo">
      <a href="#"><img src="https://abnatech.ma/nobg.png" alt="ABNA TECH Logo"></a>
    </div>
    <nav>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php" class="active">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="hero contact-hero">
      <h1>Contact Us</h1>
      <p>Get in touch with us</p>
    </div>

    <section class="contact-section">
      <div class="contact-container">
        <div class="contact-info">
          <div class="contact-card">
            <h3>Contact Information</h3>
            <ul class="contact-details">
              <li>
                <i class="far fa-envelope"></i>
                <div>
                  <h4>Email</h4>
                  <p>contact@abnatech.ma</p>
                </div>
              </li>
              <li>
                <i class="fas fa-phone"></i>
                <div>
                  <h4>Phone</h4>
                  <p>+212 602536302</p>
                  <p>+212 628568219</p>
                </div>
              </li>
            </ul>
          </div>
        </div>

        <div class="contact-form">
          <form id="contactForm">
            <div class="form-group">
              <input type="text" name="name" placeholder="Your Name" required>
            </div>
            <div class="form-group">
              <input type="email" name="email" placeholder="Your Email" required>
            </div>
            <div class="form-group">
              <input type="text" name="subject" placeholder="Subject" required>
            </div>
            <div class="form-group">
              <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
            </div>
            <button type="submit" class="submit-btn">Send Message</button>
          </form>
          <div id="formResponse"></div>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-about fade-in">
        <h3>À propos de nous</h3>
        <p>ABNA Tech est votre partenaire technologique de confiance.</p>
      </div>
      <div class="footer-contact fade-in">
        <h3>Contact Info</h3>
        <ul>
          <li><i class="far fa-envelope"></i> contact@abnatech.ma</li>
          <li><i class="fas fa-phone"></i> +212 602536302</li>
          <li><i class="fas fa-phone"></i> +212 628568219</li>
        </ul>
      </div>
    </div>
    <div class="footer-bottom fade-in">
      <p>© ABNA TECH - 2025</p>
    </div>
  </footer>

  <a id="scrollUp" href="#" title="Scroll to top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="script.js"></script>
</body>
</html>
