// 1. Initialisation des icônes Lucide
lucide.createIcons();

// 2. Gestion des images cassées (Fallback)
// C'est la traduction de ton fichier ImageWithFallback.tsx
function handleImageError(imgElement) {
    // Si l'image ne charge pas, on met un placeholder ou on cache
    // Option A: Placeholder gris avec texte
    imgElement.src = 'https://cdn.pixabay.com/photo/2022/07/04/10/46/vintage-car-7300881_1280.jpg';

    // Option B (Alternative): Si l'avatar casse, on affiche les initiales
    if (imgElement.parentElement.classList.contains('avatar')) {
        imgElement.style.display = 'none';
        imgElement.nextElementSibling.style.display = 'flex'; // Affiche la div fallback
    }
}

// 3. Filtrage par Catégorie (Sidebar)
function filterCategory(category, btnElement) {
    // Gestion de la classe active sur les boutons
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');

    // Mise à jour du titre
    const title = category === 'all' ? 'Toutes les vidéos' : category;
    document.getElementById('page-title').innerText = title;

    // Filtrage des cartes
    const cards = document.querySelectorAll('.video-card');
    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (category === 'all' || cardCat === category) {
            card.style.display = 'flex'; // On réaffiche
        } else {
            card.style.display = 'none'; // On cache
        }
    });
}

// 4. Recherche (Barre de recherche)
function filterVideos() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const cards = document.querySelectorAll('.video-card');

    cards.forEach(card => {
        const title = card.getAttribute('data-title').toLowerCase();
        // On vérifie si le titre contient la recherche
        if (title.includes(query)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

// 5. Tri (Select box) - Exemple simple
function sortVideos() {
    const sortBy = document.getElementById('sort-select').value;
    const grid = document.getElementById('video-grid');
    const cards = Array.from(grid.getElementsByClassName('video-card'));

    // Note: Pour un vrai tri, il faudrait des data-attributes (data-date, data-views)
    // Ici on simule juste un mélange pour montrer que ça réagit
    if (sortBy === 'az') {
        cards.sort((a, b) => a.getAttribute('data-title').localeCompare(b.getAttribute('data-title')));
    } else {
        // Retour à l'ordre "par défaut" (ou aléatoire pour la démo)
        cards.sort(() => Math.random() - 0.5);
    }

    // Réinsertion dans le DOM
    cards.forEach(card => grid.appendChild(card));
}

// 6. Gestion de la Modale (Settings)
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        // Accessibilité : mettre le focus dans la modale
        modal.querySelector('button').focus();
    } else {
        modal.classList.add('hidden');
    }
}

// Fermer la modale si on clique en dehors
window.onclick = function (event) {
    const modal = document.getElementById('settings-modal');
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
}