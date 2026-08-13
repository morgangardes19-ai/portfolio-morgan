<?php require_once "../_partials/_head.php" ?>

<!-- SECTION 1 : PROFIL -->
<section id="profil" class="relative min-h-screen flex items-center justify-end px-6 md:px-20 py-32">
    <div class="max-w-2xl w-full mr-8">

        <p data-animate data-delay="0" class="font-mono text-sm text-cyan-400/70 mb-4 translate-x-4 opacity-0 transition-all duration-500">
            <span class="text-cyan-300">$</span> Qui suis-je ?
        </p>

        <h1 data-animate data-delay="0.1"
            class="font-mono text-4xl md:text-6xl font-bold text-white mb-3 uppercase tracking-wider text-glow-cyan translate-x-8 opacity-0 transition-all duration-500">
            Morgan Gardès
        </h1>

        <p data-animate data-delay="0.2"
            class="font-mono text-cyan-300 text-lg mb-8 tracking-wide translate-x-8 opacity-0 transition-all duration-500">
            &gt; Développeur web et web mobile
        </p>

        <div data-animate data-delay="0.3"
            class="flex flex-col gap-5 border-l-2 border-cyan-400/30 pl-6 translate-x-8 opacity-0 transition-all duration-500">
            <p class="text-lg leading-relaxed text-slate-300">
                Passionné par le développement web, je transforme des idées en
                expériences numériques fluides.
            </p>
            <p class="text-lg leading-relaxed text-slate-400">
                Curieux de nature, je plonge constamment dans de nouvelles
                technologies pour repousser mes limites.
                Chaque projet est une exploration vers plus de profondeur.
            </p>
        </div>

        <div data-animate data-delay="0.5"
            class="mt-8 flex flex-wrap gap-3 translate-x-8 opacity-0 transition-all duration-500">
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Frontend</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Backend</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">UI/UX</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Performance</span>
            <span class="font-mono text-xs px-3 py-1.5 rounded-full border border-cyan-400/20 bg-cyan-400/5 text-cyan-200/80">Responsive</span>
        </div>
    </div>
</section>

<!-- SECTION 2 : COMPÉTENCES -->
<section id="competences" class="relative min-h-screen flex flex-col items-center justify-center px-6 md:px-20">
    <div class="text-center mb-16">
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider text-glow-cyan">
            Compétences
        </h2>
    </div>

    <!-- Bouton CV -->
    <div class="flex justify-center mb-20">
        <a href="../assets/documents/cv-morgan-gardes-dwwm.pdf" target="_blank" rel="noopener noreferrer"
            class="group relative inline-flex items-center gap-3 px-8 py-4 rounded-full border border-cyan-400/50 bg-cyan-400/5 hover:bg-cyan-400/15 transition-colors">
            <!-- Icône ouvrir -->
            <span class="font-mono text-sm text-cyan-100 tracking-wide">Ouvrir mon CV</span>
            <svg class="w-4 h-4 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                <polyline points="15 3 21 3 21 9" />
                <line x1="10" y1="14" x2="21" y2="3" />
            </svg>
            <span class="absolute inset-0 rounded-full border border-cyan-400/30 animate-ping opacity-25"></span>
        </a>
    </div>

    <!-- Bulles de compétences -->
    <div class="flex flex-wrap justify-center gap-5 md:gap-8 max-w-4xl mx-auto" id="skills-grid">
    </div>
</section>

<!-- SECTION 3 : PROJETS -->
<section id="projets" class="relative min-h-screen px-6 md:px-20">
    <div class="text-center mb-16">
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider text-glow-cyan">
            Projets
        </h2>
    </div>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
        <?php
        $projects = [
            [
                'title' => 'Mini Chat',
                'desc' => 'Mini canal de discussion qui requiert une inscription, sur le thème "détective".',
                'tags' => ['HTML', 'Tailwind', 'PHP', 'JavaScript', 'SQL'],
                'img' => '../assets/gifs/gif-projet-minichat.webp',
                'link' => 'https://morgan-minichat.projets-dev.garage404.com/public/index.php',
            ],
            [
                'title' => 'In the hall of the Mountain King',
                'desc' => 'Site en responsive.',
                'tags' => ['HTML', 'Tailwind'],
                'img' => '../assets/gifs/gif-the-mountain.webp',
                'link' => 'https://the-mountain-avec-tailwind.vercel.app/',
            ],
            [
                'title' => 'Drumpad',
                'desc' => 'Outil permettant d\'enregistrer et de rejouer des notes.',
                'tags' => ['HTML', 'CSS', 'JavaScript'],
                'img' => '../assets/gifs/gif-drumpad.webp',
                'link' => 'https://drumpad-navy.vercel.app/',
            ],
            [
                'title' => 'W.',
                'desc' => 'Site en responsive.',
                'tags' => ['HTML', 'Tailwind'],
                'img' => '../assets/gifs/gif-w-avec-tailwind.webp',
                'link' => 'https://w-avec-tail-wind.vercel.app/',
            ],
        ];
        foreach ($projects as $index => $project):
        ?>
            <div data-animate data-delay="<?= $index * 0.1 ?>"
                class="group relative rounded-2xl overflow-hidden border border-cyan-400/15 glass hover:border-cyan-400/40 translate-y-12 opacity-0 transition-all duration-700 hover:-translate-y-6">
                <div class="relative aspect-3/4">
                    <div class="absolute inset-2 rounded-xl border-2 border-cyan-400/0 group-hover:border-cyan-400/30 transition-colors pointer-events-none overflow-hidden">
                        <div class="w-full h-full transition-transform duration-1500 ease-out group-hover:scale-150">
                            <img src="<?= $project['img'] ?>" alt="Screenshot du projet <?= $project['title'] ?>" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <div class="absolute inset-0 bg-linear-to-b from-transparent via-transparent to-[#020812] pointer-events-none"></div>
                    <a href="<?= $project['link'] ?>" target="_blank" rel="noopener noreferrer" class="absolute top-3 right-3 w-9 h-9 rounded-full flex items-center justify-center bg-[#020812]/70 border border-cyan-400/30 opacity-0 group-hover:opacity-100 transition-opacity">
                        <svg class="w-4 h-4 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                            <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6" />
                            <polyline points="15 3 21 3 21 9" />
                            <line x1="10" y1="14" x2="21" y2="3" />
                        </svg>
                    </a>
                </div>
                <div class="p-5">
                    <h3 class="font-mono text-lg text-white mb-1"><?= $project['title'] ?></h3>
                    <p class="text-sm text-slate-400 mb-3"><?= $project['desc'] ?></p>
                    <div class="flex flex-wrap gap-2">
                        <?php foreach ($project['tags'] as $tag): ?>
                            <span class="font-mono text-[10px] px-2 py-1 rounded-full border border-cyan-400/20 text-cyan-300/80"><?= $tag ?></span>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>

<!-- SECTION 4 : CONTACT -->
<section id="contact" class="relative px-6 md:px-20 py-32">
    <div class="text-center mb-16">
        <h2 class="font-mono text-3xl md:text-5xl font-bold text-white uppercase tracking-wider">
            Contact
        </h2>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-3 gap-6 max-w-4xl mx-auto">
        <?php
        $contacts = [
            ['icon' => 'mail', 'label' => 'Email', 'value' => '', 'href' => 'mailto:morgan.gardes.19@gmail.com'],
            ['icon' => 'linkedin', 'label' => 'LinkedIn', 'value' => '', 'href' => '#'],
            ['icon' => 'github', 'label' => 'GitHub', 'value' => '', 'href' => 'https://github.com/morgangardes19-ai'],
        ];

        function renderIcon($icon)
        {
            switch ($icon) {
                case 'mail':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>';
                case 'linkedin':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"/><rect x="2" y="9" width="4" height="12"/><circle cx="4" cy="4" r="2"/></svg>';
                case 'github':
                    return '<svg class="w-7 h-7 text-cyan-300" viewBox="0 0 24 24" fill="currentColor"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"/></svg>';
                default:
                    return '';
            }
        }

        foreach ($contacts as $index => $contact):
        ?>
            <a href="<?= $contact['href'] ?>"
                target="<?= str_starts_with($contact['href'], 'http') ? '_blank' : '' ?>"
                rel="<?= str_starts_with($contact['href'], 'http') ? 'noopener noreferrer' : '' ?>"
                data-animate data-delay="<?= $index * 0.08 ?>"
                class="group relative flex flex-col items-center gap-4 p-8 rounded-2xl border border-cyan-400/15 glass hover:border-cyan-400/50 translate-y-4 opacity-0 transition-all duration-500 hover:-translate-y-1.5">

                <span class="absolute inset-0 rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity bg-cyan-400/5"></span>
                <span class="relative w-16 h-16 rounded-full flex items-center justify-center border border-cyan-400/30 bg-cyan-400/5 group-hover:shadow-[0_0_25px_rgba(0,240,255,0.4)] transition-shadow">
                    <?= renderIcon($contact['icon']) ?>
                </span>
                <span class="relative font-mono text-xs text-cyan-400/60 uppercase tracking-wider"><?= $contact['label'] ?></span>
                <span class="relative text-sm text-slate-200 text-center break-all"><?= $contact['value'] ?></span>
            </a>
        <?php endforeach; ?>
    </div>
</section>


<?php require_once "../_partials/_footer.php" ?>




