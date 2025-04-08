
<?php
$projectsJson = file_get_contents('projects.json');
$projectsData = json_decode($projectsJson, true);
$projects = $projectsData['projects'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Portfolio - ABNA TECH</title>
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
        <li><a href="portfolio.php" class="active">Portfolio</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="portfolio-section">
      <div class="section-heading fade-in">
        <h2>Our Portfolio</h2>
        <div class="heading-divider"></div>
        <p class="heading-description">Check out our latest work</p>
      </div>

      <div class="portfolio-filter">
        <button class="filter-btn active" data-filter="all">All</button>
        <button class="filter-btn" data-filter="web">Web</button>
        <button class="filter-btn" data-filter="mobile">Mobile</button>
        <button class="filter-btn" data-filter="design">Design</button>
      </div>

      <div class="portfolio-container">
        <?php foreach($projects as $project): ?>
        <div class="portfolio-item" data-category="<?php echo htmlspecialchars($project['category']); ?>">
          <div class="portfolio-image">
            <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
            <div class="portfolio-overlay">
              <a href="project-details.php?id=<?php echo htmlspecialchars($project['id']); ?>" class="portfolio-link">
                <i class="fas fa-link"></i>
              </a>
            </div>
          </div>
          <div class="portfolio-content">
            <h3><?php echo htmlspecialchars($project['title']); ?></h3>
            <span class="portfolio-category"><?php echo htmlspecialchars($project['category']); ?></span>
            <p class="portfolio-description"><?php echo htmlspecialchars($project['description']); ?></p>
          </div>
        </div>
        <?php endforeach; ?>
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
