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
      <a href="index.php#projets">← Retour aux quêtes</a>
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

      <h3>Fonctionnalités publiques</h3>
      <ul>
        <li>📖 <strong>Biographie interactive :</strong> Section bio avec expansion (Ver más/Ver menos)</li>
        <li>📸 <strong>Galeries créatives :</strong> 
          <ul>
            <li>Fotografía : Portfolio de projets photographiques</li>
            <li>Diseño Gráfico : Portfolio de designs graphiques</li>
            <li>Otros Proyectos : Collaborations, événements, workshops</li>
          </ul>
        </li>
        <li>🖼️ <strong>Pages détails des projets :</strong> Images/vidéos haute qualité, descriptions, dates, clients</li>
        <li>🎯 <strong>Navigation fluide :</strong> Boutons précédent/suivant, retour à la liste</li>
        <li>💌 <strong>Formulaire de contact :</strong> Avec confirmation email automatique</li>
        <li>📋 <strong>Mentions légales :</strong> RGPD, politique de confidentialité, droits d'auteur</li>
        <li>📱 <strong>Responsive design :</strong> Mobile, tablet, desktop</li>
        <li>🔗 <strong>Réseaux sociaux :</strong> Lien Instagram intégré</li>
      </ul>

      <h3>Fonctionnalités administrateur</h3>
      <p>Un panel privé sécurisé accessible à <code>admin/admin.php</code> avec authentification robuste :</p>

      <div class="galerie-backend">
        <h4>Gestion du contenu</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Gestion Biographie</h5>
            <p>
              Créer, éditer la section bio avec images et descriptions. 
              Contrôle total sur le contenu visible aux visiteurs.
            </p>
          </div>

          <div class="backend-item">
            <h5>📸 Galeries de Fotografías</h5>
            <p>
              Création/édition de projets photo. Gestion complète des médias : upload d'images, 
              définition image principale, ajout de descriptions et dates. 
              Suppression et réorganisation facilitées.
            </p>
          </div>

          <div class="backend-item">
            <h5>🎨 Galeries de Diseños Gráficos</h5>
            <p>
              Portfolio de designs avec même fonctionnalité que les fotos. 
              Ajout de client, catégorie, URL du projet, dates. 
              Gestion complète des médias associés.
            </p>
          </div>

          <div class="backend-item">
            <h5>✨ Otros Proyectos</h5>
            <p>
              Gestion des projets créatifs variés (colaboración, comercial, personal, exposición, editorial, evento, workshops). 
              Catégorisation flexible et descriptions détaillées.
            </p>
          </div>

          <div class="backend-item">
            <h5>📹 Gestion Médias</h5>
            <p>
              Upload centralisé d'images et vidéos. Titres et descriptions individuels. 
              Marquage de média "principal" pour chaque projet. 
              Suppression et réorganisation drag-and-drop.
            </p>
          </div>

          <div class="backend-item">
            <h5>📊 Analytics & Statistiques</h5>
            <p>
              Vue globale des visites : total, visiteurs uniques, moyenne. 
              Répartition géographique par pays/ville. Carte interactive des visites. 
              Sélection par mois et export PDF des rapports.
            </p>
          </div>
        </div>
      </div>

      <h3>Architecture technique</h3>
      <p>
        Le projet utilise une architecture professionnelle PHP/MySQL avec séparation claire des responsabilités :
      </p>

      <div class="galerie-backend">
        <h4>Backend & Base de données</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 PHP 7/8 + PDO</h5>
            <p>
              Utilisation de PDO pour les requêtes sécurisées. 
              Classes abstraites pour CRUD. Architecture modulaire et maintenable.
              Gestion d'erreurs robuste et logging.
            </p>
          </div>

          <div class="backend-item">
            <h5>🗄️ Structure MySQL</h5>
            <p>
              Tables : users, biografía, fotografías, diseños_gráficos, otros_proyectos, medias, 
              estadísticas_visitas, sesiones. Relations normalisées avec clés étrangères. 
              Indexes pour performance optimale.
            </p>
          </div>

          <div class="backend-item">
            <h5>🔐 Sécurité</h5>
            <p>
              Sessions sécurisées avec tokens. Mots de passe hashés (bcrypt). 
              Sanitization des entrées. Prepared statements pour prévenir injections SQL.
            </p>
          </div>

          <div class="backend-item">
            <h5>📧 Système de mailing</h5>
            <p>
              Intégration email pour confirmations de contact. 
              Notifications administrateur. Templates d'emails professionnels. 
              Gestion des erreurs d'envoi.
            </p>
          </div>

          <div class="backend-item">
            <h5>🗺️ Analytics géographiques</h5>
            <p>
              Suivi des visites avec localisation par IP. 
              Carte interactive des visiteurs. Statistiques détaillées par région. 
              Export rapports pour analyse business.
            </p>
          </div>

          <div class="backend-item">
            <h5>☁️ Gestion médias</h5>
            <p>
              Upload sécurisé d'images et vidéos. Validation de type fichier. 
              Optimisation taille images. Stockage organisé. Suppression sécurisée. 
              Support multimédias complet.
            </p>
          </div>
        </div>
      </div>

      <h3>Frontend & UX</h3>
      <ul>
        <li><strong>Design minimaliste :</strong> Interface épurée et élégante</li>
        <li><strong>Responsive design :</strong> Expérience optimale sur tous les appareils</li>
        <li><strong>CSS Tailwind :</strong> Framework moderne pour styling rapide et cohérent</li>
        <li><strong>JavaScript interactif :</strong> Animations fluides et interactions utilisateur</li>
        <li><strong>Galeries médias :</strong> Lightbox/carousel pour visualisation optimale</li>
        <li><strong>Optimisation SEO :</strong> Meta tags, sitemap, robots.txt</li>
      </ul>

      <h3>Points techniques clés</h3>
      <ul>
        <li><strong>Gestion multi-projets :</strong> 3 types de projets avec logiques similaires mais distincts</li>
        <li><strong>Système de médias flexibles :</strong> Une image peut être principale ou galerie</li>
        <li><strong>Performance :</strong> Pagination, lazy-loading, compression d'images</li>
        <li><strong>Accessibilité :</strong> WCAG compliance, alt texts pour images</li>
        <li><strong>SEO :</strong> URLs clean, meta descriptions, sitemap dynamique</li>
      </ul>

      <h3>Défis relevés</h3>
      <p>
        <strong>1. Gestion multimédia complexe :</strong> Coordination de multiples images/vidéos par projet 
        avec définition de média principal a demandé une structure base de données bien pensée.
      </p>
      <p>
        <strong>2. Admin panel intuitif :</strong> Créer une interface d'administration conviviale pour 
        un client sans compétences techniques était un défi de UX design important.
      </p>
      <p>
        <strong>3. Analytics géographiques :</strong> Implémenter un système de tracking de visites 
        avec localisation et carte interactive a nécessité intégration API et traitement données en temps réel.
      </p>
      <p>
        <strong>4. Performance médias :</strong> Optimiser l'affichage de galeries riches en images 
        sur connexions lentes a demandé lazy-loading et optimisation images.
      </p>

      <h3>Collaboration KDevs</h3>
      <p>
        Ce projet a été développé en équipe avec Babou CAMARA-DIABY pour la conception et l'architecture. 
        C'est un example de collaboration réussie combinant expertise fullstack avec design UX pensé.
      </p>

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
