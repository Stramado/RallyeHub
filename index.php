<?php
include './src/php/functions.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="language" content="fr">
    <meta name="description" content="Profitez de regarder les vidéos de vos pilotes de rallye préférés, avec vos amis, votre famille et le monde entier sur RallyeHub">
    <meta name="keywords" content="vidéo, partage, rallye, gratuit, visionnage, social">
    <title>RallyeHub - Galerie des Vidéos</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.js"></script>

    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="./src/js/youtube_meta.js"></script>
    <script src="./src/js/main.js"></script>
</head>
<body>

    <a href="#main-content" class="skip-link">Aller au contenu principal</a>

    <header class="site-header">
        <div class="header-inner">
            <div class="logo">
                <a href="/" style="display: flex; align-items: center;">
                    <img src="./static/img/logo.png" alt="RallyeHub Accueil">
                </a>
            </div>

            <div class="search-container">
                <form role="search" onsubmit="event.preventDefault(); filterVideos();">
                    <label for="search-input" class="sr-only">Rechercher des vidéos</label>
                    <div class="input-wrapper">
                        <i data-lucide="search" class="search-icon"></i>
                        
                        <input 
                            id="search-input" 
                            type="search" 
                            class="input-field search-input"
                            placeholder="Rechercher une vidéo"
                            aria-label="Rechercher des vidéos de voitures"
                            oninput="filterVideos()"
                        >
                        
                        <button type="button" class="virtual-keyboard-btn" aria-label="Ouvrir le clavier virtuel" onclick="toggleKeyboard()">
                            <i data-lucide="keyboard"></i>
                        </button>
                    </div>
                </form>
                <div class="simple-keyboard hidden" id="virtual-keyboard-container"></div>
            </div>

            <div class="header-actions">
                <button class="btn-icon" aria-label="Paramètres d'accessibilité" onclick="toggleModal('settings-modal')">
                    <i data-lucide="person-standing" style="width: 28px; height: 28px;"></i>
                </button>
                
                <button class="avatar" aria-label="Profil utilisateur">
                    <img src="https://github.com/shadcn.png" alt="Avatar de l'utilisateur" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <div class="avatar-fallback">CN</div>
                </button>
            </div>
        </div>
    </header>

    <div class="layout-container">
        
        <aside class="sidebar" aria-label="Menu principal">
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li>
                        <button class="nav-btn active" data-category="Toutes les vidéos">
                        <i data-lucide="layout-grid"></i> Toutes les vidéos
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" data-category="Sport">
                        <i data-lucide="zap"></i> Sport
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" data-category="Supercars">
                        <i data-lucide="trophy"></i> Supercars
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" data-category="Luxe">
                        <i data-lucide="gem"></i> Luxe
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" data-category="Électriques">
                        <i data-lucide="battery-charging"></i> Électriques
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" data-category="Classiques">
                        <i data-lucide="calendar"></i> Classiques
                        </button>
                    </li>
                </ul>
                <a class="mentions-politiques" href=/mentions-legales.php>Mentions Légales</a>
                <a class="mentions-politiques" href=/mentions-legales.php>Politique de confidentialité</a>
            </nav>

            <div class="sidebar-footer">
            </div>
        </aside>

        <main id="main-content" class="main-content">

            <section class="hero-banner" aria-labelledby="hero-title">
                <div class="hero-content">
                    <h1 id="hero-title" class="hero-title">
                        <i data-lucide="flag" class="hero-icon"></i>
                        Bienvenue sur RallyeHub - Votre plateforme vidéo rallye
                    </h1>
                    <p class="hero-description">
                        <strong>RallyeHub</strong> est la <em>plateforme de partage vidéo</em> dédiée aux passionnés de <strong>sport automobile</strong> et de <strong>rallye</strong>. Découvrez gratuitement des <strong>vidéos de rallye</strong>, des courses de <strong>voitures de sport</strong>, des <strong>supercars</strong> en action, des <strong>voitures classiques</strong> et des <strong>véhicules électriques</strong> haute performance.
                    </p>
                    <div class="hero-features">
                        <div class="feature-item">
                            <i data-lucide="play-circle" class="feature-icon"></i>
                            <span><strong>Visionnage gratuit</strong> de vidéos de rallye HD</span>
                        </div>
                        <div class="feature-item">
                            <i data-lucide="filter" class="feature-icon"></i>
                            <span><strong>Filtres par catégorie</strong> : Sport, Luxe, Classiques, Électriques</span>
                        </div>
                        <div class="feature-item">
                            <i data-lucide="search" class="feature-icon"></i>
                            <span><strong>Recherche avancée</strong> pour trouver vos pilotes favoris</span>
                        </div>
                        <div class="feature-item">
                            <i data-lucide="accessibility" class="feature-icon"></i>
                            <span><strong>Interface accessible</strong> avec options de contraste et taille de texte</span>
                        </div>
                    </div>
                    <p class="hero-cta-text">
                        Utilisez la <strong>barre de recherche</strong> pour trouver des vidéos spécifiques, sélectionnez une <strong>catégorie dans le menu latéral</strong>, ou parcourez notre galerie complète. Profitez d'une expérience de visionnage optimale avec notre lecteur vidéo intégré.
                    </p>
                </div>
            </section>
            
            <div class="content-header">
                <h2 id="page-title">Toutes les vidéos</h2>
                
                <div class="sort-wrapper">
                    <label for="sort-select" class="sr-only">Trier par</label>
                    <div class="select-wrapper">
                        <select id="sort-select" class="select-field" onchange="sortVideos()">
                            <option value="recent">Plus récents</option>
                            <option value="popular">Populaires</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="video-grid" id="video-grid">
                <?php createHTMLElementFromJSON(); ?>
            </div> 
            
            <nav class="pagination" aria-label="Pagination">
                <button class="pagination-link" disabled><i data-lucide="chevron-left"></i></button>
                <button class="pagination-link active" aria-current="page">1</button>
                <button class="pagination-link">2</button>
                <button class="pagination-link">3</button>
                <button class="pagination-link"><i data-lucide="chevron-right"></i></button>
            </nav>

        </main>
    </div>

    <div id="settings-modal" class="modal-overlay hidden" role="dialog" aria-modal="true" aria-labelledby="modal-title">
        <div class="modal-content">
            <div class="modal-header">
                <h2 id="modal-title">Paramètres d'accessibilité</h2>
                <button class="btn-icon" onclick="toggleModal('settings-modal')" aria-label="Fermer">
                    <i data-lucide="x"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="setting-item">
                    <div class="setting-text">
                        <span class="setting-label">Mode Contraste Élevé</span>
                        <span class="setting-desc">Augmente la lisibilité du texte</span>
                    </div>
                    <label class="switch-label">
                        <input type="checkbox" class="switch-input" id="contrast-switch">
                        <span class="sr-only">Activer le contraste élevé</span>
                    </label>
                </div>

                <div class="setting-item">
                    <div class="setting-text">
                        <span class="setting-label">Police Dyslexie</span>
                        <span class="setting-desc"> Anonymous Pro </span>
                    </div>
                    <label class="switch-label">
                        <input type="checkbox" class="switch-input" id="dyslexic-switch">
                        <span class="sr-only">Activer la police pour dyslexiques</span>
                    </label>
                </div>

                <div class="setting-item">
                    <div class="setting-text">
                        <span class="setting-label">Taille du texte</span>
                        <span class="setting-desc">Ajuster la taille de la police</span>
                    </div>
                    <div class="font-controls">
                        <button id="font-decrease" class="btn-font" aria-label="Diminuer la taille du texte">A-</button>
                        <span id="font-display" class="font-value">100%</span>
                        <button id="font-increase" class="btn-font" aria-label="Augmenter la taille du texte">A+</button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" onclick="toggleModal('settings-modal')">Enregistrer</button>
            </div>
        </div>
    </div>
</body>
</html>