<?php
// Système de traduction i18n pour le portfolio
// Langues supportées: FR (français), ES (español), EN (english)

// Déterminer la langue de l'utilisateur
function getLanguage() {
  // Vérifier d'abord le localStorage (via cookie)
  if (isset($_COOKIE['portfolio_lang'])) {
    $lang = $_COOKIE['portfolio_lang'];
    if (in_array($lang, ['fr', 'es', 'en'])) {
      return $lang;
    }
  }
  
  // Sinon, déterminer selon Accept-Language du navigateur
  if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
    $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
    if ($lang === 'fr') return 'fr';
    if ($lang === 'es') return 'es';
  }
  
  // Par défaut: anglais
  return 'en';
}

$currentLang = getLanguage();

// Dictionnaire complet de traductions
$translations = [
  'fr' => [
    // Header & Navigation
    'header_title' => 'Elisabeth, Mage Développeuse',
    'header_subtitle' => 'Exploratrice de bugs et créatrice de mondes numériques enchantés',
    'nav_about' => 'Salle du trône',
    'nav_skills' => 'Arbre de talénts',
    'nav_projects' => 'Quetes',
    'nav_contact' => 'Le bureau de chouettes',
    'nav_back_projects' => '← Retour aux quêtes',
    'language_selector' => 'Langue',
    
    // Grimoire
    'grimoire_text' => 'Grimoire de Elisabeth,<br> cliquez pour ouvrir',
    'character_name' => 'Elisabeth',
    'character_class' => 'Mage Fullstack',
    'character_specialty' => 'HTML/CSS/JS, PHP, Gestion base des données',
    'character_magic' => 'Création de projets web ✨',
    
    // About section
    'about_title' => 'Salle du trône',
    'about_text' => 'Bienvenue, voyageur-se.<br>Moi c\'est Elisabeth, mage fullstack débutante en quête de nouveaux défis.<br>Passionnée de fantasy, de manga et de lignes de code bien ficelées.<br>Mon parcours est une quête, et chaque projet est un sortilège que je lance avec curiosité et créativité ✨',
    
    // Skills section
    'skills_title' => 'Arbre de talents',
    'skill_frontend' => '✨ HTML / CSS / JavaScript',
    'skill_backend' => '🛡️ Backend : PHP',
    'skill_database' => '📚 Bases de données : MongoDB, MySQL, MariaDB',
    'skill_tools' => '🧙‍♀️ Git, GitHub, API REST',
    
    // Projects section
    'projects_title' => 'Quêtes',
    'project_btn_details' => '📖 Voir les détails',
    'project_btn_site' => '🌐 Voir le site',
    
    // Project cards
    'project_calculator' => 'Calculateur de Dépenses ✨',
    'project_calculator_desc' => 'Web-app full-stack pour suivre son budget : ajoute, édite ou supprime tes dépenses, catégorise-les et suis le total en temps réel.',
    'project_calculator_stack' => 'HTML, CSS, PHP, JavaScript, MySQL',
    
    'project_zoo' => 'Zoo Arcadia ✨',
    'project_zoo_desc' => 'Plateforme interactive pour explorer les habitats du zoo, connaître les animaux qui y vivent et découvrir les services proposés. Les visiteurs peuvent partager leur expérience via des avis, tandis qu\'un espace d\'administration permet de gérer animaux, enclos, prestations et d\'accéder aux rapports vétérinaires.',
    'project_zoo_stack' => 'HTML, CSS, PHP, JavaScript, MongoDB et MySQL',
    
    'project_asiria' => 'Portfolio Asiria Álvarez ✨',
    'project_asiria_desc' => 'Portfolio professionnel minimaliste pour une photographe et designer graphique à Las Palmas. Showcase de projets créatifs avec galeries multimédia haute qualité, panel administrateur complet et analytics géographiques.',
    'project_asiria_stack' => 'PHP 7/8, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_taller' => 'Taller Perú ✨',
    'project_taller_desc' => 'Site professionnel pour un atelier automobile au Pérou avec gestion dynamique des promotions. Interface client intuitive et puissant panel administrateur pour gérer les offres en temps réel avec optimisation d\'images avancée.',
    'project_taller_stack' => 'PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_scout' => 'Scout-Doramas 104 ✨',
    'project_scout_desc' => 'Plateforme web complète pour une association de scouts en Espagne. Interface publique engageante pour recruter les jeunes, calendrier d\'événements, galerie multimédia et panel admin sécurisé pour gérer inscriptions et messages.',
    'project_scout_stack' => 'PHP, PDO, MySQL, HTML5, CSS3, JavaScript',
    
    // Contact section
    'contact_title' => 'Envoyer un message au Bureau des Chouettes',
    'contact_name' => 'Votre nom',
    'contact_email' => 'Votre email',
    'contact_message' => 'Votre message enchanté...',
    'contact_submit' => 'Envoyer',
    
    // Footer
    'footer_copyright' => '© 2025 Elisabeth - Portfolio Donjon Développeuse',
    'footer_linkedin' => 'LinkedIn',
    
    // Project detail pages
    'project_overview' => 'Vue d\'ensemble',
    'project_features' => 'Fonctionnalités visiteurs',
    'project_admin' => 'Fonctionnalités administrateur',
    'project_architecture' => 'Architecture backend',
    'project_integration' => 'Intégration frontend-backend',
    'project_challenges' => 'Défis techniques relevés',
    'project_public_features' => 'Fonctionnalités publiques',
    'project_admin_panel' => 'Panel Administrateur',
    'project_security' => 'Architecture & Sécurité',
    'project_key_points' => 'Points clés',
    'project_view_live' => '🌐 Voir le site en action',
    
    'tech_stack' => 'Stack technique',
    'duration' => 'Durée',
    'type' => 'Type',
    'developed_by' => 'Développé par',
    
    // Features descriptions
    'feature_real_time' => '📊 Suivi en temps réel :',
    'feature_data_persistence' => '💾 Persistance des données :',
    'feature_categorization' => '📝 Catégorisation :',
    'feature_ajax' => '⚡ AJAX :',
    'feature_api' => '🔌 API interne :',
    'feature_search' => '🔍 Filtrage intelligent :',
    'feature_ratings' => '⭐ Système de notes :',
    'feature_security' => '🔐 Sécurité :',
    'feature_validation' => '✅ Validation :',
    
    // Common buttons
    'btn_view_details' => 'Voir les détails',
    'btn_view_site' => 'Voir le site',
    'btn_send' => 'Envoyer',
    'btn_back' => 'Retour',
    
    // Messages
    'msg_required' => 'Champ requis',
    'msg_invalid_email' => 'Email invalide',
  ],
  
  'es' => [
    // Header & Navigation
    'header_title' => 'Elisabeth, Maga Desarrolladora',
    'header_subtitle' => 'Exploradora de bugs y creadora de mundos digitales encantados',
    'nav_about' => 'Sala del trono',
    'nav_skills' => 'Árbol de talentos',
    'nav_projects' => 'Misiones',
    'nav_contact' => 'La oficina de búhos',
    'nav_back_projects' => '← Volver a misiones',
    'language_selector' => 'Idioma',
    
    // Grimoire
    'grimoire_text' => 'Grimorio de Elisabeth,<br> haz clic para abrir',
    'character_name' => 'Elisabeth',
    'character_class' => 'Maga Fullstack',
    'character_specialty' => 'HTML/CSS/JS, PHP, Gestión de bases de datos',
    'character_magic' => 'Creación de proyectos web ✨',
    
    // About section
    'about_title' => 'Sala del trono',
    'about_text' => 'Bienvenido, viajero.<br>Soy Elisabeth, maga fullstack principiante en busca de nuevos desafíos.<br>Apasionada por fantasía, manga y código bien estructurado.<br>Mi camino es una misión, y cada proyecto es un hechizo que lanzo con curiosidad y creatividad ✨',
    
    // Skills section
    'skills_title' => 'Árbol de talentos',
    'skill_frontend' => '✨ HTML / CSS / JavaScript',
    'skill_backend' => '🛡️ Backend : PHP',
    'skill_database' => '📚 Bases de datos : MongoDB, MySQL, MariaDB',
    'skill_tools' => '🧙‍♀️ Git, GitHub, API REST',
    
    // Projects section
    'projects_title' => 'Misiones',
    'project_btn_details' => '📖 Ver detalles',
    'project_btn_site' => '🌐 Ver sitio',
    
    // Project cards
    'project_calculator' => 'Calculadora de Gastos ✨',
    'project_calculator_desc' => 'Aplicación web full-stack para seguir tu presupuesto: añade, edita o elimina tus gastos, categorizalos y sigue el total en tiempo real.',
    'project_calculator_stack' => 'HTML, CSS, PHP, JavaScript, MySQL',
    
    'project_zoo' => 'Zoo Arcadia ✨',
    'project_zoo_desc' => 'Plataforma interactiva para explorar los hábitats del zoo, conocer los animales que viven allí y descubrir los servicios ofrecidos. Los visitantes pueden compartir su experiencia a través de reseñas, mientras que un espacio de administración permite gestionar animales, recintos, servicios y acceder a reportes veterinarios.',
    'project_zoo_stack' => 'HTML, CSS, PHP, JavaScript, MongoDB y MySQL',
    
    'project_asiria' => 'Portafolio Asiria Álvarez ✨',
    'project_asiria_desc' => 'Portafolio profesional minimalista para una fotógrafa y diseñadora gráfica en Las Palmas. Escaparate de proyectos creativos con galerías multimedia de alta calidad, panel administrativo completo y análisis geográficos.',
    'project_asiria_stack' => 'PHP 7/8, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_taller' => 'Taller Perú ✨',
    'project_taller_desc' => 'Sitio profesional para un taller automotriz en Perú con gestión dinámica de promociones. Interfaz cliente intuitiva y potente panel administrativo para gestionar ofertas en tiempo real con optimización avanzada de imágenes.',
    'project_taller_stack' => 'PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_scout' => 'Scout-Doramas 104 ✨',
    'project_scout_desc' => 'Plataforma web completa para una asociación de scouts en España. Interfaz pública atractiva para reclutar jóvenes, calendario de eventos, galería multimedia y panel de administración seguro para gestionar inscripciones y mensajes.',
    'project_scout_stack' => 'PHP, PDO, MySQL, HTML5, CSS3, JavaScript',
    
    // Contact section
    'contact_title' => 'Enviar un mensaje a la Oficina de Búhos',
    'contact_name' => 'Tu nombre',
    'contact_email' => 'Tu correo',
    'contact_message' => 'Tu mensaje encantado...',
    'contact_submit' => 'Enviar',
    
    // Footer
    'footer_copyright' => '© 2025 Elisabeth - Portafolio Maga Desarrolladora',
    'footer_linkedin' => 'LinkedIn',
    
    // Project detail pages
    'project_overview' => 'Descripción general',
    'project_features' => 'Características para visitantes',
    'project_admin' => 'Características del administrador',
    'project_architecture' => 'Arquitectura backend',
    'project_integration' => 'Integración frontend-backend',
    'project_challenges' => 'Desafíos técnicos resueltos',
    'project_public_features' => 'Características públicas',
    'project_admin_panel' => 'Panel de Administración',
    'project_security' => 'Arquitectura y Seguridad',
    'project_key_points' => 'Puntos clave',
    'project_view_live' => '🌐 Ver sitio en vivo',
    
    'tech_stack' => 'Stack técnico',
    'duration' => 'Duración',
    'type' => 'Tipo',
    'developed_by' => 'Desarrollado por',
    
    // Features descriptions
    'feature_real_time' => '📊 Seguimiento en tiempo real:',
    'feature_data_persistence' => '💾 Persistencia de datos:',
    'feature_categorization' => '📝 Categorización:',
    'feature_ajax' => '⚡ AJAX:',
    'feature_api' => '🔌 API interna:',
    'feature_search' => '🔍 Búsqueda inteligente:',
    'feature_ratings' => '⭐ Sistema de calificaciones:',
    'feature_security' => '🔐 Seguridad:',
    'feature_validation' => '✅ Validación:',
    
    // Common buttons
    'btn_view_details' => 'Ver detalles',
    'btn_view_site' => 'Ver sitio',
    'btn_send' => 'Enviar',
    'btn_back' => 'Atrás',
    
    // Messages
    'msg_required' => 'Campo requerido',
    'msg_invalid_email' => 'Correo inválido',
  ],
  
  'en' => [
    // Header & Navigation
    'header_title' => 'Elisabeth, Developer Mage',
    'header_subtitle' => 'Bug explorer and creator of enchanted digital worlds',
    'nav_about' => 'Throne Room',
    'nav_skills' => 'Talent Tree',
    'nav_projects' => 'Quests',
    'nav_contact' => 'The Owl\'s Office',
    'nav_back_projects' => '← Back to Quests',
    'language_selector' => 'Language',
    
    // Grimoire
    'grimoire_text' => 'Elisabeth\'s Grimoire,<br> click to open',
    'character_name' => 'Elisabeth',
    'character_class' => 'Fullstack Mage',
    'character_specialty' => 'HTML/CSS/JS, PHP, Database Management',
    'character_magic' => 'Web project creation ✨',
    
    // About section
    'about_title' => 'Throne Room',
    'about_text' => 'Welcome, traveler.<br>I\'m Elisabeth, a junior fullstack mage seeking new challenges.<br>Passionate about fantasy, manga, and well-structured code.<br>My journey is a quest, and each project is a spell I cast with curiosity and creativity ✨',
    
    // Skills section
    'skills_title' => 'Talent Tree',
    'skill_frontend' => '✨ HTML / CSS / JavaScript',
    'skill_backend' => '🛡️ Backend : PHP',
    'skill_database' => '📚 Databases : MongoDB, MySQL, MariaDB',
    'skill_tools' => '🧙‍♀️ Git, GitHub, API REST',
    
    // Projects section
    'projects_title' => 'Quests',
    'project_btn_details' => '📖 View Details',
    'project_btn_site' => '🌐 View Site',
    
    // Project cards
    'project_calculator' => 'Expense Calculator ✨',
    'project_calculator_desc' => 'Fullstack web app to track your budget: add, edit or delete your expenses, categorize them and track the total in real time.',
    'project_calculator_stack' => 'HTML, CSS, PHP, JavaScript, MySQL',
    
    'project_zoo' => 'Zoo Arcadia ✨',
    'project_zoo_desc' => 'Interactive platform to explore zoo habitats, learn about the animals living there and discover offered services. Visitors can share their experience through reviews, while an administration area allows managing animals, enclosures, services and accessing veterinary reports.',
    'project_zoo_stack' => 'HTML, CSS, PHP, JavaScript, MongoDB and MySQL',
    
    'project_asiria' => 'Asiria Álvarez Portfolio ✨',
    'project_asiria_desc' => 'Minimalist professional portfolio for a photographer and graphic designer in Las Palmas. Showcase of creative projects with high-quality multimedia galleries, complete admin panel and geographic analytics.',
    'project_asiria_stack' => 'PHP 7/8, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_taller' => 'Taller Perú ✨',
    'project_taller_desc' => 'Professional website for an automotive workshop in Peru with dynamic promotion management. Intuitive client interface and powerful admin panel to manage offers in real time with advanced image optimization.',
    'project_taller_stack' => 'PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript',
    
    'project_scout' => 'Scout-Doramas 104 ✨',
    'project_scout_desc' => 'Complete web platform for a scout association in Spain. Engaging public interface to recruit young people, event calendar, multimedia gallery and secure admin panel to manage registrations and messages.',
    'project_scout_stack' => 'PHP, PDO, MySQL, HTML5, CSS3, JavaScript',
    
    // Contact section
    'contact_title' => 'Send a Message to the Owl\'s Office',
    'contact_name' => 'Your name',
    'contact_email' => 'Your email',
    'contact_message' => 'Your enchanted message...',
    'contact_submit' => 'Send',
    
    // Footer
    'footer_copyright' => '© 2025 Elisabeth - Developer Mage Portfolio',
    'footer_linkedin' => 'LinkedIn',
    
    // Project detail pages
    'project_overview' => 'Overview',
    'project_features' => 'Visitor Features',
    'project_admin' => 'Admin Features',
    'project_architecture' => 'Backend Architecture',
    'project_integration' => 'Frontend-Backend Integration',
    'project_challenges' => 'Technical Challenges Addressed',
    'project_public_features' => 'Public Features',
    'project_admin_panel' => 'Admin Panel',
    'project_security' => 'Architecture & Security',
    'project_key_points' => 'Key Points',
    'project_view_live' => '🌐 View Live Site',
    
    'tech_stack' => 'Tech Stack',
    'duration' => 'Duration',
    'type' => 'Type',
    'developed_by' => 'Developed by',
    
    // Features descriptions
    'feature_real_time' => '📊 Real-time tracking:',
    'feature_data_persistence' => '💾 Data persistence:',
    'feature_categorization' => '📝 Categorization:',
    'feature_ajax' => '⚡ AJAX:',
    'feature_api' => '🔌 Internal API:',
    'feature_search' => '🔍 Smart filtering:',
    'feature_ratings' => '⭐ Rating system:',
    'feature_security' => '🔐 Security:',
    'feature_validation' => '✅ Validation:',
    
    // Common buttons
    'btn_view_details' => 'View Details',
    'btn_view_site' => 'View Site',
    'btn_send' => 'Send',
    'btn_back' => 'Back',
    
    // Messages
    'msg_required' => 'Required field',
    'msg_invalid_email' => 'Invalid email',
  ]
];

// Fonction helper pour obtenir une traduction
function t($key) {
  global $currentLang, $translations;
  
  if (isset($translations[$currentLang][$key])) {
    return $translations[$currentLang][$key];
  }
  
  // Fallback en français si traduction manquante
  if (isset($translations['fr'][$key])) {
    return $translations['fr'][$key];
  }
  
  // Fallback sur la clé elle-même
  return $key;
}
?>
