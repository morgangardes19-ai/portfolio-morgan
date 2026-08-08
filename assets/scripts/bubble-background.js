// Bulles flottantes qui réagissent à la souris (canvas animation)
(function() {
  const canvas = document.getElementById('bubble-canvas');
  if (!canvas) return;
  const ctx = canvas.getContext('2d');
  let animationId;
  let bubbles = [];
  const mouse = { x: -1000, y: -1000 };

  function resize() {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
  }
  resize();
  window.addEventListener('resize', resize);

  function makeBubble(startAtBottom) {
    return {
      x: Math.random() * canvas.width,
      y: startAtBottom ? canvas.height + Math.random() * 200 : Math.random() * canvas.height,
      r: Math.random() * 7 + 2,
      speed: Math.random() * 1.1 + 0.3,
      drift: (Math.random() - 0.5) * 0.4,
      wobble: Math.random() * Math.PI * 2,
      wobbleSpeed: Math.random() * 0.03 + 0.01,
      opacity: Math.random() * 0.35 + 0.12,
    };
  }

  function initBubbles() {
    bubbles = [];
    const count = Math.min(70, Math.floor(window.innerWidth / 18));
    for (let i = 0; i < count; i++) bubbles.push(makeBubble(false));
  }
  initBubbles();
  window.addEventListener('resize', initBubbles);

  function handleMouseMove(e) {
    mouse.x = e.clientX;
    mouse.y = e.clientY;
  }
  window.addEventListener('mousemove', handleMouseMove);

  function draw() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);
    const m = mouse;

    bubbles.forEach((b, i) => {
      // Interaction souris : les bulles fuient le curseur
      const dx = b.x - m.x;
      const dy = b.y - m.y;
      const dist = Math.sqrt(dx * dx + dy * dy);
      if (dist < 90 && dist > 0.1) {
        const force = (90 - dist) / 90;
        b.x += (dx / dist) * force * 2.5;
        b.y += (dy / dist) * force * 2.5;
      }

      // Mouvement
      b.wobble += b.wobbleSpeed;
      b.y -= b.speed;
      b.x += b.drift + Math.sin(b.wobble) * 0.3;

      // Réinitialisation si sortie de l'écran
      if (b.y < -20 || b.x < -50 || b.x > canvas.width + 50) {
        bubbles[i] = makeBubble(true);
      }

      // Dessin de la bulle
      const r = Math.max(0.5, b.r);
      ctx.beginPath();
      ctx.arc(b.x, b.y, r, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(0, 240, 255, ${b.opacity * 0.12})`;
      ctx.fill();
      ctx.strokeStyle = `rgba(120, 230, 255, ${b.opacity * 0.45})`;
      ctx.lineWidth = 1;
      ctx.stroke();
      // Reflet
      ctx.beginPath();
      ctx.arc(b.x - r * 0.3, b.y - r * 0.3, r * 0.3, 0, Math.PI * 2);
      ctx.fillStyle = `rgba(230, 248, 255, ${b.opacity * 0.35})`;
      ctx.fill();
    });

    animationId = requestAnimationFrame(draw);
  }
  draw();
})();