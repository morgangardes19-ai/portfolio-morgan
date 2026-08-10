// Bulles de compétences cliquables
(function () {
  const skills = [
    { name: "HTML5", color: "#61DAFB" },
    { name: "TailwindCSS", color: "#61DAFB" },
    { name: "JavaScript", color: "#61DAFB" },
    { name: "Git", color: "#61DAFB" },
    { name: "Figma", color: "#61DAFB" },
    { name: "PHP", color: "#61DAFB" },
    { name: "SQL", color: "#61DAFB" },
  ];

  const grid = document.getElementById("skills-grid");
  if (!grid) return;

  // Création des bulles
  skills.forEach((skill, index) => {
    const bubble = document.createElement("div");
    bubble.className =
      "skill-bubble relative w-28 h-28 md:w-32 md:h-32 flex-shrink-0 flex items-center justify-center cursor-pointer";

    // --- Animation d'apparition ---
    bubble.dataset.animate = "";
    bubble.dataset.delay = index * 0.1;
    bubble.className += " opacity-0 translate-y-8 transition-all duration-500";

    // Face de la bulle
    const face = document.createElement("div");
    face.className =
      "bubble-face absolute inset-0 rounded-full flex items-center justify-center backdrop-blur-md border border-white/25 transition-transform duration-200 hover:scale-110";
    face.style.background = `radial-gradient(circle at 35% 30%, rgba(255,255,255,0.18), rgba(255,255,255,0.04) 60%, transparent), ${skill.color}15`;
    face.style.boxShadow = `inset 0 0 25px ${skill.color}40, 0 0 30px ${skill.color}25`;

    const label = document.createElement("span");
    label.className =
      "font-mono text-xs md:text-sm font-medium text-center px-2 text-white/90";
    label.style.textShadow = `0 0 12px ${skill.color}`;
    label.textContent = skill.name;

    const highlight = document.createElement("span");
    highlight.className =
      "absolute top-2.5 left-4 w-5 h-5 rounded-full bg-white/40 blur-[3px]";

    face.appendChild(label);
    face.appendChild(highlight);
    bubble.appendChild(face);

    // Conteneur pour les particules d'explosion
    const particles = document.createElement("div");
    particles.className =
      "bubble-particles absolute inset-0 pointer-events-none";
    bubble.appendChild(particles);

    // Gestion du clic : explosion
    bubble.addEventListener("click", function () {
      if (this.classList.contains("popped")) return;
      this.classList.add("popped");

      const container = this.querySelector(".bubble-particles");
      if (!container) return;

      // Création des particules binaires (0 et 1)
      for (let k = 0; k < 14; k++) {
        const span = document.createElement("span");
        const angle = (k / 14) * Math.PI * 2;
        const dist = 55 + Math.random() * 45;
        span.textContent = Math.random() > 0.5 ? "1" : "0";
        span.className = "particle";
        span.style.setProperty("--angle", angle);
        span.style.setProperty("--dist", dist + "px");
        span.style.animation = "particle-fly 1.4s ease-out forwards";
        container.appendChild(span);
      }

      // Cercle d'expansion
      const ring = document.createElement("span");
      ring.className = "particle-ring";
      ring.style.animation = "ring-expand 0.6s ease-out forwards";
      container.appendChild(ring);

      // Réapparition après 1.5s
      setTimeout(() => {
        this.classList.remove("popped");
        const p = this.querySelector(".bubble-particles");
        if (p) p.innerHTML = "";
      }, 1500);
    });

    grid.appendChild(bubble);
  });
})();
