<?php

/**
 * Create a HTML header
 * @return string Return a HTML header
 */
function sampleHeader() {
    $header = '
    <div class="logo">
            <img src="/static/img/nerdfish.png" alt="logo">
    </div>
    <div class="searchBar">
        <form method="POST">
            <input type="text" placeholder="Search for a video..." id="searchBar">
        </form>
    </div>
    ';
    return $header;
}

?>