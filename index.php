<?php 
$contact_email = "contact@abnatech.ma";
$phone1 = "+212 602536302";
$phone2 = "+212 628568219";
$linkedin = "https://www.linkedin.com/company/abna-tech/";
$instagram = "https://www.instagram.com/abnatech.ma/"



?>





<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <title>Home - ABNA TECH</title>
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
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="portfolio.php">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <div class="hero">
      <div class="video-background">
        <video autoplay loop muted playsinline>
          <source src="https://demo.themovation.com/stratus/wp-content/uploads/2017/09/Saint_Barthelemy.mp4"
            type="video/mp4">
        </video>
      </div>
      <h1 class="mainTitle">ABNA TECH</h1>
      <p class="mainParagraph">Nous donnons vie à vos idées.</p>
      <a href="#" class="btn">En savoir plus</a>
    </div>

    <section class="services">
      <div class="section-heading fade-in">
        <h2>Nos Services</h2>
        <div class="heading-divider"></div>
        <p class="heading-description">Des solutions adaptées à vos besoins</p>
      </div>
      <div class="service-container">
        <div class="service-item slide-in-left">
          <div class="service-icon">
            <i class="lnr lnr-coffee-cup"></i>
          </div>
          <h3>Solutions sur mesure</h3>
          <p>Nous concevons des solutions logicielles innovantes, adaptées à vos besoins spécifiques. Du développement
            d'applications web et mobiles à la création de plateformes complexes, nous vous accompagnons de la
            conception à la réalisation de votre projet.</p>
        </div>

        <div class="service-item fade-in">
          <div class="service-icon">
            <i class="lnr lnr-screen"></i>
          </div>
          <h3>Expertise technologique</h3>
          <p>Notre équipe d'experts maîtrise les dernières technologies et méthodologies de développement. Nous sommes
            spécialisés dans le développement des application web et mobile et nous nous engageons à vous offrir des
            solutions performantes et évolutives</p>
        </div>

        <div class="service-item slide-in-right">
          <div class="service-icon">
            <i class="lnr lnr-checkmark-circle"></i>
          </div>
          <h3>Partenariats durables</h3>
          <p>Nous établissons des relations de confiance avec nos clients, basées sur la transparence, la communication
            et l'engagement. Votre succès est notre priorité, et nous vous accompagnons tout au long de votre
            transformation digitale.</p>
        </div>
      </div>
    </section>

    <section class="features">
      <div class="features-heading fade-in">
        <i class="lnr lnr-file-empty"></i>
        <h2>Nos Services</h2>
      </div>

      <div class="features-container">
        <div class="feature-item slide-in-left">
          <div class="feature-image">
            <img src="images/image1.jpg" alt="Design Adaptatif et Élégant">
          </div>
          <h3>Design Adaptatif et Élégant</h3>
          <p>Nous créons des interfaces d'utilisateur modernes et attrayantes qui s'adaptent à tous les appareils,
            garantissant une expérience fluide pour vos utilisateurs. Vous bénéficiez du parfait mariage entre
            esthétique visuelle soignée et une interface fonctionnelle.</p>
        </div>

        <div class="feature-item slide-in-right">
          <div class="feature-image">
            <img src="images/image2.jpg" alt="Développement Agile et Performant">
          </div>
          <h3>Développement Agile et Performant</h3>
          <p>Notre processus de développement agile nous permet d'être à l'écoute constante de vos besoins évolutifs.
            Nous livrons rapidement des solutions fonctionnelles qui peuvent être enrichies progressivement, vous
            permettant ainsi de tester vos idées et de les ajuster en fonction des retours utilisateurs.</p>
        </div>

        <div class="feature-item slide-in-left">
          <div class="feature-image">
            <img src="images/image3.jpg" alt="Performance et Fiabilité">
          </div>
          <h3>Performance et Fiabilité</h3>
          <p>Nous accordons une importance capitale à la performance et à la fiabilité de nos applications. Chaque ligne
            de code est écrite dans un souci d'efficacité, en optimisant les temps de chargement, la gestion des
            ressources et l'expérience utilisateur, même dans des environnements à contraintes.</p>
        </div>

        <div class="feature-item slide-in-right">
          <div class="feature-image">
            <img src="images/image4.jpg" alt="Technologies de pointe">
          </div>
          <h3>Technologies de pointe</h3>
          <p>Notre veille technologique permanente nous permet de vous proposer les meilleures solutions adaptées à vos
            besoins. Nous maîtrisons les dernières technologies web et mobiles pour offrir des produits à la pointe de
            l'innovation.</p>
        </div>
      </div>
    </section>

    <section class="cta">
      <div class="cta-content zoom-in">
        <h2>Vous souhaitez collaborer avec ABNA TECH pour votre prochain projet?</h2>
        <a href="contact.php" class="cta-btn">Contactez-nous</a>
      </div>
    </section>
  </main>

  <footer>
    <div class="footer-container">
      <div class="footer-about fade-in">
        <h3>À propos de nous</h3>
        <p>ABNA Tech est votre partenaire technologique de confiance. Notre expertise couvre le développement
          d'applications sur mesure, l'intégration de solutions techniques complexes, et la création d'expériences
          numériques innovantes pour transformer vos idées en réalité.</p>
      </div>

      <div class="footer-contact fade-in">
        <h3>Contact Info</h3>
        <ul>
          <li><i class="far fa-envelope"></i> <a href="mailto:<?php echo htmlspecialchars($contact_email); ?>" style="text-decoration: none; color: inherit;"><?php echo htmlspecialchars($contact_email); ?></a></li>
          <li><i class="fas fa-phone"></i> <a href="tel:<?php echo htmlspecialchars($phone1); ?>" style="text-decoration: none; color: inherit;"><?php echo htmlspecialchars($phone1); ?></a></li>
          <li><i class="fas fa-phone"></i> <a href="tel:<?php echo htmlspecialchars($phone2); ?>" style="text-decoration: none; color: inherit;"><?php echo htmlspecialchars($phone2); ?></a></li>
        </ul>
        <h4>Nous Trouver:</h4>
        <div class="social-links">
          <?php if (!empty($linkedin)): ?>
          <a href="<?php echo htmlspecialchars($linkedin); ?>"><i class="fab fa-linkedin"></i></a>
          <?php endif; ?>
          <?php if (!empty($instagram)): ?>
          <a href="<?php echo htmlspecialchars($instagram); ?>"><i class="fab fa-instagram"></i></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <div class="footer-bottom fade-in">
      <p>© ABNA TECH - 2025 | <a href="admin/login.php" id="admin-login" style="color:inherit;text-decoration:none;">Admin</a></p>
    </div>
  </footer>

  <a id="scrollUp" href="#" title="Scroll to top">
    <i class="fas fa-arrow-up"></i>
  </a>

  <script src="script.js"></script>
</body>

</html>
