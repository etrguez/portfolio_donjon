<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Scout-Doramas 104 - Portfolio Elisabeth</title>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <canvas id="magicParticles"></canvas>

  <header>
    <h1>Elisabeth, Mage Développeuse</h1>
    <nav>
      <a href="index.php#projets">← Retour aux quêtes</a>
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

      <h3>Espace Public (Client)</h3>
      
      <h4>🏕️ Fonctionnalités principales</h4>
      <ul>
        <li>🏠 <strong>Accueil :</strong> Hero section, mission et valeurs du groupe scout</li>
        <li>👥 <strong>Sections par âge :</strong> 
          <ul>
            <li>🐺 <strong>Lobatos (8-11 ans) :</strong> Mercredi 18h30</li>
            <li>🔥 <strong>Scouts (12-15 ans) :</strong> Samedi 14h00</li>
            <li>⚡ <strong>Pioneros (16-18 ans) :</strong> Samedi 18h00</li>
          </ul>
        </li>
        <li>📅 <strong>Calendrier :</strong> Événements et activités planifiés</li>
        <li>📸 <strong>Galerie :</strong> Photos et vidéos des aventures du groupe</li>
        <li>💌 <strong>Formulaire de contact :</strong> Contacter l'organisation</li>
        <li>📝 <strong>Formulaire d'inscription :</strong> Rejoindre une section (sélection section/âge)</li>
        <li>📋 <strong>Informations légales :</strong> Mentions légales et politique de confidentialité</li>
        <li>🔗 <strong>Réseaux sociaux :</strong> Facebook et Instagram du groupe</li>
        <li>📱 <strong>Design responsive :</strong> Mobile-first adapté à tous les appareils</li>
      </ul>

      <h3>Espace Administrateur (Privé)</h3>
      
      <h4>🔐 Authentification sécurisée</h4>
      <ul>
        <li>Login page : email/mot de passe</li>
        <li>Hachage bcrypt des mots de passe</li>
        <li>Limite de taux d'essai de connexion (rate limiting)</li>
        <li>Sessions sécurisées</li>
      </ul>

      <h4>📊 Dashboard & Gestion</h4>
      <p>Panel administrateur spécialisé dans la gestion communautaire :</p>

      <div class="galerie-backend">
        <h4>Fonctionnalités Admin</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Gestion Inscriptions</h5>
            <p>
              Voir toutes les demandes d'inscription reçues via le formulaire.
              Approuver ou rejeter les inscriptions. Export en CSV pour gestion offline.
              Suivi des demandes en attente, acceptées, refusées.
            </p>
          </div>

          <div class="backend-item">
            <h5>💌 Gestion Messages</h5>
            <p>
              Consulter tous les messages reçus via le formulaire de contact.
              Voir l'email, nom, sujet et contenu de chaque message.
              Marquage comme lu/non lu. Suppression des messages archivés.
            </p>
          </div>

          <div class="backend-item">
            <h5>📸 Gestion Galerie</h5>
            <p>
              Uploader des photos et vidéos des aventures scouts.
              Organiser les médias par catégories d'événements.
              Supprimer ou réorganiser les images/vidéos.
              Gestion des métadonnées (titre, description, date).
            </p>
          </div>

          <div class="backend-item">
            <h5>📄 Gestion Contenu</h5>
            <p>
              Mettre à jour le texte "about" du groupe.
              Éditer la présentation du hero section.
              Gérer les liens réseaux sociaux (Facebook, Instagram).
              Ajouter/modifier les descriptions des sections.
            </p>
          </div>

          <div class="backend-item">
            <h5>📊 Dashboard Statistiques</h5>
            <p>
              Vue globale des visiteurs du site.
              Nombre d'inscriptions reçues et clics sur médias.
              Analytics des sections les plus consultées.
              Statistiques mensuelles du trafic.
            </p>
          </div>

          <div class="backend-item">
            <h5>🎯 Focus Inscription</h5>
            <p>
              L'admin se concentre essentiellement sur gérer les inscriptions reçues.
              Pas de gestion complète des sections (elles sont éditées via contenu).
              Validation des demandes pour contrôle qualité du groupe.
            </p>
          </div>
        </div>
      </div>

      <h3>Architecture technique</h3>
      
      <div class="galerie-backend">
        <h4>Backend & Sécurité</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP + PDO</h5>
            <p>
              Utilisation de PHP avec PDO pour requêtes sécurisées. 
              Architecture modulaire avec séparation des responsabilités. 
              Gestion robuste des erreurs et logging. Classes CRUD pour chaque entité.
            </p>
          </div>

          <div class="backend-item">
            <h5>🗄️ Base de données MySQL</h5>
            <p>
              Tables : users (admin), sections, events, galeria, inscripciones, mensajes, contenido.
              Relations normalisées avec clés étrangères.
              Indexes sur colonnes fréquemment requêtées.
              Support UTF-8 pour caractères spéciaux (accents espagnols).
            </p>
          </div>

          <div class="backend-item">
            <h5>🔐 Sécurité Avancée</h5>
            <p>
              <ul>
                <li>Protection CSRF sur tous les formulaires</li>
                <li>Hachage bcrypt des mots de passe (coût 12)</li>
                <li>Limite de taux d'essai connexion (rate limiting)</li>
                <li>Validation stricte des fichiers uploadés</li>
                <li>Requêtes préparées contre injections SQL</li>
                <li>HTML escaping des données affichées</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>📸 Gestion Médias</h5>
            <p>
              Upload sécurisé de photos et vidéos.
              Validation MIME type (JPEG, PNG, MP4, WebM).
              Limite de taille fichier configurable.
              Stockage en dossier sécurisé en dehors webroot.
              Suppression complète des fichiers orphelins.
            </p>
          </div>

          <div class="backend-item">
            <h5>📧 Gestion Formulaires</h5>
            <p>
              Stockage sécurisé des messages de contact en base.
              Validation côté client et serveur.
              Notification optionnelle par email.
              Protection contre spam et bots.
            </p>
          </div>

          <div class="backend-item">
            <h5>📊 Analytics</h5>
            <p>
              Suivi automatique des visites du site.
              Comptage des clics sur médias galerie.
              Rapports statistiques par mois et section.
              Export données pour analyse externe.
            </p>
          </div>
        </div>
      </div>

      <h3>Design & UX</h3>
      <ul>
        <li>🎨 <strong>Palettes scouts :</strong> Vert forêt, orange, bleu - couleurs traditionnelles du scoutisme</li>
        <li>📱 <strong>Mobile-first :</strong> Design pensé d'abord pour mobiles, puis desktop</li>
        <li>♿ <strong>Accessibilité :</strong> WCAG compliance, alt texts, navigation au clavier</li>
        <li>⚡ <strong>Performance :</strong> Lazy loading d'images, compression, cache</li>
        <li>🎯 <strong>Engagement :</strong> Interface attrayante pour les jeunes scouts</li>
      </ul>

      <h3>Points techniques clés</h3>
      <ul>
        <li><strong>CSRF Protection :</strong> Tokens uniques sur chaque formulaire</li>
        <li><strong>Rate Limiting :</strong> Protection contre force brute au login</li>
        <li><strong>File Validation :</strong> Vérification stricte des uploads (type, taille, contenu)</li>
        <li><strong>Session Management :</strong> Gestion sécurisée des sessions PHP</li>
        <li><strong>Multi-langue prête :</strong> Structure supportant ES/FR facilement</li>
      </ul>

      <h3>Défis relevés</h3>
      <p>
        <strong>1. Design scout attrayant :</strong> Créer une interface moderne qui respecte 
        l'identité visuelle scout tout en attirant les jeunes a été un défi créatif important.
      </p>
      <p>
        <strong>2. Sécurité des enfants :</strong> Implémenter protection CSRF stricte et 
        rate limiting était critique étant donné qu'il s'agit d'une plateforme pour enfants/ados.
      </p>
      <p>
        <strong>3. Gestion inscriptions :</strong> Créer un workflow simple pour approuver les 
        inscriptions sans surcharger l'interface admin a nécessité plusieurs itérations UX.
      </p>
      <p>
        <strong>4. Galerie multimédia :</strong> Supporter photos et vidéos avec validation 
        stricte et performance sur connexions mobiles a demandé optimisation fine.
      </p>

      <div class="projet-cta">
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
