// 1. Initialisation des icônes Lucide
lucide.createIcons();

// 2. Gestion des images cassées (Fallback)
function handleImageError(imgElement) {
    // Option A: Placeholder
    imgElement.src = 'https://cdn.pixabay.com/photo/2022/07/04/10/46/vintage-car-7300881_1280.jpg';
    
    // Option B: Fallback avatar
    if (imgElement.parentElement.classList.contains('avatar')) {
        imgElement.style.display = 'none';
        imgElement.nextElementSibling.style.display = 'flex';
    }
}

// 3. Filtrage par Catégorie (Sidebar)
function filterCategory(category, btnElement) {
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');

    const title = category === 'all' ? 'Toutes les vidéos' : category;
    const pageTitle = document.getElementById('page-title');
    if(pageTitle) pageTitle.innerText = title;

    const cards = document.querySelectorAll('.video-card');
    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (category === 'all' || cardCat === category) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

// 4. Recherche (Barre de recherche)
function filterVideos() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const cards = document.querySelectorAll('.video-card');

    cards.forEach(card => {
        const title = card.getAttribute('data-title').toLowerCase();
        if (title.includes(query)) {
            card.style.display = 'flex';
        } else {
            card.style.display = 'none';
        }
    });
}

// 5. Tri (Select box)
function sortVideos() {
    const sortBy = document.getElementById('sort-select').value;
    const grid = document.getElementById('video-grid');
    if (!grid) return; // Sécurité si la grille n'existe pas

    const cards = Array.from(grid.getElementsByClassName('video-card'));

    if (sortBy === 'az') {
        cards.sort((a, b) => a.getAttribute('data-title').localeCompare(b.getAttribute('data-title')));
    } else {
        cards.sort(() => Math.random() - 0.5);
    }

    cards.forEach(card => grid.appendChild(card));
}

// 6. Gestion de la Modale (Settings)
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        // Accessibilité : focus sur le premier élément
        const firstFocusable = modal.querySelector('button, input');
        if(firstFocusable) firstFocusable.focus();
    } else {
        modal.classList.add('hidden');
    }
}

// Fermer la modale si on clique en dehors
window.onclick = function(event) {
    const modal = document.getElementById('settings-modal');
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
}

// --- 7. GESTION ACCESSIBILITÉ (NOUVEAU) ---
document.addEventListener('DOMContentLoaded', () => {
    // On récupère les deux boutons (switchs) dans la modale
    const switches = document.querySelectorAll('.switch-input');
    
    // Sécurité : on vérifie qu'on a bien trouvé les boutons
    if (switches.length >= 2) {
        const contrastSwitch = switches[0]; // Le 1er bouton (Contraste)
        const motionSwitch = switches[1];   // Le 2ème bouton (Animations)

        // --- A. Contraste Élevé ---
        // 1. Vérifier si l'utilisateur l'avait déjà activé avant (mémoire)
        if (localStorage.getItem('high-contrast') === 'true') {
            document.body.classList.add('high-contrast');
            contrastSwitch.checked = true;
        }

        // 2. Écouter le clic sur le bouton
        contrastSwitch.addEventListener('change', (e) => {
            if (e.target.checked) {
                document.body.classList.add('high-contrast');
                localStorage.setItem('high-contrast', 'true');
            } else {
                document.body.classList.remove('high-contrast');
                localStorage.setItem('high-contrast', 'false');
            }
        });

        // --- B. Réduire Animations ---
        // 1. Vérifier mémoire
        if (localStorage.getItem('reduced-motion') === 'true') {
            document.body.classList.add('reduced-motion');
            motionSwitch.checked = true;
        }

        // 2. Écouter le clic
        motionSwitch.addEventListener('change', (e) => {
            if (e.target.checked) {
                document.body.classList.add('reduced-motion');
                localStorage.setItem('reduced-motion', 'true');
            } else {
                document.body.classList.remove('reduced-motion');
                localStorage.setItem('reduced-motion', 'false');
            }
        });
    }
});