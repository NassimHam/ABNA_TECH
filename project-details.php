
<?php
if (isset($_GET['id'])) {
    $projectId = $_GET['id'];
    $projectsJson = file_get_contents('projects.json');
    $projectsData = json_decode($projectsJson, true);
    $project = null;
    
    foreach ($projectsData['projects'] as $p) {
        if ($p['id'] == $projectId) {
            $project = $p;
            break;
        }
    }
    
    if (!$project) {
        header('Location: portfolio.php');
        exit;
    }
} else {
    header('Location: portfolio.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($project['title']); ?> - ABNA TECH</title>
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
        <div class="project-main-content">
            <div class="project-main-image" style="margin-top: 180px;">
                <img src="<?php echo htmlspecialchars($project['image']); ?>" alt="<?php echo htmlspecialchars($project['title']); ?>">
            </div>
            
            <div class="project-description">
                <div class="project-meta">
                    <div class="meta-item">
                        <i class="fas fa-folder"></i>
                        <div>
                            <h4>Category</h4>
                            <p><?php echo ucfirst(htmlspecialchars($project['category'])); ?></p>
                        </div>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-calendar"></i>
                        <div>
                            <h4>Date</h4>
                            <p>2023</p>
                        </div>
                    </div>
                    <div class="meta-item">
                        <i class="fas fa-code"></i>
                        <div>
                            <h4>Technology</h4>
                            <p>Modern Stack</p>
                        </div>
                    </div>
                </div>

                <div class="project-text">
                    <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                    <p><?php echo htmlspecialchars($project['description']); ?></p>
                    
                    <div class="tech-stack">
                        <h4 style="padding-bottom:15px;">Technologies Used</h4>
                        <div class="tech-tags">
                            <?php
                            $technologies = ['HTML5', 'CSS3', 'JavaScript', 'PHP', 'MySQL'];
                            foreach ($technologies as $tech) {
                                echo "<span>$tech</span>";
                            }
                            ?>
                        </div>
                    </div>
                </div>

                <div class="project-actions">
                    <a href="portfolio.php" class="btn-back">
                        <i class="fas fa-arrow-left"></i> Back to Portfolio
                    </a>
                    <a href="contact.php" class="btn-contact">
                        Contact Us <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
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

    <script src="script.js"></script>
</body>
</html>
