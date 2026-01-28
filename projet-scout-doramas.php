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
        <p><strong><?php echo trans('Stack technique :', 'Stack técnico :', 'Technical Stack:'); ?></strong> PHP, PDO, MySQL, HTML5, CSS3, JavaScript</p>
        <p><strong><?php echo trans('Type :', 'Tipo :', 'Type:'); ?></strong> <?php echo trans('Site associatif avec panel administrateur', 'Sitio asociativo con panel de administrador', 'Associative website with admin panel'); ?></p>
        <p><strong><?php echo trans('Lien temporaire :', 'Enlace temporal :', 'Temporary link:'); ?></strong> https://scout-doramas.kdevs.io/</p>
      </div>

      <h3><?php echo trans('Vue d\'ensemble', 'Descripción general', 'Overview'); ?></h3>
      <p>
        <?php echo trans('Scout-Doramas 104 est une plateforme web complète pour une association de scouts basée en Espagne. Le site combine une interface publique engageante pour recruter et informer les jeunes avec un panel d\'administration sécurisé pour gérer les inscriptions, messages et contenus. C\'est un projet d\'engagement communautaire moderne avec design scout distinctif.', 'Scout-Doramas 104 es una plataforma web completa para una asociación de scouts con base en España. El sitio combina una interfaz pública atractiva para reclutar e informar a los jóvenes con un panel de administración seguro para gestionar inscripciones, mensajes y contenidos. Es un proyecto de compromiso comunitario moderno con diseño scout distintivo.', 'Scout-Doramas 104 is a complete web platform for a scouts association based in Spain. The site combines an engaging public interface to recruit and inform young people with a secure admin panel to manage registrations, messages and content. It\'s a modern community engagement project with distinctive scout design.'); ?>
      </p>

      <div class="galerie-screenshots">
        <img src="assets/scout_doramas/site-public.png" alt="Site public Scout Doramas" class="screenshot">
        <img src="assets/scout_doramas/admin-dashboard.png" alt="Dashboard administrateur" class="screenshot">
        <img src="assets/scout_doramas/admin-sections.png" alt="Gestion sections" class="screenshot">
        <img src="assets/scout_doramas/admin-inscriptions.png" alt="Gestion inscriptions" class="screenshot">
        <img src="assets/scout_doramas/admin-galerie.png" alt="Gestion galerie" class="screenshot">
        <img src="assets/scout_doramas/admin-messages.png" alt="Gestion messages" class="screenshot">
      </div>

      <h3><?php echo trans('Espace Public', 'Espacio Público', 'Public Space'); ?></h3>
      
      <h4>🏕️ <?php echo trans('Fonctionnalités principales', 'Características principales', 'Main Features'); ?></h4>
      <ul>
        <li>🏠 <strong><?php echo trans('Accueil :', 'Inicio :', 'Home:'); ?></strong> <?php echo trans('Hero section, mission et valeurs', 'Sección hero, misión y valores', 'Hero section, mission and values'); ?></li>
        <li>👥 <strong><?php echo trans('3 Sections par âge :', '3 Secciones por edad :', '3 Age Sections:'); ?></strong> <?php echo trans('Lobatos (8-11, mercredi 18h30), Scouts (12-15, samedi 14h), Pioneros (16-18, samedi 18h)', 'Lobatos (8-11, miércoles 18h30), Scouts (12-15, sábado 14h), Pioneros (16-18, sábado 18h)', 'Lobatos (8-11, Wednesday 18h30), Scouts (12-15, Saturday 14h), Pioneros (16-18, Saturday 18h)'); ?></li>
        <li>📅 <strong><?php echo trans('Calendrier & Galerie :', 'Calendario y Galería :', 'Calendar & Gallery:'); ?></strong> <?php echo trans('Événements planifiés, photos/vidéos aventures', 'Eventos planificados, fotos/vídeos de aventuras', 'Planned events, adventure photos/videos'); ?></li>
        <li>📝 <strong><?php echo trans('Formulaires :', 'Formularios :', 'Forms:'); ?></strong> <?php echo trans('Contact et inscription (sélection section/âge)', 'Contacto e inscripción (selección sección/edad)', 'Contact and registration (section/age selection)'); ?></li>
        <li>📋 <strong><?php echo trans('Légal & Social :', 'Legal y Social :', 'Legal & Social:'); ?></strong> <?php echo trans('Mentions légales + Facebook/Instagram', 'Aviso legal + Facebook/Instagram', 'Legal notices + Facebook/Instagram'); ?></li>
      </ul>

      <h3><?php echo trans('Panel Administrateur', 'Panel de Administrador', 'Admin Panel'); ?></h3>
      
      <h4>🔐 <?php echo trans('Authentification & Dashboard', 'Autenticación y Panel', 'Authentication & Dashboard'); ?></h4>
      <p><?php echo trans('Login sécurisé (email/mot de passe, bcrypt, rate limiting, sessions). Dashboard avec stats visiteurs, inscriptions, clics médias.', 'Login seguro (email/contraseña, bcrypt, rate limiting, sesiones). Panel con estadísticas de visitantes, inscripciones, clics en medios.', 'Secure login (email/password, bcrypt, rate limiting, sessions). Dashboard with visitor stats, registrations, media clicks.'); ?></p>

      <div class="galerie-backend">
        <h4><?php echo trans('Gestion Communautaire', 'Gestión Comunitaria', 'Community Management'); ?></h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 <?php echo trans('Inscriptions & Messages', 'Inscripciones y Mensajes', 'Registrations & Messages'); ?></h5>
            <p><?php echo trans('Approuver/rejeter inscriptions, export CSV. Consulter messages contact, marquage lu/non lu. Focus principal : validation demandes d\'adhésion.', 'Aprobar/rechazar inscripciones, exportación CSV. Consultar mensajes de contacto, marcar como leído/no leído. Enfoque principal: validación de solicitudes de membresía.', 'Approve/reject registrations, CSV export. View contact messages, mark as read/unread. Main focus: validating membership requests.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>📸 <?php echo trans('Galerie & Contenu', 'Galería y Contenido', 'Gallery & Content'); ?></h5>
            <p><?php echo trans('Upload photos/vidéos aventures, catégorisation événements. Éditer about, hero, réseaux sociaux. Gestion métadonnées (titres, dates).', 'Cargar fotos/vídeos de aventuras, categorización de eventos. Editar acerca de, hero, redes sociales. Gestión de metadatos (títulos, fechas).', 'Upload adventure photos/videos, event categorization. Edit about, hero, social media. Metadata management (titles, dates).'); ?></p>
          </div>

          <div class="backend-item">
            <h5>📊 <?php echo trans('Analytics & Sections', 'Análisis y Secciones', 'Analytics & Sections'); ?></h5>
            <p><?php echo trans('Stats mensuelles trafic, sections consultées. Édition descriptions sections (via contenu). Pas de CRUD sections complet.', 'Estadísticas mensuales de tráfico, secciones consultadas. Edición de descripciones de secciones (vía contenido). Sin CRUD completo de secciones.', 'Monthly traffic stats, sections viewed. Edit section descriptions (via content). No complete section CRUD.'); ?></p>
          </div>
        </div>
      </div>

      <h3><?php echo trans('Architecture & Sécurité', 'Arquitectura y Seguridad', 'Architecture & Security'); ?></h3>
      
      <div class="galerie-backend">
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP/PDO + MySQL</h5>
            <p><?php echo trans('Architecture modulaire, CRUD entities. Tables : users, sections, events, galeria, inscripciones, mensajes, contenido. Relations normalisées, indexes, UTF-8 support.', 'Arquitectura modular, CRUD entities. Tablas: users, sections, events, galeria, inscripciones, mensajes, contenido. Relaciones normalizadas, índices, soporte UTF-8.', 'Modular architecture, CRUD entities. Tables: users, sections, events, galeria, inscripciones, mensajes, contenido. Normalized relationships, indexes, UTF-8 support.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>🔐 <?php echo trans('Sécurité Renforcée', 'Seguridad Reforzada', 'Enhanced Security'); ?></h5>
            <p><?php echo trans('<strong>Protection CSRF</strong> tous formulaires. Bcrypt (coût 12). <strong>Rate limiting</strong> anti-brute force. Validation fichiers stricte (MIME, taille). Prepared statements, HTML escaping.', '<strong>Protección CSRF</strong> en todos los formularios. Bcrypt (costo 12). <strong>Rate limiting</strong> anti-fuerza bruta. Validación estricta de archivos (MIME, tamaño). Prepared statements, HTML escaping.', '<strong>CSRF Protection</strong> all forms. Bcrypt (cost 12). <strong>Rate limiting</strong> anti-brute force. Strict file validation (MIME, size). Prepared statements, HTML escaping.'); ?></p>
          </div>

          <div class="backend-item">
            <h5>🎨 <?php echo trans('Design Scout & Performance', 'Diseño Scout y Rendimiento', 'Scout Design & Performance'); ?></h5>
            <p><?php echo trans('Palettes scouts (vert forêt, orange, bleu). Mobile-first responsive. Lazy-loading, compression images. WCAG compliance, navigation clavier.', 'Paletas scout (verde bosque, naranja, azul). Responsive mobile-first. Lazy-loading, compresión de imágenes. Cumplimiento WCAG, navegación por teclado.', 'Scout palettes (forest green, orange, blue). Mobile-first responsive. Lazy-loading, image compression. WCAG compliance, keyboard navigation.'); ?></p>
          </div>
        </div>
      </div>

      <h3><?php echo trans('Points clés', 'Puntos clave', 'Key Points'); ?></h3>
      <ul>
        <li><strong><?php echo trans('CSRF & Rate Limiting :', 'CSRF y Rate Limiting :', 'CSRF & Rate Limiting:'); ?></strong> <?php echo trans('Sécurité renforcée pour plateforme jeunes', 'Seguridad reforzada para plataforma juvenil', 'Enhanced security for youth platform'); ?></li>
        <li><strong><?php echo trans('Workflow inscriptions :', 'Flujo de inscripciones :', 'Registration workflow:'); ?></strong> <?php echo trans('Approbation simple sans surcharge UX', 'Aprobación simple sin sobrecarga UX', 'Simple approval without UX overload'); ?></li>
        <li><strong><?php echo trans('Design attractif :', 'Diseño atractivo :', 'Attractive design:'); ?></strong> <?php echo trans('Identité scout moderne pour recruter jeunes', 'Identidad scout moderna para reclutar jóvenes', 'Modern scout identity to recruit young people'); ?></li>
        <li><strong><?php echo trans('Multimédia optimisé :', 'Multimedia optimizado :', 'Optimized multimedia:'); ?></strong> <?php echo trans('Galeries performantes sur mobiles', 'Galerías eficientes en móviles', 'High-performance galleries on mobile'); ?></li>
      </ul>

      <div class="projet-cta">
        <a href="https://scout-doramas.kdevs.io/" class="btn-principal" target="_blank"><?php echo t('view_site'); ?></a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
