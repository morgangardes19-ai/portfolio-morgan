<?php require_once "../_partials/_head.php" ?>

<!-- SECTION 1 : PROFIL -->
<section id="profil">
    <p>Qui suis-je ?</p>
    <h1>Morgan Gardès</h1>
    <p>&gt; Développeur web et web mobile</p>
    <p>Passionné par le développement web, je transforme des idées en
        expériences numériques fluides.</p>
    <p>Curieux de nature, je plonge constamment dans de nouvelles
        technologies pour repousser mes limites.
        Chaque projet est une exploration vers plus de profondeur.</p>
</section>

<!-- SECTION 2 : COMPÉTENCES -->
<section id="competences" class="relative min-h-screen flex flex-col items-center justify-center px-6 md:px-20 py-32">
    <div class="text-center mb-16">
        <!-- <p class="font-mono text-sm text-cyan-400/70 mb-2">// 02</p> -->
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider text-glow-cyan">
            Compétences
        </h2>
    </div>

    <!-- Bouton CV -->

    <div class="flex justify-center mb-20">
        <a href="../assets/documents/cv-morgan-gardes-stage-dwwm.pdf" target="blank"
            class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-full border border-cyan-400/50 bg-cyan-400/5 hover:bg-cyan-400/15 transition-colors">
            <!-- Icône ouvrir -->
            <svg class="w-4 h-4 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                <polyline points="15 3 21 3 21 9" />
                <line x1="10" y1="14" x2="21" y2="3" />
            </svg>
            <span class="font-mono text-sm text-cyan-100 tracking-wide">Ouvrir mon CV</span>
            <span class="absolute inset-0 rounded-full border border-cyan-400/30 animate-ping opacity-25"></span>
        </a>
    </div>

    <!-- Bulles de compétences -->
    <div class="flex flex-wrap justify-center gap-5 md:gap-8 max-w-4xl mx-auto" id="skills-grid">
        <!-- Généré par skills-bubbles.js -->
    </div>
</section>

<!-- SECTION 3 : PROJETS -->
<section id="projets">

</section>

<!-- SECTION 4 : CONTACT -->
<section id="contact">

</section>

<?php require_once "../_partials/_footer.php" ?>




<!-------------------------------------- SVG icônes -------------------------------------->
<!-- Télécharger -->
<svg class="w-5 h-5 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
    <polyline points="7 10 12 15 17 10" />
    <line x1="12" y1="15" x2="12" y2="3" />
</svg>

<!-- Icône d'ouverture de liens -->
<svg class="w-4 h-4 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
    <polyline points="15 3 21 3 21 9" />
    <line x1="10" y1="14" x2="21" y2="3" />
</svg>

<!-- Icône Mail -->
<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
    <polyline points="22,6 12,13 2,6" />
</svg>

<!-- Icône LinkedIn -->
<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor">
    <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z" />
    <rect x="2" y="9" width="4" height="12" />
    <circle cx="4" cy="4" r="2" />
</svg>

<!-- Icône GitHub -->
<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor">
    <path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22" />
</svg>
<!-- ------------------------------------------------------------------------------ -->