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