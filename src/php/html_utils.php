<?php

/**
 * Create an HTML header
 * @return string Return an HTML header
 */
function headerSample() {
    $header = '
    <header>
        <div class="logo">
            <img src="/static/img/nerdfish.png" alt="logo">
        </div>
        <div class="searchBar">
            <form method="POST">
                <input type="text" placeholder="Rechercher une vidéo..." id="searchBar">
            </form>
        </div>
    </header>
    ';
    return $header;
}

/**
 * Create an HTML categories bar
 * @return string Return an HTML sample
 */
function categoriesBarSample() {
    $sample = '
    <div class="categoriesBar">
        <div class="categories">
            
        </div>
    </div>
    ';
    return $sample;
}

?>