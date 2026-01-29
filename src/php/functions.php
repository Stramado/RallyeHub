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
    echo $header;
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
    echo $sample;
}

/**
 * Parse a JSON file and extract it's content
 * @return array Return JSON content as an array
 */
function getVideosFromJSON() {
    try {
        $fileContent = file_get_contents("./data/data.json");
        $json = json_decode($fileContent, true);
        return $json["videos"];
    } catch (Exception $e) {
        echo "Something went wrong : " . $e;
        return $e;
    }
}


/**
 * Loop through an array and create an HTML element for every element of the array
 * Génère des articles video-card avec les miniatures YouTube
 * @return string HTML list of videos
 */
function createHTMLElementFromJSON() {
    $videos = getVideosFromJSON();
    $html = "";
    
    $index = 0;
    foreach ($videos as $video) {
        foreach ($video as $embed => $watch) {
            // Extraire l'ID de la vidéo YouTube depuis l'URL embed
            preg_match('/embed\/([^?]+)/', $embed, $matches);
            $videoId = $matches[1] ?? '';
            
            // Générer l'URL de la miniature YouTube
            $thumbnail = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
            
            // Récupérer les données de la vidéo (ou valeurs par défaut)
            $data = $videoData[$index] ?? [
                'title' => 'Vidéo Automobile',
                'category' => 'Sport',
                'views' => '10k',
                'time' => '10:00',
                'date' => 'Il y a quelques jours'
            ];
            
            $html .= '
                <a href="/watch.php?watch=' . htmlspecialchars($watch) . '">
                    <article class="video-card" data-category="' . htmlspecialchars($data['category']) . '" data-title="' . htmlspecialchars($data['title']) . '">
                        <div class="thumbnail-wrapper">
                            <img src="' . htmlspecialchars($thumbnail) . '" alt="' . htmlspecialchars($data['title']) . '" loading="lazy" onerror="handleImageError(this)">
                            <span class="duration-badge">' . htmlspecialchars($data['time']) . '</span>
                            <button class="play-overlay" aria-label="Lire la vidéo : ' . htmlspecialchars($data['title']) . '">
                                <i data-lucide="play-circle"></i>
                            </button>
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="card-title">' . htmlspecialchars($data['title']) . '</h3>
                                <button class="btn-icon-sm" aria-label="Options"><i data-lucide="more-vertical"></i></button>
                            </div>
                            <p class="card-category">' . htmlspecialchars($data['category']) . '</p>
                            <div class="card-meta">
                                <span>' . htmlspecialchars($data['views']) . ' vues</span> • <span>' . htmlspecialchars($data['date']) . '</span>
                            </div>
                        </div>
                    </article>
                </a>
            ';
            
            $index++;
        }
    }
    echo $html;
}




/**
 * Get the "watch" parameter from the url and add and iframe with the linked video
 */
function displayVideo() {
    $video = $_GET["watch"] ?? null;
    if (!empty($video)) {
        echo '
        <iframe src="' . $video . '"> </iframe>
        ';
    }
}

/**
 * Parse a JSON file and get the videos from the Array
 */
function parseJSONToGetVideos(){
    $json = file_get_contents('data.json'); 

    if ($json === false) {
        die('Error reading the JSON file');
    }

    $json_data = json_decode($json, true); 

    if ($json_data === null) {
        die('Error decoding the JSON file');
    }

    foreach ($json_data['videos'][0] as $embed => $value) {
        if ($value === "1") {
            echo $value;
            echo $embed;
        }
    }
}
?>