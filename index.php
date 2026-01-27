<?php
include './src/php/functions.php'
?>

<!DOCTYPE html>
<html lang="fr">
<head>
     <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="language" content="fr">
    <meta name="description" content="Profitez de regarder les vidéos de vos pilotes de rallye préférés, avec vos amis, votre famille et le monde entier sur RallyHub">
    <meta name="keywords" content="vidéo, partage, rallye, gratuit, visionnage, social">
    <title>CarVideos - Galerie Accessible</title>
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <a href="#main-content" class="skip-link">Aller au contenu principal</a>

    <header class="site-header" role="banner">
        <div class="header-inner">
            <div class="logo">
                <i data-lucide="car-front" class="logo-icon"></i>
                <h1><span class="text-orange">Car</span>Videos</h1>
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
                            placeholder="Rechercher une Ferrari, Tesla..."
                            aria-label="Rechercher des vidéos de voitures"
                            oninput="filterVideos()"
                        >
                    </div>
                </form>
            </div>

            <div class="header-actions">
                <button class="btn-icon" aria-label="Paramètres" onclick="toggleModal('settings-modal')">
                    <i data-lucide="settings"></i>
                </button>
                
                <button class="avatar" aria-label="Profil utilisateur">
                    <img src="https://github.com/shadcn.png" alt="Avatar de l'utilisateur" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
                    <div class="avatar-fallback">CN</div>
                </button>
            </div>
        </div>
    </header>

    <div class="layout-container">
        
        <aside class="sidebar" role="navigation" aria-label="Menu principal">
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li>
                        <button class="nav-btn active" onclick="filterCategory('all', this)">
                            <i data-lucide="layout-grid"></i> Toutes les vidéos
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" onclick="filterCategory('Sport', this)">
                            <i data-lucide="zap"></i> Sport
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" onclick="filterCategory('Supercars', this)">
                            <i data-lucide="trophy"></i> Supercars
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" onclick="filterCategory('Luxe', this)">
                            <i data-lucide="gem"></i> Luxe
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" onclick="filterCategory('Électriques', this)">
                            <i data-lucide="battery-charging"></i> Électriques
                        </button>
                    </li>
                    <li>
                        <button class="nav-btn" onclick="filterCategory('Classiques', this)">
                            <i data-lucide="calendar"></i> Classiques
                        </button>
                    </li>
                </ul>
            </nav>

            <div class="sidebar-footer">
                <div class="info-card">
                    <h3>Accessibilité</h3>
                    <p>Contraste élevé activé</p>
                    <div class="progress-root" role="progressbar" aria-label="Niveau d'accessibilité" aria-valuenow="100">
                        <div class="progress-indicator" style="width: 100%;"></div>
                    </div>
                </div>
            </div>
        </aside>

        <main id="main-content" class="main-content" role="main">
            
            <div class="content-header">
                <h2 id="page-title">Toutes les vidéos</h2>
                
                <div class="sort-wrapper">
                    <label for="sort-select" class="sr-only">Trier par</label>
                    <div class="select-wrapper">
                        <select id="sort-select" class="select-field" onchange="sortVideos()">
                            <option value="recent">Plus récents</option>
                            <option value="popular">Populaires</option>
                            <option value="az">A-Z</option>
                        </select>
                    </div>
                </div>
            </div>

            <div class="video-grid" id="video-grid">
                
                <article class="video-card" data-category="Sport" data-title="Supercar de Luxe - Essai Complet">
                    <div class="thumbnail-wrapper">
                        <img src="https://images.unsplash.com/photo-1742056024244-02a093dae0b5?w=800&q=80" alt="Supercar de Luxe sur route" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">12:04</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Supercar de Luxe">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <div class="card-header">
                            <h3 class="card-title">Supercar de Luxe - Essai Complet</h3>
                            <button class="btn-icon-sm" aria-label="Options"><i data-lucide="more-vertical"></i></button>
                        </div>
                        <p class="card-category">Sport</p>
                        <div class="card-meta">
                            <span>12k vues</span> • <span>Il y a 2 jours</span>
                        </div>
                    </div>
                </article>

                <article class="video-card" data-category="Supercars" data-title="Ferrari Rouge - Performance Extrême">
                    <div class="thumbnail-wrapper">
                        <img src="https://images.unsplash.com/photo-1583121274602-3e2820c69888?w=800&q=80" alt="Ferrari rouge vue de face" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">08:45</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Ferrari Rouge">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Ferrari Rouge - Performance Extrême</h3>
                        <p class="card-category">Supercars</p>
                        <div class="card-meta"><span>45k vues</span> • <span>Il y a 1 semaine</span></div>
                    </div>
                </article>

                <article class="video-card" data-category="Supercars" data-title="Lamborghini Bleue - Design Iconique">
                    <div class="thumbnail-wrapper">
                        <img src="https://cdn.pixabay.com/photo/2023/07/19/12/16/car-8136751_1280.jpg" alt="Lamborghini bleue garée" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">15:30</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Lamborghini Bleue">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Lamborghini Bleue - Design Iconique</h3>
                        <p class="card-category">Supercars</p>
                        <div class="card-meta"><span>89k vues</span> • <span>Il y a 3 semaines</span></div>
                    </div>
                </article>

                <article class="video-card" data-category="Électriques" data-title="Tesla Model S - Futur Électrique">
                    <div class="thumbnail-wrapper">
                        <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?w=800&q=80" alt="Tesla blanche en mouvement" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">10:15</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Tesla Model S">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Tesla Model S - Futur Électrique</h3>
                        <p class="card-category">Électriques</p>
                        <div class="card-meta"><span>230k vues</span> • <span>Il y a 1 mois</span></div>
                    </div>
                </article>

                <article class="video-card" data-category="Classiques" data-title="Mustang 1967 - Puissance Américaine">
                    <div class="thumbnail-wrapper">
                        <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=800&q=80" alt="Ford Mustang classique" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">18:20</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Mustang 1967">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Mustang 1967 - Puissance Américaine</h3>
                        <p class="card-category">Classiques</p>
                        <div class="card-meta"><span>67k vues</span> • <span>Il y a 2 mois</span></div>
                    </div>
                </article>
                 <article class="video-card" data-category="Luxe" data-title="Rolls Royce - Silence Absolu">
                    <div class="thumbnail-wrapper">
                        <img src="https://cdn.pixabay.com/photo/2015/11/06/16/33/rolls-1029584_1280.jpg" alt="Intérieur Rolls Royce" loading="lazy" onerror="handleImageError(this)">
                        <span class="duration-badge">22:00</span>
                        <button class="play-overlay" aria-label="Lire la vidéo : Rolls Royce">
                            <i data-lucide="play-circle"></i>
                        </button>
                    </div>
                    <div class="card-content">
                        <h3 class="card-title">Rolls Royce - Silence Absolu</h3>
                        <p class="card-category">Luxe</p>
                        <div class="card-meta"><span>12k vues</span> • <span>Il y a 5 jours</span></div>
                    </div>
                </article>
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
                        <input type="checkbox" class="switch-input">
                        <span class="sr-only">Activer le contraste élevé</span>
                    </label>
                </div>
                <div class="setting-item">
                    <div class="setting-text">
                        <span class="setting-label">Réduire les animations</span>
                        <span class="setting-desc">Minimise les mouvements à l'écran</span>
                    </div>
                    <label class="switch-label">
                        <input type="checkbox" class="switch-input" checked>
                        <span class="sr-only">Activer la réduction d'animations</span>
                    </label>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn-primary" onclick="toggleModal('settings-modal')">Enregistrer</button>
            </div>
        </div>
    </div>

    <script src="./src/js/script.js">
        lucide.createIcons();
    </script>
</body>
</html>