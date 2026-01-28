<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio Asiria Álvarez - Portfolio Elisabeth</title>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <canvas id="magicParticles"></canvas>

  <header>
    <h1>Elisabeth, Mage Développeuse</h1>
    <nav>
      <a href="./index.php#projets">← Retour aux quêtes</a>
    </nav>
  </header>

  <div class="projet-detail">
    <div class="card detail-card">
      <h2>Portfolio Asiria Álvarez ✨</h2>
      
      <div class="projet-meta">
        <p><strong>Stack technique :</strong> PHP 7/8, PDO, MySQL/MariaDB, HTML5, CSS3 (Tailwind), JavaScript</p>
        <p><strong>Développé par :</strong> KDevs (Babou CAMARA-DIABY & Elisabeth TALAVERA RODRIGUEZ)</p>
      </div>

      <h3>Vue d'ensemble</h3>
      <p>
        Un portfolio professionnel élégant et minimaliste pour Asiria Álvarez, photographe et designer graphique basée à Las Palmas, Gran Canaria. 
        Ce site showcase son travail créatif avec une interface sophistiquée et une gestion complète de contenu multimédia. 
        C'est un projet complexe combinant une interface publique riche en médias et un puissant panneau d'administration.
      </p>

      <div class="galerie-screenshots">
        <img src="assets/asiriaalvarez/site-public.png" alt="Site public Asiria Álvarez" class="screenshot">
        <img src="assets/asiriaalvarez/admin-dashboard.png" alt="Dashboard administrateur" class="screenshot">
        <img src="assets/asiriaalvarez/admin-galerie.png" alt="Gestion galerie" class="screenshot">
        <img src="assets/asiriaalvarez/admin-stats.png" alt="Statistiques et analytics" class="screenshot">
        <img src="assets/asiriaalvarez/admin-projets.png" alt="Gestion projets" class="screenshot">
        <img src="assets/asiriaalvarez/admin-form.png" alt="Formulaire édition" class="screenshot">
      </div>

      <h3>Fonctionnalités publiques</h3>
      <ul>
        <li>📖 <strong>Bio interactive :</strong> Section expandable (Ver más/Ver menos)</li>
        <li>📸 <strong>3 Galeries :</strong> Fotografía, Diseño Gráfico, Otros Proyectos (collaborations, événements, workshops)</li>
        <li>🖼️ <strong>Projets détaillés :</strong> Images/vidéos HD, descriptions, dates, clients, navigation fluide</li>
        <li>💌 <strong>Contact :</strong> Formulaire avec confirmation email auto</li>
        <li>📋 <strong>Légal :</strong> RGPD, mentions légales | 🔗 <strong>Social :</strong> Instagram intégré</li>
      </ul>

      <h3>Panel Administrateur</h3>
      <p>Accès sécurisé <code>admin/admin.php</code> avec authentification robuste :</p>

      <div class="galerie-backend">
        <h4>Gestion Contenu & Analytics</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Biographie & 3 Galeries</h5>
            <p>Créer/éditer bio avec images. Gestion complète Fotografías, Diseños Gráficos, Otros Proyectos. 
            Upload médias, définition image principale, catégorisation flexible.</p>
          </div>

          <div class="backend-item">
            <h5>📹 Gestion Médias</h5>
            <p>Upload centralisé images/vidéos. Titres, descriptions. Marquage "principal". 
            Drag-and-drop réorganisation. Suppression sécurisée.</p>
          </div>

          <div class="backend-item">
            <h5>📊 Analytics Géographiques</h5>
            <p>Visites totales, visiteurs uniques, moyenne. Répartition pays/ville. 
            Carte interactive. Sélection mois. Export PDF rapports.</p>
          </div>
        </div>
      </div>

      <h3>Architecture & Sécurité</h3>
      <div class="galerie-backend">
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP 7/8 + MySQL</h5>
            <p>PDO sécurisé, CRUD modulaire. Tables : users, bio, 3 galeries, medias, stats, sessions. 
            Relations normalisées, indexes performance.</p>
          </div>

          <div class="backend-item">
            <h5>🔐 Sécurité & Emails</h5>
            <p>Sessions tokens, bcrypt, sanitization, prepared statements. 
            Mailing confirmations contact. Templates pros. Gestion erreurs.</p>
          </div>

          <div class="backend-item">
            <h5>☁️ Médias & Performance</h5>
            <p>Upload sécurisé, validation types. Optimisation images, lazy-loading. 
            Tailwind CSS responsive. Lightbox/carousel. SEO optimisé.</p>
          </div>
        </div>
      </div>

      <h3>Points clés & Collaboration</h3>
      <ul>
        <li><strong>Multi-projets :</strong> 3 types avec logiques distinctes</li>
        <li><strong>Médias flexibles :</strong> Images principales/galerie, pagination</li>
        <li><strong>Analytics :</strong> Tracking IP, carte interactive, export business</li>
        <li><strong>KDevs :</strong> Développé avec Babou CAMARA-DIABY (architecture/UX)</li>
      </ul>

      <div class="projet-cta">
        <a href="https://asiriaalvarez.art" class="btn-principal" target="_blank">🌐 Voir le site en action</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
