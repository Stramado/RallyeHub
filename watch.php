<?php 
include "./src/php/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="language" content="fr">
    <meta name="description" content="Profitez de regarder les vidéos de vos pilotes de rallye préférés, avec vos amis, votre famille et le monde entier sur RallyeHub">
    <meta name="keywords" content="vidéo, partage, rallye, gratuit, visionnage, social">
    <title>RallyeHub - Regarder une vidéo</title>
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="stylesheet" href="./static/stylesheets/watch.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="./src/js/main.js"></script>
    <script src="./src/js/load_title.js"></script>
    <script src="./src/js/youtube_meta.js"></script>
</head>
<body>

    <a href="#video-main" class="skip-link">Aller directement à la vidéo</a>

    <header class="site-header">
        <div class="header-inner">
            <div class="logo">
                <a href="/" style="display: flex; align-items: center;">
                    <img src="./static/img/logo.png" alt="RallyeHub Accueil">
                </a>
            </div>
            <div class="search-container">
                <form role="search">
                    <label for="search-input" class="sr-only">Rechercher</label>
                    <div class="input-wrapper">
                        <i data-lucide="search" class="search-icon"></i>
                        <input id="search-input" type="search" class="input-field" placeholder="Rechercher...">
                    </div>
                </form>
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
                    <li><a href="/" class="nav-btn"><i data-lucide="layout-grid"></i> Accueil</a></li>
                    <li><button class="nav-btn active"><i data-lucide="zap"></i> Sport</button></li>
                    <li><button class="nav-btn"><i data-lucide="trophy"></i> Supercars</button></li>
                    </ul>
            </nav>
        </aside>

        <main id="video-main" class="main-content">
            
            <nav aria-label="Fil d'Ariane" class="breadcrumb">
                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="#">Sport</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><span aria-current="page" class="text-orange">Porsche 911 GT3</span></li>
                </ol>
            </nav>

            <?php displayVideo(); # Parse the GET arguments and display the video ?>

            <div class="video-info-block">
                <h1 class="video-title"></h1>
                
                <div class="video-actions">
                    <div class="video-stats">
                        <span>125k vues</span> • <span>Il y a 2 jours</span>
                    </div>
                    <div class="action-buttons">
                        <button class="btn-action" aria-label="J'aime cette vidéo">
                            <i data-lucide="thumbs-up"></i> <span>12k</span>
                        </button>
                        <button class="btn-action" aria-label="Partager la vidéo">
                            <i data-lucide="share-2"></i> <span>Partager</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="video-description-area">
                <div class="description-text">
                    <p>Incroyable voiture de Rallye (WRC) qui roule. Venez regarder comme son 4 cylindres hurle et comme le pilote prend ses virages</p>
                </div>
            </div>

            <section class="similar-videos">
                <h2>Vidéos similaires</h2>
                <div class="video-grid">
                    <?php createHTMLElementFromJSON();?>
                </div>
            </section>
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
    
    <script>lucide.createIcons();</script>
</body>
</html>