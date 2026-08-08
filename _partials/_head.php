<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Morgan Gardès | Portfolio</title>
    <link href="../assets/styles/style.css" rel="stylesheet">

    <!-- Scripts -->
    <script src="../assets/scripts/bubble-background.js" defer></script>
    <script src="../assets/scripts/depth-indicator.js" defer></script>
    <script src="../assets/scripts/overlay-menu-burger.js" defer></script>
    <script src="../assets/scripts/skills-bubbles.js" defer></script>
    <script src="../assets/scripts/scroll-animations.js" defer></script>
    <script src="../assets/scripts/photo-expand.js" defer></script>

    <!-- Favicon -->
    <link rel="icon" href="../assets/images/favicon-bulles-origine-32px.png">

    <!-- Polices -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=JetBrains+Mono:ital,wght@0,100..800;1,100..800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body class="bg-bleu-des-profondeurs caustic-overlay">

    <!-- Canvas Bulles de fond -->
    <canvas id="bubble-canvas" class="fixed inset-0 pointer-events-none" style="z-index: 0;" aria-hidden="true"></canvas>

    <!-- Indicateur de profondeur -->
    <div class="fixed right-5 top-1/2 -translate-y-1/2 z-30 hidden md:flex flex-col items-center gap-3">
        <span class="font-mono text-[10px] text-cyan-400/60 tracking-widest">DEPTH</span>
        <div class="relative w-px h-40 bg-linear-to-b from-cyan-400/40 via-cyan-400/10 to-transparent rounded-full overflow-hidden">
            <div id="depth-fill" class="absolute left-0 w-full bg-linear-to-b from-cyan-300 to-cyan-500 transition-all duration-150"
                style="height: 0%; top: 0; box-shadow: 0 0 8px #00F0FF;"></div>
            <div id="depth-dot" class="absolute -left-0.75 w-2 h-2 rounded-full bg-cyan-300 transition-all duration-150"
                style="top: 0%; box-shadow: 0 0 12px #00F0FF;"></div>
        </div>
        <span id="depth-value" class="font-mono text-xs text-cyan-300/80 tabular-nums">0m</span>
    </div>

    <!-- Header -->
    <header id="header" class="fixed top-4 left-4 right-4 z-40 py-2 md:py-3 border-2 border-cyan-400/20 rounded-[50px] backdrop-blur-xl">
        <div class="mx-auto max-w-7xl px-4 md:px-8">
            <div class="flex items-center justify-between rounded-full px-3 md:px-5 py-2.5 bg-transparent">

                <!-- Profil avec sonar -->
                <button data-section="profil" class="nav-link flex items-center gap-3 group cursor-pointer">
                    <div class="relative w-11 h-11 md:w-12 md:h-12">
                        <!-- Anneaux sonar -->
                        <span class="absolute inset-0 rounded-full border border-cyan-400/40 animate-ping" style="animation-duration: 3s;"></span>
                        <span class="absolute -inset-1 rounded-full border border-cyan-400/20"></span>
                        <!-- Photo -->
                        <div class="relative w-full h-full rounded-full overflow-hidden ring-2 ring-cyan-400/40 transition-all duration-300">
                            <img src="../assets/documents/portfolio-morgan.png" alt="Photo de profil" id="photo-profil" class="w-full h-full object-cover">
                        </div>
                    </div>
                    <span class="font-mono text-sm text-cyan-100 hidden sm:block">Morgan Gardès</span>
                </button>

                <!-- Navigation Mobile : Burger -->
                <nav class="flex lg:hidden items-center gap-1">
                    <button id="logo-burger" class="text-cyan-300 p-2 cursor-pointer">
                        <img src="../assets/images/logo-menu-hamburger-32px.png" alt="menu hamburger">
                    </button>
                    <!-- Overlay burger -->
                    <div id="overlay-burger" class="fixed transition-all duration-300 translate-x-full top-30 -right-4 left-0 flex flex-col items-center gap-6 px-16 py-14 bg-black/95 rounded-2xl border border-cyan-400/20 text-center z-50">
                        <button id="croix-menu-burger" class="absolute top-6 right-6 text-cyan-300 cursor-pointer">
                            <img class="w-6 h-auto" src="../assets/images/logo-croix-32px.png" alt="Fermer le menu">
                        </button>
                        <button data-section="profil" class="nav-link text-slate-300 hover:text-cyan-200 font-mono text-sm">Profil</button>
                        <button data-section="competences" class="nav-link text-slate-300 hover:text-cyan-200 font-mono text-sm">Compétences</button>
                        <button data-section="projets" class="nav-link  text-slate-300 hover:text-cyan-200 font-mono text-sm">Projets</button>
                        <button data-section="contact" class="nav-link  text-slate-300 hover:text-cyan-200 font-mono text-sm">Contact</button>
                    </div>
                </nav>

                <!-- Navigation Desktop -->
                <nav class="hidden lg:flex items-center gap-1 md:gap-1.5">
                    <button data-section="profil" class="nav-link relative px-2.5 md:px-4 py-2 rounded-full font-mono text-[11px] md:text-sm transition-colors text-slate-300 hover:text-cyan-200 cursor-pointer">
                        Profil
                        <span class="active-indicator absolute inset-0 rounded-full border border-cyan-400/40 bg-cyan-400/10 hidden"></span>
                    </button>
                    <button data-section="competences" class="nav-link relative px-2.5 md:px-4 py-2 rounded-full font-mono text-[11px] md:text-sm transition-colors text-slate-300 hover:text-cyan-200 cursor-pointer">
                        Compétences
                        <span class="active-indicator absolute inset-0 rounded-full border border-cyan-400/40 bg-cyan-400/10 hidden"></span>
                    </button>
                    <button data-section="projets" class="nav-link relative px-2.5 md:px-4 py-2 rounded-full font-mono text-[11px] md:text-sm transition-colors text-slate-300 hover:text-cyan-200 cursor-pointer">
                        Projets
                        <span class="active-indicator absolute inset-0 rounded-full border border-cyan-400/40 bg-cyan-400/10 hidden"></span>
                    </button>
                    <button data-section="contact" class="nav-link relative px-2.5 md:px-4 py-2 rounded-full font-mono text-[11px] md:text-sm transition-colors text-slate-300 hover:text-cyan-200 cursor-pointer">
                        Contact
                        <span class="active-indicator absolute inset-0 rounded-full border border-cyan-400/40 bg-cyan-400/10 hidden"></span>
                    </button>
                </nav>
            </div>
        </div>
    </header>

    <!-- Contenu principal -->
    <div class="relative min-h-screen overflow-x-hidden">
        <main class="relative z-10">