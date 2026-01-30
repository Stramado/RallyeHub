// 1. Initialisation des icônes Lucide
lucide.createIcons();

//  Gestion des images cassées (Fallback)
// 
function handleImageError(imgElement) {
    // Si l'image ne charge pas, on met un placeholder ou on cache
  
    imgElement.src = 'https://cdn.pixabay.com/photo/2022/07/04/10/46/vintage-car-7300881_1280.jpg';

    
    if (imgElement.parentElement.classList.contains('avatar')) {
        imgElement.style.display = 'none';
        imgElement.nextElementSibling.style.display = 'flex'; // Affiche la div fallback
    }
}

//  Filtrage par Catégorie (Sidebar)
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

// Tri (Select box) 
// 5. Tri (Select box)
function sortVideos() {
    
    const grid = document.getElementById('video-grid');
    if(!grid) return;

    const cards = Array.from(grid.getElementsByClassName('video-card'));
    
    // Mélange simple pour simuler "Récents" ou "Populaires"
    cards.sort(() => Math.random() - 0.5);

    // Réinsertion dans le DOM
    cards.forEach(card => grid.appendChild(card));
}

// 6. Gestion de la Modale (Settings)
function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        // Accessibilité : mettre le focus dans la modale
        const firstBtn = modal.querySelector('button, input');
        if(firstBtn) firstBtn.focus();
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

//  GESTION ACCESSIBILITÉ
document.addEventListener('DOMContentLoaded', () => {
    
    //  GESTION DU CONTRASTE
    // On cherche l'ID spécifique ou le premier switch disponible
    const contrastSwitch = document.getElementById('contrast-switch') || document.querySelector('.switch-input');

    if (contrastSwitch) {
        // Vérifier si l'utilisateur l'avait déjà activé avant (mémoire)
        if (localStorage.getItem('high-contrast') === 'true') {
            document.body.classList.add('high-contrast');
            contrastSwitch.checked = true;
        }

        //  Écouter le clic sur le bouton
        contrastSwitch.addEventListener('change', (e) => {
            if (e.target.checked) {
                document.body.classList.add('high-contrast');
                localStorage.setItem('high-contrast', 'true');
            } else {
                document.body.classList.remove('high-contrast');
                localStorage.setItem('high-contrast', 'false');
            }
        });
    }

    // GESTION TAILLE DU TEXTE 
    const btnIncrease = document.getElementById('font-increase');
    const btnDecrease = document.getElementById('font-decrease');
    const displaySpan = document.getElementById('font-display');

    // Taille par défaut : 100%
    // On récupère la valeur sauvegardée ou on met 100 par défaut
    let currentFontSize = parseInt(localStorage.getItem('fontSize')) || 100;

    // Fonction pour appliquer la taille
    function applyFontSize(size) {
        // Limites de sécurité (entre 70% et 150%)
        if (size < 70) size = 70;
        if (size > 150) size = 150;

        // On applique le style au niveau de la racine (HTML)

        document.documentElement.style.fontSize = size + '%';
        
        // Mise à jour de l'affichage
        if (displaySpan) displaySpan.innerText = size + '%';
        
        // Sauvegarde
        localStorage.setItem('fontSize', size);
        
        return size;
    }

    // Appliquer la taille au chargement de la page
    applyFontSize(currentFontSize);

    // Écouteurs d'événements (Clics)
    if (btnIncrease && btnDecrease) {
        btnIncrease.addEventListener('click', () => {
            currentFontSize = applyFontSize(currentFontSize + 10);
        });

        btnDecrease.addEventListener('click', () => {
            currentFontSize = applyFontSize(currentFontSize - 10);
        });
    }
});