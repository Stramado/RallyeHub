<?php 
include "./src/php/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions légales | RallyeHub</title>
    
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">

    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="./src/js/main.js"></script>

    <style>
        /* Styles spécifiques pour centrer et formater le texte légal */
        .legal-page-container {
            max-width: 900px;
            margin: 40px auto;
            padding: 0 1.5rem;
        }

        .legal-content {
            background-color: var(--bg-card);
            padding: 2.5rem;
            border-radius: var(--radius);
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        .legal-content h1 {
            color: var(--primary-orange);
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2.5rem;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 1rem;
        }

        .legal-content section {
            margin-bottom: 2.5rem;
        }

        .legal-content h2 {
            color: var(--text-white);
            font-size: 1.4rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .legal-content p, .legal-content li {
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 0.8rem;
        }
        
        /* En mode contraste élevé, on force le texte en blanc pour la lisibilité */
        body.high-contrast .legal-content p, 
        body.high-contrast .legal-content li {
            color: var(--text-white);
        }

        .legal-content ul {
            margin-left: 1.5rem;
            list-style: disc;
            margin-bottom: 1rem;
        }

        .legal-content a {
            color: var(--primary-orange);
            text-decoration: none;
            font-weight: bold;
        }

        .legal-content a:hover {
            text-decoration: underline;
        }

        .legal-content address {
            font-style: normal;
            border-left: 3px solid var(--primary-orange);
            padding-left: 1rem;
            margin-top: 1rem;
            background: rgba(255, 255, 255, 0.03);
            padding: 1rem;
            border-radius: 0 var(--radius) var(--radius) 0;
        }
    </style>
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

    <main id="main-content" class="legal-page-container">
        <div class="legal-content">
            <h1>Mentions légales</h1>

            <section id="editeur">
                <h2>1. Éditeur du site</h2>
                <p>Le site <strong>RallyeHub</strong> est un projet fictif à but pédagogique, développé dans le cadre de travaux portant sur l’accessibilité, la qualité web et le référencement naturel (SEO).</p>
                <address>
                    <strong>Éditeur :</strong> RallyeHub – Projet Étudiant<br>
                    <strong>Responsable de publication :</strong> Florian Martin<br>
                    12 rue du Circuit, 75010 Paris, France<br>
                    📧 <a href="mailto:contact@rallyhub.fr">contact@rallyhub.fr</a><br>
                    ☎️ +33 (0)1 23 45 67 89
                </address>
            </section>

            <section id="hebergeur">
                <h2>2. Hébergement</h2>
                <p>Le site est hébergé par :</p>
                <address>
                    <strong>IONOS SARL</strong><br>
                    7 PLACE DE LA GARE – 57200 SARREGUEMINES – France<br>
                    📞 3630<br>
                    🌐 <a href="https://www.ionos.fr/" target="_blank" rel="noopener noreferrer">www.ionos.fr</a>
                </address>
            </section>

            <section id="objet">
                <h2>3. Objet du site</h2>
                <p>Le site <strong>RallyeHub</strong> permet de visionner et partager des vidéos liées aux compétitions automobiles de type rallye.</p>
                <p>Les contenus sont proposés à titre informatif, illustratif et non commercial. Les vidéos intégrées proviennent de plateformes tierces (YouTube, Vimeo, Dailymotion) et respectent leurs conditions d’utilisation.</p>
            </section>

            <section id="propriete">
                <h2>4. Propriété intellectuelle</h2>
                <p>L’ensemble du contenu du site (textes, images, vidéos, graphismes, logo, code source, etc.) est protégé par le Code de la propriété intellectuelle.</p>
                <p>Toute reproduction, distribution, modification ou réutilisation sans autorisation écrite préalable est interdite. Les marques et logos cités restent la propriété de leurs détenteurs respectifs.</p>
            </section>

            <section id="donnees">
                <h2>5. Données personnelles (RGPD)</h2>
                <p>Conformément au Règlement (UE) 2016/679 (RGPD) et à la loi Informatique et Libertés modifiée, RallyeHub s’engage à garantir la protection et la confidentialité des données personnelles.</p>
                <ul>
                    <li><strong>Données collectées :</strong> adresse e-mail via le formulaire de contact, adresse IP à des fins statistiques.</li>
                    <li><strong>Finalités :</strong> réponse aux messages, analyse du trafic pour améliorer l’accessibilité et la performance du site.</li>
                    <li><strong>Durée de conservation :</strong> 12 mois maximum.</li>
                    <li><strong>Exercice des droits :</strong> écrire à <a href="mailto:privacy@rallyhub.fr">privacy@rallyhub.fr</a></li>
                </ul>
            </section>

            <section id="cookies">
                <h2>6. Cookies</h2>
                <p>Le site utilise des cookies techniques nécessaires à son fonctionnement. Certains cookies tiers (YouTube, Google Analytics) peuvent être déposés lors de la lecture des vidéos intégrées. L’utilisateur peut les refuser ou les paramétrer à tout moment.</p>
            </section>

            <section id="responsabilite">
                <h2>7. Responsabilité</h2>
                <p>L’éditeur ne saurait être tenu responsable :</p>
                <ul>
                    <li>des erreurs ou omissions dans le contenu du site ;</li>
                    <li>d’une indisponibilité temporaire du service ;</li>
                    <li>du contenu des sites externes vers lesquels RallyeHub renvoie.</li>
                </ul>
                <p>Le site étant fictif, aucune garantie ni service réel n’est proposé.</p>
            </section>

            <section id="droit">
                <h2>8. Droit applicable</h2>
                <p>Les présentes mentions légales sont régies par le droit français. En cas de litige, et en l’absence de résolution amiable, les tribunaux compétents de Paris seront seuls compétents.</p>
            </section>

            <section id="contact">
                <h2>9. Contact</h2>
                <p>Pour toute question relative aux mentions légales ou à la protection des données :</p>
                <address>
                    📧 <a href="mailto:contact@rallyhub.fr">contact@rallyhub.fr</a><br>
                    📍 RallyeHub – 12 rue du Circuit, 75010 Paris, France
                </address>
            </section>
        </div>
    </main>

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
                        <span class="setting-label">Police adaptée</span>
                        <span class="setting-desc">Utiliser Anonymous Pro (Dyslexie)</span>
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