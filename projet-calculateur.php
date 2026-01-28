<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Calculateur de Dépenses - Portfolio Elisabeth</title>
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
      <h2>Calculateur de Dépenses ✨</h2>
      
      <div class="projet-meta">
        <p><strong>Stack technique :</strong> HTML, CSS, PHP, JavaScript, MySQL</p>
        <p><strong>Durée :</strong> 2 semaines</p>
      </div>

      <h3>Vue d'ensemble</h3>
      <p>
        Le Calculateur de Dépenses est une web-application full-stack conçue pour simplifier la gestion budgétaire 
        au quotidien. Cette application permet aux utilisateurs de suivre leurs dépenses en temps réel, 
        de les catégoriser et d'avoir une vision complète de leurs habitudes de consommation.
      </p>

      <h3>Fonctionnalités principales</h3>
      <ul>
        <li>✨ <strong>Ajout de dépenses :</strong> Interface intuitive pour enregistrer rapidement vos dépenses</li>
        <li>📝 <strong>Édition et suppression :</strong> Modifiez ou supprimez vos entrées à volonté</li>
        <li>📊 <strong>Catégorisation :</strong> Organisez vos dépenses par catégories (alimentation, loisirs, transport, etc.)</li>
        <li>📈 <strong>Suivi en temps réel :</strong> Le total s'actualise instantanément</li>
        <li>💾 <strong>Persistance des données :</strong> Vos dépenses sont sauvegardées en base de données MySQL</li>
      </ul>

      <h3>Architecture backend</h3>
      <p>
        Le backend est construit en PHP pur, sans framework, avec une architecture MVC simplifiée pour assurer 
        la maintenabilité du code. Les données sont stockées dans une base MySQL avec une gestion appropriée des transactions.
      </p>

      <div class="galerie-backend">
        <h4>Explications backend</h4>
        <div class="backend-info">
          <div class="backend-item">
            <h5>🔌 API PHP</h5>
            <p>Les endpoints sont RESTful : POST pour ajouter, PUT pour modifier, DELETE pour supprimer. 
               Chaque requête est validée côté serveur pour éviter les injections SQL.</p>
          </div>
          <div class="backend-item">
            <h5>🗄️ Structure base de données</h5>
            <p>Une table principale <code>depenses</code> avec les colonnes : id, description, montant, 
               categorie, date, user_id. Les requêtes SQL utilisent des prepared statements pour la sécurité.</p>
          </div>
          <div class="backend-item">
            <h5>⚡ Gestion des sessions</h5>
            <p>Système d'authentification simple avec sessions PHP. Chaque utilisateur ne voit que ses dépenses grâce 
               à la vérification de la session et du user_id en base.</p>
          </div>
        </div>
      </div>

      <h3>Points techniques clés</h3>
      <ul>
        <li><strong>Validation côté client :</strong> JavaScript pour une meilleure UX</li>
        <li><strong>Validation côté serveur :</strong> PHP pour la sécurité</li>
        <li><strong>AJAX :</strong> Requêtes asynchrones pour une expérience fluide</li>
        <li><strong>Sécurité :</strong> Protection contre les injections SQL avec prepared statements</li>
      </ul>

      <h3>Défis relevés</h3>
      <p>
        La gestion de la synchronisation entre le frontend et le backend a été un apprentissage clé. 
        J'ai découvert l'importance de valider les données des deux côtés et de gérer les erreurs réseau gracieusement.
      </p>

      <div class="projet-cta">
        <a href="http://calculateur0101.caba3973.odns.fr/" class="btn-principal">🌐 Voir le site en action</a>
      </div>
    </div>
  </div>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
