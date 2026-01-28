<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Calculateur de Dépenses - Portfolio Elisabeth' : ($currentLang === 'es' ? 'Calculadora de Gastos - Portafolio Elisabeth' : 'Expense Calculator - Elisabeth Portfolio'); ?></title>
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
      <h2><?php echo t('project_calculator'); ?></h2>
      
      <div class="projet-meta">
        <p><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_calculator_stack'); ?></p>
        <p><strong><?php echo t('duration'); ?> :</strong> 2 semaines / 2 semanas / 2 weeks</p>
      </div>

      <h3><?php echo $currentLang === 'fr' ? 'Galerie - Screenshots' : ($currentLang === 'es' ? 'Galería - Capturas' : 'Gallery - Screenshots'); ?></h3>
      <div class="galerie-screenshots">
        <img src="assets/simulateur_depenses/site-public.png" alt="Interface principale du calculateur" class="screenshot">
        <img src="assets/simulateur_depenses/inscription.png" alt="Page d'inscription" class="screenshot">
        <img src="assets/simulateur_depenses/dashboard.png" alt="Dashboard calculateur" class="screenshot">
      </img>

      <h3><?php echo t('project_overview'); ?></h3>
      <p>
        <?php echo $currentLang === 'fr' ? 'Le Calculateur de Dépenses est une web-application full-stack conçue pour simplifier la gestion budgétaire au quotidien. Cette application permet aux utilisateurs de suivre leurs dépenses en temps réel, de les catégoriser et d\'avoir une vision complète de leurs habitudes de consommation.' : ($currentLang === 'es' ? 'La Calculadora de Gastos es una aplicación web full-stack diseñada para simplificar la gestión presupuestaria diaria. Esta aplicación permite a los usuarios rastrear sus gastos en tiempo real, categorizarlos y tener una visión completa de sus hábitos de consumo.' : 'The Expense Calculator is a fullstack web application designed to simplify daily budget management. This application allows users to track their expenses in real time, categorize them and get a complete view of their spending habits.'); ?>
      </p>

      <h3><?php echo t('project_features'); ?></h3>
      <ul>
        <li>✨ <strong><?php echo $currentLang === 'fr' ? 'Ajout de dépenses' : ($currentLang === 'es' ? 'Agregar gastos' : 'Add Expenses'); ?> :</strong> <?php echo $currentLang === 'fr' ? 'Interface intuitive pour enregistrer rapidement vos dépenses' : ($currentLang === 'es' ? 'Interfaz intuitiva para registrar rápidamente sus gastos' : 'Intuitive interface to quickly record your expenses'); ?></li>
        <li>📝 <strong><?php echo $currentLang === 'fr' ? 'Édition et suppression' : ($currentLang === 'es' ? 'Edición y eliminación' : 'Edit and Delete'); ?> :</strong> <?php echo $currentLang === 'fr' ? 'Modifiez ou supprimez vos entrées à volonté' : ($currentLang === 'es' ? 'Modifique o elimine sus entradas a voluntad' : 'Modify or delete your entries at will'); ?></li>
        <li>📊 <strong><?php echo $currentLang === 'fr' ? 'Catégorisation' : ($currentLang === 'es' ? 'Categorización' : 'Categorization'); ?> :</strong> <?php echo $currentLang === 'fr' ? 'Organisez vos dépenses par catégories (alimentation, loisirs, transport, etc.)' : ($currentLang === 'es' ? 'Organice sus gastos por categorías (alimentos, ocio, transporte, etc.)' : 'Organize your expenses by categories (food, entertainment, transport, etc.)'); ?></li>
        <li><?php echo t('feature_real_time'); ?> <?php echo $currentLang === 'fr' ? 'Le total s\'actualise instantanément' : ($currentLang === 'es' ? 'El total se actualiza instantáneamente' : 'The total updates instantly'); ?></li>
        <li>💾 <strong><?php echo t('feature_data_persistence'); ?></strong> <?php echo $currentLang === 'fr' ? 'Vos dépenses sont sauvegardées en base de données MySQL' : ($currentLang === 'es' ? 'Sus gastos se guardan en la base de datos MySQL' : 'Your expenses are saved to MySQL database'); ?></li>
      </ul>

      <h3><?php echo t('project_architecture'); ?></h3>
      <p>
        <?php echo $currentLang === 'fr' ? 'Le backend est construit en PHP pur, sans framework, avec une architecture MVC simplifiée pour assurer la maintenabilité du code. Les données sont stockées dans une base MySQL avec une gestion appropriée des transactions.' : ($currentLang === 'es' ? 'El backend se construye en PHP puro, sin framework, con una arquitectura MVC simplificada para asegurar la mantenibilidad del código. Los datos se almacenan en una base MySQL con una gestión apropiada de transacciones.' : 'The backend is built in pure PHP, without framework, with a simplified MVC architecture to ensure code maintainability. Data is stored in a MySQL database with proper transaction management.'); ?>
      </p>

      <div class="galerie-backend">
        <h4><?php echo $currentLang === 'fr' ? 'Explications backend' : ($currentLang === 'es' ? 'Explicaciones backend' : 'Backend Explanations'); ?></h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 <?php echo $currentLang === 'fr' ? 'API PHP' : ($currentLang === 'es' ? 'API PHP' : 'PHP API'); ?></h5>
            <p><?php echo $currentLang === 'fr' ? 'Les endpoints sont RESTful : POST pour ajouter, PUT pour modifier, DELETE pour supprimer. Chaque requête est validée côté serveur pour éviter les injections SQL.' : ($currentLang === 'es' ? 'Los endpoints son RESTful: POST para agregar, PUT para modificar, DELETE para eliminar. Cada solicitud se valida en el servidor para evitar inyecciones SQL.' : 'Endpoints are RESTful: POST to add, PUT to modify, DELETE to delete. Each request is validated on the server to prevent SQL injection.'); ?></p>
          </div>
          <div class="backend-item">
            <h5>🗄️ <?php echo $currentLang === 'fr' ? 'Structure base de données' : ($currentLang === 'es' ? 'Estructura de base de datos' : 'Database Structure'); ?></h5>
            <p><?php echo $currentLang === 'fr' ? 'Une table principale <code>depenses</code> avec les colonnes : id, description, montant, categorie, date, user_id. Les requêtes SQL utilisent des prepared statements pour la sécurité.' : ($currentLang === 'es' ? 'Una tabla principal <code>depenses</code> con las columnas: id, descripción, monto, categoría, fecha, user_id. Las consultas SQL utilizan prepared statements para la seguridad.' : 'A main table <code>depenses</code> with columns: id, description, amount, category, date, user_id. SQL queries use prepared statements for security.'); ?></p>
          </div>
          <div class="backend-item">
            <h5>⚡ <?php echo $currentLang === 'fr' ? 'Gestion des sessions' : ($currentLang === 'es' ? 'Gestión de sesiones' : 'Session Management'); ?></h5>
            <p><?php echo $currentLang === 'fr' ? 'Système d\'authentification simple avec sessions PHP. Chaque utilisateur ne voit que ses dépenses grâce à la vérification de la session et du user_id en base.' : ($currentLang === 'es' ? 'Sistema de autenticación simple con sesiones PHP. Cada usuario solo ve sus gastos gracias a la verificación de la sesión y user_id en la base de datos.' : 'Simple authentication system with PHP sessions. Each user only sees their expenses thanks to session verification and user_id in database.'); ?></p>
          </div>
        </div>
      </div>

      <h3><?php echo t('project_key_points'); ?></h3>
      <ul>
        <li><strong><?php echo t('feature_validation'); ?></strong> <?php echo $currentLang === 'fr' ? 'JavaScript pour une meilleure UX' : ($currentLang === 'es' ? 'JavaScript para una mejor UX' : 'JavaScript for better UX'); ?></li>
        <li><strong><?php echo $currentLang === 'fr' ? 'Validation côté serveur' : ($currentLang === 'es' ? 'Validación del lado del servidor' : 'Server-side validation'); ?> :</strong> PHP pour la sécurité</li>
        <li><strong><?php echo t('feature_ajax'); ?></strong> <?php echo $currentLang === 'fr' ? 'Requêtes asynchrones pour une expérience fluide' : ($currentLang === 'es' ? 'Solicitudes asincrónicas para una experiencia fluida' : 'Asynchronous requests for smooth experience'); ?></li>
        <li><strong><?php echo t('feature_security'); ?></strong> <?php echo $currentLang === 'fr' ? 'Protection contre les injections SQL avec prepared statements' : ($currentLang === 'es' ? 'Protección contra inyecciones SQL con declaraciones preparadas' : 'Protection against SQL injection with prepared statements'); ?></li>
      </ul>

      <h3><?php echo t('project_challenges'); ?></h3>
      <p>
        <?php echo $currentLang === 'fr' ? 'La gestion de la synchronisation entre le frontend et le backend a été un apprentissage clé. J\'ai découvert l\'importance de valider les données des deux côtés et de gérer les erreurs réseau gracieusement.' : ($currentLang === 'es' ? 'La gestión de la sincronización entre frontend y backend fue un aprendizaje clave. Descubrí la importancia de validar datos en ambos lados y manejar los errores de red elegantemente.' : 'Managing synchronization between frontend and backend was key learning. I discovered the importance of validating data on both sides and gracefully handling network errors.'); ?>
      </p>

      <div class="projet-cta">
        <a href="http://calculateur0101.caba3973.odns.fr/" class="btn-principal"><?php echo t('project_view_live'); ?></a>
      </div>
    </div>
  </div>

  <footer>
    <p><?php echo t('footer_copyright'); ?></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
