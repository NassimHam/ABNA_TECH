
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
      <a href="index.php"><img src="https://abnatech.ma/nobg.png" alt="ABNA TECH Logo"></a>
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
      <h1>Let's Work Together</h1>
      <p>Transform Your Ideas into Digital Reality</p>
    </div>

    <section class="contact-section">
      <div class="contact-container">
        <div class="contact-info">
          <div class="contact-card">
            <h3>Ready to Start Your Project?</h3>
            <p class="contact-intro">Our team of experts is here to help bring your vision to life. Whether you need a custom web application, mobile app, or digital transformation solution, we're ready to collaborate.</p>
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
              <li>
                <i class="fas fa-map-marker-alt"></i>
                <div>
                  <h4>Location</h4>
                  <p>Casablanca, Morocco</p>
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

    <section class="map-section">
      <div class="map-container">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106376.72691561705!2d-7.6894361705725615!3d33.57240299999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda7cd4778aa113b%3A0xb06c1d84f310fd3!2sCasablanca%2C%20Morocco!5e0!3m2!1sen!2s!4v1690558789259!5m2!1sen!2s" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
