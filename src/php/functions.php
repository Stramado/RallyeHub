<?php

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
    
    foreach ($videos as $video) {
        foreach ($video as $key => $embed) {
            // Extraire l'ID de la vidéo YouTube depuis l'URL embed
            preg_match('/embed\/([^?]+)/', $embed, $matches);
            $videoId = $matches[1] ?? '';
            
            // Générer l'URL de la miniature YouTube
            $thumbnail = "https://img.youtube.com/vi/{$videoId}/maxresdefault.jpg";
            $categorie = [
                0 => "Sport",
                1 => "Supercars",
                2 => "Luxe",
                3 => "Électriques",
                4 => "Classiques"
            ];

            $html .= '
                <a href="/watch.php?watch=' . htmlspecialchars($key) . '">
                    <article class="video-card" 
                             data-embed-url="' . htmlspecialchars($embed) . '" 
                             data-video-id="' . htmlspecialchars($videoId) . '">
                        <div class="thumbnail-wrapper">
                            <img src="' . htmlspecialchars($thumbnail) . '" alt="Miniature de la vidéo" loading="lazy" onerror="handleImageError(this)" class="video-thumbnail">
                            <span class="duration-badge"></span>
                            <button class="play-overlay" aria-label="Lire la vidéo : ">
                                <i data-lucide="play-circle"></i>
                            </button>
                        </div>
                        <div class="card-content">
                            <div class="card-header">
                                <h3 class="card-title"></h3>
                                <button class="btn-icon-sm" aria-label="Options"><i data-lucide="more-vertical"></i></button>
                            </div>
                            <p class="card-category">' . htmlspecialchars($categorie[random_int(0, 4)]) . '</p>    
                        </div>
                    </article>
                </a>
            ';
        }
    }
    echo $html;
}

/**
 * Get the "watch" parameter from the url and add and iframe with the linked video
 */
function displayVideo() {
    $tab = getVideosFromJSON();
    $videos = $tab[0];
    $watchId = $_GET["watch"] ?? "";
    
    if (array_key_exists($watchId, $videos) && $watchId !== null) {
        $videoUrl = $videos[$watchId];

        echo '
        <div class="video-player-container">
            <iframe
                height="477"
                width="850"
                src="' . $videoUrl .'"
                title="YouTube video player"
                frameborder="0"
                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen>
            </iframe>
        </div>
        ';
    } else {
        echo "<script>window.location.href='/'</script>";
        die();
    }
}

/**
 * Parse a JSON file and get the videos from the Array
 */
function parseJSONToGetVideos(){
    $json = file_get_contents('data.json'); 

    if ($json === false) {
        echo 'Error reading the JSON file';
    }

    $json_data = json_decode($json, true); 

    foreach ($json_data['videos'][0] as $key => $value) {
        if ($value === "1") {
            echo $value;
            echo $key;
        }
    }
}
?>