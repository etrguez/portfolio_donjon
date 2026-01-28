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
  <div class="calculateur">
    <p>
      <strong>Nom :</strong> Calculateur de Dépenses ✨<br>
      <strong>Description :</strong> Web-app full-stack pour suivre son budget : ajoute, édite ou supprime tes dépenses, catégorise-les et suis le total en temps réel.<br>
      <strong>Stack :</strong> HTML, CSS, PHP, JavaScript, MySQL<br>
      <a href="http://calculateur0101.caba3973.odns.fr/">Voir le site</a>
    </p>
  </div>
  <div class="zoo_arcadia">
  <p>
      <strong>Nom :</strong> Zoo Arcadia ✨<br>
      <strong>Description :</strong>Plateforme interactive pour explorer les habitats du zoo, connaître les animaux qui y vivent et découvrir les services proposés. Les visiteurs peuvent partager leur expérience via des avis, tandis qu’un espace d’administration permet de gérer animaux, enclos, prestations et d’accéder aux rapports vétérinaires.<br>
      <strong>Stack :</strong> HTML, CSS, PHP, JavaScript, MongoDB et MySQL<br>
      <a href="http://arcadia0101.caba3973.odns.fr">Voir le site</a>
    </p>
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
