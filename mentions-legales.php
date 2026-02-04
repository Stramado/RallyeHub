<?php ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mentions légales | RallyHub</title>
    <link rel="stylesheet" href="./static/stylesheets/main.css">
    <style>
        /* Styles spécifiques à la page Mentions légales */
        main {
            max-width: 900px;
            margin: 120px auto 80px auto;
            padding: 2rem;
            background-color: var(--bg-card);
            border-radius: var(--radius);
            border: 1px solid var(--border-color);
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }

        h1, h2 {
            color: var(--primary-orange);
            margin-bottom: 1rem;
            font-weight: bold;
        }

        h1 {
            font-size: 2rem;
            text-align: center;
            margin-bottom: 2rem;
        }

        h2 {
            margin-top: 2.5rem;
            font-size: 1.3rem;
        }

        p, li {
            color: var(--text-muted);
            margin-bottom: 0.8rem;
        }

        ul {
            margin-left: 1.5rem;
            list-style: disc;
        }

        a {
            color: var(--primary-orange);
            text-decoration: none;
        }

        a:hover {
            color: var(--primary-hover);
            text-decoration: underline;
        }

        address {
            font-style: normal;
            color: var(--text-muted);
            margin-bottom: 1rem;
        }

        section + section {
            border-top: 1px solid var(--border-color);
            padding-top: 2rem;
        }
    </style>
</head>
<body>

    <main>
        <h1>Mentions légales</h1>

        <section id="editeur">
            <h2>1. Éditeur du site</h2>
            <p>Le site <strong>RallyHub</strong> est un projet fictif à but pédagogique, développé dans le cadre de travaux portant sur l’accessibilité, la qualité web et le référencement naturel (SEO).</p>
            <address>
                <strong>Éditeur :</strong> RallyHub – Projet Étudiant<br>
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
                <strong>OVH SAS</strong><br>
                2 rue Kellermann – 59100 Roubaix – France<br>
                📞 1007<br>
                🌐 <a href="https://www.ovhcloud.com" target="_blank" rel="noopener noreferrer">www.ovhcloud.com</a>
            </address>
        </section>

        <section id="objet">
            <h2>3. Objet du site</h2>
            <p>Le site <strong>RallyHub</strong> permet de visionner et partager des vidéos liées aux compétitions automobiles de type rallye.</p>
            <p>Les contenus sont proposés à titre informatif, illustratif et non commercial. Les vidéos intégrées proviennent de plateformes tierces (YouTube, Vimeo, Dailymotion) et respectent leurs conditions d’utilisation.</p>
        </section>

        <section id="propriete">
            <h2>4. Propriété intellectuelle</h2>
            <p>L’ensemble du contenu du site (textes, images, vidéos, graphismes, logo, code source, etc.) est protégé par le Code de la propriété intellectuelle.</p>
            <p>Toute reproduction, distribution, modification ou réutilisation sans autorisation écrite préalable est interdite. Les marques et logos cités restent la propriété de leurs détenteurs respectifs.</p>
        </section>

        <section id="donnees">
            <h2>5. Données personnelles (RGPD)</h2>
            <p>Conformément au Règlement (UE) 2016/679 (RGPD) et à la loi Informatique et Libertés modifiée, RallyHub s’engage à garantir la protection et la confidentialité des données personnelles.</p>

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
                <li>du contenu des sites externes vers lesquels RallyHub renvoie.</li>
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
                📍 RallyHub – 12 rue du Circuit, 75010 Paris, France
            </address>
        </section>
    </main>

</body>
</html>
