<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Scout-Doramas 104 - Portfolio Elisabeth' : ($currentLang === 'es' ? 'Scout-Doramas 104 - Portafolio Elisabeth' : 'Scout-Doramas 104 - Elisabeth Portfolio'); ?></title>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <canvas id="magicParticles"></canvas>

  <!-- Language Selector -->
  <div class="language-selector">
    <button data-lang="fr" class="<?php echo $currentLang === 'fr' ? 'active' : ''; ?>">🇫🇷 FR</button>
    <button data-lang="es" class="<?php echo $currentLang === 'es' ? 'active' : ''; ?>">🇪🇸 ES</button>
    <button data-lang="en" class="<?php echo $currentLang === 'en' ? 'active' : ''; ?>">🇬🇧 EN</button>
  </div>

  <header>
    <h1><?php echo t('header_title'); ?></h1>
    <nav>
      <a href="./index.php#projets"><?php echo t('nav_back_projects'); ?></a>
    </nav>
  </header>

  <div class="projet-detail">
    <div class="card detail-card">
      <h2>Scout-Doramas 104 ✨</h2>
      
      <div class="projet-meta">
        <p><strong>Stack technique :</strong> PHP, PDO, MySQL, HTML5, CSS3, JavaScript</p>
        <p><strong>Type :</strong> Site associatif avec panel administrateur</p>
        <p><strong>Lien temporaire :</strong> https://scout-doramas.kdevs.io/</p>
      </div>

      <h3>Vue d'ensemble</h3>
      <p>
        Scout-Doramas 104 est une plateforme web complète pour une association de scouts basée en Espagne. 
        Le site combine une interface publique engageante pour recruter et informer les jeunes avec un panel 
        d'administration sécurisé pour gérer les inscriptions, messages et contenus. C'est un projet d'engagement 
        communautaire moderne avec design scout distinctif.
      </p>

      <div class="galerie-screenshots">
        <img src="assets/scout_doramas/site-public.png" alt="Site public Scout Doramas" class="screenshot">
        <img src="assets/scout_doramas/admin-dashboard.png" alt="Dashboard administrateur" class="screenshot">
        <img src="assets/scout_doramas/admin-sections.png" alt="Gestion sections" class="screenshot">
        <img src="assets/scout_doramas/admin-inscriptions.png" alt="Gestion inscriptions" class="screenshot">
        <img src="assets/scout_doramas/admin-galerie.png" alt="Gestion galerie" class="screenshot">
        <img src="assets/scout_doramas/admin-messages.png" alt="Gestion messages" class="screenshot">
      </div>

      <h3>Espace Public</h3>
      
      <h4>🏕️ Fonctionnalités principales</h4>
      <ul>
        <li>🏠 <strong>Accueil :</strong> Hero section, mission et valeurs</li>
        <li>👥 <strong>3 Sections par âge :</strong> Lobatos (8-11, mercredi 18h30), Scouts (12-15, samedi 14h), Pioneros (16-18, samedi 18h)</li>
        <li>📅 <strong>Calendrier & Galerie :</strong> Événements planifiés, photos/vidéos aventures</li>
        <li>📝 <strong>Formulaires :</strong> Contact et inscription (sélection section/âge)</li>
        <li>📋 <strong>Légal & Social :</strong> Mentions légales + Facebook/Instagram</li>
      </ul>

      <h3>Panel Administrateur</h3>
      
      <h4>🔐 Authentification & Dashboard</h4>
      <p>Login sécurisé (email/mot de passe, bcrypt, rate limiting, sessions). Dashboard avec stats visiteurs, inscriptions, clics médias.</p>

      <div class="galerie-backend">
        <h4>Gestion Communautaire</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Inscriptions & Messages</h5>
            <p>Approuver/rejeter inscriptions, export CSV. Consulter messages contact, marquage lu/non lu. 
            Focus principal : validation demandes d'adhésion.</p>
          </div>

          <div class="backend-item">
            <h5>📸 Galerie & Contenu</h5>
            <p>Upload photos/vidéos aventures, catégorisation événements. Éditer about, hero, réseaux sociaux. 
            Gestion métadonnées (titres, dates).</p>
          </div>

          <div class="backend-item">
            <h5>📊 Analytics & Sections</h5>
            <p>Stats mensuelles trafic, sections consultées. Édition descriptions sections (via contenu). 
            Pas de CRUD sections complet.</p>
          </div>
        </div>
      </div>

      <h3>Architecture & Sécurité</h3>
      
      <div class="galerie-backend">
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP/PDO + MySQL</h5>
            <p>Architecture modulaire, CRUD entities. Tables : users, sections, events, galeria, inscripciones, mensajes, contenido. 
            Relations normalisées, indexes, UTF-8 support.</p>
          </div>

          <div class="backend-item">
            <h5>🔐 Sécurité Renforcée</h5>
            <p><strong>Protection CSRF</strong> tous formulaires. Bcrypt (coût 12). <strong>Rate limiting</strong> anti-brute force. 
            Validation fichiers stricte (MIME, taille). Prepared statements, HTML escaping.</p>
          </div>

          <div class="backend-item">
            <h5>🎨 Design Scout & Performance</h5>
            <p>Palettes scouts (vert forêt, orange, bleu). Mobile-first responsive. 
            Lazy-loading, compression images. WCAG compliance, navigation clavier.</p>
          </div>
        </div>
      </div>

      <h3>Points clés</h3>
      <ul>
        <li><strong>CSRF & Rate Limiting :</strong> Sécurité renforcée pour plateforme jeunes</li>
        <li><strong>Workflow inscriptions :</strong> Approbation simple sans surcharge UX</li>
        <li><strong>Design attractif :</strong> Identité scout moderne pour recruter jeunes</li>
        <li><strong>Multimédia optimisé :</strong> Galeries performantes sur mobiles</li>
      </ul>

      <<?php echo t('footer_copyright'); ?>
        <a href="https://scout-doramas.kdevs.io/" class="btn-principal" target="_blank">🌐 Voir le site en action</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
