// ===== GESTION DE LA LANGUE =====
function changeLanguage(lang) {
  // Stocker la langue dans le cookie
  document.cookie = `portfolio_lang=${lang}; path=/; max-age=31536000`;
  
  // Recharger la page pour appliquer la langue
  window.location.reload();
}

// Initialiser les boutons de langue au chargement
document.addEventListener('DOMContentLoaded', () => {
  const langButtons = document.querySelectorAll('.language-selector button');
  
  langButtons.forEach(button => {
    button.addEventListener('click', () => {
      const lang = button.getAttribute('data-lang');
      changeLanguage(lang);
    });
  });
});

// Scroll fluide (seulement pour les ancres internes)
document.querySelectorAll('nav a').forEach(link => {
  link.addEventListener('click', (e) => {
    const href = link.getAttribute('href');
    // Si c'est une ancre interne (#), on fait le scroll fluide
    if (href && href.startsWith('#')) {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    }
    // Sinon, on laisse le navigateur gérer la navigation normale
  });
});

// Observer pour faire apparaître les .card au scroll
const observer = new IntersectionObserver((entries) => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('visible');
    }
  });
}, { threshold: 0.1 });

document.querySelectorAll('.card').forEach(el => observer.observe(el));

// Particules magiques
const canvas = document.getElementById("magicParticles");
const ctx = canvas.getContext("2d");

let width, height, particles = [];

function resizeCanvas() {
  width = canvas.width = window.innerWidth;
  height = canvas.height = window.innerHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

function createParticles() {
  particles = [];
  const count = Math.floor(width * height / 9000);
  for (let i = 0; i < count; i++) {
    particles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      size: Math.random() * 2 + 1,
      speedX: (Math.random() - 0.5) * 0.5,
      speedY: (Math.random() - 0.5) * 0.5,
      opacity: Math.random() * 0.5 + 0.2
    });
  }
}
createParticles();

function animateParticles() {
  ctx.clearRect(0, 0, width, height);
  particles.forEach(p => {
    ctx.beginPath();
    ctx.arc(p.x, p.y, p.size, 0, Math.PI * 2);
    ctx.fillStyle = `rgba(255, 255, 255, ${p.opacity})`;
    ctx.fill();
    p.x += p.speedX;
    p.y += p.speedY;
    if (p.x < 0) p.x = width;
    if (p.x > width) p.x = 0;
    if (p.y < 0) p.y = height;
    if (p.y > height) p.y = 0;
  });
  requestAnimationFrame(animateParticles);
}
animateParticles();

// Grimoire : toggle open/close + son
const grimoire = document.getElementById("grimoire");
const grimoireOpen = document.getElementById("grimoireOpen");
const bookSound = document.getElementById("bookSound");

function isMobile() {
  return window.matchMedia('(max-width: 480px)').matches;
}

grimoire.addEventListener("click", () => {
  const willOpen = !grimoire.classList.contains("open");
  grimoire.classList.toggle("open");

  if (willOpen) {
    // Lecture du son si supporté
    try {
      bookSound.currentTime = 0;
      bookSound.play().catch(() => {});
    } catch (_) {}
  }

  // Sur desktop/tablette : laisser le CSS gérer (couverture reste visible)
  // Sur mobile : le CSS masque la couverture via media query
  if (!isMobile()) {
    // Desktop/Tablette : afficher le contenu en flex, la couverture reste visible en arrière
    grimoireOpen.style.display = grimoire.classList.contains("open") ? "flex" : "none";
  } else {
    // Mobile : laisser le CSS gérer complètement
    grimoireOpen.style.removeProperty('display');
  }
});

window.addEventListener('resize', () => {
  // Réévaluer l'affichage au redimensionnement
  if (!isMobile()) {
    grimoireOpen.style.display = grimoire.classList.contains("open") ? "flex" : "none";
  } else {
    grimoireOpen.style.removeProperty('display');
  }
});

