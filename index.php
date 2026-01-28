<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Portfolio de Elisabeth - Donjon Développeuse</title>
  <link href="https://fonts.googleapis.com/css2?family=MedievalSharp&display=swap" rel="stylesheet"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
  <link rel="stylesheet" href="style.css" />
</head>
<body>
  <canvas id="magicParticles"></canvas>

  <header>
    <h1>Elisabeth, Mage Développeuse</h1>
    <p>Exploratrice de bugs et créatrice de mondes numériques enchantés</p>
    <nav>
      <a href="#apropos">Salle du trône</a>
      <a href="#competences">Arbre de talénts</a>
      <a href="#projets">Quetes</a>
      <a href="#bureau-chouettes">Le bureau de chouettes</a>
    </nav>
  </header>

  <div class="grimoire-container">
    <div class="grimoire" id="grimoire">
      <div class="cover" id="grimoireCover">
        <img src="assets/grimoire-cover.png" alt="Grimoire de Elisabeth" />
        <p class="grimoire-text">Grimoire de Elisabeth,<br> cliquez pour ouvrir</p>
      </div>
      <div class="grimoire-open" id="grimoireOpen">
        <div class="page page-left">
          <div class="avatar-container">
          <img src="assets/avatar.png" alt="Avatar de Elisabeth" class="avatar"/>
        </div>
      </div>
        <div class="page page-right  fiche-personnage">
          <h3>Fiche Personnage</h3>
          <ul>
            <li><strong>Prénom :</strong> Elisabeth</li>
            <li><strong>Classe :</strong> Mage Fullstack</li>
            <li><strong>Spécialité :</strong> HTML/CSS/JS, PHP, Gestion base des données</li>
            <li><strong>Compétence magique :</strong> Création de projets web ✨</li>
          </ul>
        </div>
      </div>
    </div>
    <audio id="bookSound" src="assets/book-open.mp3" preload="auto"></audio>
  </div>



  <section id="apropos">
    <div class="card">
      <h3>Salle du trône</h3>
      <p>Bienvenue, voyageur-se.<br>Moi c’est Elisabeth, mage fullstack débutante en quête de nouveaux défis.<br>
        Passionnée de fantasy, de manga et de lignes de code bien ficelées.<br>
        Mon parcours est une quête, et chaque projet est un sortilège que je lance avec curiosité et créativité ✨
      </p>
    </div>
  </section>

  <section id="competences">
    <div class="card">
      <h3>Arbre de talents</h3>
      <ul>
        <li>✨ HTML / CSS / JavaScript</li>
        <li>🛡️ Backend : PHP </li>
        <li>📚 Bases de données : MongoDB, MySQL, MariaDB</li>
        <li>🧙‍♀️ Git, GitHub, API REST</li>
      </ul>
    </div>
  </section>

  <section id="projets">
  <div class="card">
  <h3>Quêtes</h3>
  <div class="projet-card calculateur">
    <h4>Calculateur de Dépenses ✨</h4>
    <p class="apercu-description">
      Web-app full-stack pour suivre son budget : ajoute, édite ou supprime tes dépenses, catégorise-les et suis le total en temps réel.
    </p>
    <p class="stack-info"><strong>Stack :</strong> HTML, CSS, PHP, JavaScript, MySQL</p>
    <div class="actions-projet">
      <a href="projet-calculateur.php" class="btn-detail">📖 Voir les détails</a>
      <a href="http://calculateur0101.caba3973.odns.fr/" class="btn-site">🌐 Voir le site</a>
    </div>
  </div>
  <div class="projet-card zoo_arcadia">
    <h4>Zoo Arcadia ✨</h4>
    <p class="apercu-description">
      Plateforme interactive pour explorer les habitats du zoo, connaître les animaux qui y vivent et découvrir les services proposés. Les visiteurs peuvent partager leur expérience via des avis, tandis qu'un espace d'administration permet de gérer animaux, enclos, prestations et d'accéder aux rapports vétérinaires.
    </p>
    <p class="stack-info"><strong>Stack :</strong> HTML, CSS, PHP, JavaScript, MongoDB et MySQL</p>
    <div class="actions-projet">
      <a href="projet-zoo-arcadia.php" class="btn-detail">📖 Voir les détails</a>
      <a href="http://arcadia0101.caba3973.odns.fr" class="btn-site">🌐 Voir le site</a>
    </div>
  </div>

  <div class="projet-card asiria">
    <h4>Portfolio Asiria Álvarez ✨</h4>
    <p class="apercu-description">
      Portfolio professionnel minimaliste pour une photographe et designer graphique à Las Palmas. Showcase de projets créatifs avec galeries multimédia haute qualité, panel administrateur complet et analytics géographiques.
    </p>
    <p class="stack-info"><strong>Stack :</strong> PHP 7/8, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript</p>
    <div class="actions-projet">
      <a href="projet-asiria.php" class="btn-detail">📖 Voir les détails</a>
      <a href="https://asiriaalvarez.art" class="btn-site" target="_blank">🌐 Voir le site</a>
    </div>
  </div>

  <div class="projet-card tallerperu">
    <h4>Taller Perú ✨</h4>
    <p class="apercu-description">
      Site professionnel pour un atelier automobile au Pérou avec gestion dynamique des promotions. Interface client intuitive et puissant panel administrateur pour gérer les offres en temps réel avec optimisation d'images avancée.
    </p>
    <p class="stack-info"><strong>Stack :</strong> PHP, PDO, MySQL, HTML5, CSS3 (Tailwind), JavaScript</p>
    <div class="actions-projet">
      <a href="projet-tallerperu.php" class="btn-detail">📖 Voir les détails</a>
      <a href="https://tallerperu.com" class="btn-site" target="_blank">🌐 Voir le site</a>
    </div>
  </div>

  <div class="projet-card scout">
    <h4>Scout-Doramas 104 ✨</h4>
    <p class="apercu-description">
      Plateforme web complète pour une association de scouts en Espagne. Interface publique engageante pour recruter les jeunes, calendrier d'événements, galerie multimédia et panel admin sécurisé pour gérer inscriptions et messages.
    </p>
    <p class="stack-info"><strong>Stack :</strong> PHP, PDO, MySQL, HTML5, CSS3, JavaScript</p>
    <div class="actions-projet">
      <a href="projet-scout-doramas.php" class="btn-detail">📖 Voir les détails</a>
      <a href="https://scout-doramas.kdevs.io/" class="btn-site" target="_blank">🌐 Voir le site</a>
    </div>
  </div>

</div>
  </section>

  <section id="bureau-chouettes">
  <h2>Envoyer un message au Bureau des Chouettes</h2>
  <form id="form-chouette">
    <input type="text" id="name" name="name" placeholder="Votre nom" required>
    <input type="email" id="email" name="email" placeholder="Votre email" required>
    <textarea id="message" name="message" placeholder="Votre message enchanté..." rows="5" required></textarea>
    <button type="submit">Envoyer</button>
  </form>
  </section>

  <footer>
    <p>&copy; 2025 Elisabeth - Portfolio Donjon Développeuse</p>

      <p><a href="https://www.linkedin.com/in/elisabeth-talavera-rodriguez-ba11b7355/" class="linkedin-icon"><i class="bi bi-linkedin"></i></a></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
