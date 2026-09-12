# Portfolio — Morgan Gardès

> Développeur web & web mobile — Portfolio personnel

Portfolio one-page avec identité visuelle : bulles flottantes interactives, indicateur de profondeur qui évolue au scroll, ambiance cyan sur fond bleu nuit.

## Fonctionnalités

- **Navigation fluide** : scroll spy (le badge de navigation suit la section visible), scroll animé au clic
- **Indicateur de profondeur** : compteur de 10m à 5000m qui évolue au scroll
- **Menu burger mobile** : fermeture au clic extérieur, après sélection d'une section
- **Photo de profil agrandissable** : fermeture mutuelle avec le menu burger
- **Bulles de compétences cliquables** : explosion de particules binaires au clic
- **Projets dynamiques** : cartes générées en PHP, liens externes par projet, zoom au survol
- **Animations en cascade** : apparition progressive des éléments au scroll

## Technologies

| Technologie | Usage |
|---|---|
| **PHP** | Rendu de la page, partials réutilisables, données projets en tableaux |
| **JavaScript** | Animations canvas, scroll spy, menu burger, bulles de compétences |
| **Tailwind CSS v4** | Styling (compilation CLI) |
| **HTML5 / CSS3** | Structure et styles personnalisés |

## Structure du projet

```
portfolio-morgan/
├── index.php              → redirection vers /public
├── _partials/             → _head.php (header/nav) + _footer.php
├── public/
│   └── index.php          → la page principale (4 sections)
└── assets/
    ├── styles/            → input.css (source) + style.css (compilé)
    ├── scripts/           → 6 scripts JavaScript
    ├── gifs/              → démos des projets
    ├── images/            → icônes, favicon
    └── documents/         → CV + photo de profil
```

## Les sections

1. **Profil** — présentation
2. **Compétences** — bulles cliquables (explosion binaire) + bouton CV
3. **Projets** — projets avec GIFs
4. **Contact**

## Les scripts JavaScript

| Script | Rôle |
|---|---|
| `bubble-background.js` | Bulles flottantes qui fuient la souris (canvas) |
| `depth-indicator.js` | Compteur de profondeur au scroll |
| `overlay-menu-burger.js` | Menu burger mobile |
| `photo-expand.js` | Photo de profil agrandissable |
| `scroll-animations.js` | Scroll spy + animations en cascade |
| `skills-bubbles.js` | Bulles de compétences + explosion |

## Contact

- **Email** : [morgan.gardes.19@gmail.com](mailto:morgan.gardes.19@gmail.com)
- **GitHub** : [morgangardes19-ai](https://github.com/morgangardes19-ai)
- **LinkedIn** : (https://www.linkedin.com/in/morgan-gard%C3%A8s-38142a428/)

---

*Projet réalisé dans le cadre de la formation Développeur Web & Web Mobile (RNCP niveau 5) — Garage404*