<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Taller Perú - Portfolio Elisabeth</title>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <canvas id="magicParticles"></canvas>

  <header>
    <h1>Elisabeth, Mage Développeuse</h1>
    <nav>
      <a href="./index.php#projets">← Retour aux quêtes</a>
    </nav>
  </header>

  <div class="projet-detail">
    <div class="card detail-card">
      <h2>Taller Perú ✨</h2>
      
      <div class="projet-meta">
        <p><strong>Stack technique :</strong> PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript</p>
        <p><strong>Type :</strong> Site e-commerce avec panel administrateur</p>
      </div>

      <h3>Vue d'ensemble</h3>
      <p>
        Taller Perú est un site professionnel pour un atelier automobile spécialisé au Pérou. 
        La plateforme combine une interface client intuitive pour consulter les services et promotions 
        avec un puissant panel administrateur pour gérer dynamiquement les offres promotionnelles. 
        Ce projet démontre une gestion complète de contenu avec optimisation d'images avancée.
      </p>

      <div class="galerie-screenshots">
        <img src="assets/taller_peru/formulaire-ajout-1.png" alt="Interface d'ajout - Partie 1" class="screenshot">
        <img src="assets/taller_peru/formulaire-ajout-2.png" alt="Interface d'ajout - Partie 2" class="screenshot">
        <img src="assets/taller_peru/formulaire-ajout-3.png" alt="Interface d'ajout - Partie 3" class="screenshot">
      </div>

      <h3>Espace Client (Public)</h3>
      
      <h4>📱 Fonctionnalités principales</h4>
      <ul>
        <li>🏠 <strong>Accueil :</strong> Services et promotions dynamiques en temps réel</li>
        <li>⭐ <strong>Avis clients :</strong> Testimonios avec évaluations</li>
        <li>ℹ️ <strong>À propos & Localisation :</strong> Historique et carte du taller</li>
        <li>💌 <strong>Contact :</strong> Formulaire pour demandes de devis</li>
        <li>📱 <strong>Design responsive :</strong> Mobile-first sur tous appareils</li>
      </ul>

      <h3>Espace Administrateur</h3>
      
      <h4>🔐 Authentification & Dashboard</h4>
      <p>Login sécurisé (email/mot de passe, hash bcrypt) avec dashboard temps réel affichant :
      ✅ Total promotions | 🔥 Actives | 📅 À venir | 🗑️ Expirées</p>

      <h4>🎁 Gestion Promotions</h4>
      <p>Créer, éditer, supprimer les offres. Interface intuitive avec :</p>

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
            <h5>📧 Traitement Formulaires</h5>
            <p>
              <strong>Validation JavaScript</strong> côté client pour UX immédiate. 
              <strong>Traitement serveur</strong> avec <code>process_contact.php</code>. 
              <strong>HTML escaping</strong> des inputs pour sécurité.
            </p>
          </div>


      <h3>Points clés & Défis</h3>
      <ul>
        <li><strong>Gestion dates :</strong> Système promotions actives/à venir/expirées sans cron</li>
        <li><strong>Optimisation images :</strong> Compression 2 résolutions pour performance mobiles</li>
        <li><strong>UX admin :</strong> Interface simple pour gérant non-technique</li>
        <li><strong>Sécurité :</strong> Hash bcrypt, PDO préparées, rate limiting</li>
      </ul>

      <div class="projet-cta">
        <a href="https://tallerperu.com" class="btn-principal" target="_blank">🌐 Voir le site en action</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
