// ===== GESTION DE LA LANGUE =====
function changeLanguage(lang) {
  // Stocker la langue dans le cookie
  document.cookie = `portfolio_lang=${lang}; path=/; max-age=31536000`;

  // Recharger la page pour appliquer la langue
  window.location.reload();
}

// Initialiser les boutons de langue au chargement
document.addEventListener("DOMContentLoaded", () => {
  const langButtons = document.querySelectorAll(".language-selector button");

  langButtons.forEach((button) => {
    button.addEventListener("click", () => {
      const lang = button.getAttribute("data-lang");
      changeLanguage(lang);
    });
  });
});

// Scroll fluide (seulement pour les ancres internes)
document.querySelectorAll("nav a").forEach((link) => {
  link.addEventListener("click", (e) => {
    const href = link.getAttribute("href");
    // Si c'est une ancre interne (#), on fait le scroll fluide
    if (href && href.startsWith("#")) {
      e.preventDefault();
      const target = document.querySelector(href);
      if (target) {
        target.scrollIntoView({ behavior: "smooth" });
      }
    }
    // Sinon, on laisse le navigateur gérer la navigation normale
  });
});

// Observer pour faire apparaître les .card au scroll
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("visible");
      }
    });
  },
  { threshold: 0.1 },
);

document.querySelectorAll(".card").forEach((el) => observer.observe(el));

// Particules magiques
const canvas = document.getElementById("magicParticles");
const ctx = canvas.getContext("2d");

let width,
  height,
  particles = [];

function resizeCanvas() {
  width = canvas.width = window.innerWidth;
  height = canvas.height = window.innerHeight;
}
window.addEventListener("resize", resizeCanvas);
resizeCanvas();

function createParticles() {
  particles = [];
  const count = Math.floor((width * height) / 9000);
  for (let i = 0; i < count; i++) {
    particles.push({
      x: Math.random() * width,
      y: Math.random() * height,
      size: Math.random() * 2 + 1,
      speedX: (Math.random() - 0.5) * 0.5,
      speedY: (Math.random() - 0.5) * 0.5,
      opacity: Math.random() * 0.5 + 0.2,
    });
  }
}
createParticles();

function animateParticles() {
  ctx.clearRect(0, 0, width, height);
  particles.forEach((p) => {
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
  return window.matchMedia("(max-width: 480px)").matches;
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
    grimoireOpen.style.display = grimoire.classList.contains("open")
      ? "flex"
      : "none";
  } else {
    // Mobile : laisser le CSS gérer complètement
    grimoireOpen.style.removeProperty("display");
  }
});

window.addEventListener("resize", () => {
  // Réévaluer l'affichage au redimensionnement
  if (!isMobile()) {
    grimoireOpen.style.display = grimoire.classList.contains("open")
      ? "flex"
      : "none";
  } else {
    grimoireOpen.style.removeProperty("display");
  }
});

// ===== GESTION DU FORMULAIRE DE CONTACT =====
const formChouette = document.getElementById("form-chouette");
if (formChouette) {
  formChouette.addEventListener("submit", function(event) {
    event.preventDefault();

    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let message = document.getElementById("message").value;
    
    const formMessage = document.getElementById("form-message");
    const submitButton = formChouette.querySelector('button[type="submit"]');
    
    // Afficher l'animation de chargement
    submitButton.disabled = true;
    submitButton.style.opacity = "0.6";
    submitButton.style.cursor = "not-allowed";
    
    const originalText = submitButton.textContent;
    submitButton.innerHTML = '🦉 <span class="loading-dots">Envoi en cours</span>';
    
    // Animation des points
    let dotCount = 0;
    const loadingInterval = setInterval(() => {
      dotCount = (dotCount + 1) % 4;
      const dots = '.'.repeat(dotCount);
      const loadingSpan = submitButton.querySelector('.loading-dots');
      if (loadingSpan) {
        loadingSpan.textContent = 'Envoi en cours' + dots;
      }
    }, 400);

    fetch('traitement.php', {
      method: 'POST',
      headers: {
        'Content-Type': 'application/x-www-form-urlencoded',
      },
      body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&message=${encodeURIComponent(message)}`
    })
    .then(response => response.text())
    .then(data => {
      // Arrêter l'animation
      clearInterval(loadingInterval);
      submitButton.disabled = false;
      submitButton.style.opacity = "1";
      submitButton.style.cursor = "pointer";
      submitButton.textContent = originalText;
      
      formMessage.innerHTML = data;
      
      // Vérifier si le message contient "success" ou "error"
      if (data.includes("bien") || data.includes("correctamente") || data.includes("successfully")) {
        formMessage.style.color = "#00ff00";
        formMessage.style.background = "linear-gradient(135deg, rgba(0, 255, 0, 0.1), rgba(0, 255, 100, 0.2))";
        formMessage.style.border = "2px solid #00ff00";
        formChouette.reset();
        
        // Animation de succès
        formMessage.style.animation = "slideInUp 0.5s ease";
      } else {
        formMessage.style.color = "#ff6b6b";
        formMessage.style.background = "linear-gradient(135deg, rgba(255, 107, 107, 0.1), rgba(255, 50, 50, 0.2))";
        formMessage.style.border = "2px solid #ff6b6b";
        
        // Animation d'erreur
        formMessage.style.animation = "shake 0.5s ease";
      }
      
      formMessage.style.marginTop = "1rem";
      formMessage.style.padding = "1rem";
      formMessage.style.borderRadius = "8px";
      formMessage.style.fontWeight = "bold";
      formMessage.style.textAlign = "center";
    })
    .catch(error => {
      clearInterval(loadingInterval);
      submitButton.disabled = false;
      submitButton.style.opacity = "1";
      submitButton.style.cursor = "pointer";
      submitButton.textContent = originalText;
      
      formMessage.innerHTML = "Une erreur est survenue.";
      formMessage.style.color = "#ff6b6b";
      formMessage.style.background = "linear-gradient(135deg, rgba(255, 107, 107, 0.1), rgba(255, 50, 50, 0.2))";
      formMessage.style.border = "2px solid #ff6b6b";
      formMessage.style.marginTop = "1rem";
      formMessage.style.padding = "1rem";
      formMessage.style.borderRadius = "8px";
      formMessage.style.fontWeight = "bold";
      formMessage.style.textAlign = "center";
      console.error("Erreur :", error);
    });
  });
}
