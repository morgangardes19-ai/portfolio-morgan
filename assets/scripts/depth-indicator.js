// Indicateur de profondeur (de 10m à 5000m)
(function() {
  const depthValue = document.getElementById('depth-value');
  const depthFill = document.getElementById('depth-fill');
  const depthDot = document.getElementById('depth-dot');
  if (!depthValue || !depthFill || !depthDot) return;

  function onScroll() {
    const max = document.body.scrollHeight - window.innerHeight;
    if (max <= 0) return;

    const pct = Math.min(1, window.scrollY / max);
    const depth = Math.round(10 + pct * 4990);

    depthValue.textContent = depth + 'm';
    depthFill.style.height = (pct * 100) + '%';
    depthDot.style.top = (pct * 100) + '%';
  }

  onScroll();
  window.addEventListener('scroll', onScroll, { passive: true });
})();