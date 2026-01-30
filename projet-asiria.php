<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Portfolio Asiria Álvarez - Portfolio Elisabeth' : ($currentLang === 'es' ? 'Portafolio Asiria Álvarez - Portafolio Elisabeth' : 'Asiria Álvarez Portfolio - Elisabeth Portfolio'); ?></title>
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
      <h2><?php echo t('project_asiria'); ?></h2>
      
      <div class="projet-meta">
        <p><strong><?php echo t('tech_stack'); ?> :</strong> PHP 7/8, PDO, MySQL/MariaDB, HTML5, CSS3 (Tailwind), JavaScript</p>
      </div>

      <h3><?php echo t('project_overview'); ?></h3>
      <p>
        <?php echo trans(
          'Un portfolio professionnel élégant et minimaliste pour Asiria Álvarez, photographe et designer graphique basée à Las Palmas, Gran Canaria. Ce site showcase son travail créatif avec une interface sophistiquée et une gestion complète de contenu multimédia. C\'est un projet complexe combinant une interface publique riche en médias et un puissant panneau d\'administration.',
          'Un portafolio profesional elegante y minimalista para Asiria Álvarez, fotógrafa y diseñadora gráfica con sede en Las Palmas, Gran Canaria. Este sitio presenta su trabajo creativo con una interfaz sofisticada y una gestión completa de contenido multimedia. Es un proyecto complejo que combina una interfaz pública rica en medios y un potente panel de administración.',
          'An elegant and minimalist professional portfolio for Asiria Álvarez, photographer and graphic designer based in Las Palmas, Gran Canaria. This site showcases her creative work with a sophisticated interface and complete multimedia content management. It\'s a complex project combining a media-rich public interface and a powerful administration panel.'
        ); ?>
      </p>

      <div class="galerie-screenshots">
        <?php
          $screens = glob('assets/asiriaalvarez/*.{png,jpg,jpeg,webp}', GLOB_BRACE);
          usort($screens, function($a, $b) {
            $numA = intval(preg_replace('/\D/', '', basename($a)));
            $numB = intval(preg_replace('/\D/', '', basename($b)));
            return $numA - $numB;
          });
          $screens = array_slice($screens, 0, 10);
          foreach ($screens as $index => $screen) {
            $fileName = basename($screen);
            $src = 'assets/asiriaalvarez/' . rawurlencode($fileName);
            $alt = 'Screenshot ' . ($index + 1) . ' - Asiria Álvarez';
            echo '<img src="' . $src . '" alt="' . $alt . '" class="screenshot">';
          }
        ?>
      </div>

      <h3><?php echo t('project_public_features'); ?></h3>
      <ul>
        <li>📖 <strong><?php echo trans('Bio interactive', 'Bio interactiva', 'Interactive bio'); ?> :</strong> <?php echo trans('Section expandable (Ver más/Ver menos)', 'Sección expandible (Ver más/Ver menos)', 'Expandable section (Read more/Less)'); ?></li>
        <li>📸 <strong><?php echo trans('3 Galeries', '3 Galerías', '3 Galleries'); ?> :</strong> <?php echo trans('Fotografía, Diseño Gráfico, Otros Proyectos (collaborations, événements, workshops)', 'Fotografía, Diseño Gráfico, Otros Proyectos (colaboraciones, eventos, talleres)', 'Photography, Graphic Design, Other Projects (collaborations, events, workshops)'); ?></li>
        <li>🖼️ <strong><?php echo trans('Projets détaillés', 'Proyectos detallados', 'Detailed projects'); ?> :</strong> <?php echo trans('Images/vidéos HD, descriptions, dates, clients, navigation fluide', 'Imágenes/videos HD, descripciones, fechas, clientes, navegación fluida', 'HD images/videos, descriptions, dates, clients, smooth navigation'); ?></li>
        <li>💌 <strong><?php echo t('contact_submit'); ?> :</strong> <?php echo trans('Formulaire avec confirmation email auto', 'Formulario con confirmación de correo automática', 'Form with auto email confirmation'); ?></li>
        <li>📋 <strong><?php echo trans('Légal', 'Legal', 'Legal'); ?> :</strong> RGPD, <?php echo trans('mentions légales', 'avisos legales', 'legal notices'); ?> | 🔗 <strong>Social :</strong> Instagram <?php echo trans('intégré', 'integrado', 'integrated'); ?></li>
      </ul>

      <h3><?php echo t('project_admin_panel'); ?></h3>
      <p><?php echo trans('Accès sécurisé', 'Acceso seguro', 'Secure access'); ?> <code>admin/admin.php</code> <?php echo trans('avec authentification robuste :', 'con autenticación robusta:', 'with robust authentication:'); ?></p>

      <div class="galerie-backend">
        <h4><?php echo trans('Gestion Contenu & Analytics', 'Gestión de Contenido y Analytics', 'Content Management & Analytics'); ?></h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 <?php echo trans('Biographie & 3 Galeries', 'Biografía y 3 Galerías', 'Biography & 3 Galleries'); ?></h5>
            <p><?php echo trans('Créer/éditer bio avec images. Gestion complète Fotografías, Diseños Gráficos, Otros Proyectos. Upload médias, définition image principale, catégorisation flexible.', 'Crear/editar bio con imágenes. Gestión completa Fotografías, Diseños Gráficos, Otros Proyectos. Carga de medios, definición de imagen principal, categorización flexible.', 'Create/edit bio with images. Full management of Photography, Graphic Designs, Other Projects. Media upload, main image definition, flexible categorization.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>📹 <?php echo trans('Gestion Médias', 'Gestión de Medios', 'Media Management'); ?></h5>
            <p><?php echo trans('Upload centralisé images/vidéos. Titres, descriptions. Marquage "principal". Drag-and-drop réorganisation. Suppression sécurisée.', 'Carga centralizada de imágenes/videos. Títulos, descripciones. Marcado "principal". Reorganización con arrastrar y soltar. Eliminación segura.', 'Centralized image/video upload. Titles, descriptions. "Main" marking. Drag-and-drop reorganization. Secure deletion.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>📊 <?php echo trans('Analytics Géographiques', 'Analytics Geográficas', 'Geographic Analytics'); ?></h5>
            <p><?php echo trans('Visites totales, visiteurs uniques, moyenne. Répartition pays/ville. Carte interactive. Sélection mois. Export PDF rapports.', 'Visitas totales, visitantes únicos, promedio. Distribución país/ciudad. Mapa interactivo. Selección de mes. Exportación de informes PDF.', 'Total visits, unique visitors, average. Country/city distribution. Interactive map. Month selection. PDF report export.'); ?></p>
          </div>
        </div>
      </div>

      <h3><?php echo t('project_security'); ?></h3>
      <div class="galerie-backend">
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP 7/8 + MySQL</h5>
            <p><?php echo trans('PDO sécurisé, CRUD modulaire. Tables : users, bio, 3 galeries, medias, stats, sessions. Relations normalisées, indexes performance.', 'PDO seguro, CRUD modular. Tablas: usuarios, bio, 3 galerías, medios, estadísticas, sesiones. Relaciones normalizadas, índices de rendimiento.', 'Secure PDO, modular CRUD. Tables: users, bio, 3 galleries, media, stats, sessions. Normalized relationships, performance indexes.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>🔐 <?php echo t('feature_security'); ?> & <?php echo trans('Emails', 'Correos', 'Emails'); ?></h5>
            <p><?php echo trans('Sessions tokens, bcrypt, sanitization, prepared statements. Mailing confirmations contact. Templates pros. Gestion erreurs.', 'Tokens de sesión, bcrypt, sanitización, declaraciones preparadas. Confirmaciones de correo de contacto. Plantillas profesionales. Gestión de errores.', 'Session tokens, bcrypt, sanitization, prepared statements. Contact email confirmations. Professional templates. Error handling.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>☁️ <?php echo trans('Médias & Performance', 'Medios y Rendimiento', 'Media & Performance'); ?></h5>
            <p><?php echo trans('Upload sécurisé, validation types. Optimisation images, lazy-loading. Tailwind CSS responsive. Lightbox/carousel. SEO optimisé.', 'Carga segura, validación de tipos. Optimización de imágenes, carga perezosa. CSS Tailwind responsivo. Lightbox/carrusel. SEO optimizado.', 'Secure upload, type validation. Image optimization, lazy-loading. Responsive Tailwind CSS. Lightbox/carousel. Optimized SEO.'); ?></p>
          </div>
        </div>
      </div>

      <h3><?php echo t('project_key_points'); ?> & <?php echo trans('Collaboration', 'Colaboración', 'Collaboration'); ?></h3>
      <ul>
        <li><strong><?php echo trans('Multi-projets', 'Multi-proyectos', 'Multi-projects'); ?> :</strong> 3 types with distinct logics</li>
        <li><strong><?php echo trans('Médias flexibles', 'Medios flexibles', 'Flexible media'); ?> :</strong> <?php echo trans('Images principales/galerie, pagination', 'Imágenes principales/galería, paginación', 'Main images/gallery, pagination'); ?></li>
        <li><strong>Analytics :</strong> <?php echo trans('Tracking IP, carte interactive, export business', 'Seguimiento de IP, mapa interactivo, exportación comercial', 'IP tracking, interactive map, business export'); ?></li>
        <li><strong>KDevs :</strong> <?php echo trans('Développé avec Babou CAMARA-DIABY (architecture/UX)', 'Desarrollado con Babou CAMARA-DIABY (arquitectura/UX)', 'Developed with Babou CAMARA-DIABY (architecture/UX)'); ?></li>
      </ul>

      <div class="projet-cta">
        <a href="https://asiriaalvarez.art" class="btn-principal" target="_blank"><?php echo t('project_view_live'); ?></a>
      </div>
    </div>
  </div>

  <footer>
    <p><?php echo t('footer_copyright'); ?></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
