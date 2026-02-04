<?php 
include "./src/php/functions.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Politique de confidentialité | RallyeHub</title>
    
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <link rel="stylesheet" href="./static/stylesheets/index.css">
    <link rel="icon" type="image/x-icon" href="./static/img/favicon.ico">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/css/index.css">
    <script src="https://cdn.jsdelivr.net/npm/simple-keyboard@latest/build/index.js"></script>
    
    <script src="https://unpkg.com/lucide@latest"></script>
    <script src="./src/js/main.js"></script>

    <style>
        /* 2. STYLE SANS SIDEBAR */
        /* On écrase le style par défaut pour centrer le contenu */
        body {
            display: block; /* Annule le flex du layout principal */
        }

        .legal-page-wrapper {
            max-width: 900px;
            margin: 40px auto; /* Centré verticalement et horizontalement */
            padding: 0 1.5rem;
        }

        .legal-content {
            background-color: var(--bg-card);
            padding: 3rem;
            border-radius: var(--radius);
            border: 1px solid var(--border-color);
            box-shadow: 0 4px 20px rgba(0,0,0,0.3);
        }

        /* Titres et Textes */
        .legal-content h1 {
            color: var(--primary-orange);
            font-size: 2.2rem;
            text-align: center;
            margin-bottom: 3rem;
            border-bottom: 2px solid var(--border-color);
            padding-bottom: 1.5rem;
        }

        .legal-content section {
            margin-bottom: 2.5rem;
        }

        .legal-content h2 {
            color: var(--text-white);
            font-size: 1.5rem;
            margin-bottom: 1rem;
            font-weight: bold;
        }
        
        .legal-content p, .legal-content li {
            color: var(--text-muted);
            line-height: 1.7;
            margin-bottom: 0.8rem;
            font-size: 1.05rem;
        }
        
        /* Support Accessibilité */
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
            border-left: 4px solid var(--primary-orange);
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

            <div style="flex: 1;"></div>

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

    <main id="main-content" class="legal-page-wrapper">
        <div class="legal-content">
            <h1>Politique de confidentialité</h1>

            <section id="intro">
                <p>La présente politique de confidentialité décrit la manière dont le site <strong>RallyeHub</strong> collecte, utilise et protège les données personnelles de ses utilisateurs. Elle s’inscrit dans le respect du <strong>Règlement Général sur la Protection des Données (RGPD – UE 2016/679)</strong> et de la <strong>loi Informatique et Libertés</strong>.</p>
            </section>

            <section id="responsable">
                <h2>1. Responsable du traitement</h2>
                <p>Le responsable du traitement des données collectées sur ce site est :</p>
                <address>
                    <strong>RallyeHub – Projet Étudiant</strong><br>
                    12 rue du Circuit, 75010 Paris, France<br>
                    📧 <a href="mailto:privacy@rallyhub.fr">privacy@rallyhub.fr</a>
                </address>
            </section>

            <section id="donnees-collectees">
                <h2>2. Données collectées</h2>
                <p>Le site <strong>RallyeHub</strong> limite la collecte des données personnelles au strict nécessaire. Les données susceptibles d’être collectées sont :</p>
                <ul>
                    <li>Adresse IP (à des fins statistiques et de sécurité)</li>
                    <li>Données techniques liées à la navigation (type de navigateur, système d’exploitation, temps de consultation)</li>
                </ul>
            </section>

            <section id="finalites">
                <h2>3. Finalités du traitement</h2>
                <p>Les données collectées servent exclusivement à :</p>
                <ul>
                    <li>Améliorer la performance, l’accessibilité et la qualité du site</li>
                    <li>Élaborer des statistiques de fréquentation anonymisées</li>
                </ul>
            </section>

            <section id="base-legale">
                <h2>4. Base légale du traitement</h2>
                <p>Le traitement des données repose sur les bases légales suivantes :</p>
                <ul>
                    <li><strong>Consentement</strong> de l’utilisateur (article 6.1.a du RGPD) pour l’envoi de formulaires et l’usage de cookies analytiques</li>
                    <li><strong>Intérêt légitime</strong> (article 6.1.f) pour la sécurité et le bon fonctionnement du site</li>
                </ul>
            </section>

            <section id="conservation">
                <h2>5. Durée de conservation des données</h2>
                <p>Les données sont conservées pendant une durée maximale de <strong>12 mois</strong> à compter de la dernière interaction de l’utilisateur avec le site. Passé ce délai, elles sont automatiquement supprimées ou anonymisées.</p>
            </section>

            <section id="droits">
                <h2>6. Vos droits</h2>
                <p>Conformément au RGPD, vous disposez des droits suivants :</p>
                <ul>
                    <li>Droit d’accès à vos données</li>
                    <li>Droit de rectification en cas d’erreur</li>
                    <li>Droit à l’effacement (« droit à l’oubli »)</li>
                    <li>Droit à la limitation du traitement</li>
                    <li>Droit d’opposition au traitement de vos données</li>
                    <li>Droit à la portabilité des données</li>
                </ul>
                <p>Pour exercer ces droits, vous pouvez contacter le responsable du traitement à l’adresse suivante :  
                📧 <a href="mailto:privacy@rallyhub.fr">privacy@rallyhub.fr</a></p>
            </section>

            <section id="cookies">
                <h2>7. Cookies et traceurs</h2>
                <p>RallyeHub utilise des cookies techniques nécessaires au bon fonctionnement du site et des cookies tiers pour la lecture de vidéos intégrées ou l’analyse de trafic (YouTube, Google Analytics).</p>
                <p>Lors de votre première visite, une bannière d’information vous permet de choisir d’accepter ou de refuser les cookies non essentiels. Vous pouvez modifier votre choix à tout moment depuis le pied de page.</p>
            </section>

            <section id="partage">
                <h2>8. Partage et transfert des données</h2>
                <p>Les données personnelles ne sont en aucun cas revendues, échangées ou cédées à des tiers. Elles peuvent être temporairement accessibles par des prestataires techniques (hébergeur, maintenance) soumis à une obligation de confidentialité stricte.</p>
            </section>

            <section id="securite">
                <h2>9. Sécurité des données</h2>
                <p>RallyeHub met en œuvre des mesures techniques et organisationnelles pour garantir la sécurité et la confidentialité des données (chiffrement HTTPS, pare-feu, accès restreints aux bases de données, sauvegardes régulières).</p>
            </section>

            <section id="contact">
                <h2>10. Contact et réclamations</h2>
                <p>Pour toute question concernant cette politique ou vos droits, contactez :  
                📧 <a href="mailto:privacy@rallyhub.fr">privacy@rallyhub.fr</a></p>
                <p>Si vous estimez, après nous avoir contactés, que vos droits ne sont pas respectés, vous pouvez adresser une réclamation à la <a href="https://www.cnil.fr/" target="_blank" rel="noopener noreferrer">CNIL</a>.</p>
            </section>

            <section id="maj">
                <h2>11. Mise à jour de la politique</h2>
                <p>La présente politique de confidentialité peut être modifiée à tout moment afin de se conformer à l’évolution légale ou technique du site. La dernière mise à jour date du <strong>4 février 2026</strong>.</p>
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