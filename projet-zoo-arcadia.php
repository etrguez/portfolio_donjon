<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Zoo Arcadia - Portfolio Elisabeth' : ($currentLang === 'es' ? 'Zoo Arcadia - Portafolio Elisabeth' : 'Zoo Arcadia - Elisabeth Portfolio'); ?></title>
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
      <h2><?php echo t('project_zoo'); ?></h2>
      
      <div class="projet-meta">
        <p><strong><?php echo t('tech_stack'); ?> :</strong> PHP, HTML, CSS, JavaScript, MongoDB, MySQL</p>
        <p><strong><?php echo t('duration'); ?> :</strong> <?php echo trans('4 semaines', '4 semanas', '4 weeks'); ?></p>
      </div>

      <h3><?php echo t('project_overview'); ?></h3>
      <p>
        <?php echo trans(
          'Zoo Arcadia est une plateforme interactive complexe qui représente un véritable défi full-stack. Le site offre une double expérience : une interface publique pour les visiteurs et une section administrative pour la gestion du zoo. C\'est un projet ambitieux qui m\'a permis d\'explorer les bases de données NoSQL et SQL en parallèle.',
          'Zoo Arcadia es una plataforma interactiva compleja que representa un verdadero desafío full-stack. El sitio ofrece una doble experiencia: una interfaz pública para los visitantes y una sección administrativa para la gestión del zoológico. Es un proyecto ambicioso que me permitió explorar bases de datos NoSQL y SQL en paralelo.',
          'Zoo Arcadia is a complex interactive platform that represents a true full-stack challenge. The site offers a dual experience: a public interface for visitors and an administrative section for zoo management. It\'s an ambitious project that allowed me to explore NoSQL and SQL databases in parallel.'
        ); ?>
      </p>

      <div class="galerie-screenshots">
        <img src="./assets/zoo_arcadia/site-public.png" alt="Interface publique Zoo Arcadia" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-dashboard.png" alt="Dashboard administrateur" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-animaux.png" alt="Gestion des animaux" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-habitats.png" alt="Gestion des habitats" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-services-1.png" alt="Gestion des services" class="screenshot">
        <img src="./assets/zoo_arcadia/inscription.png" alt="Page d'inscription" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-horaires.png" alt="Modification des horaires" class="screenshot">
        <img src="./assets/zoo_arcadia/admin-services-2.png" alt="Services additionnels" class="screenshot">
      </div>

      <h3><?php echo t('project_features'); ?></h3>
      <ul>
        <li>🦁 <strong><?php echo trans('Exploration des habitats', 'Exploración de hábitats', 'Habitat exploration'); ?> :</strong> <?php echo trans('Visualisez les différents habitats du zoo avec descriptions', 'Visualice los diferentes hábitats del zoológico con descripciones', 'Visualize different zoo habitats with descriptions'); ?></li>
        <li>🐘 <strong><?php echo trans('Galerie d\'animaux', 'Galería de animales', 'Animal gallery'); ?> :</strong> <?php echo trans('Découvrez les animaux, leurs caractéristiques et leur habitat', 'Descubra los animales, sus características y su hábitat', 'Discover animals, their characteristics and habitat'); ?></li>
        <li>🎪 <strong><?php echo trans('Services du zoo', 'Servicios del zoológico', 'Zoo services'); ?> :</strong> <?php echo trans('Horaires, tarifs, services proposés', 'Horarios, tarifas, servicios ofrecidos', 'Hours, rates, offered services'); ?></li>
        <li>⭐ <strong><?php echo trans('Système d\'avis', 'Sistema de reseñas', 'Review system'); ?> :</strong> <?php echo trans('Les visiteurs peuvent laisser des avis et des notes', 'Los visitantes pueden dejar reseñas y calificaciones', 'Visitors can leave reviews and ratings'); ?></li>
        <li>📱 <strong><?php echo trans('Responsive design', 'Diseño responsivo', 'Responsive design'); ?> :</strong> <?php echo trans('Parfait sur tous les appareils', 'Perfecto en todos los dispositivos', 'Perfect on all devices'); ?></li>
      </ul>

      <h3><?php echo t('project_admin'); ?></h3>
      <ul>
        <li>🔐 <strong><?php echo trans('Connexion sécurisée', 'Inicio de sesión seguro', 'Secure login'); ?> :</strong> <?php echo trans('Authentification pour les employés du zoo', 'Autenticación para empleados del zoológico', 'Authentication for zoo employees'); ?></li>
        <li>🦁 <strong><?php echo trans('Gestion des animaux', 'Gestión de animales', 'Animal management'); ?> :</strong> <?php echo trans('Ajouter, modifier, supprimer des fiches animales', 'Agregar, modificar, eliminar fichas de animales', 'Add, modify, delete animal records'); ?></li>
        <li>🏠 <strong><?php echo trans('Gestion des enclos', 'Gestión de recintos', 'Enclosure management'); ?> :</strong> <?php echo trans('Gérer les habitats et leurs capacités', 'Administrar hábitats y sus capacidades', 'Manage habitats and their capacities'); ?></li>
        <li>🎟️ <strong><?php echo trans('Gestion des services', 'Gestión de servicios', 'Service management'); ?> :</strong> <?php echo trans('Tarifs, horaires, services spéciaux', 'Tarifas, horarios, servicios especiales', 'Rates, hours, special services'); ?></li>
        <li>📋 <strong><?php echo trans('Rapports vétérinaires', 'Reportes veterinarios', 'Veterinary reports'); ?> :</strong> <?php echo trans('Accès aux observations vétérinaires des animaux', 'Acceso a observaciones veterinarias de animales', 'Access to veterinary observations of animals'); ?></li>
      </ul>

      <h3><?php echo t('project_architecture'); ?></h3>

      <div class="galerie-backend">
        <h4><?php echo trans('Explications backend', 'Explicaciones backend', 'Backend Explanations'); ?></h4>
        
        <div class="backend-info">
          <div class="backend-item">
            <h5>💾 MySQL - <?php echo trans('Données structurées', 'Datos estructurados', 'Structured data'); ?></h5>
            <p>
              <?php echo trans(
                'Stocke les données relationnelles : utilisateurs, animaux, enclos, services. Tables principales :',
                'Almacena datos relacionales: usuarios, animales, recintos, servicios. Tablas principales:',
                'Stores relational data: users, animals, enclosures, services. Main tables:'
              ); ?>
              <ul>
                <li><code>animals</code> : id, nom, espece, enclos_id</li>
                <li><code>enclosures</code> : id, nom, habitat_type, capacite</li>
                <li><code>services</code> : id, nom, prix, horaires</li>
                <li><code>users</code> : id, email, password_hash, role</li>
              </ul>
            </p>
          </div>
          
          <div class="backend-item">
            <h5>🍃 MongoDB - <?php echo trans('Données flexibles', 'Datos flexibles', 'Flexible data'); ?></h5>
            <p>
              <?php echo trans(
                'Stocke les données semi-structurées : avis des visiteurs, rapports vétérinaires. Collections principales :',
                'Almacena datos semiestructurados: reseñas de visitantes, reportes veterinarios. Colecciones principales:',
                'Stores semi-structured data: visitor reviews, veterinary reports. Main collections:'
              ); ?>
              <ul>
                <li><code>reviews</code> : avis avec ratings, commentaires, dates</li>
                <li><code>vet_reports</code> : rapports détaillés avec observations flexibles</li>
              </ul>
              <?php echo trans(
                'Cette approche NoSQL permet de stocker des rapports vétérinaires variables sans schema fixe.',
                'Este enfoque NoSQL permite almacenar reportes veterinarios variables sin esquema fijo.',
                'This NoSQL approach allows storing variable veterinary reports without fixed schema.'
              ); ?>
            </p>
          </div>

          <div class="backend-item">
            <h5>🔌 <?php echo trans('Architecture MVC', 'Arquitectura MVC', 'MVC Architecture'); ?></h5>
            <p>
              <?php echo trans('Séparation claire entre :', 'Separación clara entre:', 'Clear separation between:'); ?>
              <ul>
                <li><strong><?php echo trans('Models', 'Modelos', 'Models'); ?>:</strong> <?php echo trans('Classes pour Animal, Enclosure, Service, Review', 'Clases para Animal, Enclosure, Service, Review', 'Classes for Animal, Enclosure, Service, Review'); ?></li>
                <li><strong><?php echo trans('Controllers', 'Controladores', 'Controllers'); ?>:</strong> AnimalController, AdminController, ReviewController</li>
                <li><strong><?php echo trans('Views', 'Vistas', 'Views'); ?>:</strong> <?php echo trans('Templates PHP pour public et admin', 'Plantillas PHP para público y administrador', 'PHP templates for public and admin'); ?></li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>🔒 <?php echo t('feature_security'); ?></h5>
            <p>
              <ul>
                <li><?php echo trans('Hachage des mots de passe avec bcrypt', 'Hash de contraseñas con bcrypt', 'Password hashing with bcrypt'); ?></li>
                <li><?php echo trans('Sessions sécurisées avec vérification du rôle', 'Sesiones seguras con verificación de roles', 'Secure sessions with role verification'); ?></li>
                <li><?php echo trans('Prepared statements pour prévenir les injections SQL', 'Consultas preparadas para prevenir inyecciones SQL', 'Prepared statements to prevent SQL injection'); ?></li>
                <li><?php echo trans('Validation stricte des données côté serveur', 'Validación estricta de datos del lado del servidor', 'Strict server-side data validation'); ?></li>
              </ul>
            </p>
          </div>
        </div>
      </div>

      <h3><?php echo t('project_integration'); ?></h3>
      <ul>
        <li><strong>AJAX :</strong> <?php echo trans('Chargement dynamique du contenu sans rechargement', 'Carga dinámica de contenido sin recargar', 'Dynamic content loading without reload'); ?></li>
        <li><strong><?php echo t('feature_api'); ?></strong> <?php echo trans('Endpoints pour créer, modifier, supprimer les données admin', 'Endpoints para crear, modificar, eliminar datos administrativos', 'Endpoints to create, modify, delete admin data'); ?></li>
        <li><strong><?php echo t('feature_search'); ?></strong> <?php echo trans('Recherche d\'animaux par habitat ou espèce', 'Búsqueda de animales por hábitat o especie', 'Search animals by habitat or species'); ?></li>
        <li><strong><?php echo t('feature_ratings'); ?></strong> <?php echo trans('Affichage dynamique des avis avec calcul de moyenne', 'Visualización dinámica de reseñas con cálculo de promedio', 'Dynamic review display with average calculation'); ?></li>
      </ul>

      <h3><?php echo t('project_challenges'); ?></h3>
      <p>
        <strong>1. <?php echo trans('Gestion multi-bases', 'Gestión multi-base', 'Multi-database management'); ?> :</strong> <?php echo trans('Coordonner MySQL et MongoDB a nécessité une planification minutieuse. J\'ai appris à choisir la bonne base pour le bon type de données.', 'Coordinar MySQL y MongoDB requirió una planificación cuidadosa. Aprendí a elegir la base correcta para el tipo correcto de datos.', 'Coordinating MySQL and MongoDB required careful planning. I learned to choose the right database for the right type of data.'); ?>
      </p>
      <p>
        <strong>2. <?php echo trans('Authentification et autorisations', 'Autenticación y autorización', 'Authentication and authorization'); ?> :</strong> <?php echo trans('Vérifier que les admins ne peuvent accéder qu\'à leurs sections spécifiques a renforcé ma compréhension de la sécurité web.', 'Verificar que los administradores solo puedan acceder a sus secciones específicas fortaleció mi comprensión de la seguridad web.', 'Verifying that admins can only access their specific sections strengthened my understanding of web security.'); ?>
      </p>
      <p>
        <strong>3. <?php echo trans('Performance', 'Rendimiento', 'Performance'); ?> :</strong> <?php echo trans('Avec potentiellement de nombreux animaux et avis, j\'ai dû implémenter la pagination et des index de base de données.', 'Con potencialmente muchos animales y reseñas, tuve que implementar paginación e índices de base de datos.', 'With potentially many animals and reviews, I had to implement pagination and database indexes.'); ?>
      </p>

      <div class="projet-cta">
        <a href="https://arcadia.elisadev.com/" class="btn-principal"><?php echo t('project_view_live'); ?></a>
      </div>
    </div>
  </div>

  <footer>
    <p><?php echo t('footer_copyright'); ?></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
