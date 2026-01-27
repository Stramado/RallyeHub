<?php 
include "./src/php/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
    <meta name="language" content="fr">
    <meta name="description" content="Profitez de regarder les vidéos de vos pilotes de rallye préférés, avec vos amis, votre famille et le monde entier sur RallyHub">
    <meta name="keywords" content="vidéo, partage, rallye, gratuit, visionnage, social">
    <title>RallyeHub - Watch a Video</title>
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="stylesheet" href="./static/stylesheets/watch.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">
    <script src="https://unpkg.com/lucide@latest"></script>
</head>
<body>

    <a href="#video-main" class="skip-link">Aller directement à la vidéo</a>

    <header class="site-header" role="banner">
        <div class="header-inner">
            <div class="logo">
                <i data-lucide="car-front" class="logo-icon"></i>
                <a href="/" style="text-decoration:none; color:inherit;">
                    <h1><span class="text-orange">Car</span>Videos</h1>
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
                <button class="avatar" aria-label="Profil"><div class="avatar-fallback">CN</div></button>
            </div>
        </div>
    </header>

    <div class="layout-container">
        
        <aside class="sidebar" role="navigation" aria-label="Menu principal">
            <nav class="sidebar-nav">
                <ul class="nav-list">
                    <li><a href="/" class="nav-btn"><i data-lucide="layout-grid"></i> Accueil</a></li>
                    <li><button class="nav-btn active"><i data-lucide="zap"></i> Sport</button></li>
                    <li><button class="nav-btn"><i data-lucide="trophy"></i> Supercars</button></li>
                    </ul>
            </nav>
        </aside>

        <main id="video-main" class="main-content" role="main">
            
            <nav aria-label="Fil d'Ariane" class="breadcrumb">
                <ol>
                    <li><a href="/">Accueil</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><a href="#">Sport</a></li>
                    <li><span aria-hidden="true">/</span></li>
                    <li><span aria-current="page" class="text-orange">Porsche 911 GT3</span></li>
                </ol>
            </nav>

            <div class="video-player-container">
                <video controls poster="https://images.unsplash.com/photo-1503376763036-066120622c74?w=1280&q=80">
                    <source src="movie.mp4" type="video/mp4">
                    <track src="subtitles_fr.vtt" kind="captions" srclang="fr" label="Français">
                    Votre navigateur ne supporte pas la balise vidéo.
                </video>
            </div>

            <div class="video-info-block">
                <h1 class="video-title">Porsche 911 GT3 - L'essai ultime sur circuit</h1>
                
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
                        <button class="btn-action primary-outline" aria-label="Télécharger la transcription">
                            <i data-lucide="file-text"></i> <span>Transcription</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="video-description-area">
                <div class="description-text">
                    <p>Découvrez notre essai complet de la nouvelle Porsche 911 GT3. Au programme : tour de piste, analyse du moteur atmosphérique et test des équipements intérieurs.</p>
                </div>

                <details class="transcript-accordion">
                    <summary>Lire la transcription textuelle</summary>
                    <div class="transcript-content">
                        <p><strong>[00:00]</strong> Musique d'introduction dynamique.</p>
                        <p><strong>[00:15] Présentateur :</strong> Bonjour à tous et bienvenue sur CarVideos. Aujourd'hui nous sommes sur le circuit du Mans...</p>
                        <p><strong>[00:30]</strong> Bruit de moteur qui rugit.</p>
                        </div>
                </details>
            </div>

            <section class="similar-videos">
                <h2>Vidéos similaires</h2>
                <div class="video-grid">
                    <article class="video-card">
                        <div class="thumbnail-wrapper">
                            <img src="https://images.unsplash.com/photo-1544602356-ac9a60faa826?w=600&q=80" alt="Lamborghini Huracan">
                            <span class="duration-badge">08:30</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Lamborghini Huracan EVO</h3>
                            <p class="card-category">Supercars</p>
                        </div>
                    </article>
                    <article class="video-card">
                        <div class="thumbnail-wrapper">
                            <img src="https://images.unsplash.com/photo-1617788138017-80ad40651399?w=600&q=80" alt="Tesla Model S">
                            <span class="duration-badge">12:15</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Tesla Model S Plaid</h3>
                            <p class="card-category">Électriques</p>
                        </div>
                    </article>
                    <article class="video-card">
                        <div class="thumbnail-wrapper">
                            <img src="https://images.unsplash.com/photo-1552519507-da3b142c6e3d?w=600&q=80" alt="Ford Mustang">
                            <span class="duration-badge">10:00</span>
                        </div>
                        <div class="card-content">
                            <h3 class="card-title">Ford Mustang V8</h3>
                            <p class="card-category">Classiques</p>
                        </div>
                    </article>
                </div>
            </section>

        </main>
    </div>

    <script src="./src/js/script.js">
        lucide.createIcons();
    </script>
</body>
</html>