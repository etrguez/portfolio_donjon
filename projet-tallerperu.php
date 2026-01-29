<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Taller Perú - Portfolio Elisabeth' : ($currentLang === 'es' ? 'Taller Perú - Portafolio Elisabeth' : 'Taller Perú - Elisabeth Portfolio'); ?></title>
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
      <h2>Taller Perú ✨</h2>
      
      <div class="projet-meta">
        <p><strong><?php echo trans('Stack technique :', 'Stack técnico :', 'Technical Stack:'); ?></strong> PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript</p>
        <p><strong><?php echo trans('Type :', 'Tipo :', 'Type:'); ?></strong> <?php echo trans('Site e-commerce avec panel administrateur', 'Sitio de comercio electrónico con panel de administrador', 'E-commerce website with admin panel'); ?></p>
      </div>

      <h3><?php echo trans('Vue d\'ensemble', 'Descripción general', 'Overview'); ?></h3>
      <p>
        <?php echo trans('Taller Perú est un site professionnel pour un atelier automobile spécialisé au Pérou. La plateforme combine une interface client intuitive pour consulter les services et promotions avec un puissant panel administrateur pour gérer dynamiquement les offres promotionnelles. Ce projet démontre une gestion complète de contenu avec optimisation d\'images avancée.', 'Taller Perú es un sitio profesional para un taller automóvil especializado en Perú. La plataforma combina una interfaz intuitiva del cliente para consultar servicios y promociones con un poderoso panel de administrador para gestionar dinámicamente las ofertas promocionales. Este proyecto demuestra una gestión completa de contenido con optimización de imágenes avanzada.', 'Taller Perú is a professional website for a specialized automotive workshop in Peru. The platform combines an intuitive client interface to view services and promotions with a powerful admin panel to dynamically manage promotional offers. This project demonstrates complete content management with advanced image optimization.'); ?>
      </p>

      <div class="galerie-screenshots">
        <img src="assets/taller_peru/formulaire-ajout-1.png" alt="Interface d'ajout - Partie 1" class="screenshot">
        <img src="assets/taller_peru/formulaire-ajout-2.png" alt="Interface d'ajout - Partie 2" class="screenshot">
        <img src="assets/taller_peru/formulaire-ajout-3.png" alt="Interface d'ajout - Partie 3" class="screenshot">
      </div>

      <h3><?php echo trans('Espace Client (Public)', 'Espacio del Cliente (Público)', 'Client Space (Public)'); ?></h3>
      
      <h4>📱 <?php echo trans('Fonctionnalités principales', 'Características principales', 'Main Features'); ?></h4>
      <ul>
        <li>🏠 <strong><?php echo trans('Accueil :', 'Inicio :', 'Home:'); ?></strong> <?php echo trans('Services et promotions dynamiques en temps réel', 'Servicios y promociones dinámicas en tiempo real', 'Services and promotions dynamic in real-time'); ?></li>
        <li>⭐ <strong><?php echo trans('Avis clients :', 'Opiniones de clientes :', 'Customer Reviews:'); ?></strong> <?php echo trans('Testimonios con évaluations', 'Testimonios con evaluaciones', 'Testimonials with ratings'); ?></li>
        <li>ℹ️ <strong><?php echo trans('À propos & Localisation :', 'Acerca de y Ubicación :', 'About & Location:'); ?></strong> <?php echo trans('Historique et carte du taller', 'Historial y mapa del taller', 'History and workshop map'); ?></li>
        <li>📋 <strong><?php echo trans('Contact :', 'Contacto :', 'Contact:'); ?></strong> <?php echo trans('Formulaire pour demandes de devis', 'Formulario para solicitudes de presupuesto', 'Form for quote requests'); ?></li>
        <li>📱 <strong><?php echo trans('Design responsive :', 'Diseño responsivo :', 'Responsive Design:'); ?></strong> <?php echo trans('Mobile-first sur tous appareils', 'Mobile-first en todos los dispositivos', 'Mobile-first on all devices'); ?></li>
      </ul>

      <h3><?php echo trans('Espace Administrateur', 'Espacio del Administrador', 'Admin Space'); ?></h3>
      
      <h4>🔐 <?php echo trans('Authentification & Dashboard', 'Autenticación y Panel', 'Authentication & Dashboard'); ?></h4>
      <p><?php echo trans('Login sécurisé (email/mot de passe, hash bcrypt) avec dashboard temps réel affichant : ✅ Total promotions | 🔥 Actives | 📅 À venir | 🗑️ Expirées', 'Login seguro (email/contraseña, hash bcrypt) con panel en tiempo real mostrando: ✅ Total de promociones | 🔥 Activas | 📅 Próximas | 🗑️ Caducadas', 'Secure login (email/password, bcrypt hash) with real-time dashboard showing: ✅ Total promotions | 🔥 Active | 📅 Upcoming | 🗑️ Expired'); ?></p>

      <h4>🎁 <?php echo trans('Gestion Promotions', 'Gestión de Promociones', 'Promotions Management'); ?></h4>
      <p><?php echo trans('Créer, éditer, supprimer les offres. Interface intuitive avec :', 'Crear, editar, eliminar ofertas. Interfaz intuitiva con :', 'Create, edit, delete offers. Intuitive interface with:'); ?></p>

      <div class="galerie-backend">
        <h4>Détails Gestion Promotions</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Formulaire Création</h5>
            <p>
              <strong>Champs :</strong> Título, Descripción, Imagen (JPG/PNG/GIF/WebP max 5MB), 
              Fecha de Inicio/Fin (date pickers), Reducción optionnelle.
              Boutons : "Agregar Promoción" et "Volver al Dashboard"
            </p>
          </div>

          <div class="backend-item">
            <h5>🖼️ Optimisation Images</h5>
            <p>Compression légère (200px/500px) avec <code>image-optimizer.js</code>. 
            BLOB MySQL, lazy loading, contrôleurs cache optimisés.</p>
          </div>

          <div class="backend-item">
            <h5>📅 Gestion Temporelle</h5>
            <p>Dates flexibles avec archivage auto. Programmation à l'avance des promotions. 
            Affichage dynamique actives/à venir/expirées.</p>
          </div>

          <div class="backend-item">
            <h5>⚡ Performance & Sécurité</h5>
            <p>PDO préparées (SQL injection). Hash bcrypt. Sessions sécurisées. 
            Service Worker. Redirection admin protégée. Indexes base.</p>
          </div>
        </div>
      </div>

      <h3>Architecture technique</h3>
      
      <div class="galerie-backend">
        <h4>Backend & Infrastructure</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 Stack PHP/PDO</h5>
            <p>
              Utilisation de PHP avec PDO pour requêtes sécurisées. 
              Classes de contrôleurs spécialisées pour chaque fonctionnalité. 
              Architecture modulaire facilitant la maintenance et l'évolution.
            </p>
          </div>

          <div class="backend-item">
            <h5>🗄️ Base de données MySQL</h5>
            <p>
              Fichiers de migration SQL disponibles :
              <ul>
                <li><code>migration_discount.sql</code> - Table réductions</li>
                <li><code>migration_image_cache.sql</code> - Cache images</li>
              </ul>
              Structure normalisée avec relations et indexes.
            </p>
          </div>

          <div class="backend-item">
            <h5>🖼️ Optimisation Images</h5>
            <p>
              Utilisation de <code>image-optimizer.js</code> pour optimisation légère des images de promotions.
              Compression automatique en 2 résolutions : thumbnail (200px) et medium (500px).
              Contrôleurs : <code>image_production.php</code> (affichage) et <code>image_cache.php</code> (cache gestion).
              Lazy loading pour améliorer performance sur mobiles.
            </p>
          </div>

          <div class="backend-item">
            <h5>📧 <?php echo trans('Traitement Formulaires', 'Procesamiento de Formularios', 'Forms Processing'); ?></h5>
            <p>
              <strong><?php echo trans('Validation JavaScript', 'Validación JavaScript', 'JavaScript Validation'); ?></strong> <?php echo trans('côté client pour UX immédiate.', 'en el lado del cliente para UX inmediata.', 'on the client side for immediate UX.'); ?> 
              <strong><?php echo trans('Traitement serveur', 'Procesamiento del servidor', 'Server Processing'); ?></strong> <?php echo trans('avec <code>process_contact.php</code>.', 'con <code>process_contact.php</code>.', 'with <code>process_contact.php</code>.'); ?> 
              <strong><?php echo trans('HTML escaping', 'HTML escaping', 'HTML escaping'); ?></strong> <?php echo trans('des inputs pour sécurité.', 'de entradas para seguridad.', 'of inputs for security.'); ?>
            </p>
          </div>
        </div>
      </div>

      <h3><?php echo trans('Points clés & Défis', 'Puntos clave y Desafíos', 'Key Points & Challenges'); ?></h3>
      <ul>
        <li><strong><?php echo trans('Gestion dates :', 'Gestión de fechas :', 'Date management:'); ?></strong> <?php echo trans('Système promotions actives/à venir/expirées sans cron', 'Sistema de promociones activas/próximas/caducadas sin cron', 'Active/upcoming/expired promotions system without cron'); ?></li>
        <li><strong><?php echo trans('Optimisation images :', 'Optimización de imágenes :', 'Image optimization:'); ?></strong> <?php echo trans('Compression 2 résolutions pour performance mobiles', 'Compresión de 2 resoluciones para rendimiento móvil', '2-resolution compression for mobile performance'); ?></li>
        <li><strong><?php echo trans('UX admin :', 'UX del admin :', 'Admin UX:'); ?></strong> <?php echo trans('Interface simple pour gérant non-technique', 'Interfaz simple para administrador no técnico', 'Simple interface for non-technical manager'); ?></li>
        <li><strong><?php echo trans('Sécurité :', 'Seguridad :', 'Security:'); ?></strong> <?php echo trans('Hash bcrypt, PDO préparées, rate limiting', 'Hash bcrypt, PDO preparadas, rate limiting', 'Bcrypt hash, prepared PDO, rate limiting'); ?></li>
      </ul>

      <div class="projet-cta">
        <a href="https://tallerperu.com" class="btn-principal" target="_blank"><?php echo t('project_view_live'); ?></a>
      </div>
    </div>
  </div>

  <footer>
    <p><?php echo t('footer_copyright'); ?></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
