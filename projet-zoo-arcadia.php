<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Zoo Arcadia - Portfolio Elisabeth</title>
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
      <h2>Zoo Arcadia ✨</h2>
      
      <div class="projet-meta">
        <p><strong>Stack technique :</strong> HTML, CSS, PHP, JavaScript, MongoDB, MySQL</p>
        <p><strong>Durée :</strong> 4 semaines</p>
      </div>

      <h3>Vue d'ensemble</h3>
      <p>
        Zoo Arcadia est une plateforme interactive complexe qui représente un véritable défi full-stack. 
        Le site offre une double expérience : une interface publique pour les visiteurs et une section administrative 
        pour la gestion du zoo. C'est un projet ambitieux qui m'a permis d'explorer les bases de données NoSQL et SQL en parallèle.
      </p>

      <h3>Fonctionnalités visiteurs</h3>
      <ul>
        <li>🦁 <strong>Exploration des habitats :</strong> Visualisez les différents habitats du zoo avec descriptions</li>
        <li>🐘 <strong>Galerie d'animaux :</strong> Découvrez les animaux, leurs caractéristiques et leur habitat</li>
        <li>🎪 <strong>Services du zoo :</strong> Horaires, tarifs, services proposés</li>
        <li>⭐ <strong>Système d'avis :</strong> Les visiteurs peuvent laisser des avis et des notes</li>
        <li>📱 <strong>Responsive design :</strong> Parfait sur tous les appareils</li>
      </ul>

      <h3>Fonctionnalités administrateur</h3>
      <ul>
        <li>🔐 <strong>Connexion sécurisée :</strong> Authentification pour les employés du zoo</li>
        <li>🦁 <strong>Gestion des animaux :</strong> Ajouter, modifier, supprimer des fiches animales</li>
        <li>🏠 <strong>Gestion des enclos :</strong> Gérer les habitats et leurs capacités</li>
        <li>🎟️ <strong>Gestion des services :</strong> Tarifs, horaires, services spéciaux</li>
        <li>📋 <strong>Rapports vétérinaires :</strong> Accès aux observations vétérinaires des animaux</li>
      </ul>

      <h3>Architecture backend</h3>
      <p>
        Zoo Arcadia utilise une architecture PHP combinant deux bases de données : 
      </p>

      <div class="galerie-backend">
        <h4>Explications backend</h4>
        
        <div class="backend-info">
          <div class="backend-item">
            <h5>💾 MySQL - Données structurées</h5>
            <p>
              Stocke les données relationnelles : utilisateurs, animaux, enclos, services.
              Tables principales :
              <ul>
                <li><code>animals</code> : id, nom, espece, enclos_id</li>
                <li><code>enclosures</code> : id, nom, habitat_type, capacite</li>
                <li><code>services</code> : id, nom, prix, horaires</li>
                <li><code>users</code> : id, email, password_hash, role</li>
              </ul>
            </p>
          </div>
          
          <div class="backend-item">
            <h5>🍃 MongoDB - Données flexibles</h5>
            <p>
              Stocke les données semi-structurées : avis des visiteurs, rapports vétérinaires.
              Collections principales :
              <ul>
                <li><code>reviews</code> : avis avec ratings, commentaires, dates</li>
                <li><code>vet_reports</code> : rapports détaillés avec observations flexibles</li>
              </ul>
              Cette approche NoSQL permet de stocker des rapports vétérinaires variables sans schema fixe.
            </p>
          </div>

          <div class="backend-item">
            <h5>🔌 Architecture MVC</h5>
            <p>
              Séparation claire entre :
              <ul>
                <li><strong>Models :</strong> Classes pour Animal, Enclosure, Service, Review</li>
                <li><strong>Controllers :</strong> AnimalController, AdminController, ReviewController</li>
                <li><strong>Views :</strong> Templates PHP pour public et admin</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>🔒 Sécurité</h5>
            <p>
              <ul>
                <li>Hachage des mots de passe avec bcrypt</li>
                <li>Sessions sécurisées avec vérification du rôle</li>
                <li>Prepared statements pour prévenir les injections SQL</li>
                <li>Validation stricte des données côté serveur</li>
              </ul>
            </p>
          </div>
        </div>
      </div>

      <h3>Intégration frontend-backend</h3>
      <ul>
        <li><strong>AJAX :</strong> Chargement dynamique du contenu sans rechargement</li>
        <li><strong>API interne :</strong> Endpoints pour créer, modifier, supprimer les données admin</li>
        <li><strong>Filtrage intelligent :</strong> Recherche d'animaux par habitat ou espèce</li>
        <li><strong>Système de notes :</strong> Affichage dynamique des avis avec calcul de moyenne</li>
      </ul>

      <h3>Défis techniques relevés</h3>
      <p>
        <strong>1. Gestion multi-bases :</strong> Coordonner MySQL et MongoDB a nécessité une planification minutieuse. 
        J'ai appris à choisir la bonne base pour le bon type de données.
      </p>
      <p>
        <strong>2. Authentification et autorisations :</strong> Vérifier que les admins ne peuvent accéder qu'à leurs sections 
        spécifiques a renforcé ma compréhension de la sécurité web.
      </p>
      <p>
        <strong>3. Performance :</strong> Avec potentiellement de nombreux animaux et avis, j'ai dû implémenter 
        la pagination et des index de base de données.
      </p>

      <div class="projet-cta">
        <a href="http://arcadia0101.caba3973.odns.fr" class="btn-principal">🌐 Voir le site en action</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
