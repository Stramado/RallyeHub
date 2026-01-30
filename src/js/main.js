// --- 1. GESTION ACCESSIBILITÉ & INITIALISATION ---
document.addEventListener('DOMContentLoaded', () => {

    // A. INITIALISATION DES ICÔNES
    lucide.createIcons();

    // B. GESTION DU CLAVIER PHYSIQUE
    const searchInput = document.getElementById('search-input');
    if(searchInput){
        searchInput.addEventListener('input', (event) => {
            if(window.myKeyboard) {
                window.myKeyboard.setInput(event.target.value);
            }
        });
        
        // GESTION TOUCHE ENTRÉE PHYSIQUE
        searchInput.addEventListener('keypress', (event) => {
            if (event.key === 'Enter') {
                event.preventDefault(); // Empêche le rechargement de page
                filterVideos();         // Lance la recherche
                document.getElementById('search-input').blur(); // Enlève le focus pour fermer le clavier mobile éventuel
            }
        });
    }

    // C. GESTION DU CONTRASTE
    const contrastSwitch = document.getElementById('contrast-switch') || document.querySelector('.switch-input');
    if (contrastSwitch) {
        if (localStorage.getItem('high-contrast') === 'true') {
            document.body.classList.add('high-contrast');
            contrastSwitch.checked = true;
        }
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

    // D. GESTION POLICE DYSLEXIE 
    const dyslexicSwitch = document.getElementById('dyslexic-switch');
    if (dyslexicSwitch) {
        if (localStorage.getItem('dyslexic-font') === 'true') {
            document.body.classList.add('dyslexic-font');
            dyslexicSwitch.checked = true;
        }
        dyslexicSwitch.addEventListener('change', (e) => {
            if (e.target.checked) {
                document.body.classList.add('dyslexic-font');
                localStorage.setItem('dyslexic-font', 'true');
            } else {
                document.body.classList.remove('dyslexic-font');
                localStorage.setItem('dyslexic-font', 'false');
            }
        });
    }

    // E. GESTION TAILLE DU TEXTE 
    const btnIncrease = document.getElementById('font-increase');
    const btnDecrease = document.getElementById('font-decrease');
    const displaySpan = document.getElementById('font-display');
    let currentFontSize = parseInt(localStorage.getItem('fontSize')) || 100;

    function applyFontSize(size) {
        if (size < 70) size = 70;
        if (size > 250) size = 250;
        document.documentElement.style.fontSize = size + '%';
        if (displaySpan) displaySpan.innerText = size + '%';
        localStorage.setItem('fontSize', size);
        return size;
    }
    applyFontSize(currentFontSize); 

    if (btnIncrease && btnDecrease) {
        btnIncrease.addEventListener('click', () => { currentFontSize = applyFontSize(currentFontSize + 10); });
        btnDecrease.addEventListener('click', () => { currentFontSize = applyFontSize(currentFontSize - 10); });
    }
});


// --- 2. FONCTIONS UTILITAIRES ---

function handleImageError(imgElement) {
    imgElement.src = 'https://cdn.pixabay.com/photo/2022/07/04/10/46/vintage-car-7300881_1280.jpg';
    if (imgElement.parentElement.classList.contains('avatar')) {
        imgElement.style.display = 'none';
        imgElement.nextElementSibling.style.display = 'flex';
    }
}

function filterCategory(category, btnElement) {
    document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
    btnElement.classList.add('active');
    const title = category === 'all' ? 'Toutes les vidéos' : category;
    const pageTitle = document.getElementById('page-title');
    if(pageTitle) pageTitle.innerText = title;

    const cards = document.querySelectorAll('.video-card');
    cards.forEach(card => {
        const cardCat = card.getAttribute('data-category');
        if (category === 'all' || cardCat === category) card.style.display = 'flex';
        else card.style.display = 'none';
    });
}

function filterVideos() {
    const query = document.getElementById('search-input').value.toLowerCase();
    const cards = document.querySelectorAll('.video-card');
    let count = 0;
    cards.forEach(card => {
        const title = card.getAttribute('data-title').toLowerCase();
        if (title.includes(query)) {
            card.style.display = 'flex';
            count++;
        }
        else card.style.display = 'none';
    });
    console.log("Recherche terminée : " + count + " vidéos trouvées pour " + query);
}

function sortVideos() {
    const grid = document.getElementById('video-grid');
    if (!grid) return;
    const cards = Array.from(grid.getElementsByClassName('video-card'));
    cards.sort(() => Math.random() - 0.5);
    cards.forEach(card => grid.appendChild(card));
}

function toggleModal(modalId) {
    const modal = document.getElementById(modalId);
    if (modal.classList.contains('hidden')) {
        modal.classList.remove('hidden');
        const firstBtn = modal.querySelector('button, input');
        if (firstBtn) firstBtn.focus();
    } else {
        modal.classList.add('hidden');
    }
}

window.onclick = function (event) {
    const modal = document.getElementById('settings-modal');
    if (event.target === modal) {
        modal.classList.add('hidden');
    }
}

// --- 3. CLAVIER VIRTUEL (AZERTY + ENTRÉE) ---
window.myKeyboard = null;

function toggleKeyboard() {
    const keyboardContainer = document.getElementById('virtual-keyboard-container');
    
    if (keyboardContainer.classList.contains('hidden')) {
        keyboardContainer.classList.remove('hidden');
        
        if (!window.myKeyboard) {
            window.myKeyboard = new SimpleKeyboard.default({
                onChange: input => onChange(input),
                onKeyPress: button => onKeyPress(button),
                theme: "hg-theme-default hg-layout-default myTheme",
                // CONFIGURATION AZERTY
                layout: {
                    'default': [
                        '1 2 3 4 5 6 7 8 9 0',
                        'a z e r t y u i o p',
                        'q s d f g h j k l m',
                        '{shift} w x c v b n {backspace}',
                        '{space} {enter}' // Ajout du bouton Entrée ici
                    ],
                    'shift': [
                        '1 2 3 4 5 6 7 8 9 0',
                        'A Z E R T Y U I O P',
                        'Q S D F G H J K L M',
                        '{shift} W X C V B N {backspace}',
                        '{space} {enter}'
                    ]
                },
                // TEXTE DES BOUTONS SPÉCIAUX
                display: {
                    '{enter}': 'Entrée ↵',
                    '{shift}': 'Maj ⇧',
                    '{backspace}': '⌫',
                    '{space}': ' '
                }
            });
        }
    } else {
        keyboardContainer.classList.add('hidden');
    }
}

function onChange(input) {
    const inputElement = document.getElementById('search-input');
    inputElement.value = input;
    // On filtre en direct à chaque touche
    filterVideos();
}

function onKeyPress(button) {
    // Gestion MAJ
    if (button === "{shift}" || button === "{lock}") {
        handleShift();
    }
    // GESTION TOUCHE ENTRÉE DU CLAVIER VIRTUEL
    if (button === "{enter}") {
        toggleKeyboard(); // Ferme le clavier
        filterVideos();   // Relance le filtre pour être sûr
    }
}

function handleShift() {
    let currentLayout = window.myKeyboard.options.layoutName;
    let shiftToggle = currentLayout === "default" ? "shift" : "default";
    window.myKeyboard.setOptions({
        layoutName: shiftToggle
    });
}