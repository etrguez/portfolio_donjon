<?php include 'i18n.php'; ?>
<!DOCTYPE html>
<html lang="<?php echo $currentLang; ?>">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title><?php echo $currentLang === 'fr' ? 'Portfolio de Elisabeth - Donjon Développeuse' : ($currentLang === 'es' ? 'Portafolio de Elisabeth - Maga Desarrolladora' : 'Elisabeth\'s Portfolio - Developer Mage'); ?></title>
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
    <p><?php echo t('header_subtitle'); ?></p>
    <nav>
      <a href="#apropos"><?php echo t('nav_about'); ?></a>
      <a href="#competences"><?php echo t('nav_skills'); ?></a>
      <a href="#projets"><?php echo t('nav_projects'); ?></a>
      <a href="#bureau-chouettes"><?php echo t('nav_contact'); ?></a>
    </nav>
  </header>

  <div class="grimoire-container">
    <div class="grimoire" id="grimoire">
      <div class="cover" id="grimoireCover">
        <img src="assets/grimoire-cover.png" alt="Grimoire de Elisabeth" />
        <p class="grimoire-text"><?php echo t('grimoire_text'); ?></p>
      </div>
      <div class="grimoire-open" id="grimoireOpen">
        <div class="page page-left">
          <div class="avatar-container">
          <img src="assets/avatar.png" alt="Avatar de Elisabeth" class="avatar"/>
        </div>
      </div>
        <div class="page page-right  fiche-personnage">
          <h3><?php echo $currentLang === 'fr' ? 'Fiche Personnage' : ($currentLang === 'es' ? 'Ficha Personaje' : 'Character Sheet'); ?></h3>
          <ul>
            <li><strong><?php echo $currentLang === 'fr' ? 'Prénom' : ($currentLang === 'es' ? 'Nombre' : 'Name'); ?> :</strong> <?php echo t('character_name'); ?></li>
            <li><strong><?php echo $currentLang === 'fr' ? 'Classe' : ($currentLang === 'es' ? 'Clase' : 'Class'); ?> :</strong> <?php echo t('character_class'); ?></li>
            <li><strong><?php echo $currentLang === 'fr' ? 'Spécialité' : ($currentLang === 'es' ? 'Especialidad' : 'Specialty'); ?> :</strong> <?php echo t('character_specialty'); ?></li>
            <li><strong><?php echo $currentLang === 'fr' ? 'Compétence magique' : ($currentLang === 'es' ? 'Poder mágico' : 'Magic Skill'); ?> :</strong> <?php echo t('character_magic'); ?></li>
          </ul>
        </div>
      </div>
    </div>
    <audio id="bookSound" src="assets/book-open.mp3" preload="auto"></audio>
  </div>



  <section id="apropos">
    <div class="card">
      <h3><?php echo t('about_title'); ?></h3>
      <p><?php echo t('about_text'); ?></p>
    </div>
  </section>

  <section id="competences">
    <div class="card">
      <h3><?php echo t('skills_title'); ?></h3>
      <ul>
        <li><?php echo t('skill_frontend'); ?></li>
        <li><?php echo t('skill_backend'); ?></li>
        <li><?php echo t('skill_database'); ?></li>
        <li><?php echo t('skill_tools'); ?></li>
      </ul>
    </div>
  </section>

  <section id="projets">
  <div class="card">
  <h3><?php echo t('projects_title'); ?></h3>
  
  <div class="projet-card calculateur">
    <h4><?php echo t('project_calculator'); ?></h4>
    <p class="apercu-description">
      <?php echo t('project_calculator_desc'); ?>
    </p>
    <p class="stack-info"><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_calculator_stack'); ?></p>
    <div class="actions-projet">
      <a href="projet-calculateur.php" class="btn-detail"><?php echo t('project_btn_details'); ?></a>
      <a href="https://calculateur.elisadev.com/" class="btn-site"><?php echo t('project_btn_site'); ?></a>
    </div>
  </div>

  <div class="projet-card zoo_arcadia">
    <h4><?php echo t('project_zoo'); ?></h4>
    <p class="apercu-description">
      <?php echo t('project_zoo_desc'); ?>
    </p>
    <p class="stack-info"><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_zoo_stack'); ?></p>
    <div class="actions-projet">
      <a href="projet-zoo-arcadia.php" class="btn-detail"><?php echo t('project_btn_details'); ?></a>
      <a href="https://arcadia.elisadev.com/" class="btn-site"><?php echo t('project_btn_site'); ?></a>
    </div>
  </div>

  <div class="projet-card asiria">
    <h4><?php echo t('project_asiria'); ?></h4>
    <p class="apercu-description">
      <?php echo t('project_asiria_desc'); ?>
    </p>
    <p class="stack-info"><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_asiria_stack'); ?></p>
    <div class="actions-projet">
      <a href="projet-asiria.php" class="btn-detail"><?php echo t('project_btn_details'); ?></a>
      <a href="https://asiriaalvarez.art" class="btn-site" target="_blank"><?php echo t('project_btn_site'); ?></a>
    </div>
  </div>

  <div class="projet-card tallerperu">
    <h4><?php echo t('project_taller'); ?></h4>
    <p class="apercu-description">
      <?php echo t('project_taller_desc'); ?>
    </p>
    <p class="stack-info"><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_taller_stack'); ?></p>
    <div class="actions-projet">
      <a href="projet-tallerperu.php" class="btn-detail"><?php echo t('project_btn_details'); ?></a>
      <a href="https://tallerperu.com" class="btn-site" target="_blank"><?php echo t('project_btn_site'); ?></a>
    </div>
  </div>

  <div class="projet-card scout">
    <h4><?php echo t('project_scout'); ?></h4>
    <p class="apercu-description">
      <?php echo t('project_scout_desc'); ?>
    </p>
    <p class="stack-info"><strong><?php echo t('tech_stack'); ?> :</strong> <?php echo t('project_scout_stack'); ?></p>
    <div class="actions-projet">
      <a href="projet-scout-doramas.php" class="btn-detail"><?php echo t('project_btn_details'); ?></a>
      <a href="https://scout-doramas.kdevs.io/" class="btn-site" target="_blank"><?php echo t('project_btn_site'); ?></a>
    </div>
  </div>

</div>
  </section>

  <section id="bureau-chouettes">
  <h2><?php echo t('contact_title'); ?></h2>
  <form id="form-chouette">
    <input type="text" id="name" name="name" placeholder="<?php echo t('contact_name'); ?>" required>
    <input type="email" id="email" name="email" placeholder="<?php echo t('contact_email'); ?>" required>
    <textarea id="message" name="message" placeholder="<?php echo t('contact_message'); ?>" rows="5" required></textarea>
    <button type="submit"><?php echo t('contact_submit'); ?></button>
  </form>
  <div id="form-message"></div>
  </section>

  <footer>
    <p><?php echo t('footer_copyright'); ?></p>
    <p><a href="https://www.linkedin.com/in/elisabeth-talavera-rodriguez-ba11b7355/" class="linkedin-icon"><i class="bi bi-linkedin"></i></a></p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
