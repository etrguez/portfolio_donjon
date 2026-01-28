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
      <a href="index.php#projets">← Retour aux quêtes</a>
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

      <h3>Espace Client (Public)</h3>
      
      <h4>📱 Fonctionnalités principales</h4>
      <ul>
        <li>🏠 <strong>Accueil :</strong> Services offerts et statistiques de l'atelier</li>
        <li>🎁 <strong>Promotions dynamiques :</strong> Affichage en temps réel des offres avec réductions</li>
        <li>⭐ <strong>Avis clients :</strong> Testimonios avec évaluations des clients</li>
        <li>ℹ️ <strong>À propos :</strong> Historique et présentation de l'atelier</li>
        <li>💌 <strong>Formulaire de contact :</strong> Demandes de devis et renseignements</li>
        <li>📍 <strong>Localisation :</strong> Carte de position du taller</li>
        <li>📱 <strong>Design responsive :</strong> Adapté mobiles, tablettes, ordinateurs</li>
      </ul>

      <h3>Espace Administrateur (Privé)</h3>
      
      <h4>🔐 Authentification sécurisée</h4>
      <ul>
        <li>Login page : email/mot de passe</li>
        <li>Vérification avec hash bcrypt</li>
        <li>Sessions PHP sécurisées</li>
        <li>Redirection protégée des pages admin</li>
      </ul>

      <h4>📊 Dashboard en temps réel</h4>
      <p>Panel de contrôle avec statistiques dynamiques :</p>
      <ul>
        <li>✅ Total des promotions créées</li>
        <li>🔥 Promotions actives (valides actuellement)</li>
        <li>📅 Promotions à venir (programmées)</li>
        <li>🗑️ Promotions expirées (historique)</li>
      </ul>

      <h4>🎁 Gestion des Promotions</h4>
      <p>Suite d'outils complète pour gérer les offres :</p>
      <ul>
        <li>🆕 <strong>Créer une promotion :</strong> Nouvelle offre avec tous les paramètres</li>
        <li>✏️ <strong>Éditer une promotion :</strong> Modifier titre, description, dates, image</li>
        <li>🗑️ <strong>Supprimer une promotion :</strong> Retirer les offres obsolètes</li>
      </ul>

      <div class="galerie-backend">
        <h4>Détails Gestion Promotions</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>📝 Formulaire de Création</h5>
            <p>
              Interface d'ajout de promotion avec champs détaillés :
              <ul>
                <li><strong>Título :</strong> Nom de l'offre (ex: "Révision de 50€")</li>
                <li><strong>Descripción :</strong> Textarea pour détails et conditions</li>
                <li><strong>Imagen :</strong> Upload avec validation stricte
                  <ul>
                    <li>Formats acceptés : JPG, PNG, GIF, WebP</li>
                    <li>Taille maximum : 5MB</li>
                  </ul>
                </li>
                <li><strong>Fecha de Inicio :</strong> Date picker pour début de l'offre</li>
                <li><strong>Fecha de Fin :</strong> Date picker pour fin (doit être après début)</li>
                <li><strong>Reducción (optionnel) :</strong> Montant de réduction
                  <ul>
                    <li>Exemples : "20" pour -20% ou "-20€"</li>
                    <li>Dropdown avec option "Aucun"</li>
                  </ul>
                </li>
              </ul>
              Boutons d'action : "Agregar Promoción" et "Volver al Dashboard"
            </p>
            <div class="galerie-screenshots">
              <img src="assets/tallerperu/formulaire-ajout-1.png" alt="Interface d'ajout de promotion - Partie 1" class="screenshot">
              <img src="assets/tallerperu/formulaire-ajout-2.png" alt="Interface d'ajout de promotion - Partie 2" class="screenshot">
              <img src="assets/tallerperu/formulaire-ajout-3.png" alt="Interface d'ajout de promotion - Partie 3" class="screenshot">
            </div>
          </div>

          <div class="backend-item">
            <h5>🖼️ Optimisation Images</h5>
            <p>
              Upload JPEG/PNG avec optimisation automatique en 2 tailles :
              <ul>
                <li><strong>Thumbnail :</strong> 200px, qualité 60%</li>
                <li><strong>Medium :</strong> 500px, qualité 75%</li>
              </ul>
              Compression intelligente pour chargement rapide.
            </p>
          </div>

          <div class="backend-item">
            <h5>📅 Gestion Temporelle</h5>
            <p>
              Système de dates flexible permettant de :
              <ul>
                <li>Programmer les promotions à l'avance</li>
                <li>Définir date de fin automatique</li>
                <li>Archiver automatiquement les expirées</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>💾 Stockage Données</h5>
            <p>
              Base MySQL avec structure robuste :
              <ul>
                <li>Images stockées en binaire (BLOB)</li>
                <li>Requêtes préparées (prévention SQL injection)</li>
                <li>Tri par date de création</li>
                <li>Indexation pour performance</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>⚡ Mise à jour Instantanée</h5>
            <p>
              Les modifications en admin s'affichent immédiatement :
              <ul>
                <li>Pas de cache manuel</li>
                <li>Service Worker (sw.js) pour cache statique</li>
                <li>Lazy loading des images</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>🎨 Fonctionnalités UX</h5>
            <p>
              Interface intuitive pour le gérant du taller :
              <ul>
                <li>Édition rapide directement depuis dashboard</li>
                <li>Aperçu des promotions avant publication</li>
                <li>Actions en 1-2 clics</li>
              </ul>
            </p>
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

          <div class="backend-item">
            <h5>🔐 Sécurité</h5>
            <p>
              <ul>
                <li>Sessions PHP sécurisées</li>
                <li>Hash bcrypt pour mots de passe</li>
                <li>Requêtes préparées (PDO) contre injections SQL</li>
                <li>HTML escaping des données affichées</li>
                <li>Redirection protégée des pages admin</li>
              </ul>
            </p>
          </div>

          <div class="backend-item">
            <h5>📱 Design & Performance</h5>
            <p>
              <strong>Tailwind CSS</strong> pour responsive design mobile-first. 
              <strong>Service Worker (sw.js)</strong> pour cache statique. 
              <strong>Lazy loading</strong> des images. 
              <strong>Optimisation images</strong> en 2 résolutions.
            </p>
          </div>
        </div>
      </div>

      <h3>Points techniques clés</h3>
      <ul>
        <li><strong>Gestion de dates :</strong> Système intelligent de promotions actives/à venir/expirées</li>
        <li><strong>Optimisation images :</strong> Deux optimiseurs JavaScript différents selon cas d'usage</li>
        <li><strong>Service Worker :</strong> Cache stratégique pour performance côté client</li>
        <li><strong>Sessions sécurisées :</strong> Authentification robuste avec hash bcrypt</li>
        <li><strong>Responsive design :</strong> Expérience fluide sur tous les appareils</li>
      </ul>

      <h3>Défis relevés</h3>
      <p>
        <strong>1. Optimisation d'images :</strong> Implémenter deux stratégies d'optimisation différentes 
        (légère vs progressive) a demandé une compréhension fine des trade-offs performance/qualité.
      </p>
      <p>
        <strong>2. Gestion des dates :</strong> Créer un système de promotions qui affiche dynamiquement 
        les offres actives/à venir/expirées sans cron jobs a été un défi intéressant.
      </p>
      <p>
        <strong>3. Panel administrateur intuitif :</strong> Concevoir une interface simple pour gérant non-technique 
        tout en restant puissante a nécessité beaucoup d'itération sur l'UX.
      </p>
      <p>
        <strong>4. Cache et performance :</strong> Balancer entre cache côté client (Service Worker) 
        et mise à jour instantanée côté admin a demandé stratégie cache intelligente.
      </p>

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
