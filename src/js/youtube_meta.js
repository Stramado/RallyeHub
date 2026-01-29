async function getYouTubeMeta(embedUrl) {
    const videoId = embedUrl.match(/embed\/([a-zA-Z0-9_-]+)/)[1];
    const res = await fetch(`https://www.youtube.com/oembed?url=https://www.youtube.com/watch?v=${videoId}&format=json`);
    return await res.json();
}

async function updateVideoCards() {
    const cards = document.querySelectorAll('.video-card');

    for (const card of cards) {
        const embedUrl = card.dataset.embedUrl;
        if (!embedUrl) continue;

        try {
            const data = await getYouTubeMeta(embedUrl);

            // Titre
            const titleElemCard = card.querySelector('.card-title');
            if (titleElemCard) titleElemCard.textContent = data.title;

            // Mise à jour du bouton overlay pour l'accessibilité
            const btnOverlay = card.querySelector('.play-overlay');
            if (btnOverlay) {
                btnOverlay.setAttribute('aria-label', `Lire la vidéo : ${data.title}`);
            }

        } catch (err) {
            console.log('Error : ', err);
        }
    }
}

document.addEventListener("DOMContentLoaded", updateVideoCards);